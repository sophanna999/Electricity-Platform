<section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">ข่าวสาร กิจกรรมอัพเดท</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
            <?php 
                foreach($data_detailnews as $row){
            ?>
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 blog-padding-right">
                            <br>
                            <h2 class="post-title bold"><?php echo $row->news_head; ?></h2>
                            <br>
                            <div class="single-blog two-column">
                                <div class="post-thumb set-hvr">
                                    <?php echo "<img class='img-responsive' alt='' src = '".base_url ('assets/uploads/news/'.$row->news_img)."'>";?>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><?php echo $row->news_head; ?></h2>
                                    <p style="text-indent: 2.5em;"><?php echo $row->news_detail ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <div class="ste-h2"> รายการอัพเดท </div>
                        <?php 
                            foreach($data_newsright as $data){
                        ?>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="news/detail/<?php echo $data->news_id; ?>"><?php echo "<img style='width:95px;height:50px;' src = '".base_url ('assets/uploads/news/'.$data->news_img)."'>";?></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="news/detail/<?php echo $data->news_id; ?>"><?php echo $data->news_head ?></a></h4>
                                    <p><?php echo $data->news_date ?></p>
                                </div>
                            </div>
                        <?php 
                            }
                        ?>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!--/#blog-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>