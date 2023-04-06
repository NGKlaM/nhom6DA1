<?php ?>
<?php //?>
<?php
    include 'header.php';
    include 'sidebar.php';  
    include_once '../controller/brandController.php';
    include_once '../controller/productController.php';
    if(isset($_GET['action'])){
        $url = $_GET['action'];
        switch($url){
            case 'sanpham':
                indexproduct();
                break;
            case 'createproduct':
                include_once '../admin/san_pham/add_sp.php';
                break;
            case 'danhmuc':
                indexbrand();
                break;
            case 'createbrand':
                include_once '../admin/danh_muc/add_brand.php';
                break;
            case 'deletebrand':
                if(isset($_GET['id_brand'])){
                    deletebrand($_GET['id_brand']);
                }
                break;
            case 'donhang':
                include "../admin/don_hang/don_hang.php";
                break;
            case 'comment':
                include "../admin/binh_luan/binh_luan.php";
                break;
            case 'thongke':
                include "../admin/thong_ke/thong_ke.php";
                break;
            case 'user':
                include "../admin/user/user.php";
                break;
            default:
                include "../view/home/dangnhap.php";
                break;
        }
    }else 
        include "../admin/san_pham/san_pham.php";
?>
<?php include 'footer.php'?>