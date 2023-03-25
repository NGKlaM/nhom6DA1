<?php
    include_once "pdo.php";
    function role_insert($role_name){
        $sql = "insert into role(role_name) value (?)";
        pdo_execute($sql);
    }
    function role_update($role_name){
        $sql = "update role set role_name= ?";
        pdo_execute($sql,$role_name);
    }
    function role_delete($role_id){
        $sql = "delete from role where role_id = ?";
        if (is_array($role_id)) {
            foreach($role as $id){
                pdo_execute($sql,$id);
            }
        }else
            pdo_execute($sql,$role_id);
    }
?>