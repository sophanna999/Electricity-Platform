 
<!-- ********************** Text About ************************  -->

    <section id="about-company" class="padding-top wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                <?PHP
                        foreach($data_about as $row){
                    ?>
                    <h1 class="set-texth"><?PHP echo $row->aboutat_nameth;?></h1>
                    <h2><?PHP echo $row->aboutat_nameen;?></h2>
                    <p style="font-size: larger; line-height: 1.5;"><?PHP echo $row->aboutat_detailth;?></p>
                    <?PHP 
                        } 
                    ?>
                </div>
            </div>
        </div>
    </section>

    <div class="set-bg-ab">
    <div class="set-body"></div>
   </div>

 