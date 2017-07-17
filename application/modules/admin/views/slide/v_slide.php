
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
							<th>ลำดับ</th>
							<th>รูปภาพ</th>
							<th>แก้ไข/ลบ</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
					$i = 1;
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $i++; ?></td>
							<td style="text-align: center;">
								<?php 
									if(!empty($row->slide_name)){
										echo "<img style='width:400px;height:200px;' src = '".base_url ('assets/uploads/slide/'.$row->slide_name)."'>";
									}
								?>
							</td>
							<td>
								<a href="slide/create/<?PHP echo $row->slide_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="slide/deletes/<?PHP echo $row->slide_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
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