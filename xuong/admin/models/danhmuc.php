<?php
function getAllDM()
{
    $sql = "select * from danhmucsach";
    $get= pdo_query($sql);
    return $get;
}
function insertDM($tenDM)
{
    $sql = "insert into danhmucsach(ten_danh_muc) values ('$tenDM')";
    pdo_execute($sql);
}

function getOneDM($id)
{
    $sql = "select * from danhmucsach where id=".$id;
    $get= pdo_query_one($sql);
    return $get;
}
function updateDM($id,$tenDM,$trangThai)
{
    $sql = "update  danhmucsach  set ten_danh_muc = '$tenDM',trang_thai = '$trangThai' where id=".$id;
    pdo_execute($sql);
}

function deleteDM($id)
{
    $sql = "delete from danhmucsach where id =".$id;
    pdo_execute($sql);
}