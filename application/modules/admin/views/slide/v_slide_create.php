
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
				<?php echo validation_errors(); ?>
					<div class="form-group">
					  <label class="col-sm-2 control-label">อัพโหลดรูปภาพสไลด์</label>
					  <div class="col-sm-10">
						<input type="file" class="btn btn-default" name="slide_name">
						<input type="hidden" class="btn btn-default" name="slide_name_old" value="<?PHP if(!empty($slide[0]->slide_name)) echo $slide[0]->slide_name;?>">
						<?php 
							if(!empty($slide[0]->slide_name)){
								echo "<img style='width:400px;height:200px;' src = '".base_url ('assets/uploads/slide/'.$slide[0]->slide_name)."'>";
							}
						?>
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">ยืนยัน</button>
						<input type="hidden" name="slide_id" value="<?PHP if(!empty($slide[0]->slide_id)) echo $slide[0]->slide_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			