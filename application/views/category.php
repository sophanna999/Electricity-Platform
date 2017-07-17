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
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row->category_id;?>" aria-expanded="false" aria-controls="collapse<?php echo $row->category_id;?>">
          <?php echo $row->category_name; ?>
        </a>
      </h4>
    </div>
    <div id="collapse<?php echo $row->category_id;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $row->category_id;?>">
      <div class="panel-body">
        <?php 
            $data_sub = $this->mo_category->get_by_sub($row->category_id);
            foreach($data_sub as $sub){
                ?>
                    <li>-<a href="product/category/<?php echo $sub->category_id;?>"><?php echo $sub->category_name;?></a></li> 
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