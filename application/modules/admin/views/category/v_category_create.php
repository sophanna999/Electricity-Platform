
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
				<div class="container">
					<div class="form-group">
					  <label class="col-sm-2 control-label">ชื่อหมวดหมู่</label>
					  <div class="col-sm-10">
						<input type="text" name="category_name" class="form-control" placeholder="ชื่อหมวดหมู่" value="<?PHP if(!empty($category[0]->category_name)) echo $category[0]->category_name;?>">
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">รายละเอียดหมวดหมู่</label>
					  <div class="col-sm-10">
						<input type="text" name="category_title" class="form-control" placeholder="ใส่เฉพาะหมวดหมู่หลัก" value="<?PHP if(!empty($category[0]->category_title)) echo $category[0]->category_title;?>">
					  </div>
					</div>
			 
					<div class="form-group">
					  <label class="col-sm-2 control-label">หมวดย่อย</label>
					  <div class="col-sm-10">
						<!-- <input type="text" name="category_sub" class="form-control" placeholder="Category_sub" value="<?PHP if(!empty($category[0]->category_sub)) echo $category[0]->category_sub;?>"> -->

						<select name="category_sub" class="form-control">
							<option value="0">หมวดหมู่หลัก</option>
							<?PHP foreach($all_cat as $row){
								?>

								<option value="<?PHP echo $row['category_id']; ?>" <?PHP  if(!empty($category[0]->category_id)) if($row['category_id']==$category[0]->category_id) echo "selected"; ?>><?PHP for($a=0;$a<$row['lv']*7;$a++) echo "&nbsp;"; echo $row['category_name'];?></option>
							<?PHP } ?>

						</select>

					  </div>
					</div>
			 

					<div class="form-group">
						<label class="col-sm-2 control-label">รูปภาพ</label>
						<div class="col-sm-9">
							<input type="file" class="btn btn-default" name="category_image" />
							<input type="hidden" class="btn btn-default" name="category_image_old" 
							value="<?PHP if(!empty($category[0]->category_image)) echo $category[0]->category_image;?>
							"/>

							<?php 
								if(!empty($category[0]->category_image)){
									echo "<img style='width:200px;height:100px;' src = '".base_url ('assets/uploads/category/'.$category[0]->category_image)."'>";
								}
							?>
						</div>
					</div>
					
				<!-- 	<div class="form-group">
					  <label class="col-sm-2 control-label">Category_main</label>
					  <div class="col-sm-10">
						<input type="text" name="category_main" class="form-control" placeholder="Category_main" value="<?PHP if(!empty($category[0]->category_main)) echo $category[0]->category_main;?>">
					  </div>
					</div> -->
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">ยืนยัน</button>
						<input type="hidden" name="category_id" value="<?PHP if(!empty($category[0]->category_id)) echo $category[0]->category_id;?>">
					</div>
				</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>

</div>	
			