<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="../public/img/logo.jpg" type="image/png" />
    <title>Zipphone</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/themify-icons.css">
    <link rel="stylesheet" href="../public/css/flaticon.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/responsive.css">
</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="float-left">
                            <p>Phone: +84 374659924</p>
                            <p>email: zipphonemobile@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="float-right">
                            <div class="right_side">
                                <?php
                                if (isset($_SESSION['user'])) :
                                    extract($_SESSION['user']);
                                ?>
                                    <li><a href="#">
                                            <?php
                                            if ($role == 1) {
                                                echo 'Tới trang quản trị';
                                            }
                                            ?>
                                        </a>
                                    </li>
                                    <li><a href="#">Thông tin tài khoản</a></li>

                                    <li><a href="index.php?action=logout">Đăng xuất</a></li>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light w-100">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php">
                        <img src="../public/img/logo.jpg" style="height: 60px;" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                        <div class="row w-100 mr-0">
                            <div class="col-lg-7 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?action=sanpham">Sản Phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?action=gioithieu">giới thiệu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?action=lienhe">liên hệ</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-5 pr-0">
                                <ul class="nav navbar-nav navbar-right right_nav pull-right">


                                    <li class="nav-item">
                                        <a href="index.php?action=giohang" class="icons">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">

                                        <?php
                                        if (isset($_SESSION['user'])) {
                                        ?>
                                            <a href="#"><img class="icons" src="../public/img/user/<?= $_SESSION['user']['image'] ?>" alt="" style="width: 30px; height:30px; border-radius: 100%; margin-right: -15px;"></a>
                                            <a href="#" class="icons"><?= $_SESSION['user']['user_name'] ?></a>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="login.php" class="icons">
                                                <i class="ti-user" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================Header Menu Area =================-->