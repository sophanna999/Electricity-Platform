
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
							<th>Content_head</th>
							
							<th>Content_head2</th>
							
							<th>Content_titleen</th>
							
							<th>Content_titleth</th>
							
							<th>Content_phone</th>
							
							<th>Content_logo</th>
							
							<th>Content_line</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->content_head;?></td>
							
							<td><?PHP echo $row->content_head2;?></td>
							
							<td><?PHP echo $row->content_titleen;?></td>
							
							<td><?PHP echo $row->content_titleth;?></td>
							
							<td><?PHP echo $row->content_phone;?></td>
							
							<td style="text-align: center;">
								<?php 
									if(!empty($row->content_logo)){
										echo "<img style='width:200px;height:100px;' src = '".base_url ('assets/uploads/content/'.$row->content_logo)."'>";
									}
								?>
							</td>
							
							<td style="text-align: center;">
								<?php 
									if(!empty($row->content_line)){
										echo "<img style='width:200px;height:100px;' src = '".base_url ('assets/uploads/content/'.$row->content_line)."'>";
									}
								?>
							</td>
							
							<td>
								<a href="content/create/<?PHP echo $row->content_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="content/deletes/<?PHP echo $row->content_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
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