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
            $this -> error('请先登陆');
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
            echo "<script>alert('信息发布成功!!!');</script>";
        }else{
            echo "<script>alert('信息发布失败!!!');</script>";
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
        //1.实例化基础模型model
//        $user = M('user');
//        $data = $user->select();
//        dump($data);

        //2.实例化用户自定义模型


        $trainmessage = new TrainMessageModel();
        $message = $trainmessage->getTrainMessageList();
        $date = date('Y-m-d H:i:s',time());
        die(dump(time()));

    }



    //搜索功能
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

    //预约排序
    public function yuyue(){


    }

    //评价排序
    public function pingjia(){

    }



    //图片上传
    public function upload(){

        $upload = new Upload();// 实例化上传类
        $upload->maxSize   =  32343 ;// 设置附件上传大小
        $upload->exts     =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =    './Upload/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件
//        echo "<script>alert('".$_FILES['img']['tmp_name']."');</script>";
        if(!empty($_FILES['img']['tmp_name'])){

            $info   =   $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                echo "<script>alert('fail');</script>";
                echo json_encode($_FILES);
//                $this->error($upload->getError());
            }else{// 上传成功
                echo "<script>alert(333);</script>";
                $this->success('上传成功！');
            }
        }


    }


}