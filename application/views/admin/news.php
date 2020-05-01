<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active"><a href="">Quản lý danh mục Blog</a></li>
        </ol>
    </div>




    <div class="row">
        <div class="col-lg-12">
            <div>
                <span class="btn btn-success" style="margin-top:15px" id="add">
                    <i class="glyphicon glyphicon-plus"></i> Thêm tin tức
                </span>
            </div>
            <div class="panel panel-default hidden">
                <div class="panel-body ">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <h2 class="breadcrumb-item text-center">Thêm mới</h2>
                            </ol>
                        </nav>
                        <form action="<?php echo base_url() ?>admin/Blog/addNews" enctype="multipart/form-data" method="post" style="padding-top: 20px">
                            <div class="form-group">
                                <label for="">Tiêu đề</label>
                                <input type="text" name="blog_title" id="" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Trích dẫn</label>
                                <input type="text" name="blog_summary" id="" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Thumbnail</label>
                                <input type="file" name="blog_thumbnail" id="" class="form-control" placeholder="thumbnail" onchange="loadFile(event)">
                                <div>
                                        <img style="width: 500px; " id="output_img" src="<?php echo base_url()?>images/treo_news.jpg">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="">Danh mục tin</label>
                                <select class="form-control" name="blog_category" id="">
                                    <?php foreach ($category_data as $key => $value) { ?>
                                        <option value="<?php echo $value['id'] ?>"><?php echo $value['category_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Nội dung</label>
                                <textarea name="blog_content" id="blog_content" cols="105" rows="50"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>

                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div>
    <!-- News List -->
    <div class="row" style="margin-top:15px">
        <div class="col-lg-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h2 class="breadcrumb-item text-center">Danh sách tin</h2>
                </ol>
                <div class="row">
                    <div class="card-deck">
                        <?php foreach ($news_data as $key => $value) { ?>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid img-thumbnail" style="height: 200px" src="<?php echo $value['blog_thumbnail'] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $value['blog_title'] ?></h5>
                                        <p class="card-text"><?php echo $value['blog_summary'] ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Uploaded at <?php echo date('F j, Y, g:i a', $value['date_created']); ?></small>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12" style="margin-bottom:20px">
                                            <a href="<?php echo base_url() ?>admin/Blog/edit_news/<?php echo $value['blog_id'] ?>" class="btn btn-primary edit_button mt-auto"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                            <a href="<?php echo base_url() ?>admin/Blog/deleteNews/<?php echo $value['blog_id'] ?>" class="btn btn-danger delete_button"><i class="glyphicon glyphicon-remove"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- End News List -->
    <!--/.main-->

    <script>
        $(function() {
            i = 1;
            $('#add').click(function(e) {
                if (i % 2 != 0) {
                    $(this).parent().next().removeClass('hidden');
                    i++;
                } else {
                    $(this).parent().next().addClass('hidden');
                    i--;
                }
            });
        })
        CKEDITOR.config.height = 700;
        CKEDITOR.replace('blog_content', {
            filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
            filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserWindowWidth: '1000',
            filebrowserWindowHeight: '700'
        });
    </script>

    <script>
        var loadFile = function(event) {
            var output_img = document.getElementById("output_img");
            output_img.src = URL.createObjectURL(event.target.files[0]);
            console.log(event.target.files[0]);
        }
    </script>