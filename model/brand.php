<?php
    include_once 'pdo.php';
    function getAllbrands(){
        $sql = 'select*from brand';
        return pdo_query($sql);
    }
    function getBrandId($id){
        $sql = 'select * from brand where brand_id = '.$id;
        return pdo_query_one($sql);
    }
    function create_brand($ten_loai)
    {
        $sql = "insert into brand value (null,?)";
        pdo_execute($sql,$ten_loai);
    }
function delete_brand($ma_loai)
{
    $sql = "delete from brand where brand_id = ?";
    if (is_array($ma_loai)) {
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    } else
        pdo_execute($sql, $ma_loai);
}
?>