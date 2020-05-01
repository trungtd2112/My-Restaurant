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
            <li class="active">Danh sách sản phẩm</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="<?php echo base_url() ?>admin/Dish/add_dish" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table" id="table2excel">

                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="name" data-sortable="true">Tên sản phẩm</th>
                                <th data-field="price" data-sortable="true">Giá</th>
                                <th class="noExl">Ảnh sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Danh mục</th>
                                <th>Ngày thêm</th>
                                <th class="noExl">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dish_data as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $value['dish_id'] ?></td>
                                    <td><?php echo $value['dish_name'] ?></td>
                                    <td><?php echo $value['dish_price'] ?>$</td>
                                    <td style="text-align: center"><img width="180" height="180" src="<?php echo $value['dish_image'] ?>" /></td>
                                    <?php if ($value['dish_status'] == 1) { ?>
                                        <td><span class="label label-success">Món mới</span></td>
                                    <?php } else { ?>
                                        <td><span class="label label-warning">Món cũ</span></td>
                                    <?php } ?>
                                    <td><?php echo $value['dc_name'] ?></td>
                                    <td><?php echo date('d/m/Y', $value['dish_date_created']); ?></td>
                                    <td class="form-group">
                                        <a href="<?php echo base_url() ?>admin/Dish/edit_dish/<?php echo $value['dish_id'] ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a href="<?php echo base_url() ?>admin/Dish/deleteDish/<?php echo $value['dish_id'] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example ">
                        <ul class="pagination text-center">
                            <?php if ($page_th > 1) { ?>
                                <li class="page-item"><a class="page-link" href="<?php echo base_url() ?>admin/Dish/page/<?php echo $page_th - 1; ?>">&laquo;</a></li>
                            <?php } ?>
                            <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                                <li class="page-item <?php if ($i == $page_th) echo "active" ?>"><a class="page-link" href="<?php echo base_url() ?>admin/Dish/page/<?php echo $i; ?>"><?php echo $i ?></a></li>
                            <?php }
                            if ($page_th < $total_page) { ?>
                                <li class="page-item"><a class="page-link" href="<?php echo base_url() ?>admin/Dish/page/<?php echo $page_th + 1; ?>">&raquo;</a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                    <div class="btn btn-warning export_btn">Export to excel</div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->

<script src="<?php echo base_url() ?>js/jquerytable2excel.js" ></script>
<script>
    $(function() {
        $(".export_btn").click(function() {
            $("#table2excel").table2excel({
                exclude: ".noExl",
                name: "Excel Document Name"
            });
        });
    });
</script>