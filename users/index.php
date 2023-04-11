<?php
    session_start();
    ob_start();
    include_once '../users/header.php';
    require_once '../model/user.php';
    require_once '../model/brand.php';
    require_once '../model/cart.php';
    require_once '../model/comment.php';
    require_once '../model/product.php';
    require_once '../controller/controller.php';
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
            
            case 'addgiohang':
                
                if(!isset($_SESSION['user'])){
                    echo '<script>alert("Đăng nhập để tiếp tục");window.location="login.php";</script>';    
                }
                else{
                    if (!isset($_SESSION['cart'])) {
                        $_SESSION['cart'] = array();
                        $cart_id = cart_insert($_SESSION['user']['user_id']);
                    }
                    if(isset($_POST['add_to_cart'])){
                        $product_id = $_POST['product_id'];
                        $quantity = $_POST['quantity'];
                        $date = date('Y-m-d');
                        $cart_id = get_id_cart_by_user_id($_SESSION['user']['user_id']);
                        if(isset($_SESSION['cart'][$product_id])){
                            $_SESSION['cart'][$product_id]['quantity'] +=$quantity;
                        }
                        else{
                            $product = getProductId($product_id);
                            $_SESSION['cart'][$product_id] =[
                                'product_name' => $product['product_name'],
                                'price' => $product['price'],
                                'image' => $product['image'],
                                'cart_id' => $cart_id,
                                'quantity' => $quantity
                            ];
                            createCartDetail($cart_id,$product_id,$quantity,$date);
                        }
                    }
                }
                include_once '../users/giohang/giohang.php';
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
                $brands = getAllbrands();
                if(isset($_POST['btn-search'])){
                    $products = product_select_keyword($_POST['key-search']);
                }else if(isset($_GET['id_brand'])&&($_GET['id_brand'])){
                    $products = get_pro_by_brand($_GET['id_brand']);
                }else{
                    $products = getAllproduct();
                }
                include_once '../users/sanpham/sanpham.php';
                include_once '../users/sanpham/brand_sp.php';
                break;
            case 'chitietsp':
                if(isset($_GET['id_product'])){
                    $product = getProductId($_GET['id_product']);
                }
                renderUS('sanpham/sanphamct',['product'=>$product]);
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