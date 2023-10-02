<?php

function insert_account($account, $pass, $email)
{
    $sql = "insert into user( account, pass , email) values ('$account','$pass','$email')";
    pdo_execute($sql);

}

function select_account($account, $password)
{
    $sql = "select * from user where account = '$account' and pass = '$password'";
    $list = pdo_query_one($sql);
    return $list;
}

function check_inFor($account, $email)
{
    $sql = "select * from user where account = '$account' and email = '$email '";
    $list = pdo_query_one($sql);
    return $list;
}

function update_user($id_user, $pass, $name, $email, $phone, $address)
{

    $sql = "update user set pass = '$pass',name = '$name',email = '$email',phone = '$phone',address ='$address' where id_user = '$id_user'";
    pdo_execute($sql);
}

?>