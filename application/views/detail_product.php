    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">รายละเอียดสินค้า</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->


<?php $data_footer =  modules::run('home/getfooter'); ?>
    <section id="portfolio-information" class="padding-top">
        <div class="container">
        <?php 
            foreach($data_detail as $data){
        ?>
            <div class="row">
                <div class="col-sm-6">
                     <!-- <img src="assets/uploads/product/<?php echo $data->product_img; ?>" class="img-responsive imgborder" alt=""> -->
                     <div class="sp-wrap">
            <a href="assets/uploads/product/<?php echo $data->product_img; ?>"><img src="assets/uploads/product/<?php echo $data->product_img; ?>" alt=""></a>
            <!-- <a href="assets/uploads/product/<?php echo $data->product_img; ?>"><img src="assets/uploads/product/<?php echo $data->product_img; ?>" alt=""></a> -->
                    </div>
                </div>

           
                <div class="col-sm-6">
                    <div class="project-name ">
                        <h2 class="bold">รหัสสินค้า : <?php echo $data->product_name; ?>  </h2>
                        <h2 class="bold">ชื่อสินค้า : <?php echo $data->product_title; ?>  </h2>
                        
                    </div>
                    <div class="project-info overflow">
                        <h3>รายละเอียดสินค้า</h3>
                        <p><?php echo $data->product_detail; ?></p>
                    </div>
                   
                    <div class="client ">
                        <h3>สนใจสินค้า ติดต่อได้เลยที่!</h3>
                        <ul class="nav navbar-nav navbar-default">
                        <?php 
                            foreach($data_maincontent as $data2){
                        ?>
                            <li><a><i class="fa fa-bolt"></i>โทรเลย <?php echo $data2->maincontent_phone; ?></a></li>
                            <?php 
                                foreach($data_footer as $data3){
                            ?>
                             <li><a>หรือ <?php echo $data3->contact_phone2; ?></a></li>
                            <?php 
                            }
                            ?>
                              <li><a>E-mail: <?php echo $data2->maincontent_email; ?></a></li>
                        
                        </ul>
                    </div>
                    <div class="live-preview">
                        <div  class="btn btn-common1 uppercase">โทร: <?php echo $data2->maincontent_phone; ?></div>
                        <div class="clearfix"></div>
                        <br>
                        <div>จำนวนผู้เข้าชมทั้งหมด <i class="fa fa-eye"></i> : <?php echo $data->product_count; ?></div>
                        <?php 
                            }
                        ?>
                    </div>
                </div>
            <?php 
                }
            ?>
            </div>
        </div>
    </section>
     <!--/#portfolio-information-->
     <br><br><br>    <br><br><br>
     
<script>
    $(document).ready(function(){
        $('.sp-wrap').smoothproducts();
    });
</script>