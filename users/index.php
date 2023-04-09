<?php
    session_start();
    ob_start();
    include_once '../users/header.php';
    require_once '../model/user.php';
    require_once '../model/brand.php';
    require_once '../model/cart.php';
    require_once '../model/comment.php';
    require_once '../model/product.php';
    if(isset($_GET['action'])&& ($_GET['action']!='')){
        $act = $_GET['action'];
        switch($act){
            case 'login':
                if(isset($_POST['login']) && $_POST['login']){
                    $user_name = $_POST['user_name'];
                    $pass = $_POST['pass'];
                    $user = check_login($user_name,$pass);
                    if(is_array($user)){
                        $_SESSION['user']= $user;
                        echo '<script>alert("Đăng nhập thành công!");window.location="index.php";</script>';    
                    }
                    else{
                        echo '<script>alert("Tài khoản sai hoặc không tồn tại!"); window.location="login.php";</script>';
                    }
                }
                break;
            case 'logout':
                session_destroy();
                header('Location: index.php');
                break;
            case 'register':
                if(isset($_POST['btn-register'])&&$_POST['btn-register']){
                    $user_name = $_POST['user_name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];
                    $img = 'user.png';
                    if($pass1 == $pass2){
                        register($user_name,$img,$email,$phone,$pass2);
                        echo '<script>alert("Đăng kí thành công! Đến trang đăng nhập");window.location="login.php";</script>';    
                    }
                    else{
                        echo '<script>alert("Mật khẩu không trùng khớp"); window.location="register.php";</script>';
                    }
                }
                break;
            case 'giohang':
                include_once '../users/giohang/giohang.php';
                break;
            case 'thanhtoan':
                include_once '../users/giohang/thanhtoan.php';
                break;
            case 'lienhe':
                include_once '../users/lienhe.php';
                break;
            case 'sanpham':
                include_once '../users/sanpham/sanpham.php';
                break;
            case 'gioithieu':
                include_once '../users/gioithieu.php';
                break;
            default:
                include_once '../users/content.php';
        }
    }
    else{
    include_once '../users/content.php';
    }
    include_once '../users/footer.php';
    ob_end_flush();
?>