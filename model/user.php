<?php
    require_once '../model/database.php';
function check_login($ma_kh, $pass)
{
    $sql = "select *from user where user_name = ? and password = ?";
    return pdo_query_one($sql, $ma_kh, $pass);
}
function getalluser(){
    $sql ="select * from user";
    return pdo_query($sql);
}


?>