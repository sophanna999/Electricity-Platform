    <?php $data_main =  modules::run('category/category'); ?>
    

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
            
                <div class="col-md-3 col-sm-12">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item categories">
                            <div class="ste-h2"> หมวดหมู่รถเข็น ทั้งหมด </div>
                            <ul class="nav navbar-stacked">
<?php 
    foreach($data_main as $row){
?>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <!-- <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row->category_id;?>" aria-expanded="false" aria-controls="collapse<?php echo $row->category_id;?>"> -->
        <a href="product/category/<?php echo $row->category_id;?>"><?php echo $row->category_name;?></a><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row->category_id; ?>" aria-expanded="false" aria-controls="collapse<?php echo $row->category_id; ?>"><i class="fa fa-angle-down"></i></a>
          <!-- <?php echo $row->category_name; ?> -->
        </a>
      </h4>
    </div>
    <?php
    if($cat_id == $row->category_id){
        $active = "panel-collapse collapse in";
    }else{
        $active = "panel-collapse collapse";
    }
    ?>
   
    <div id="collapse<?php echo $row->category_id;?>" class="<?php echo $active;?>" role="tabpanel" aria-labelledby="heading<?php echo $row->category_id;?>">
      <div class="panel-body">

        <?php  
            $data_sub = $this->mo_category->get_by_sub($row->category_id);
            foreach($data_sub as $sub){
                $selected = "";
                if($group_select[0]->category_id == $sub->category_id){
                    $selected = "color:#337ab7;";
                }
                ?>
                    <li>-<a href="product/category/<?php echo $sub->category_id;?>" style="<?php echo $selected;?>"><?php echo $sub->category_name;?></a></li> 
                <?php
            }
        ?>
      </div>
    </div>
  </div>
<?php 
    }
?>
       
                            </ul>
                        </div>
                    </div>
                </div>

        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 ">
                    <div class="ste-h2"> <i class="fa fa-cart-plus " aria-hidden="true"></i> หมวดสินค้า ที่เลือก : <?php echo $group_select[0]->category_name;?></div>
                    <br>
                    <div class="row">
                    <?php 
                        foreach($data_product as $data){
                    ?>

                        <div class="col-md-4 col-sm-6 blog-padding-right hover14 ">
                            <div class="single-blog two-column  ">
                                <div class="post-thumb">
                                    <a href="product/detail/<?php echo $data->product_id;?>"">
                                        <figure><img src="assets/uploads/product/<?php echo($data->product_img); ?>" class="img-responsive " alt=""></figure>
                                    </a>
                                </div>
                                <div class="post-content1 overflow">
                                    <a href="product/detail/<?php echo $data->product_id;?>"" class="read-more"><i class="fa fa-circle" aria-hidden="true"></i> <?php echo($data->product_name); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php 
                        }
                    ?>

                    </div>
                        <div class="blog-pagination">
                            <ul class="pagination">
                            <?php 
                                echo $this->pagination->create_links();
                            ?>
                            </ul>
                        </div>
                </div>
            </div>
        </div>