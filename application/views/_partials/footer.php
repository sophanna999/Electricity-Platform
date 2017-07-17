<footer id="footer">

        <?php $data_footer =  modules::run('home/getfooter'); ?>
		<?php $data_header =  modules::run('home/getheader'); ?>

        <?php 
            foreach($data_footer as $data){    
        ?> 
        <?php 
            foreach($data_header as $datahead){
        ?>
        <div class="container ">
            <div class="row set-foot">
                <div class="col-md-4 col-sm-6">

                 <b class="set-font-foot"><?php echo $datahead->content_titleen ?> </b>
                 <p class="set-foot-ex"><?php echo $datahead->content_titleth ?></p>
                    <div class="testimonial bottom">
                        <div class="media">
                        
                            <div class="pull-left">
                                <a href="<?php echo base_url('') ?>"><img src="<?php echo base_url('assets/uploads/content/'.$datahead->content_logo); ?>" class="set-logo1" alt=""></a>
                            </div>
                        <?php 
                            }
                        ?>
                          
                            <div class="media-body">
                                <address>
                                    <br><b> ผู้ผลิตและจำหน่ายรถเข็น </b>
                                    <br> ติดต่อได้ที่!
                                    <br> มือถือ: <?php echo $data->contact_phone; ?>
                                    <br> หรือ <?php echo $data->contact_phone2; ?>
                                    <br> เบอร์ออฟฟิต: <?php echo $data->contact_tal; ?>
                                    <br> แฟกซ์: <?php echo $data->contact_fax; ?>
                                    <br>
                                </address>
                                <div class="social-icons ">
                                    <ul class="nav nav-pills ">
                                        <li>
                                            <a href=""><img src="<?php echo base_url('assets/images/social/face.png');?>" class="set-line" alt=""></a>
                                        </li>
                                        <li>
                                            <a href=""><img src="<?php echo base_url('assets/images/social/line.png'); ?>" class="set-line" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <br>
                        <br>
                        <br>
                        <address>

                            <b> บริษัท กู๊ด คาร์ท โปรดักส์ จำกัด </b><br/>
                           <?php echo $data->contact_address ?>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <br>
                        <br>
                           <?PHP
                                $attributes = array('class' => 'form-horizontal',"role"=>"form");
                                echo form_open_multipart(base_url('contactus/create'),$attributes); 
                            ?>
                            <div class="form-group">
                                <input type="text" name="contactuser_name" class="form-control" placeholder="ชื่อ" value="<?PHP if(!empty($contactuser[0]->contactuser_name)) echo $contactuser[0]->contactuser_name;?>">
                            </div>
                            <div class="form-group">
                                <input type="text" name="contactuser_email" class="form-control" placeholder="อีเมล์" value="<?PHP if(!empty($contactuser[0]->contactuser_email)) echo $contactuser[0]->contactuser_email;?>">
                            </div>
                            <div class="form-group">
                                <textarea name="contactuser_detail" id="message" required="required" class="form-control" rows="8" placeholder="ใส่ข้อความ"><?PHP if(!empty($contactuser[0]->contactuser_detail)) echo $contactuser[0]->contactuser_detail; else ;?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="ส่งข้อความ">
                                <input type="hidden" name="contactuser_id" value="<?PHP if(!empty($contactuser[0]->contactuser_id)) echo $contactuser[0]->contactuser_id;?>">
                            </div>
                        <?php echo form_close(); ?> 
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class=" text-center">
                        <br>
                        <p>&copy; All Right Reserved 2017 Good Cart Products Co.,Ltd. copyrights.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            }
        ?>
    
    </footer>