<?php
if (!$this->session->has_userdata('user_email')) {
	redirect('admin/Login', 'refresh');
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li><a href="">Quản lý thành viên</a></li>
			<li class="active"><?php echo $user_info[0]['user_name'] ?></li>
		</ol>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Thành viên: Nguyễn Văn A</h1>
		</div>
	</div>
	<!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-8">
						<?php $user_mail = explode('@',  $user_info[0]['user_email']); ?>
						<form role="form" method="post" action="<?php echo base_url() ?>admin/User/editUser/<?php echo $user_mail[0]; ?>">
							<div class="form-group">
								<label>Họ & Tên</label>
								<input type="text" name="user_name" required class="form-control" value="<?php echo $user_info[0]['user_name'] ?>" placeholder="">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="user_email" required value="<?php echo $user_info[0]['user_email'] ?>" class="form-control" disabled>
							</div>
							<div class="form-group">
								<label>Ngày tạo</label>
								<input type="text" disabled value="<?php echo date('d/m/Y', $user_info[0]['user_date_created']); ?>" required class="form-control">
							</div>
							<div class="form-group">
								<label>Mật khẩu</label>
								<input type="text" name="user_password" value="<?php echo $user_info[0]['user_password'] ?>" required class="form-control">
							</div>
							<div class="form-group">
								<input type="hidden" name="user_date_created" value="<?php echo $user_info[0]['user_date_created']?>" required class="form-control">
							</div>
							<div class="form-group">
								<label>Nhập lại mật khẩu</label>
								<input type="password" name="user_re_pass" required class="form-control">
							</div>
							<div class="form-group">
								<label>Quyền</label>
								<select name="user_access" class="form-control">
									<option <?php if ($user_info[0]['user_access'] == 1) echo "selected" ?> value=1>Admin</option>
									<option <?php if ($user_info[0]['user_access'] == 2) echo "selected" ?> value=2>Member</option>
								</select>
							</div>
							<button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
							<button type="reset" class="btn btn-default">Làm mới</button>
					</div>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->

</div>
<!--/.main-->