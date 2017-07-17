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

    <!-- ********************** News Content ************************  -->
    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                    <?php 
                        foreach($data_news as $row){
                    ?>
                        <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb set-hvr">
                                    <a href="news/detail/<?PHP echo $row->news_id;?>"><img class="img-responsive" alt="" <?php echo "<img src = '".base_url ('assets/uploads/news/'.$row->news_img)."'>"; ?></a>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="news/detail/<?PHP echo $row->news_id;?>"><?PHP echo $row->news_head;?></a></h2>
                                <p><?PHP echo $row->news_title; ?></p>
                                    <a href="news/detail/<?PHP echo $row->news_id;?>" class="read-more">อ่านต่อ >></a>
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
                <!-- ********************** News Menu ************************  -->
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
        </div>
    </section>