<?php
    include 'header.php';
    include 'sidebar.php'; 
    include 'nav.php'; 
    include_once '../controller/brandController.php';
    include_once '../controller/productController.php';
    include_once '../controller/userController.php';
    include_once '../model/product.php';
    if(isset($_GET['action'])){
        $url = $_GET['action'];
        switch($url){
            case 'sanpham':
                indexproduct();
                break;
            case 'createproduct':
                createproduct();
                include_once '../admin/san_pham/add_sp.php';
                break;
            case 'updateproduct':
                if (isset($_GET['id_pro']) && $_GET['id_pro']) {
                    $pro = getProductId($_GET['id_pro']);
                    extract($pro);
                }
                updateproduct();
                include_once '../admin/san_pham/update_sp.php';
                break;
            case 'deleteproduct';
                deleteproduct();
                break;
            case 'danhmuc':
                indexbrand();
                break;
            case 'createbrand':
                createbrand();
                include_once '../admin/danh_muc/add_brand.php';
                break;
            case 'deletebrand':
                deletebrand();
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
                show_user();
                break;
            default:
                include "../view/home/dangnhap.php";
                break;
        }
    }else 
        indexproduct();
?>
<?php include 'footer.php'?>