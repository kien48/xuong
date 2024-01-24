<?php
function getAllSach()
{
    $sql = "select * from sach order by id desc";
    $get = pdo_query($sql);
    return $get;
}

function addSach($ten,$gia,$img,$namxb,$tacgia,$id_dm)
{
    $sql = "INSERT INTO `sach`(`ten_sach`, `gia`, `hinh_anh`, `nam_xuat_ban`, `tac_gia`, `id_danh_muc`) VALUES
            ('$ten','$gia','$img','$namxb','$tacgia','$id_dm')";
    pdo_execute($sql);
}
function deleteSach($id)
{
    $sql = "delete from sach where id= ".$id;
    pdo_execute($sql);
}
function getOneSach($id)

{
$sql = "select * from sach where id =".$id;
    $get = pdo_query_one($sql);
    return $get;
}

function updateSach($id, $ten, $gia, $img, $namxb, $tacgia, $id_dm, $trangthai)
{
    $ten = addslashes($ten);  // Thêm dòng này để tránh lỗi với dấu nháy đơn trong tên sách

    if ($img != "") {
        $sql ="UPDATE `sach` SET `ten_sach`='$ten', `gia`='$gia',`hinh_anh`='$img',
                `nam_xuat_ban`='$namxb', `tac_gia`='$tacgia', `id_danh_muc`='$id_dm', `trang_thai`='$trangthai' WHERE id=" . $id;
    } else {
        $sql = "UPDATE `sach` SET `ten_sach`='$ten', `gia`='$gia', 
                `nam_xuat_ban`='$namxb', `tac_gia`='$tacgia', `id_danh_muc`='$id_dm', `trang_thai`='$trangthai' WHERE id=" . $id;
    }

    pdo_execute($sql);
}
