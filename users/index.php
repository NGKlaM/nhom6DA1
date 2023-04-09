<?php
    session_start();
    include_once '../users/header.php';
    if(isset($_GET['action'])&& ($_GET['action']!='')){
        $act = $_GET['action'];
        switch($act){
            case 'lienhe':
                include_once '../users/lienhe.php';
                break;
            case 'gioithieu':
                include_once '../users/gioithieu.php';
                break;
            default:
                include_once '../users/content.php';
        }
    }
    else{
    include_once '../users/content.php';
    }
    include_once '../users/footer.php';


?>