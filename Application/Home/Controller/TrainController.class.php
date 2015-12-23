<?php
/**
 * Created by PhpStorm.
 * User: XINJK
 * Date: 2015/11/30
 * Time: 15:26
 */
namespace Home\Controller;
use Home\Model\CommomModel;
use Home\Model\TrainingModel;
use Home\Model\TrainMessageModel;
use Home\Model\TrainModel;
use Home\Model\UserModel;
use Think\Controller;
use Think\Upload;
class TrainController extends Controller{
    public function index(){
        $trainmessage = new TrainMessageModel();
        $training = new TrainingModel();
        $type = $trainmessage->getTraintypeinfo();
        if(!empty($_GET['type_id'])){
            $_SESSION['type_id'] = $_GET['type_id'];
            $condition = array(
                'type_id' => $_GET['type_id']
            );
        }else{
            $_SESSION['type_id'] = '';
        }

        $message_list = $trainmessage->getMessageList($condition);
//        die(dump($message_list));
        $train_list = $training->getTrainingList();
        $this->assign('training',$train_list);
        $this->assign('type_id',$_SESSION['type_id']);
        $this->assign('message_list',$message_list);
        $this->assign('training_type',$type);


        $this->display('index');
    }

    public function detail(){

        $message = new TrainMessageModel();
        $training = new TrainingModel();
        $condition['message_id'] = $_GET['id'];
        $message_id = $_GET['id'];
        $trainmessage = $message->getMessageList($condition);

        foreach($trainmessage as $value){
            $training_id = $value['training_id'];
            $type_id = $value['type_id'];
        }
        $train_info = $training->getinfo(array('training_id'=>$training_id));
        $type_name = $training->getTrainingNameById($type_id);
        $this->assign('type_name',$type_name);
        $this->assign('train_info',$train_info);
        $this->assign('message',$trainmessage);

        $this->display('detail');
    }

    public function fabu(){
        if(($_SESSION['LoginName'])&&($_SESSION['is_login'])) {
            $message = new TrainMessageModel();
            $type = $message->getTraintypeinfo();
            $trainingmodel = new TrainingModel();
            $train = $trainingmodel->getTrainingList();
            $this->assign('train',$train);
            $this->assign('train_type',$type);

            $this->display();
        }else{
            $this -> error('���ȵ�½');
        }
    }

    public function type(){
        $_GET['type_id'];

    }
    public function fabuadd(){
        die(dump($_POST));
        $user = new UserModel();
        $condition = array(
            'LoginName' => $_POST['LoginName']
        );
        $user_id = $user->getUserId($condition);
        if(is_array($user_id)){
            foreach($user_id as $v){
                $user_id = $v['id'];
            }
        }
        $train = new TrainingModel();
//        $training_name = $train->getTrainingNameById($_POST['training_id']);
        $messge = new TrainMessageModel();
        $condition = array(
            'training_id' => $_POST['training_id'],
//            'training_name' => $training_name,
            'user_id' => $user_id,
            'message_title' => $_POST['message_title'],
            'class_type' => $_POST['class_type'],
            'message_jianjie' => $_POST['message_jianjie'],
            'message_content' => $_POST['message_content'],
            'date' => time()
        );

        $messge_add = $messge->AddTrainMessage($condition);
        if($messge_add){
            echo "<script>alert('��Ϣ�����ɹ�!!!');</script>";
        }else{
            echo "<script>alert('��Ϣ����ʧ��!!!');</script>";
        }
    }

    public function addsj(){
        $trainingmodel = new TrainingModel();

        $condition = array(
            'training_name' => $_POST['linkSJName'],
            'training_person' => $_POST['linkMan'],
            'training_addr' => $_POST['linkAddress'],
            'training_tel' => $_POST['linkPhone']
        );
        $data = $trainingmodel->AddTraining($condition);
        echo $data;


    }

    public function test(){
        //1.ʵ��������ģ��model
//        $user = M('user');
//        $data = $user->select();
//        dump($data);

        //2.ʵ�����û��Զ���ģ��


        $trainmessage = new TrainMessageModel();
        $message = $trainmessage->getTrainMessageList();
        $date = date('Y-m-d H:i:s',time());
        die(dump(time()));

    }



    //��������
    public function search(){
        $message = new TrainMessageModel();
        $type = $message->getTraintypeinfo();
        $condition=array();
        $condition['message_title']=array('like',array('%'.$_GET['search_content'].'%'),'OR');
//        $condition['message_jianjie']=array('like',array('%'.$_GET['search_content'].'%'),'OR');
//        $condition['training_name']=array('like',array('%'.$_GET['search_content'].'%'));
//        $condition['type_id']=$_SESSION['type_id'];
        $data = $message->getMessageList($condition);
//        die(dump($data));
        $this->assign('message_list',$data);
        $this->assign('keyword',$_POST['search_content']);
        $this->assign('training_type',$type);
        $this->display('index');
    }

    //ԤԼ����
    public function yuyue(){


    }

    //��������
    public function pingjia(){

    }



    //ͼƬ�ϴ�
    public function upload(){

        $upload = new Upload();// ʵ�����ϴ���
        $upload->maxSize   =  32343 ;// ���ø����ϴ���С
        $upload->exts     =     array('jpg', 'gif', 'png', 'jpeg');// ���ø����ϴ�����
        $upload->rootPath  =    './Upload/'; // ���ø����ϴ���Ŀ¼
        $upload->savePath  =     ''; // ���ø����ϴ����ӣ�Ŀ¼
        // �ϴ��ļ�
//        echo "<script>alert('".$_FILES['img']['tmp_name']."');</script>";
        if(!empty($_FILES['img']['tmp_name'])){

            $info   =   $upload->upload();
            if(!$info) {// �ϴ�������ʾ������Ϣ
                echo "<script>alert('fail');</script>";
                echo json_encode($_FILES);
//                $this->error($upload->getError());
            }else{// �ϴ��ɹ�
                echo "<script>alert(333);</script>";
                $this->success('�ϴ��ɹ���');
            }
        }


    }


}