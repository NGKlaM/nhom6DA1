<?php
    session_start();
    include_once '../model/product.php';
    include_once '../model/brand.php';
    include_once '../model/user.php';
    include_once '../user/header.php';
    if(isset($_GET['action'])&& $_GET['action'] != ""){
        $act = $_GET['action'];
        switch($act){
            case 'dangnhap':
                if(isset($_POST['login']) && $_POST['login']){
                    $user_name = $_POST['user_name'];
                    $pass = $_POST['pass'];
                    $check = check_login($user_name,$pass);
                    if(is_array($check)){
                        $_SESSION['user'] = $check;
                        echo '<script>alert("Đăng nhập thành công!");window.location="index.php?action=trangchu";</script>';                        
                    }else{
                        echo '<script>alert("Tài khoản sai hoặc không tồn tại!"); window.location="../user/dangnhap.php";</script>';
                    }
                }else{
                    header('location: ../user/dangnhap.php');
                }
                break;
            case 'logout':
                session_unset();
                header('location: index.php');
                break;
            case 'trangchu':
                include_once '../user/banner.php';
                include_once '../user/products.php';
                break;
            case 'gioithieu':
                include_once '../user/banner.php';
                include_once '../user/gioithieu.php';
                break;
            case 'lienhe';
                include_once '../user/banner.php';  
                include_once '../user/lienhe.php';
                break;
        }
    }
    else{
        include_once '../user/products.php';
    }
    include_once '../user/footer.php';


?>