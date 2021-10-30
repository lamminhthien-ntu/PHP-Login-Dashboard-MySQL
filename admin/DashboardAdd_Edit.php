<!DOCTYPE html>
<!-- saved from url=(0047)http://localhost/shopbanhanglaravel/all-product -->
<html>
<?php
include('head.php');
?>

<body style="">
<section id="container">
    <!--header start-->
    <?php include ('header.php') ?>
    <!--header end-->
    <!--sidebar start-->
    <?php include ('sidebar.php'); ?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="http://localhost/shopbanhanglaravel/index.html" class="logo">
                    Admin



                    <!-- notification dropdown end -->

                    <!--  notification end -->
                </a></div><a href="http://localhost/shopbanhanglaravel/index.html" class="logo">
            </a><div class="top-nav clearfix"><a href="http://localhost/shopbanhanglaravel/index.html" class="logo">
                    <!--search & user info start-->
                </a><ul class="nav pull-right top-menu"><a href="http://localhost/shopbanhanglaravel/index.html" class="logo">
                        <li>
                            <input type="text" class="form-control search" placeholder=" Search">
                        </li>
                        <!-- user login dropdown start-->
                        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="http://localhost/shopbanhanglaravel/all-product#">
                                <img alt="" src="DashboardCSS/2.png">
                                <span class="username">
								Lâm Minh Thiện
							</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <li><a href="http://localhost/shopbanhanglaravel/all-product#"><i class=" fa fa-suitcase"></i>Thông tin</a></li>
                                <li><a href="http://localhost/shopbanhanglaravel/all-product#"><i class="fa fa-cog"></i> Cài đặt</a></li>
                                <li><a href="http://localhost/shopbanhanglaravel/logout"><i class="fa fa-key"></i> Đăng xuất</a></li>
                            </ul>
                        </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation" tabindex="5000" style="overflow: hidden; outline: none;">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="http://localhost/shopbanhanglaravel/dashboard">
                                <i class="fa fa-dashboard"></i>
                                <span>Tổng quan</span>
                            </a>
                        </li>

                        <li class="sub-menu dcjq-parent-li">
                            <a href="javascript:;" class="dcjq-parent">
                                <i class="fa fa-book"></i>
                                <span>Danh mục sản phẩm</span>
                                <span class="dcjq-icon"></span></a>
                            <ul class="sub" style="display: none;">
                                <li><a href="http://localhost/shopbanhanglaravel/add-category-product">Thêm danh mục sản phẩm</a></li>
                                <li><a href="http://localhost/shopbanhanglaravel/all-category-product">Liệt kê danh mục sản phẩm</a></li>

                            </ul>
                        </li>

                        <li class="sub-menu dcjq-parent-li">
                            <a href="javascript:;" class="dcjq-parent">
                                <i class="fa fa-book"></i>
                                <span>Sản phẩm </span>
                                <span class="dcjq-icon"></span></a>
                            <ul class="sub" style="display: none;">
                                <li><a href="http://localhost/shopbanhanglaravel/add-product">Thêm Sản phẩm </a></li>
                                <li><a href="http://localhost/shopbanhanglaravel/all-product">Liệt kê Sản phẩm </a></li>

                            </ul>
                        </li>

                        <li class="sub-menu dcjq-parent-li">
                            <a href="javascript:;" class="dcjq-parent">
                                <i class="fa fa-book"></i>
                                <span>Thương hiệu </span>
                                <span class="dcjq-icon"></span></a>
                            <ul class="sub" style="display: none;">
                                <li><a href="http://localhost/shopbanhanglaravel/add-brand-product">Thêm thương hiệu </a></li>
                                <li><a href="http://localhost/shopbanhanglaravel/all-brand-product">Liệt kê thương hiệu </a></li>

                            </ul>
                        </li>


                    </ul>
                </div>
                <!-- sidebar menu end-->
                <div id="ascrail2000" class="nicescroll-rails" style="width: 3px; z-index: auto; cursor: default; position: absolute; top: 0px; left: 237px; height: 763px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(139, 92, 126); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 3px; z-index: auto; top: 760px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;"><div style="position: relative; top: 0px; height: 3px; width: 0px; background-color: rgb(139, 92, 126); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div></div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Thêm danh mục sản phẩm
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form role="form" action="http://localhost/shopbanhanglaravel/save-category-product" method="post">
                                        <input type="hidden" name="_token" value="Jhgb3Votc0dOJtUbowc7ojPIEed5hNE8QuJszGBJ">
                                        <div class="form-group">
                                            <label>Tên danh mục</label>
                                            <input type="text" name="category_product_name" class="form-control" placeholder="Tên danh mục">
                                        </div>
                                        <div class="form-group">
                                            <label>Mô tả danh mục</label>
                                            <textarea class="form-control" style="resize: none;" rows="5" name="category_product_desc" placeholder="Mô tả danh mục" type="text"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Hiển thị</label>
                                            <select class="form-control input-sm m-bot15" name="category_product_status">
                                                <option value="0">Hiện</option>
                                                <option value="1">Ẩn</option>
                                            </select>
                                        </div>

                                        <button type="add_category_product" class="btn btn-info">Thêm danh mục</button>
                                    </form>
                                </div>

                            </div>
                        </section>

                    </div>

                </div>

            </section>
            <!-- footer -->

            <div class="footer">

                <div class="wthree-copyright">
                    <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
                </div>
            </div>
            <!-- / footer -->
        </section>
        <!--main content end-->
    </section>
    <!--main content end-->
</section>
<?php
include ('script.php');
?>



</body>
</html>