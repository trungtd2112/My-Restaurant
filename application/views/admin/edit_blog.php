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
            <li class="active"><a href="">Quản lý Blog</a></li>
        </ol>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div>
                <span class="btn btn-success" style="margin-top:15px" id="add">
                    <i class="glyphicon glyphicon-plus"></i> Sửa tin tức
                </span>
            </div>
            <div class="panel panel-default">
                <div class="panel-body ">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <h2 class="breadcrumb-item text-center">Sửa tin</h2>
                            </ol>
                        </nav>
                        <?php foreach ($news_info as $key => $value) { ?>
                            <form action="<?php echo base_url() ?>admin/Blog/editNews/<?php echo $value['blog_id'] ?>" enctype="multipart/form-data" method="post" style="padding-top: 20px">
                                <div class="form-group">
                                    <label for="">Tiêu đề</label>
                                    <input type="text" name="blog_title" value='<?php echo $value['blog_title'] ?>' id="" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Trích dẫn</label>
                                    <input type="text" name="blog_summary" value='<?php echo $value['blog_summary'] ?>' id="" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label style="display: block" for="">Thumbnail</label>
                                    <input type="hidden" value="<?php echo $value['blog_thumbnail'] ?>" name="old_thumbnail">
                                    <input type="file" name="blog_thumbnail" id="" class="form-control" placeholder="thumbnail" onchange="loadFile(event)">
                                    <div>
                                        <img style="width: 350px; " id="output_img" src="<?php echo $value['blog_thumbnail'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                <?php } ?>
                                <label for="">Danh mục tin</label>
                                <select class="form-control" name="blog_category" id="">
                                    <?php foreach ($category_data as $key => $value) {
                                        if ($news_info[0]['blog_category'] == $value['id']) {
                                            $class = "selected";
                                        } else {
                                            $class = "";
                                        }
                                    ?>
                                        <option <?php echo $class ?> value="<?php echo $value['id'] ?>"><?php echo $value['category_name'] ?></option>
                                    <?php } ?>
                                </select>
                                </div>
                                <?php foreach ($news_info as $key => $value) { ?>
                                    <div class="form-group">
                                        <label for="">Nội dung</label>
                                        <textarea name="blog_content" id="blog_content" cols="105" rows="50"><?php echo $value['blog_content'] ?></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                <?php } ?>
                            </form>

                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div>

    <script>
        CKEDITOR.config.height = 700;
        CKEDITOR.replace('blog_content', {
            filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
            filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserWindowWidth: '1000',
            filebrowserWindowHeight: '700',
        });
    </script>

    <script>
        var loadFile = function(event) {
            var output_img = document.getElementById("output_img");
            output_img.src = URL.createObjectURL(event.target.files[0]);
            console.log(event.target.files[0]);
        }
    </script>