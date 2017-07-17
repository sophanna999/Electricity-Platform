



        <div class="container">
             <div class="ste-h2"> รายการไฟล์เอกสาร สินค้า </div>
        <div class="row">
        <?php
            foreach($data_download as $row){
        ?>
                <div class="col-sm-6">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="<?php echo base_url('assets/uploads/download/'.$row->download_name); ?>" download><i class="fa fa-file-pdf-o  fa-5x" aria-hidden="true"></i></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="<?php echo base_url('assets/uploads/download/'.$row->download_name); ?>"><?PHP echo $row->download_head; ?></a></h4>
                                    <p><?PHP echo fullDateDB($row->download_date);?></p>
                                </div>
                            </div>
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
                   