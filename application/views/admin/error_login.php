<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="1;url=<?php echo base_url() ?>admin/Login">
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
                    <?php if ($data == 0) { ?>
                        <div class="alert alert-danger ">Tài khoản không tồn tại!</div>
                    <?php } else { ?>
                        <div class="alert alert-danger ">Tài khoản không đúng mật khẩu!</div>
                    <?php } ?>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</body>

</html>