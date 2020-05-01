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
            <li><a href="">Quản lý món ăn</a></li>
            <li class="active">Thêm món ăn</li>
        </ol>
    </div>
    <!--/.row-->

    <!-- <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Thêm món ăn</h3>
        </div>
    </div> -->
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/Dish/addDish">
                            <div class="form-group">
                                <label>Tên món ăn</label>
                                <input required name="dish_name" class="form-control" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Giá</label>
                                <input required name="dish_price" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Sơ lược</label>
                                <input required name="dish_summary" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Chi tiết món ăn</label>
                                <textarea required name="dish_details" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                            <label>Danh mục</label>
                            <select name="dish_cat" class="form-control">
                                <option value=1>Breakfast</option>
                                <option value=2>Lunch</option>
                                <option value=3>Dinner</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Trạng thái</label>
                            <select name="dish_status" class="form-control">
                                <option value=1 selected>Món mới</option>
                                <option value=0>Món cũ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ảnh món ăn</label>
                            <input required name="dish_image" type="file" onchange="loadFile(event)">
                            <br>
                            <div>
                                <img style="width: 280px; height: 280px" id="output_img" src="<?php echo base_url()?>/images/treo.png">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Sản phẩm nổi bật</label>
                            <div class="checkbox">
                                <label>
                                    <input name="dish_featured" type="checkbox" value=1>Nổi bật
                                </label>
                            </div>
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
    var loadFile = function(event){
        var output_img  = document.getElementById("output_img");
        output_img.src = URL.createObjectURL(event.target.files[0]);
        console.log(event.target.files[0]);
    }
</script>