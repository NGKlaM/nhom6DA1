<?php
    include_once '../model/product.php';
function indexproduct()
{
    $products = getAllproduct();
    include_once '../admin/san_pham/list.php';
}
function createproduct(){
    if(isset($_POST['btn_add_pro'])){
        
    }
}


?>