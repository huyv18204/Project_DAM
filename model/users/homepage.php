<?php

function select_all_sp()
{
    $sql = "SELECT * FROM sanpham where 1 order by id_sanpham desc limit 0,8";
    $listsp = pdo_query($sql);
    return $listsp;
}

function select_macbookair_sp()
{
    $sql = "SELECT * FROM sanpham where id_danhmuc = 1 order by id_sanpham desc limit 0,8";
    $listsp = pdo_query($sql);
    return $listsp;
}

function select_macbookpro_sp()
{
    $sql = "SELECT * FROM sanpham where id_danhmuc = 2 order by id_sanpham desc limit 0,8";
    $listsp = pdo_query($sql);
    return $listsp;
}

function select_imac_sp()
{
    $sql = "SELECT * FROM sanpham where id_danhmuc = 3 order by id_sanpham desc limit 0,8";
    $listsp = pdo_query($sql);
    return $listsp;
}

function select_one_sanpham($id)
{
    $sql = "select * from sanpham where id_sanpham = '$id'";
    $list = pdo_query_one($sql);
    return $list;
}

function select_sp_samekind($id, $id_danhmuc)
{
    $sql = "select * from sanpham where id_danhmuc = '$id_danhmuc' and id_sanpham != '$id'";
    $list = pdo_query($sql);
    return $list;
}

function select_sp_by_dm($id)
{
    $sql = "select * from sanpham where id_danhmuc = '$id'";
    $list = pdo_query($sql);
    return $list;
}

function select_all_danhmuc()
{
    $sql = 'select * from danhmuc';
    $list = pdo_query($sql);
    return $list;
}

function search_sp($value)
{
    $sql = " SELECT * FROM sanpham WHERE ten_sanpham LIKE '%$value%'";
    $list = pdo_query($sql);
    return $list;
}

function select_decription($id)
{
    $sql = "select mo_ta from sanpham where id_sanpham = '$id'";
    $list = pdo_query_one($sql);
    return $list;
}

?>