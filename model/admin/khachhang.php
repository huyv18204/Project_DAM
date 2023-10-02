<?php
function select_all_user()
{
    $sql = "select * from user";
    $list = pdo_query($sql);
    return $list;
}

function update_kh($name, $account, $pass, $email, $phone, $address, $role, $id)
{
    $sql = "update user set name = '$name',account = '$account',pass = '$pass',email = '$email',phone = '$phone',address = '$address', role = '$role' where id_user = '$id'";
    pdo_execute($sql);
}

function select_one_user($id)
{
    $sql = "select * from user where id_user = '$id'";
    $list = pdo_query_one($sql);
    return $list;

}

function insert_user($name, $account, $pass, $email, $phone, $address, $role)
{
    $sql = "insert into user(account, pass, name , email, phone, address,role) values('$account', '$pass', '$name', '$email', '$phone', '$address', '$role')";
    pdo_execute($sql);
}

function del_user($id_user)
{
    $sql = " delete from user where id_user = '$id_user'";
    pdo_execute($sql);
}

?>
