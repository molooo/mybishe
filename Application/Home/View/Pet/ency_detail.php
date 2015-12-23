<layout name="Layout/PetHead"/>
<style>
    h2{
        padding-top:49px;
    }

h3 {
        color: #1fadc5;
        font-size: 3em;
        font-weight: 400;
        margin: 20px 300px 66px 10px;
        text-align: center;
        width:950px;

}

.about {
  background: #f3f3f3;
   padding: 5em 0 5em 0;
   text-align: center;
}
 .container {
    width: 1170px;
  }
  .about-head {
  text-align: center;
  margin-bottom: 4em;
}
.cat-info-section {
  margin: 5em 0 1em 0;
}
.cat-info-left {
  width: 40%;
  float: left;
  height:350px;
}
.cat-info-left img {
  width: 100%;
  height: 100%;
}
.cat-info-middle {
  background: #E47506;
  
  width: 3%;
  float: left;
  height:350px;
}
.cat-info-right {
  width: 40%;
  float: left;
  background: #ff8000;
  
  height:350px;
}
h2 ul{
    margin-left: 40px;
    margin-right: 40px;
}
    .cat-info-bottom{
        color: black;
        font-family: "宋体";
        font-size: 13px;
        text-align: left;
        width: 950px;
    }
</style>



<!--about-->
    <div class="about">
        <div class="container">
                <div class="about-head">
                   <h3><?php echo $Pet['name'];?></h3>
                </div>  
                <div class="cat-info-section">
                    <div class="cat-info-left">
                        <img src="__PUBLIC__/function/upload/<?php echo $Pet['photo']?>"/>
                    </div>
                    <div class="cat-info-middle">
                        
                    </div>
                    <div class="cat-info-right">
                        <h2>Lorem Ipsum Simply</h2>
                            <ul style="text-align:left;color:white">
                            <li>全名：<?php echo $Pet['name'];?></li>
                            <li>英文名：<?php echo $Pet['foreignname'];?></li>
                            <li>产地：<?php echo $Pet['chandi'];?></li>
                            <li>品种：<?php echo $Pet['zl'];?></li>
                            <li>毛色：<?php echo $Pet['hair'];?></li>
                            <li>特性：<?php echo $Pet['tx'];?></li>
                            </ul>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="cat-info-bottom">
                        <div style="font-size: 20px;text-align:center;padding-bottom: 20px;padding-top: 20px; font-family: '楷体';">Introduce</div>
                        <?php echo $Pet['introduce'];echo '<br>';?>
                    </div>
                </div>
            </div>
        </div>
    <!--//about-->


