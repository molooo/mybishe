<?php
/**
 * Created by PhpStorm.
 * User: LI
 * Date: 2015/11/25
 * Time: 14:35
 */
namespace Home\Controller;
use Think\Controller;
use Think\Page;
//use Home\Controller\IndexController;
use Home\Model;
class PetController extends Controller{
   /*
    * 宠物之家首页
    */
    public function index(){
       $this -> display('index');
   }
    /*
     * 宠物家园首页
     */
    public function home(){
        $Cate_List = D('Category') -> getCategoryList();
        $note_List = D('PetNote') -> getNoteList(array('Category' => 1));
        foreach($note_List as $k => $val){
            $author = D('User') ->getUserInfo(array('Id' => $val['userid']));
            $note_List[$k]['author'] = $author['loginname'];
        }
        //$page = new page(count($note_List),1);
        $this -> assign('Cate_List',$Cate_List);
        $this -> assign('note_List',$note_List);
        //$this ->assign('fenye',$page -> show());
        $this -> display();
}
    /*
     * 宠物百科首页
     */
    public function ency(){
        $this -> display();
    }
    /*
     * 宠物医院首页
     */
    public function hospital(){
        $this -> display();
    }
    /*
     * 宠物市场首页
     */
    public function market(){
        $this -> display();
    }
    /*
     * 宠物百科分类查询
     */
    public function search(){
        $category_id = $_GET['category_id'];
        $feature_id = $_GET['feature'];
        $haircolor_id = $_GET['haircolor'];

        $model_category = D('Category');
        $model_feature  = D('Feature');
        $model_haircolor = D('HairColor');
        $model_petency = D('PetEncy');

        if($category_id == 'all'){
            $category_id = array('neq',$category_id);
        }
        if($feature_id == 'all'){
            $feature_id = array('neq',$feature_id);
        }
        if($haircolor_id == 'all'){
            $haircolor_id = array('neq',$haircolor_id);
        }

        $condition = array(
            'Category' => $category_id,
            'Feature' => $feature_id,
            'HairId' => $haircolor_id,
        );

        $category_list = $model_category -> getCategoryList();
        $haircolor = $model_haircolor -> getHairColorList();
        $feature = $model_feature -> getFeatureList();
        $petency_list = $model_petency -> getPetEncyListByCategory($condition);
        //$page = new Page(count($petency_list)+10,10);

        $this -> assign('petency',$petency_list);
        $this -> assign('category_list',$category_list);
        $this -> assign('haircolor',$haircolor);
        $this -> assign('feature',$feature);
        //$this -> assign('show_page',$page -> show());
        $this -> display();
    }
    /*
     * 宠物百科  单个宠物详细信息
     */
    public function ency_detail(){
        $pet_id = $_GET['pet_id'];
        $Pet_Ency = D('PetEncy') ->getPetEncyInfo(array('Id' => $pet_id));
        $hair = D('HairColor') ->getHairColorInfo(array('Id' => $Pet_Ency['hairid']));
        $feature = D('Feature') ->getFeatureInfo(array('Id' => $Pet_Ency['feature']));
        $category = D('Category') ->getCategoryInfo(array('Id' => $Pet_Ency['category']));
        $Pet_Ency['hair'] = $hair['name'];
        $Pet_Ency['tx'] = $feature['name'];
        $Pet_Ency['zl'] = $category['name'];
        $this ->assign('Pet',$Pet_Ency);
        $this -> display();
    }
    /*
     * 填写宠物病情单页面
     */
    public function issue_illness(){
        if(($_SESSION['LoginName'])&&($_SESSION['is_login'])) {
            $Cate_List = D('Category') -> getCategoryList();
            $this -> assign('Cate_List',$Cate_List);
            $this -> display();
        }else{
           $this -> error('请先登陆');
        }
    }
    /*
     * 宠物病情单保存
     */
    public function illness_save(){
        $title = $_POST['title'];
        $content = $_POST['g_body'];
        $category = $_POST['category'];
        $photo = $_POST['file'];
        $user_name = $_SESSION['LoginName'];

        $user = D('User') -> getUserInfo(array('LoginName' => $user_name));
        $user_id = $user['id'];

        $data = array(
            'UserId' => $user_id,
            'Time' => time(),
            'Content' => $content,
            'Category' => 3,
            'PetCategory' => $category,
            'Title' => $title,
            'Photo' => $photo,
        );

        $result  = D('PetNote') ->addNote($data);

        if($result){
            $this ->success('提问成功！','hospital');
        }else{
            $this ->error('提问失败，请核对信息','issue_illness');
        }
    }
    /*
     * 发帖
     */
    public function publish(){
        if(($_SESSION['LoginName'])&&($_SESSION['is_login'])) {
            $Cate_List = D('Category') -> getCategoryList();
            $this -> assign('Cate_List',$Cate_List);
            $this -> display();
        }else{
            $this -> error('请先登陆');
        }
    }
    /*
     * 保存帖子
     */
    public function publish_save(){
        $title = $_POST['title'];
        $content = $_POST['g_body'];
        $category = $_POST['category'];
        $photo = $_POST['file'];
        $user_name = $_SESSION['LoginName'];

        $user = D('User') -> getUserInfo(array('LoginName' => $user_name));
        $user_id = $user['id'];

        $data = array(
            'UserId' => $user_id,
            'Time' => time(),
            'Content' => $content,
            'Category' => 1,
            'PetCategory' => $category,
            'Title' => $title,
            'Photo' => $photo,
            'IfShow' => 1,
        );

        $result  = D('PetNote') ->addNote($data);

        if($result){
            $this ->success('发帖成功！','publish');
        }else{
            $this ->error('发帖失败，请核对信息','publish_save');
        }
    }
    /*
     * 宠物家园帖子详情
     */
    public function note_detail(){
        $id = $_GET['id'];
/*        $page = $_GET['page'];*/
        $note_Info = D('PetNote') -> getNoteInfo(array('Id' => $id));
        $author = D('User') ->getUserInfo(array('Id' => $note_Info['userid']));
        $note_Info['author'] = $author;
       /*  echo "<pre>";
        var_dump($note_Info);
        exit;*/
        //查询回复帖子
        $reply = D('NoteReply') -> getNoteReplyList(array('Note_Id' => $id)/*,'*', $page, '3'*/);
       /* $reply_List = D('NoteReply') -> getNoteReplyCount(array('Note_Id' => $id));
        $page = new page($reply_List,3);*/
        foreach($reply as $k => $val){
            $author = D('User') ->getUserInfo(array('Id' => $val['userid']));
            $reply[$k]['author'] = $author;
        }
        $this -> assign('reply',$reply);
        $this -> assign('note_info',$note_Info);
   /*     $this -> assign('page',$page ->show());*/

        $this -> display();
    }
    /*
     * 回复帖子
     */
    public function reply_save(){
        if($_SESSION['LoginName']&&$_SESSION['is_login']){
            $note_id = $_POST['note_id'];
            $user_name = $_SESSION['LoginName'];
            $user = D('User') ->getUserInfo(array('LoginName' => $user_name));
            $user_id = $user['id'];
            $content = $_POST['content'];
            $data = array(
                'Note_Id' => $note_id,
                'UserId' => $user_id,
                'UserName' => $user_name,
                'Time' => time(),
                'Content' => $content,
                /*'photo' =>'' ,*/
            );
            $result = D('NoteReply') -> add($data);
            if($result){
                echo "true";
            }else{
               echo "false";
            }

        }else{
            echo "denglu";
        }

    }
    public function photowall(){
        $note_List = D('PetNote') -> getNoteList(array('Category' => 1));
        foreach($note_List as $k => $val){
            $author = D('User') ->getUserInfo(array('Id' => $val['userid']));
            $note_List[$k]['author'] = $author['loginname'];
        }
        //$page = new page(count($note_List),1);
        $this -> assign('note_List',$note_List);

        //$this ->assign('fenye',$page -> show());
        $this -> display();
    }
}
