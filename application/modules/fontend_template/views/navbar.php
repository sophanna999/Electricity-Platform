<header id="header">
		<?php echo modules::run('fontend_template/header/getheader',$data_contant); ?>

            <?php
                foreach($data_contant as $data){
            ?>
        <div class="container">
            <div class="slide-text  ">
                <div class="set-b">บริษัท กู๊ด คาร์ท โปรดักส์ จำกัด </div>
                <h1 class="set-texth1 set-i5"> Good Cart Products Co.,Ltd.</h1>
                <div class="set-text-h">
                    <b class="set-text"><i class="fa fa-cart-plus " aria-hidden="true"></i> 
                    <b style=" color: #043184;"><!--  ผู้ผลิตและจำหน่ายรถเข็น --> </b> <!-- ยินดีรับงานดัดแปลงตามความต้องการ ติดต่อเลย -->
                        </b>
                </div>
                 <p> <b class="set-font">Good quality and price </b> <b style="color: #043184;"> สินค้ามีคุณภาพและราคาดีที่สุด </b>  </p> 
            </div>
            <div class="set-text1 blink_me"> โทร: </div>
            <br>
            <!-- <div><a href="#"><img src="<?php echo base_url('assets/images/social/line.jpg') ?>" alt="line-img" class="set-line-t wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"> </a></div> -->
        </div>

        <div id="mainNav" class="navbar navbar-inverse affix">
            <div class="container">
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand hover14" href="index.html">
                        <!-- <img src="<?php echo base_url('assets/images/lolo.png') ?>" alt="logo" class=" set-logo "> -->
                    </a>

                </div>
                <div class="collapse navbar-collapse ">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if($this->uri->segment(1)==""){echo 'class="active"';}?>><a href="<?php echo base_url('/') ?>">home</a></li>
                        <li <?php if($this->uri->segment(1)=="news"){echo 'class="active"';}?>><a href="<?php echo base_url('news') ?>">news</a></li>
                        <li <?php if($this->uri->segment(1)=="product"){echo 'class="active"';}?> class="dropdown"><a href="<?php echo base_url('product') ?>">category product<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="product.html">รถเข็นโรงแรมและโรงพยาบาล  </a></li>
                                <li><a href="product.html">รถเข็นเหล็กจัดเก็บและเคลื่อนย้าย </a></li>
                                <li><a href="product.html">รถเข็นเครื่องมือช่าง </a></li>
                                <li><a href="product.html">ตู้เหล็กใส่กล่องอะไหล่ </a></li>
                                <li><a href="product.html">งานสั่งทำตามแบบ </a></li>
                                <li><a href="product.html">กลุ่มพลาสติก </a></li>
                                <li><a href="product.html">สินค้าแนะนำ</a></li>
                                <li><a href="download.html">ดาวน์โหลดแคตตาล็อกสินค้า</a></li>
                            </ul>
                        </li>
                        <li <?php if($this->uri->segment(1)=="about"){echo 'class="active"';}?>><a href="<?php echo base_url('about') ?>">about</a></li>
                        <li <?php if($this->uri->segment(1)=="contact"){echo 'class="active"';}?>><a href="<?php echo base_url('contact') ?>">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php 
            }
        ?>
    </header>

    