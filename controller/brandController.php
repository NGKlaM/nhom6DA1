<?php
include_once '../model/brand.php';
include_once '../model/product.php';
function indexbrand()
{
    $brands = getAllbrands();
    include_once '../admin/danh_muc/list.php';
}
function showbrand(){
    $brands = getAllbrands();
    return $brands;
}
function createbrand()
{
    if (isset($_POST['btn_brand_create'])) {

        $brand_name = $_POST['brand_name'];
        create_brand($brand_name);
        echo "<script>alert('Thêm thành công!')</script>";
    }
}
function deletebrand(){
    if(isset($_GET['id_brand'])&&$_GET['id_brand']){
        delete_productbyIdbrand($_GET['id_brand']);
        delete_brand($_GET['id_brand']);
        indexbrand();
        echo "<script>alert('Đã xóa thành công!')</script>";
    }
}
