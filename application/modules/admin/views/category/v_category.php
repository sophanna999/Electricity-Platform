
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
							<th style="display:none;"></th>
							<th>ชื่อหมวดหมู่</th>
							
							<th>รายละเอียดหมวดหมู่</th>

							<th>รูปภาพหมวดหมู่</th>
							
							<th>แก้ไข/ลบ</th>
						</tr>
					</thead>
					<tbody>
					<?PHP
						$i=0;
						foreach($data_cat2 as $row){
					?>
						<tr>
							<td  style="display:none;"><?PHP echo $i;?></td>
							<td><?PHP for($a=0;$a<$row['lv']*7;$a++) echo "&nbsp;&nbsp;"; echo $row['category_name'];?></td>
							
							<td><?PHP for($a=0;$a<$row['lv']*7;$a++) echo "&nbsp;&nbsp;"; echo $row['category_title'];?></td>

							<td style="text-align: center;">
								<?php 
									if(!empty($row['category_image'])){
										echo "<img style='width:200px;height:100px;' src = '".base_url ('assets/uploads/category/'.$row['category_image'])."'>";
									}
								?>
							</td>
							
							<td>
								<a href="category/create/<?PHP echo $row['category_id'];?>">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</a>
								|
								<a href="category/deletes/<?PHP echo $row['category_id'];?>" onclick="return confirm('Are you sure you want to delete this item?');">
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</a>
							</td>
						</tr>
					<?PHP 
					$i++;
						} 
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>