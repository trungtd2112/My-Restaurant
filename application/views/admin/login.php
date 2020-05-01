<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TrungOishii - Administrator</title>

	<link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/bootstrap-table.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/styles.css" rel="stylesheet">

	<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">TrungOishii - Administrator</div>
				<div class="panel-body">
					<form role="form" method="post" action="<?php echo base_url()?>admin/Login/login">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="user_email" type="email" >
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="user_password" type="password" value="">
							</div>
							<button type="submit" class="btn btn-primary">Đăng nhập</button>
							<span class="btn btn-default" id="signup">Đăng ký</span>
							<a href="" class="btn btn-warning">Quên mật khẩu</a>
						</fieldset>
						
					</form>
					<hr>
					<!-- <form role="form" action="<?php echo base_url() ?>admin/Login/signUp" method="post" class="hidden">
						<h3>Thông tin người dùng</h3>
						<fieldset>
							<div class="form-group">
								<input type="text" name="user_name" id="" class="form-control" placeholder="Tên" autofocus>
							</div>
							<div class="form-group">
								<input type="email" name="user_email" class="form-control" placeholder="E-mail">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="user_password" type="password" value="">
							</div>
							<button type="submit" class="btn btn-info">Đăng ký</button>
						</fieldset>
					</form> -->
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
	<script src="<?php echo base_url() ?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>js/bootstrap-table.js"></script>
	<script>
		$(function() {
			i = 1;
			$('body').on('click', '#signup', function() {
				if (i % 2 != 0) {
					$(this).parent().parent().next().next().removeClass('hidden');
					i++;
				} else {
					$(this).parent().parent().next().next().addClass('hidden');
					i--;
				}

			});
		})
	</script>
</body>

</html>