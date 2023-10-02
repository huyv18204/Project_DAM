<?php
function select_statistical(){
    $sql = "SELECT danhmuc.ten_danhmuc, COUNT(sanpham.id_sanpham) AS count, MIN(sanpham.gia) AS min, MAX(sanpham.gia) AS max, AVG(sanpham.gia) AS avg
        FROM sanpham
        INNER JOIN danhmuc ON sanpham.id_danhmuc = danhmuc.id_danhmuc
    GROUP BY danhmuc.id_danhmuc, ten_danhmuc
        ORDER BY danhmuc.id_danhmuc DESC";

    $list = pdo_query($sql);
    return $list;
}

?>