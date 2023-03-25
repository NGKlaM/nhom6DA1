<?php
    include_once "pdo.php";
    function user_insert($user_name,$email,$phone_number,$address,$password){
        $sql = "insert into user(user_name,email,phone_number,address,password) value (?,?,?,?,?)";
        pdo_execute($sql,$user_name,$email,$phone_number,$address,$password);
    }
    function user_update($user_name,$email,$phone_number,$address,$password){
        $sql = "update user set user_name = ?, email = ?, phone_number = ?, address = ?, password = ? ";
        pdo_execute($sql,$user_name,$email,$phone_number,$address,$password);
    }
    function user_delete($user_id){
        $sql = "delete from user where user_id = ?";
        if (is_array($user_id)) {
            foreach($user_id as $id){
                pdo_execute($sql,$id);
            }
        }else
            pdo_execute($sql,$user_id);
    }
    function user_select_all(){
        $sql = "select * from user";
        return pdo_query($sql);
    }
    function user_select_by_id($user_id){
        $sql = "select * from user where user_id = ?";
        return pdo_query_one($sql,$user_id);
    }
?>
