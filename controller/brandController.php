<?php
include '../model/brand.php';

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
        $mes = "Thêm thành công";
    }
}
function deletebrand($id_brand){
    delete_brand($id_brand);
    indexbrand();
}
