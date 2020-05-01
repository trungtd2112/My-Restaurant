<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách hóa đơn</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách hóa đơn</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table">

                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="name" data-sortable="true">Tên KH</th>
                                <th data-field="price" data-sortable="true">Email</th>
                                <th>Số ĐT</th>
                                <th>Địa chỉ</th>
                                <th>Ngày tạo</th>
                                <th>Tổng tiền</th>
                                <th>Xử lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bill_data as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $value['bill_id']?></td>
                                    <td><?php echo $value['customer_name'] ?></td>
                                    <td><?php echo $value['customer_email'] ?></td>
                                    <td><?php echo $value['customer_phone'] ?></td>
                                    <td><?php echo $value['customer_address'] ?></td>
                                    <td><?php echo date('d/m/y', $value['bill_date_created']); ?></td>
                                    <td><?php echo $value['total_price'] ?></td>
                                    <td class="form-group">
                                        <a href="<?php echo base_url()?>admin/Bill/bill_details/<?php echo $value['bill_id']?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil">Details</i></a>
                                        <?php if($value['bill_status'] == 0){?>
                                        <a href="<?php echo base_url()?>admin/Bill/done/<?php echo $value['bill_id']?>" class="btn btn-warning"><i class="glyphicon glyphicon-hourglass"></i></a>
                                        <?php }else{?>
                                            <a href="<?php echo base_url()?>admin/Bill/incomplete/<?php echo $value['bill_id']?>" class="btn btn-success"><i class="glyphicon glyphicon-check"></i></a>
                                        <?php }?>
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