<div class="container">
        <div class=" col-sm-9  col-md-6">
            <div class="media">
            <?php 
            foreach($data_contact as $row){
            ?>
                <div class="pull-right">
                 <address>
                 <br>
                        <?php echo $row->contact_address ?>
                    </address>
                </div>
                <div class="media-body">
                                <address>
                                <br><b><?php echo $row->contact_head; ?></b>
                                    <br> มือถือ: <?php echo $row->contact_phone; ?>
                                    <br> หรือ <?php echo $row->contact_phone2; ?>
                                    <br> เบอร์ออฟฟิต: <?php echo $row->contact_tal; ?>
                                    <br> แฟกซ์: <?php echo $row->contact_fax; ?>
                                    <br>
                                </address>
                                <div class="social-icons ">
                                    <ul class="nav nav-pills ">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/images/social/face.png') ?>" class="set-line" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('assets/images/social/line.png') ?>" class="set-line" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                </div>
            </div>

        </div>

    </div>
      <br>
    <br>

<div class="container">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Google Map</a></li>
            <li><a data-toggle="tab" href="#menu1">Location</a></li>
        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
            <iframe src="https://www.google.com/maps/d/embed?mid=18RaEQV5jnYpL6h82rZoDHV9-usk" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
              
            </div>
            <div id="menu1" class="tab-pane fade">
                  <?php echo "<img class='img-responsive' src = '".base_url ('assets/uploads/contact/'.$row->contact_location)."'>";?>
            </div>
        </div>

</div>
<?php 
    }
?>

    <br>
    <br>
    <br>
    <br>
    <br>