<?php include 'header.php'?>
<?php include 'sidebar.php'?>
<?php
    if(isset($_GET['url'])){
        $url = $_GET['url'];
        switch($url){
            case 'sanpham':
                include "../admin/san_pham/san_pham.php";
                break;
            case 'danhmuc':
                include "../admin/danh_muc/danh_muc.php";
                break;
        }
    }

?>
<?php include 'footer.php'?>