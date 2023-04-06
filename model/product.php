<?php
    include_once 'pdo.php';
    function getAllproduct()
    {
        $sql = 'select*from product';
        return pdo_query($sql);
    }
    function getProductId($id)
    {
        $sql = 'select * from brand where product_id = ' . $id;
        return pdo_query_one($sql);
    }
    function create_product($product_name,$image,$desc,$detail,$create_date,$quantity,$price,$brand_id)
    {
        $sql = "insert into product(product_name,image,description,detail,create_date,quantity,price,brand_id) value (null,?,?,?,?,?,null,?,?,?)";
        pdo_execute($sql,$product_name,$image,$desc,$detail,$create_date,$quantity,$price,$brand_id);
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

?>