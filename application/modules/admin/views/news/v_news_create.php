
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
					  <label class="col-sm-2 control-label">News_title</label>
					  <div class="col-sm-10">
						<input type="text" name="news_title" class="form-control" placeholder="News_title" value="<?PHP if(!empty($news[0]->news_title)) echo $news[0]->news_title;?>" require>
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">News_detail</label>
					  <div class="col-sm-10">
						<input type="text" name="news_detail" class="form-control" placeholder="News_detail" value="<?PHP if(!empty($news[0]->news_detail)) echo $news[0]->news_detail;?>" require>
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">News_document</label>
					  <div class="col-sm-10">
						<input type="text" name="news_document" class="form-control" placeholder="News_document" value="<?PHP if(!empty($news[0]->news_document)) echo $news[0]->news_document;?>" require>
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-sm-2 control-label">News_image</label>
					  <div class="col-sm-10">
						<input type="file" name="news_image" class="form-control" placeholder="news_image" multiple="multiple" />
						<input type="hidden" name="old_image" class="form-control" placeholder="old_image" value="<?PHP if(!empty($news[0]->news_image)) echo $news[0]->news_image;?>">

							<?php 
								if(!empty($news[0]->news_image)){
									echo "<img style='width:200px;height:100px;' src = '".base_url ('assets/uploads/news/'.$news[0]->news_image)."'>";
								}
							?>
					  </div>
					</div>
					
					<div class="box-footer">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
						<input type="hidden" name="news_id" value="<?PHP if(!empty($news[0]->news_id)) echo $news[0]->news_id;?>">
					</div>
				<?php echo form_close(); ?>	
			</div>
		</div>
	</div>
</div>	
			