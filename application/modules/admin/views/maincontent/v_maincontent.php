
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"></h3>
			</div>
			<div class="box-body">
				<table class="table table-striped table-bordered table-autosort table-responsive col-xs-12" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Maincontent_texthead</th>
							
							<th>Maincontent_texttitle</th>
							
							<th>Maincontent_textdetail</th>
							
							<th>Maincontent_textslide</th>
							
							<th>Maincontent_headcontent</th>
							
							<th>Maincontent_detail</th>
							
							<th>Maincontent_email</th>
							
							<th>Maincontent_phone</th>
							
							<th>Maincontent_image</th>
							
							<th>Maincontent_concat</th>
							
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->maincontent_texthead;?></td>
							
							<td><?PHP echo $row->maincontent_texttitle;?></td>
							
							<td><?PHP echo $row->maincontent_textdetail;?></td>
							
							<td><?PHP echo $row->maincontent_textslide;?></td>
							
							<td><?PHP echo $row->maincontent_headcontent;?></td>
							
							<td><?PHP echo $row->maincontent_detail;?></td>
							
							<td><?PHP echo $row->maincontent_email;?></td>
							
							<td><?PHP echo $row->maincontent_phone;?></td>
							
							<td style="text-align: center;">
								<?php 
									if(!empty($row->maincontent_image)){
										echo "<img style='width:200px;height:100px;' src = '".base_url ('assets/uploads/maincontent/'.$row->maincontent_image)."'>";
									}
								?>
							</td>

							
							<td><?PHP echo $row->maincontent_concat;?></td>
							
							<td>
								<a href="maincontent/create/<?PHP echo $row->maincontent_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="maincontent/deletes/<?PHP echo $row->maincontent_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
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