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
            <li class="active">Quản lý danh mục Blog</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý danh mục Blog</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">
                        <span class="btn btn-success" id="add">
                            <i class="glyphicon glyphicon-plus "></i> Thêm danh mục Blog
                        </span>
                        <div id="warning" class="hidden alert alert-danger">Danh mục không hợp lệ !</div>
                        <form class="hidden">
                            <div class="form-group ">
                                <label>Tên danh mục:</label>
                                <input required type="text" name="cat_name" id="category_name" class="form-control" placeholder="Tên danh mục...">
                            </div>
                            <button type="button" id="addCat" name="sbm" class="btn btn-success">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div>
    <!-- <div id="toolbar" class="btn-group">
        <a href="admin/Blog/add_blog_category" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm danh mục Blog
        </a>
    </div> -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table" id="categories">

                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th>Tên danh mục</th>
                                <th>Hành động</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($category_data as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $value['id'] ?></td>
                                    <td><?php echo $value['category_name'] ?></td>
                                    <td class="form-group">
                                        <a data-href="<?php echo $value['id'] ?>" class="btn btn-primary edit_button"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a data-href="<?php echo $value['id'] ?>" class="btn btn-danger delete_button"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                    <!-- form edit -->
                                    <td>
                                        <form role="form" method="post" class="jquery_edit_form hidden">
                                            <div class="form-group">
                                                <label>Tên danh mục:</label>
                                                <input type="text" name="category_name" required value="<?php echo $value['category_name'] ?>" class="form-control" placeholder="Tên danh mục...">
                                            </div>
                                            <button type="submit" name="sbm" class="btn btn-primary jquery_edit_button">Cập nhật</button>
                                            <button type="reset" class="btn btn-default">Làm mới</button>
                                        </form>
                                    </td>
                                    <!-- end form edit -->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->

<script>
    $(function() {
        i = 1, j = 0;
        $('body').on('click', '#add', function() {
            if (i % 2 != 0) {
                $(this).next().next().removeClass('hidden');
                i++;
            } else {
                $(this).next().next().addClass('hidden');
                i--;
            }

        });

        $('body').on('click', '#addCat', function() {
            //lấy ra tên trong form
            $.ajax({
                    type: "post",
                    url: "<?php echo base_url() ?>" + "admin/Blog/addJquery",
                    data: {
                        'category_name': $('#category_name').val()
                    },
                    dataType: "json"
                })
                .always(function(res) {
                    console.log(res);
                    if (res != 0) {
                        content = '<tr>';
                        content += '<td>';
                        content += res;
                        content += '</td>'
                        content += '<td>';
                        content += $('#category_name').val();
                        content += '</td>';
                        content += '<td class="form-group">';
                        content += '<a data-href="' + res + '" class="btn btn-primary edit_button"><i class="glyphicon glyphicon-pencil"></i></a>';
                        content += '<a data-href="' + res + '" class="btn btn-danger delete_button"><i class="glyphicon glyphicon-remove"></i></a>';
                        content += '</td>';
                        content += '</tr>';

                        $('#categories').append(content);
                        $('#addCat').val('');
                    } else {
                        $('#warning').removeClass('hidden');
                    }
                });
        });
        //xóa 
        $('html').on('click', '.delete_button', function(event) {
            dc_id = $(this).data('href');
            need_to_delete = $(this).parent().parent();
            $.ajax({
                    type: "post",
                    url: '<?php echo base_url() ?>' + 'admin/Blog/deleteBlogCategory/' + dc_id,
                    dataType: "json"
                })
                .always(function() {
                    need_to_delete.remove();
                });
        });

        //edit
        $('body').on('click', '.edit_button', function() {
            //hiện form sửa
            if (j % 2 == 0) {
                $(this).parent().next().children().removeClass('hidden');
                j++
            } else {
                $(this).parent().next().children().addClass('hidden');
                j--;
            }
        });

        $('body').on('click', '.jquery_edit_button', function() {
            id = $(this).parent().parent().prev().children().data('href');
            new_cat = $(this).prev().children('input').val();
            $.ajax({
                type: "post",
                url: "<?php echo base_url() ?>" + "admin/Blog/editBlogCategory/" + id,
                data: {
                    'category_name': new_cat
                },
                dataType: "json"
            });
        });


    });
</script>
