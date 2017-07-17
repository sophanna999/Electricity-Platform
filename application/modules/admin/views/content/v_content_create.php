
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
					<div class="form-group">
					  <label class="col-sm-2 control-label">ข้อความโฆษณา (เด่น)</label>
					  <div class="col-sm-10">
						<input type="text" name="content_head" class="form-control" placeholder="Content_head" value="<?PHP if(!empty($content[0]->content_head)) echo $content[0]->content_head;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">ข้อความโฆษณา (รอง)</label>
					  <div class="col-sm-10">
						<input type="text" name="content_head2" class="form-control" placeholder="Content_head2" value="<?PHP if(!empty($content[0]->content_head2)) echo $content[0]->content_head2;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">สโลแกน EN</label>
					  <div class="col-sm-10">
						<input type="text" name="content_titleen" class="form-control" placeholder="Content_titleen" value="<?PHP if(!empty($content[0]->content_titleen)) echo $content[0]->content_titleen;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">สโลแกน TH</label>
					  <div class="col-sm-10">
						<input type="text" name="content_titleth" class="form-control" placeholder="Content_titleth" value="<?PHP if(!empty($content[0]->content_titleth)) echo $content[0]->content_titleth;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">เบอร์โทรศัพท์</label>
					  <div class="col-sm-10">
						<input type="text" name="content_phone" class="form-control" placeholder="Content_phone" value="<?PHP if(!empty($content[0]->content_phone)) echo $content[0]->content_phone;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">โลโก้</label>
					  <div class="col-sm-10">
						<input type="file" name="content_logo" class="form-control" placeholder="Content_logo">
						<input type="hidden" name="content_logo_old" class="form-control" placeholder="Content_logo" value="<?PHP if(!empty($content[0]->content_logo)) echo $content[0]->content_logo;?>">
						<?php 
							if(!empty($content[0]->content_logo)){
								echo "<img style='width:200px;height:160px;' src = '".base_url ('assets/uploads/content/'.$content[0]->content_logo)."'>";
							}
						?>

					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Line</label>
					  <div class="col-sm-10">
						<input type="file" name="content_line" class="form-control" placeholder="Content_line">
						<input type="hidden" name="content_line_old" class="form-control" placeholder="Content_line" value="<?PHP if(!empty($content[0]->content_line)) echo $content[0]->content_line;?>">
						<?php 
							if(!empty($content[0]->content_line)){
								echo "<img style='width:200px;height:160px;' src = '".base_url ('assets/uploads/content/'.$content[0]->content_line)."'>";
							}
						?>	
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">ยืนยัน</button>
						<input type="hidden" name="content_id" value="<?PHP if(!empty($content[0]->content_id)) echo $content[0]->content_id;?>">
					</div>
				</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			