<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrungOishii Restaurant - Administrator</title>

    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/bootstrap-table.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="<?php echo base_url() ?>js/lumino.glyphs.js"></script>
    <script src="<?php echo base_url() ?>ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url() ?>ckeditor/ckfinder/ckfinder.js"></script>
    <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <?php
    if (!$this->session->has_userdata('user_email')) {
        redirect('admin/Login', 'refresh');
    }
    ?>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>TrungOishii</span> Admin</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                                <use xlink:href="#stroked-male-user"></use>
                            </svg> <?php echo $this->session->userdata('user_name'); ?>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><svg class="glyph stroked male-user">
                                        <use xlink:href="#stroked-male-user"></use>
                                    </svg> Hồ sơ</a></li>
                            <li><a href="<?php echo base_url() ?>admin/Login/logout"><svg class="glyph stroked cancel">
                                        <use xlink:href="#stroked-cancel"></use>
                                    </svg> Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div><!-- /.container-fluid -->
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <li class="<?php if ($subview == 'admin/admin') echo "active" ?>"><a href="<?php echo base_url() ?>admin/Admin"><svg class="glyph stroked dashboard-dial">
                        <use xlink:href="#stroked-dashboard-dial"></use>
                    </svg> Dashboard</a></li>
            <li class="<?php if ($this->session->userdata('user_access') == 2) {
                            echo "hidden";
                        } ?> <?php if ($subview == 'admin/user') echo "active" ?>"><a href="<?php echo base_url() ?>admin/User"><svg class="glyph stroked male user ">
                        <use xlink:href="#stroked-male-user" /></svg>Quản lý thành viên</a></li>
            <li class="<?php if ($subview == 'admin/category') echo "active" ?>"><a href="<?php echo base_url() ?>admin/Category"><svg class="glyph stroked open folder">
                        <use xlink:href="#stroked-open-folder" /></svg>Quản lý danh mục Food</a></li>
            <li class="<?php if ($subview == 'admin/dish') echo "active" ?>"><a href="<?php echo base_url() ?>admin/Dish/page/1"><svg class="glyph stroked bag">
                        <use xlink:href="#stroked-bag"></use>
                    </svg>Quản lý Food</a></li>
            <li class="<?php if ($subview == 'admin/blog_category') echo "active" ?>"><a href="<?php echo base_url() ?>admin/Blog"><svg class="glyph stroked open folder">
                        <use xlink:href="#stroked-open-folder" /></svg>Quản lý danh mục Blog</a></li>
            <li class="<?php if ($subview == 'admin/news') echo "active" ?>"><a href="<?php echo base_url() ?>admin/Blog/news"><svg class="glyph stroked open folder">
                        <use xlink:href="#stroked-open-folder" /></svg>Quản lý Blog</a></li>

            <li class="<?php if ($subview == 'admin/slide') echo "active" ?>"><a href="<?php echo base_url() ?>admin/Slide"><svg class="glyph stroked open folder">
                        <use xlink:href="#stroked-open-folder" /></svg>Quản lý Slide</a></li>
            <li class="<?php if ($subview == 'admin/header') echo "active" ?>"><a href="<?php echo base_url() ?>admin/Slide/header"><svg class="glyph stroked open folder">
                        <use xlink:href="#stroked-open-folder" /></svg>Quản lý Header</a></li>
            <li class="<?php if ($subview == 'admin/bill') echo "active" ?>"><a href="<?php echo base_url() ?>admin/Bill"><svg class="glyph stroked open folder">
                        <use xlink:href="#stroked-open-folder" /></svg>Quản lý Đơn hàng</a></li>
        </ul>
    </div>
    <!--/.sidebar-->
    <script src="<?php echo base_url() ?>js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-table.js"></script>
    <?php $this->load->view($subview); ?>

</body>

</html>