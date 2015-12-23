<layout name="Layout/main"/>

            <div class="content-wrap">
                <div class="row">


                    <div class="col-sm-12">
                        <!-- BLANK PAGE-->

                        <div class="nest" id="Blank_PageClose">
                            <div class="title-alt">
                                <h6>
                                                                                                                                    信息列表</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#Blank_PageClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Blank_Page_Content">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>
                            <?php foreach($infolist as $i){?>
                            <div class="body-nest" id="Blank_Page_Content">
                                <title><?php echo $i['title']?></title><content><?php echo $i['content']?></content><delete><button type="button" class="btn btn-info">
                                    <span class="entypo-trash"></span>&nbsp;&nbsp;Delete</button></delete>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <!-- END OF BLANK PAGE -->


                </div>



                <!-- /END OF CONTENT -->
            </div>
        <!--  END OF PAPER WRAP -->