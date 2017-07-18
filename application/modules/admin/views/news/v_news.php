
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
				<table class="table table-striped table-bordered table-autosort" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>News_title</th>
							
							<th>News_detail</th>
							
							<th>News_document</th>
							
							<th>News_image</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->news_title;?></td>
							
							<td><?PHP echo $row->news_detail;?></td>
							
							<td><?PHP echo $row->news_document;?></td>
							
							<td><?PHP echo "<img style='width:200px;height:100px;' src = '".base_url ('assets/uploads/news/'.$row->news_image)."'>";?>
							
							<td>
								<a href="news/create/<?PHP echo $row->news_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="news/deletes/<?PHP echo $row->news_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</a>
							</td>
						</tr>
					<?PHP 
						} 
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>