<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách thành viên</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách thành viên</h1>
        </div>
    </div>
    <!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="<?php echo base_url()?>admin/User/add_user" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm thành viên
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table">

                        <thead>
                            <tr>
                                <th data-field="name" data-sortable="true">Họ & Tên</th>
                                <th data-field="price" data-sortable="true">Email</th>
                                <th>Ngày tạo</th>
                                <th>Quyền</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($user_data as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $value['user_name'] ?></td>
                                    <td><?php echo $value['user_email'] ?></td>
                                    <td><?php echo date('d/m/y',$value['user_date_created']); ?></td>
                                    <?php if ($value['user_access'] == 1) { ?>
                                        <td><span class="label label-danger">Admin</span></td>
                                    <?php } else { ?>
                                        <td><span class="label label-warning">Member</span></td>
                                    <?php } ?>
                                    <?php $user_email = explode('@', $value['user_email']); ?>
                                    <td class="form-group">
                                        <a href="<?php echo base_url()?>admin/User/edit_user/<?php echo $user_email[0] ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a href="<?php echo base_url()?>admin/User/deleteUser/<?php echo $user_email[0] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
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