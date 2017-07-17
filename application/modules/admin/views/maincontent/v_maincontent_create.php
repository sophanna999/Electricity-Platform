
			<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
				<?PHP
					$attributes = array('class' => 'form-horizontal',"role"=>"form");
					echo form_open_multipart("",$attributes); 
				?>
					<div class="form-group">
					  <label class="col-sm-2 control-label">หัวข้อแนะนำ</label>
					  <div class="col-sm-10">
						<input type="text" name="maincontent_texthead" class="form-control" placeholder="Maincontent_texthead" value="<?PHP if(!empty($maincontent[0]->maincontent_texthead)) echo $maincontent[0]->maincontent_texthead;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">รายละเอียดย่อยหัวข้อแนะนำ</label>
					  <div class="col-sm-10">
						<input type="text" name="maincontent_texttitle" class="form-control" placeholder="Maincontent_texttitle" value="<?PHP if(!empty($maincontent[0]->maincontent_texttitle)) echo $maincontent[0]->maincontent_texttitle;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เนื้อหาหัวข้อแนะนำ</label>
					  <div class="col-sm-10">
						<input type="text" name="maincontent_textdetail" class="form-control" placeholder="Maincontent_textdetail" value="<?PHP if(!empty($maincontent[0]->maincontent_textdetail)) echo $maincontent[0]->maincontent_textdetail;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เนื้อหาสไลด์</label>
					  <div class="col-sm-10">
						<input type="text" name="maincontent_textslide" class="form-control" placeholder="Maincontent_textslide" value="<?PHP if(!empty($maincontent[0]->maincontent_textslide)) echo $maincontent[0]->maincontent_textslide;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">คำโฆษณาสินค้า</label>
					  <div class="col-sm-10">
						<input type="text" name="maincontent_headcontent" class="form-control" placeholder="Maincontent_headcontent" value="<?PHP if(!empty($maincontent[0]->maincontent_headcontent)) echo $maincontent[0]->maincontent_headcontent;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เนื้อหาโฆษณาสินค้า</label>
					  <div class="col-sm-10">
						<input type="text" name="maincontent_detail" class="form-control" placeholder="Maincontent_detail" value="<?PHP if(!empty($maincontent[0]->maincontent_detail)) echo $maincontent[0]->maincontent_detail;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">อีเมล์</label>
					  <div class="col-sm-10">
						<input type="text" name="maincontent_email" class="form-control" placeholder="Maincontent_email" value="<?PHP if(!empty($maincontent[0]->maincontent_email)) echo $maincontent[0]->maincontent_email;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เบอร์โทรศัพท์</label>
					  <div class="col-sm-10">
						<input type="text" name="maincontent_phone" class="form-control" placeholder="Maincontent_phone" value="<?PHP if(!empty($maincontent[0]->maincontent_phone)) echo $maincontent[0]->maincontent_phone;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">รูปภาพ</label>
					  <div class="col-sm-10">
						<input type="file" name="maincontent_image" class="btn btn-default" placeholder="Maincontent_image">
						<input type="hidden" name="maincontent_image_old" class="btn btn-default" placeholder="Maincontent_image" value="<?PHP if(!empty($maincontent[0]->maincontent_image)) echo $maincontent[0]->maincontent_image;?>">

						<?php 
								if(!empty($maincontent[0]->maincontent_image)){
									echo "<img style='width:200px;height:100px;' src = '".base_url ('assets/uploads/maincontent/'.$maincontent[0]->maincontent_image)."'>";
								}
							?>
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">รายละเอียดหมวดหมู่</label>
					  <div class="col-sm-10">
						<input type="text" name="maincontent_concat" class="form-control" placeholder="Maincontent_concat" value="<?PHP if(!empty($maincontent[0]->maincontent_concat)) echo $maincontent[0]->maincontent_concat;?>">
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">ยืนยัน</button>
						<input type="hidden" name="maincontent_id" value="<?PHP if(!empty($maincontent[0]->maincontent_id)) echo $maincontent[0]->maincontent_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			