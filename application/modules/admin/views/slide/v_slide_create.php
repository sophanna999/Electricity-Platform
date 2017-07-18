
<div class="row">
	<div class="col-md-6">
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
					  <label class="col-sm-2 control-label">Silde_name</label>
					  <div class="col-sm-10">
						<input type="text" name="silde_name" class="form-control" placeholder="Silde_name" value="<?PHP if(!empty($slide[0]->silde_name)) echo $slide[0]->silde_name;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Silde_link</label>
					  <div class="col-sm-10">
						<input type="text" name="silde_link" class="form-control" placeholder="Silde_link" value="<?PHP if(!empty($slide[0]->silde_link)) echo $slide[0]->silde_link;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Silde_img</label>
					  <div class="col-sm-10">
						<input type="file" name="silde_img" class="form-control" value="">
						<input type="hidden" name="old_silde_img" class="form-control" placeholder="Old Silde img" value="<?PHP if(!empty($slide[0]->silde_img)) echo $slide[0]->silde_img;?>">
					  <?php 
						if (!empty($slide[0]->silde_img)) {
							  echo "<img style='width:150px; height:150px;' src='".base_url('assets/uploads/slide/'.$slide[0]->silde_img)."'>";
						}
						?>
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="slide_id" value="<?PHP if(!empty($slide[0]->slide_id)) echo $slide[0]->slide_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	



			