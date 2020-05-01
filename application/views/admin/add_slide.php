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
            <li><a href="">Quản lý Slide</a></li>
            <li class="active">Thêm Slide</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm slide</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <form role="form" method="post" action="addSlide" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tiêu đề slide</label>
                                <input required name="slide_title" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Mô tả slide</label>
                                <textarea required name="slide_description" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Link nút</label>
                                <input required name="button_link" type="text" class="form-control">
                            </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ảnh sản phẩm</label>

                            <input required name="slide_image" type="file" onchange="loadFile(event)">
                            <div>
                                <img style="width: 350px; " id="output_img" src="<?php echo base_url() ?>images/slide_treo.png">
                            </div>
                            <br>
                        </div>
                        <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div>
<!--/.main-->

<script>
    var loadFile = function(event) {
        var output_img = document.getElementById("output_img");
        output_img.src = URL.createObjectURL(event.target.files[0]);
        console.log(event.target.files[0]);
    }
</script>