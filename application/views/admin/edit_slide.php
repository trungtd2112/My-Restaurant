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
            <li><a href="">Quản lý Slide</a></li>
            <li class="active">Sửa Slide</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa slide</h1>
        </div>
    </div>
    <!--/.row-->
    <form role="form" method="post" action="editSlide" enctype="multipart/form-data">
        <?php foreach ($data_slide as $key => $value) { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tiêu đề slide</label>
                                    <input value="<?php echo $value['slide_title'] ?>" required name="slide_title[]" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả slide</label>
                                    <textarea required name="slide_description[]" class="form-control" rows="3"><?php echo $value['slide_description'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Link nút</label>
                                    <input value="<?php echo $value['button_link'] ?>" required name="button_link[]" type="text" class="form-control">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>

                                    <input name="slide_image[]" type="file">
                                    <input name="slide_image_old[]" type="hidden" value="<?php echo $value['slide_image'] ?>">
                                    <br>
                                    <div>
                                        <img width="300px" height="130px" src="<?php echo $value['slide_image'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
        <?php } ?>
        <button name="sbm" type="submit" class="btn btn-success">Edit</button>
    </form>
</div>
<!--/.main-->