<?php
	if(!$this->session->has_userdata('user_email')){
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
			<li class="active">Thêm thành viên</li>
		</ol>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Thêm thành viên</h1>
		</div>
	</div>
	<!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-8">
						<!-- <div class="alert alert-danger">Email đã tồn tại !</div> -->
						<form role="form" method="post" action="<?php echo base_url()?>admin/User/addUser">
							<div class="form-group">
								<label>Họ & Tên</label>
								<input name="user_name" required class="form-control" placeholder="">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input name="user_email" required type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Mật khẩu</label>
								<input name="user_password" required type="password" class="form-control">
							</div>
							<div class="form-group">
								<label>Nhập lại mật khẩu</label>
								<input name="user_re_pass" required type="password" class="form-control">
							</div>
							<div class="form-group">
								<label>Quyền</label>
								<select name="user_access" class="form-control">
									<option value=1>Admin</option>
									<option value=2>Member</option>
								</select>
							</div>
							<button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
							<button type="reset" class="btn btn-default">Làm mới</button>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->

</div>
<!--/.main-->