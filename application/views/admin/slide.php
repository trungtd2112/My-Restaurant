<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách slide</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách slide</h1>
        </div>
    </div>
    <!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="<?php base_url()?>Slide/add_slide" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm slide
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table">
                        <thead>
                            <tr>
                                <th data-field="slide_title" data-sortable="true">Tiêu đề</th>
                                <th data-field="slide_description" data-sortable="true">Mô tả</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Link nút</th>
                                <th class="">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data_slide as $key => $value) {?>
                            <tr>
                                <td><?php echo $value['slide_title']?></td>
                                <td><?php echo $value['slide_description']?></td>
                                <td style="text-align: center"><img width="250" height="130" src="<?php echo $value['slide_image']?>" /></td>
                                <td><?php echo $value['button_link']?></td>
                                <td class="form-group col-2">
                                    <a href="<?php echo base_url()?>admin/Slide/edit_slide" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                </td>
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