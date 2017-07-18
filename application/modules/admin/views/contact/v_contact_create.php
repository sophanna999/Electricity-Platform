
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
					  <label class="col-sm-2 control-label">Company_name</label>
					  <div class="col-sm-10">
						<input type="text" name="company_name" class="form-control" placeholder="Company_name" value="<?PHP if(!empty($contact[0]->company_name)) echo $contact[0]->company_name;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">First_tel</label>
					  <div class="col-sm-10">
						<input type="text" name="first_tel" class="form-control" placeholder="First_tel" value="<?PHP if(!empty($contact[0]->first_tel)) echo $contact[0]->first_tel;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Second_tel</label>
					  <div class="col-sm-10">
						<input type="text" name="second_tel" class="form-control" placeholder="Second_tel" value="<?PHP if(!empty($contact[0]->second_tel)) echo $contact[0]->second_tel;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Company_tel</label>
					  <div class="col-sm-10">
						<input type="text" name="company_tel" class="form-control" placeholder="Company_tel" value="<?PHP if(!empty($contact[0]->company_tel)) echo $contact[0]->company_tel;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Fax</label>
					  <div class="col-sm-10">
						<input type="text" name="fax" class="form-control" placeholder="Fax" value="<?PHP if(!empty($contact[0]->fax)) echo $contact[0]->fax;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Address</label>
					  <div class="col-sm-10">
						<input type="text" name="address" class="form-control" placeholder="Address" value="<?PHP if(!empty($contact[0]->address)) echo $contact[0]->address;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Line ID</label>
					  <div class="col-sm-10">
						<input type="text" name="line" class="form-control" placeholder="Line" value="<?PHP if(!empty($contact[0]->line)) echo $contact[0]->line;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Facebook Name</label>
					  <div class="col-sm-10">
						<input type="text" name="facebook" class="form-control" placeholder="Facebook" value="<?PHP if(!empty($contact[0]->facebook)) echo $contact[0]->facebook;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Img_map</label>
					  <div class="col-sm-10">
						<input type="file" name="img_map" class="form-control" value="">
						<input type="hidden" name="old_img_map" class="form-control" placeholder="Img_map" value="<?PHP if(!empty($contact[0]->img_map)) echo $contact[0]->img_map;?>">
					  <?php 
						if (!empty($contact[0]->img_map)) {
							  echo "<img style='width:150px; height:150px;' src='".base_url('assets/uploads/contact/'.$contact[0]->img_map)."'>";
						}
						?>

					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="id" value="<?PHP if(!empty($contact[0]->id)) echo $contact[0]->id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			