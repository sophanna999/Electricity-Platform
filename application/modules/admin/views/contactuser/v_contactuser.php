
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
							<th>ชื่อผู้ติดต่อ</th>
							
							<th>อีเมล์ผู้ติดต่อ</th>
							
							<th>เนื้อหา</th>
							
							<th>วัน/เวลา</th>
							
							<th>แก้ไข/ลบ</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						foreach($data_cat as $row){
					?>
						<tr>
						
							<td><?PHP echo $row->contactuser_name;?></td>
							
							<td><?PHP echo $row->contactuser_email;?></td>
							
							<td><?PHP echo $row->contactuser_detail;?></td>
							
							<td><?PHP echo $row->contactuser_dateime;?></td>
							
							<td>
								<a href="contactuser/create/<?PHP echo $row->contactuser_id;?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="contactuser/deletes/<?PHP echo $row->contactuser_id;?>" onclick="return confirm('Are you sure you want to delete this item?');">
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