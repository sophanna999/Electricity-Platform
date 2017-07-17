<header id="header">
	 
    <?php $data_header =  modules::run('home/getheader'); ?>
    <?php 
        foreach($data_header as $data ){
    ?>
        <div class="container">
            <div class="slide-text  ">
                <div class="set-b">บริษัท กู๊ด คาร์ท โปรดักส์ จำกัด </div>
                <h1 class="set-texth1 set-i5"> Good Cart Products Co.,Ltd.</h1>
                <div class="set-text-h">
                    <b class="set-text"><i class="fa fa-cart-plus " aria-hidden="true"></i> 
                    <b style=" color: #043184;"><?php echo $data->content_head; ?></b> <?php echo $data->content_head2; ?></b>
                </div>
                 <p> <b class="set-font"><?php echo $data->content_titleen ?> </b> <b style="color: #043184;"> <?php echo $data->content_titleth ?> </b>  </p> 
            </div>
            <div class="set-text1 blink_me"> โทร: <?php echo $data->content_phone; ?></div>
            <br>
            <div><a href="#"><img src="<?php echo base_url('assets/uploads/content/'.$data->content_line); ?>" alt="line-img" class="set-line-t wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"> </a></div>
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

                    <a class="navbar-brand hover14" href="<?php echo base_url('') ?>">
                        <img src="<?php echo base_url('assets/uploads/content/'.$data->content_logo); ?>" alt="logo" class=" set-logo ">
                    </a>

                </div>
                <div class="collapse navbar-collapse ">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if($this->uri->segment(1)==""){echo 'class="active"';}?>><a href="<?php echo base_url('/') ?>">home</a></li>
                        <li <?php if($this->uri->segment(1)=="news"){echo 'class="active"';}?>><a href="<?php echo base_url('news') ?>">news</a></li>
                        <li <?php if($this->uri->segment(1)=="product"){echo 'class="active"';}?> class="dropdown"><a href="<?php echo base_url('product') ?>">category product<i class="fa fa-angle-down"></i></a>
                        <?php $data_main =  modules::run('category/category'); ?>
                        
                            <ul role="menu" class="sub-menu">
                        <?php 
                        // $data_sub = $this->mo_category->get_by_sub($row->category_id);
                            foreach($data_main as $data){
                        ?>
                                <li><a href="product/category/<?php echo $data->category_id; ?>"><?php echo $data->category_name; ?>  </a></li>                                
                        <?php 
                        }
                        ?>
                                <li><a href="<?php echo base_url('download'); ?>">ดาวน์โหลดแคตตาล็อกสินค้า</a></li> 
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

    