
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
					  <label class="col-sm-2 control-label">Title</label>
					  <div class="col-sm-10">
						<input type="text" name="title" class="form-control" placeholder="Title" value="<?PHP if(!empty($about[0]->title)) echo $about[0]->title;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Detail</label>
					  <div class="col-sm-10">
						<input type="text" name="detail" class="form-control" placeholder="Detail" value="<?PHP if(!empty($about[0]->detail)) echo $about[0]->detail;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Image</label>
					  <div class="col-sm-10">
						<input type="file" name="image" class="form-control" value="">
						<input type="hidden" name="old_image" class="form-control" placeholder="Image" value="<?PHP if(!empty($about[0]->image)) echo $about[0]->image;?>">

						<?php 
						if (!empty($about[0]->image)) {
									echo "<img style='width:200px;height:100px;' src = '".base_url ('assets/uploads/about/'.$about[0]->image)."'>";							
						 }
						?>
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="id" value="<?PHP if(!empty($about[0]->id)) echo $about[0]->id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			