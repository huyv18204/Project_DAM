<?php
function insert_comment($content, $id_user, $id_pro, $date_comment)
{
    $sql = "insert into comment values (NULL,'$content','$id_user','$id_pro','$date_comment')";
    pdo_execute($sql);
}

function coutn_comment($id)
{
    $sql = "SELECT COUNT(*) FROM comment where id_pro = '$id'";
    $list = pdo_query_value($sql);
    return $list;
}

function select_all_comment()
{
    $sql = "select id, content, comment.id_user,user.id_user,id_pro,date_comment,id_sanpham,ten_sanpham,name from user inner join comment on comment.id_user = user.id_user inner join sanpham on id_pro = id_sanpham order by id desc ";
    $list = pdo_query($sql);
    return $list;
}

function del_comment($id)
{
    $sql = " delete from comment where id = '$id'";
    pdo_execute($sql);
}

function select_user_comment($id)
{
    $sql = "select  id, content, date_comment, account ,pass ,email, phone ,address ,role ,user.id_user, comment.id_user, name, id_pro from comment inner join user on user.id_user = comment.id_user where id_pro = '$id'";
    $list = pdo_query($sql);
    return $list;
}

?>