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
            <li><a href="">Quản lý món ăn</a></li>
            <li class="active">ID món ăn: <?php echo $dish_info[0]['dish_id']?></li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Món: <?php echo $dish_info[0]['dish_name']?></h2>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/Dish/editDish/<?php echo $dish_info[0]['dish_id']?>">
                            <div class="form-group">
                                <label>Tên món ăn</label>
                                <input required name="dish_name" value="<?php echo $dish_info[0]['dish_name']?>" class="form-control" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Giá</label>
                                <input required name="dish_price" value="<?php echo $dish_info[0]['dish_price']?>" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Sơ lược</label>
                                <input required name="dish_summary" value="<?php echo $dish_info[0]['dish_summary']?>" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Chi tiết món ăn</label>
                                <textarea required name="dish_details" class="form-control" rows="3"><?php echo $dish_info[0]['dish_details']?></textarea>
                            </div>
                            <div class="form-group">
                            <label>Danh mục</label>
                            <select name="dish_cat" class="form-control">
                            <?php foreach ($category_data as $key => $value) {
                                        if ($dish_info[0]['dish_cat'] == $value['dc_id']) {
                                            $class = "selected";
                                        } else {
                                            $class = "";
                                        }
                                    ?>
                                        <option <?php echo $class ?> value="<?php echo $value['dc_id'] ?>"><?php echo $value['dc_name'] ?></option>
                                    <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Trạng thái</label>
                            <select name="dish_status" class="form-control">
                                <option <?php if($dish_info[0]['dish_cat'] == 1) echo "selected" ?> value=1>Món mới</option>
                                <option <?php if($dish_info[0]['dish_cat'] == 0) echo "selected" ?>value=0>Món cũ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ảnh món ăn</label>
                            <input name="dish_image" type="file" onchange="loadFile(event)">
                            <input name="dish_image_old" value="<?php echo $dish_info[0]['dish_image']?>" type="hidden">
                            <br>
                            <div>
                                <img style="width: 280px; height: 280px" id="output_img" src="<?php echo $dish_info[0]['dish_image']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Sản phẩm nổi bật</label>
                            <div class="checkbox">
                                <label>
                                    <input <?php if($dish_info[0]['dish_featured'] == 1) echo "checked" ?> name="dish_featured" type="checkbox" value=1>Nổi bật
                                </label>
                            </div>
                        </div>
                        <button name="sbm" type="submit" class="btn btn-success">Edit</button>
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