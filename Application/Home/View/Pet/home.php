<layout name="Layout/PetHead"/>
<style>
    .list1  li{
        display:inline;

    }
    .icon_author{
        background-image: url("__PUBLIC__/img/Pet/tieba.png");
        background-position: -30px -60px;

       display:inline-block;
        height:20px;
        width:20px;
    }
</style>

    <h2 class="head1">全部帖子</h2>
    <ul class="list l2">
        <?php foreach($note_List as $k => $val){?>
            <li>
                <?php if (($k % 2) != 0){?>
                    <span class="cnt">
                <?php }else{ ?>
                    <span >
                <?php }?>
                        <time datetime="<?php echo date('Y-m-d',$val['time']);?>"><?php echo date('m',$val['time']);?>月<span><?php echo date('d',$val['time']);?>日</span></time></span>
                        <div class="extra_wrapper">
                            <div class="col1"><a href="__APP__/home/pet/note_detail/id/<?php echo $val['id'];?>"><?php echo $val['title'];?></a>

                                <span style="float:right;margin-right:160px;color: #9b9a9a;">  <i class="icon_author"></i><a href="javascript:void(0)"><?php echo $val['author']?></a></span>
                            </div>
                              <?php echo html_entity_decode($val['content']);?>
                            </div>
            </li>
        <?php }?>
    </ul>
<script>
    $(".sf-menu>li:eq(3)").addClass("current");
    $(".sf-menu>li:eq(1)").removeClass("current");
</script>