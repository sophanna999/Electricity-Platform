		<!-- ************** Slide **************  -->
		
        <div class="owl-carousel owl-theme set-ma">
        <?php
			foreach($data_slide as $row){
		?>
            <div class="item" style="background:url(<?php echo('assets/uploads/slide/'.$row->slide_name) ?>) center top no-repeat;">
            </div>
        <?php 
        	}
        ?>
        </div>
    

		<!-- ************** /Slide **************  -->


		<!-- ************** Text Content **************  -->
		<?php 
			foreach($data_maincontent as $data){
		?>
	    <section id="clients set-ma " style=" background:url(<?php echo('assets/images/bg-text.jpg') ?>);">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12">
	                    <div class="set-mar-in"></div>
	                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">          
	                        <h1 class="set-texth margin-bottom1"> <i class="fa fa-cart-plus " aria-hidden="true"></i> <?php echo $data->maincontent_texthead; ?>  </h1>
	                        <h2 class="set-texth"><?php echo $data->maincontent_texttitle; ?></h2>
	                        <p><?php echo $data->maincontent_textdetail; ?></p>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="set-mar"></div>
	    </section>
	  
 		<!-- ************** /Text Content **************  -->


 		<!-- ************** News **************  -->
 		<?php 
 			foreach($data_news as $datanews){
 		?>
	    <div class="bgimg-1 set-ma">
	        <div class="container ">
	            <div class="row">
	                <div class="col-lg-12">
	                    <div class="page-header">ข่าวสารและกิจกรรม</div>
	                    <ol class="breadcrumb">
	                        <marquee class="marquee-text" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"
	                         style="color: red;font-weight: normal;">
	                            <?php echo $data->maincontent_textslide; ?>
	                        </marquee>
	                    </ol>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-md-6  hover14">
	                    <figure>
	                        <a href="news/detail/<?php echo $datanews->news_id; ?>"> <img class="img-responsive" src="<?php echo('assets/uploads/news/'.$datanews->news_img); ?>" alt="news"></a>
	                    </figure>
	                </div>
	                <div class="col-md-6">
	                    <h2><?php echo $datanews->news_head; ?></h2>
	                    <div class="set-col">
	                        <p><?php echo $datanews->news_title ?></p>
	                    </div>
	                    <a href="news/detail/<?PHP echo $datanews->news_id;?>">
	                        <button class="btn btn-primary" style="float: right;"> อ่านข่าวทั้งหมด ></button>
	                    </a>
	                </div>
	            </div>
	        </div>

	        <br>
	        <br>
	        <br>
	        <br>
	        <br>
	        <br>

	    </div>
	    <?php 
	    	}
	    ?>

 		<!-- ************** /News **************  -->

 		<!-- ************** Contact Tel  **************  -->
	    <section id="action" class="responsive">
	        <div class="vertical-center1">
	            <div class="container">
	                <div class="row">
	                    <div class="action take-tour">
	                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
	                            <h1 class="title-1"><?php echo $data->maincontent_headcontent; ?></h1>
	                            <p class="set-tex-m"><?php echo $data->maincontent_detail; ?><br>
	                            E-mail: <?php echo $data->maincontent_email; ?></p>
	                        </div>
	                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
	                            <div class="tour-button">
	                                <a class="btn btn-common"><?php echo $data->maincontent_phone; ?></a>
	                                <?php echo "<img class='image' src = '".base_url ('assets/uploads/maincontent/'.$data->maincontent_image)."'>"; ?>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
		 <!-- ************** /Contact Tel **************  -->
	

		 <!-- ************** Category **************  -->
		    <section id="team">
		        <div class="container">
		            <h1 class="title1 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">หมวดหมู่รถเข็น</h1>
		            <p class="text-center wow fadeInDown set-tex-m1" data-wow-duration="400ms" data-wow-delay="400ms"><?php echo $data->maincontent_concat; ?> </p>
		            <div class="row">

		           <a href="<?php echo base_url('download') ?>"> <h4 class="text-center"> <b class="set-dl">ดาวน์โหลดไฟล์</b><span class="label label-default">PDF</span></h4></a>

		                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
		                
		                    <div class="carousel-inner">
		                       
		                       	<?php 
		                       		foreach($data_cat2 as $data){
		                       	?>
		                            <!-- <div class="col-sm-3 col-xs-6"> -->
		                            <div class="<?php if($data->category_id >= 5) echo "col-sm-3 col-sm-offset-1"; else echo "col-sm-3 col-xs-6"; ?>">
		                                <div class="team-single-wrapper">
		                                    <div class="team-single">
		                                        <div class="person-thumb">
			                                        <?php
														if(!empty($data->category_image)){
															echo "<img class='img-responsive' src = '".base_url ('assets/uploads/category/'.$data->category_image)."'>";
														}
													?>
		                                        </div>
		                                        <div class="social-profile">
		                                            <ul class="nav nav-pills">
		                                                <li><a href="product/category/<?php echo $data->category_id; ?>">ดู</a></li>
		                                            </ul>
		                                        </div>
		                                    </div>
		                                    <div class="person-info">
		                                        <h2 class="set-dt-h"><?php echo $data->category_name; ?></h2>
		                                        <p class="set-dt"><?php echo $data->category_title; ?></p>
		                                    </div>
		                                </div>
		                            </div>
	                            <?php 
	                        	}
	                            ?>


		                            <div class="  col-sm-12 col-sm-offset-1 ">
		                  
		                           

		                         
		                     		</div>

		                    </div>
		                   


		                </div>
		            </div>
		        </div>
		    </section>
	      <?php 
	    	}
	    ?>

 		<!-- ************** /Category **************  -->
