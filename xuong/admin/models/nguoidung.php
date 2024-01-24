<?php
function dangNhap($email,$pass)
{
    $sql = "select * from nguoidung where email = '$email' and password = '$pass'";
    $dangNhap = pdo_query_one($sql);
    return $dangNhap;
}
function getAllTK()
{
    $sql = "select * from nguoidung order by id desc";
    $get = pdo_query($sql);
    return $get;
}
function getOneTK($id)
{
    $sql = "select * from nguoidung where id=".$id;
    $get = pdo_query($sql);
    return $get;
}
function dangxuat()
{
    unset($_SESSION['user']);
}
function insertTK($ten,$email,$pass)
{
    $sql = "INSERT INTO `nguoidung`( `ten`, `email`, `password`) 
            VALUES ('$ten','$email','$pass')";
    pdo_execute($sql);
}
function updateTK($id, $ten, $email, $pass, $trang_thai)
{
    $sql = "UPDATE nguoidung SET ten='$ten', email='$email', password='$pass', trang_thai='$trang_thai' WHERE id=$id";
    pdo_execute($sql);
}
function deleteTK($id)
{
    $sql = "delete from nguoidung where id= ".$id;
    pdo_execute($sql);
}
