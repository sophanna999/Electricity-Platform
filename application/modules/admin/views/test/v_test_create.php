
			<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
				<?PHP
					$attributes = array('class' => 'form-horizontal',"role"=>"form");
					echo form_open("",$attributes); 
				?>
					<div class="form-group">
					  <label class="col-sm-2 control-label">Name</label>
					  <div class="col-sm-10">
						<input type="text" name="name" class="form-control" placeholder="Name" value="<?PHP if(!empty($test[0]->name)) echo $test[0]->name;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Title</label>
					  <div class="col-sm-10">
						<input type="text" name="title" class="form-control" placeholder="Title" value="<?PHP if(!empty($test[0]->title)) echo $test[0]->title;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">Price</label>
					  <div class="col-sm-10">
						<input type="text" name="price" class="form-control" placeholder="Price" value="<?PHP if(!empty($test[0]->price)) echo $test[0]->price;?>">
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="id" value="<?PHP if(!empty($test[0]->id)) echo $test[0]->id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			