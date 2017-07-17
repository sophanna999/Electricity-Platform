<div class="login-box">

	<div class="login-logo"><b><img style="width: 50%;" src="<?php echo base_url('assets/images/lolo1.png'); ?>"></b></div>

	<div class="login-box-body">
		<p class="login-box-msg"></p>
		<?php echo $form->open(); ?>
			<?php echo $form->messages(); ?>
			<?php echo $form->bs3_text('ชื่อผู้ใช้', 'username', ENVIRONMENT==='development' ? 'webmaster' : ''); ?>
			<?php echo $form->bs3_password('รหัสผ่าน', 'password', ENVIRONMENT==='development' ? 'webmaster' : ''); ?>
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox">
						<label><input type="checkbox" name="remember"> จดจำ</label>
					</div>
				</div>
				<div class="col-xs-4">
					<?php echo $form->bs3_submit('เข้าสู่ระบบ', 'btn btn-primary btn-block btn-flat'); ?>
				</div>
			</div>
		<?php echo $form->close(); ?>
	</div>

</div>