<?php
    include_once '../model/user.php';
    function show_user(){
        $user = getalluser();
        include_once '../admin/user/list.php';
    }

?>