<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="icon" type="image/x-icon" href="../public/images/logo.jpg">
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="public/css/dangnhap.css">
    <link rel="stylesheet" href="public/css/dangky.css">
    <link rel="icon" type="image/x-icon" href="../public/images/logo.jpg">
</head>

<body>
    <div class="header">
        <img class="header--logo" src="../public/images/logo.jpg" alt="">
        <form>
            <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." style="padding: 15px;" />
        </form>
        <p class="text-animation">
            Hotline hỗ trợ<br>
            0247896568-0989386588<br>
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user'])
            ?>
                <button><a href="#">Chào <?= $user_name ?></a></button>
                <button><a href="index.php?action=logout">Đăng xuất</a></button>
            <?php
            } else {
            ?>
                <button><a href="../user/dangnhap.php">Đăng nhập</a></button>
            <?php
            }
            ?>
        </p>
    </div>
    <div class="nav--menu">
        <ul>
            <li><a href="./index.php?action=trangchu">TRANG CHỦ</a></li>
            <li><a href="./index.php?action=gioithieu">GIỚI THIỆU</a></li>
            <li><a href="./index.php?action=lienhe">HỎI ĐÁP & LIÊN HỆ</a></li>
        </ul>
    </div>