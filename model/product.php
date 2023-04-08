<?php
    include_once 'pdo.php';
    function getAllproduct()
    {
        $sql = 'select*from product';
        return pdo_query($sql);
    }
    function getProductId($id)
    {
        $sql = 'select * from product where product_id = '.$id;
        return pdo_query_one($sql);
    }
    function get8productnew(){
        $sql = 'SELECT * FROM product ORDER BY create_date DESC LIMIT 8';
        return pdo_query($sql);
    }
    function create_product($product_name,$image,$desc,$detail,$create_date,$quantity,$price,$brand_id)
    {
        $sql = "insert into product(product_name,image,description,detail,create_date,quantity,price,brand_id) value (?,?,?,?,?,?,?,?)";
        pdo_execute($sql,$product_name,$image,$desc,$detail,$create_date,$quantity,$price,$brand_id);
    }
    function update_product($product_name,$image,$desc,$detail,$update_date,$quantity,$price,$brand_id,$product_id){
        $sql = "update product set product_name = ? , image = ? , description = ? , detail = ? , update_date = ? , quantity = ? , price = ?, brand_id = ? where product_id = ?";
        pdo_execute($sql, $product_name, $image, $desc, $detail, $update_date, $quantity, $price, $brand_id,$product_id);
    }
    function delete_product($ma_loai)
    {
        $sql = "delete from product where product_id = ?";
        if (is_array($ma_loai)) {
            foreach ($ma_loai as $ma) {
                pdo_execute($sql, $ma);
            }
        } else
            pdo_execute($sql, $ma_loai);
    }
    function delete_productbyIdbrand($ma_loai)
    {
        $sql = "delete from product where brand_id = ?";
        if (is_array($ma_loai)) {
            foreach ($ma_loai as $ma) {
                pdo_execute($sql, $ma);
            }
        } else
            pdo_execute($sql, $ma_loai);
    }
    function product_select_keyword($keyword)
    {
        $sql = "select * from product hh  JOIN brand lo ON lo.brand_id=hh.brand_id  WHERE product_name LIKE ? OR brand_name LIKE ?";
        return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
    }

?>