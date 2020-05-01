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
            <li><a href="">Quản lý Header</a></li>
            <li class="active">Edit header</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit header</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="alert alert-success" role="alert">
                            Mạng xã hội
                        </div>
                        <?php foreach ($data_header as $key => $value) { ?>
                            <?php if ($key == "social_network") { ?>
                                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/Slide/editHeader">
                                    <div class="form-group">
                                        <label>Link Facebook</label>
                                        <input required type="text" value="<?php echo $value['facebook'] ?>" name="facebook" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Link Twitter</label>
                                        <input required name="twitter" value="<?php echo $value['twitter'] ?>" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Link Tumblr</label>
                                        <input required name="tumblr" value="<?php echo $value['tumblr'] ?>" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Link Instagram</label>
                                        <input required name="instagram" value="<?php echo $value['instagram'] ?>" type="text" class="form-control">
                                    </div>
                                <?php continue;
                            } ?>
                    </div>
                    <div class="col-md-6">
                        <?php if ($key == "hotline") { ?>
                            <div class="alert alert-success" role="alert">
                                Thông tin hoạt động
                            </div>
                            <div class="form-group">
                                <label>Hotline</label>
                                <input required name="hotline" value="<?php echo $value ?>" type="text" class="form-control">
                            </div>
                        <?php continue;
                            } ?>
                        <?php if ($key == "business_hours") { ?>
                            <div class="form-group">
                                <label>Giờ mở cửa</label>
                                <input required name="open_time" value="<?php echo $value['open_time'] ?>" type="time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Giờ đóng cửa</label>
                                <input required name="close_time" value="<?php echo $value['close_time'] ?>" type="time" class="form-control">
                            </div>
                            <button name="sbm" type="submit" class="btn btn-success">Edit</button>
                        <?php } ?>
                    </div>
                <?php } ?>
                </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div>
<!--/.main-->