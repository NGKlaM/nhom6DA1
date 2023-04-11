<?php
    include_once 'pdo.php';

function cart_insert($user_id)
{
    $sql = "INSERT INTO cart(user_id) VALUE(?)";
    pdo_execute($sql, $user_id);
    $sql2 = "select max(cart_id) from cart";
    $cart_id = pdo_query_value($sql2);
    return $cart_id;
}
function get_id_cart_by_user_id($user_id){
    $sql = "select cart_id from cart where user_id = ?";
    return pdo_query_value($sql,$user_id);
}
function getCartDetailId($cart_id,$product_id){
    $sql = "select cart_detail_id from cart_detail where cart_id = ? and product_id = ?";
    return pdo_query_value($sql,$cart_id,$product_id);
}
function createCartDetail($cart_id,$product_id,$quantity,$date){
    $sql = "insert into cart_detail(cart_id,product_id,quantity,datetime) value(?,?,?,?)";
    pdo_execute($sql, $cart_id, $product_id, $quantity, $date);
}
function updateCartDetail($cart_detail_id,$quantity){
    $sql = "update cart_detail set quantity= ? where cart_detail_id = ?";
    pdo_execute($sql,$quantity,$cart_detail_id);
}
?>