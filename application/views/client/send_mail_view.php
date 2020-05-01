<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Gửi mail trong backend</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/cart.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/owl.theme.default.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <form action="<?php echo base_url() ?>Send_mail/send" method="post">
                    <div class="form-group">
                      <label for="">Email cần gửi</label>
                      <input type="text" name="email_can_gui" id="" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="">tên người nhận</label>
                      <input type="text" name="ten_nguoi_nhan" id="" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="">Nội dung</label>
                      <textarea name="noi_dung" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>