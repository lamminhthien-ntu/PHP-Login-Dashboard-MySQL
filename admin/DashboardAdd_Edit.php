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
        <?php include('header.php') ?>
        <!--header end-->
        <!--sidebar start-->
        <?php include ('sidebar.php') ?>
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