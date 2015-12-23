<layout name="Layout/PetHead"/>
<link href="__PUBLIC__/css/Pet/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="__PUBLIC__/css/Pet/style_home.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<style>
    .content-pagenation li a:hover{
        background:#4597a8 none repeat scroll 0 0 ;
        color:#fff;

    }
    .content-pagenation{
        margin-top:20px;
    }
    #commit{
        margin-top:50px;
    }
    #commit_title{
        margin-bottom:20px;
    }
    #submit{
        margin-top: 20px;
        background-color: #5bb75b;
        border: 0 none;
        color: #fff;
        cursor: pointer;
        display: block;
        font-size: 11px;
        font-weight: bold;
        width:50px;
        height: 15px;
        padding: 7px 14px 22px;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.1);

    }
    #submit:hover{
        background-color: #51a351;
        color:#fff;
        text-decoration: none;
    }
</style>
<div class="comments1">
    <h4 style="margin-left:20px;"><?php echo $note_info['title']?></h4>
    <div class="comments-main">
        <div class="col-md-2 cmts-main-left">
            <?php if($note_info['author']['photo'] == null){?>
            <img src="__PUBLIC__/img/Pet/avatar.png" alt="">
            <?php }else{?>
                <img src="__PUBLIC__/function/upload/<?php echo $note_info['author']['photo'];?>" alt="">
            <?php }?>
            <p style="text-align:center;width:100px"><?php echo $note_info['author']['loginname']?></p>
        </div>
        <div class="col-md-10 cmts-main-right">

            <p> <img src="__PUBLIC__/function/upload/<?php echo $note_info['photo'];?>" ><br/><br/>
                <?php echo $note_info['content'];?></p>
            <div class="cmts">
                <div class="col-md-6 cmnts-left">
                    <p><?php echo date('Y-m-d H:i:s',$note_info['time']);?></p>
                    <span style="color: red;">1楼</span>
                </div>
                <div class="col-md-6 cmnts-right">
                    <a href="#commit">Reply</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php if(empty($reply)){?>
        <span style="margin-left:360px;font-size:20px;">当前没有任何回复，快来抢沙发吧</span>
    <?php }else{?>
        <?php foreach($reply as $k => $val){?>
          <div class="comments-main" style="overflow: hidden;">
              <div class="col-md-2 cmts-main-left">
                  <?php if($val['author']['photo'] == null){?>
                      <img src="__PUBLIC__/img/Pet/avatar.png" alt="">
                  <?php }else{?>
                      <img src="__PUBLIC__/function/upload/<?php echo $val['author']['photo'];?>" alt="">
                  <?php }?>
                  <p style="text-align:center;width:100px"><?php echo $val['author']['loginname']?></p>
              </div>
              <div class="col-md-10 cmts-main-right">
                  <p><?php echo $val['content'];?></p>
                  <div class="cmts">
                      <div class="col-md-6 cmnts-left">
                          <p><?php echo date('Y-m-d H:i:s',$val['time']);?></p>
                          <span style="color: red;"><?php echo ($k+2);?>楼</span>
                      </div>
                      <div class="col-md-6 cmnts-right">
                          <a href="#">Reply</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
          </div>
        <?php }?>
    <?php }?>

</div>
<!--
<div class="content-pagenation">
    <li><a href="__APP__/home/pet/note_detail/id/<?php /*echo $note_info['id'];*/?>/page/1">Frist</a></li>
    <li><a href="__APP__/home/pet/note_detail/id/<?php /*echo $note_info['id'];*/?>/page/1">1</a></li>
    <li><a href="__APP__/home/pet/note_detail/id/<?php /*echo $note_info['id'];*/?>/page/2">2</a></li>
    <li><a href="#">3</a></li>
    <li><span>. . . . . . . . . .</span></li>
    <li><a href="#">Last</a></li>
    <div class="clearfix"> </div>
</div>-->

<form id="commit" action="__APP__/home/pet/reply_save" method="post">
    <input type="hidden" name="note_id" value="<?php echo $note_info['id'];?>"/>
    <label id="commit_title">回复</label>
<?php showEditor('content','','962px','300px','visibility:hidden;',"false");?>

    <a name="submit"  id="submit" >发表</a>
</form>
<script>

    $(function(){
        $("#submit").click(function(){

            $.ajax({
                url:'__APP__/home/pet/reply_save',
                type:'POST',
                data:{"note_id":<?php echo $note_info['id'];?>,"content":$("#content").val()},
                success:function(res){
                    if(res == "true") {
                        sweetAlert('回复成功!');
                        window.location = "__APP__/home/pet/note_detail/id/<?php echo $note_info['id'];?>";
                    }else if(res == "denglu"){
                        sweetAlert('您尚未登录!');
                    }else{
                        sweetAlert('回复失败!');
                    }
                }
            });
        });
    });
    $(".sf-menu>li:eq(3)").addClass("current");
    $(".sf-menu>li:eq(1)").removeClass("current");
</script>
