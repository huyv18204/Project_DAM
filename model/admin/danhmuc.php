<?php
function insert_danhmuc($name_category)
{
    $sql = "insert into danhmuc values (NULL,'$name_category')";
    pdo_execute($sql);
}

function del_danhmuc($id_danhmuc)
{
    $sql = " delete from danhmuc where id_danhmuc = '$id_danhmuc'";
    pdo_execute($sql);
}

function select_all_danhmuc()
{
    $sql = 'select * from danhmuc';
    $list = pdo_query($sql);
    return $list;
}

function select_one_danhmuc($id)
{
    $sql = "select * from danhmuc where id_danhmuc = '$id'";
    $list = pdo_query_one($sql);
    return $list;
}

function update_danhmuc($name_category, $id)
{
    $sql = "update danhmuc set ten_danhmuc = '$name_category' where id_danhmuc = '$id'";
    pdo_execute($sql);
}

?>