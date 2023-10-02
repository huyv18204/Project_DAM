<?php

function select_all_sanpham()
{
    $sql = 'select id_sanpham, ten_sanpham, gia, anh_sanpham, mo_ta, luot_xem, sanpham.id_danhmuc,danhmuc.id_danhmuc, ten_danhmuc from sanpham inner join danhmuc on sanpham.id_danhmuc = danhmuc.id_danhmuc order by id_sanpham desc ';
    $list = pdo_query($sql);
    return $list;
}

function insert_sanpham($name_product, $price, $img, $id_category, $decription)
{
    $sql = "insert into sanpham( ten_sanpham, gia, anh_sanpham, mo_ta, id_danhmuc) values ('$name_product','$price','$img','$decription','$id_category')";
    pdo_execute($sql);
}

function select_one_sanpham($id)
{
    $sql = "select * from sanpham where id_sanpham = '$id'";
    $list = pdo_query_one($sql);
    return $list;
}

function update_sanpham($name_product, $price, $img, $id_category, $decription, $id)
{
    if ($img != "") {
        $sql = "update sanpham set ten_sanpham = '$name_product',gia = '$price',anh_sanpham = '$img',mo_ta = '$decription',id_danhmuc = '$id_category' where id_sanpham = '$id'";
    } else {
        $sql = "update sanpham set ten_sanpham = '$name_product',gia = '$price',mo_ta = '$decription',id_danhmuc = '$id_category' where id_sanpham = '$id'";
    }
    pdo_execute($sql);
}

function del_sanpham($id_sanpham)
{
    $sql = " delete from sanpham where id_sanpham = '$id_sanpham'";
    pdo_execute($sql);
}