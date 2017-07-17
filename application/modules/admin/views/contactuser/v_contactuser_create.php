
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
				<div class="container">
				<h4 style="text-indent: 50px;"><b>บันทึกข้อมูลผู้ติดต่อเพิ่ม</b></h4>
				<br/>
					<div class="form-group">
					  <label class="col-sm-2 control-label">ชื่อผู้ติดต่อ</label>
					  <div class="col-sm-10">
						<input type="text" name="contactuser_name" class="form-control" placeholder="ชื่อผู้ติดต่อ" value="<?PHP if(!empty($contactuser[0]->contactuser_name)) echo $contactuser[0]->contactuser_name;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">อีเมล์ผู้ติดต่อ</label>
					  <div class="col-sm-10">
						<input type="text" name="contactuser_email" class="form-control" placeholder="อีเมล์ผู้ติดต่อ" value="<?PHP if(!empty($contactuser[0]->contactuser_email)) echo $contactuser[0]->contactuser_email;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เนื้อหา</label>
					  <div class="col-sm-10">
					  <textarea name="contactuser_detail" id="contactuser_detail" class="form-control" rows="10" cols="80"><?PHP if(!empty($contactuser[0]->contactuser_detail)) echo $contactuser[0]->contactuser_detail; else ;?></textarea>
						<!-- <input type="text" name="contactuser_detail" class="form-control" placeholder="เนื้อหา" value="<?PHP if(!empty($contactuser[0]->contactuser_detail)) echo $contactuser[0]->contactuser_detail;?>"> -->
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">ยืนยัน</button>
						<input type="hidden" name="contactuser_id" value="<?PHP if(!empty($contactuser[0]->contactuser_id)) echo $contactuser[0]->contactuser_id;?>">
					</div>
				</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			