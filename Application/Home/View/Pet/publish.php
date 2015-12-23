<layout name="Layout/PetHead"/>
<layout name="Layout/PetHead"/>
<style>
    body{
        background:
    }
    #clear{
        height:50px
    }
    dl{clear:left;border:1px solid black;padding: 10px;}
    dt{float:left;width:150px;text-align: center;}
    #publish{
        font-size: 15px;
        font-style: normal;
        color: black;
    }
    .submit{
        margin-left: 415px;
        background-color: #5bb75b;
        border: 0 none;
        color: #fff;
        cursor: pointer;
        display: block;
        font-size: 20px;
        font-weight: bold;
        width:50px;
        height: 15px;
        padding: 10px 20px 18px;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.1);

    }
    .submit:hover{
        background-color: #51a351;
        color:#fff;
        text-decoration: none;
    }
</style>
<div id="publish" style="margin-top: 50px;">
    <span style="margin-left:445px;font-size: 34px; font-family: '楷体' ;color: orange;">发帖</span>
    <div id="clear"></div>
    <form id="publish_form" method="post" action="__APP__/home/pet/publish_save">
        <dl>
            <dt>
                标题
            </dt>
            <dd>
                <input name="title" type="text"/>
            </dd>
        </dl>
        <dl>
            <dt>
                内容
            </dt>
            <dd>
                <?php showEditor('g_body','','200px','400px','visibility:hidden;',"false");?>
            </dd>
        </dl>
        <dl>
            <dt>宠物种类</dt>
            <dd><select name="category">
                    <?php foreach($Cate_List as $k => $v){?>
                        <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                    <?php } ?>
                </select></dd>
        </dl>
        <dl>
            <dt>宠物照片</dt>
            <dd>
                <div id="box">
                    <div id="test" ></div>
                </div>
                <input id="file" name="file" type="hidden"/>
            </dd>
        </dl>
        <dl style="text-align: center">
            <a  class="submit" href="javascript:void(0)">发帖</a>
        </dl>
    </form>
</div>
<script>
    $('#test').diyUpload({
        url:'__PUBLIC__/function/fileupload.php',
        success:function( data ) {
            $("#file").val(data._raw);

        },
        error:function( err ) {
            alert('上传失败');
        }
    });

    $('#as').diyUpload({
        url:'__PUBLIC__/function/server/fileupload.php',
        success:function( data ) {
            console.info( data );
        },
        error:function( err ) {
            console.info( err );
        },
        buttonText : '选择文件',
        chunked:true,
        // 分片大小
        chunkSize:512 * 1024,
        //最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
        fileNumLimit:50,
        fileSizeLimit:500000 * 1024,
        fileSingleSizeLimit:50000 * 1024,
        accept: {}
    });
    $(function(){
        $(".submit").click(function(){
            $("#publish_form").submit();
        });

        $(".sf-menu>li:eq(3)").addClass("current");
        $(".sf-menu>li:eq(1)").removeClass("current");

    });
</script>
