<?php
    include_once '../model/product.php';
function indexproduct()
{
    $products = getAllproduct();
    include_once '../admin/san_pham/list.php';
}

function createproduct(){
    if(isset($_POST['btn_add_pro'])){
        $pro_name = $_POST['pro_name'];
        $images = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],'../public/images/'.$images);
        $price = $_POST['price'];
        $brand=$_POST['brand'];
        $des = $_POST['des'];
        $detail = $_POST['detail'];
        $create_date= date('Y-m-d');
        $quantity = $_POST['quantity'];
        try {
            create_product($pro_name, $images, $des, $detail, $create_date, $quantity, $price, $brand);
            echo "<script>alert('Đã thêm thành công!')</script>";
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
function updateproduct(){
    if(isset($_POST['btn_update_pro'])){
        $product_id = $_GET['id_pro'];
        $pro_name = $_POST['pro_name'];
        if($_FILES['img']['size'] == 0){
            $img = getProductId($_GET['id_pro'])['image'];
        }
        else{
            $img = $_FILES['img']['name'];
            move_uploaded_file($_FILES['img']['tmp_name'],'../public/images/'.$img);
        }
        $price = $_POST['price'];
        $brand = $_POST['brand'];
        $des = $_POST['des'];
        $detail = $_POST['detail'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $update_date = date('Y-m-d');
        $quantity = $_POST['quantity'];
        update_product($pro_name,$img,$des,$detail,$update_date,$quantity,$price,$brand,$product_id);
    }
}
function deleteproduct(){
    if(isset($_GET['id_pro'])&&$_GET['id_pro']){
        delete_product($_GET['id_pro']);
        indexproduct();
        echo "<script>alert('Đã xóa thành công!')</script>";
    }
}


?>