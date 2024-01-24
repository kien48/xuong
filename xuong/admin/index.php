<?php
session_start();
include "models/pdo.php";
include "models/nguoidung.php";
include "models/sach.php";
include "models/danhmuc.php";
$listSach = getAllSach();
$listDM=getAllDM();
$listTK=getAllTK();
$act = isset($_GET['act']) ? $_GET['act'] : "/";
switch ($act){
    case "/":
        if(isset($_SESSION['user'])){
            header("location: index.php?act=trangchu");
            break;
        }else{
            if(isset($_POST['dn'])){
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $check = dangNhap($email,$pass);
                if( $check ){
                    $_SESSION['user'] = $check;
                    header("location: index.php?act=trangchu");
                    break;
                }else{
                    $thongBao = "Sai email hoặc sai mật khẩu";
                }

            }
            include "views/login/login.php";
            break;
        }
    case "trangchu":
        include "views/sach/list.php";
        break;
    case "themsach":
        if(isset($_POST['them'])){
            $ten = $_POST['tenSach'];
            $img = $_FILES['hinhAnh']['name'];
            $target = "public/img/";
            $targetDir = $target .basename($img);
            if(move_uploaded_file($_FILES['hinhAnh']['tmp_name'],$targetDir)){
               $ttanh = '<script>alert("tải ảnh lên thành công")</script>';
            }else{
                $ttanh = '<script>alert("tải ảnh lên thất bại")</script>';
            }
            $namxb = $_POST['namXuatBan'];
            $tacgia = $_POST['tacGia'];
            $id_dm = $_POST['idDanhMuc'];
            $gia = $_POST['gia'];
           $check = addSach($ten,$gia,$img,$namxb,$tacgia,$id_dm);
           if(!$check){
               echo $ttanh;
               $tt = "thêm thành công";
           }else{
               $tt = "thêm thất bại";
           }
        }
        include "views/sach/add.php";
        break;
    case "xoasach":
        if(isset($_GET['id']) && $_GET['id']!= ""){
            deleteSach($_GET['id']);
            $listSach = getAllSach();
            include "views/sach/list.php";
            break;
        }
        include "views/sach/list.php";
        break;
    case "danhmuc":
        include "views/danhMuc/list.php";
        break;
    case "taikhoan":
        include "views/nguoiDung/list.php";
        break;
    case "dangxuat":
        dangxuat();
        header("location: index.php?act=/");
        break;
    case 'dangky':
        if(isset($_POST['dk'])) {
         $email = $_POST['email'];
         $pass = $_POST['pass'];
         $ten = $_POST['name'];
         $check = insertTK($ten,$email,$pass);
         if(!$check){
             $thongBao = "đăng ký thành công";
         }else{
             $thongBao = "đăng ký thất bại";
         }
        }
        include "views/login/register.php";
        break;
    case 'trangcapnhat':
        if(isset($_GET['id'])){
            $getOneSach =  getOneSach($_GET['id']);
        }
        include "views/sach/update.php";
        break;
    case "capnhatsach":
        if(isset($_POST['sua'])){
            $id = $_POST['id'];
            $ten = $_POST['tenSach'];
            $img = $_FILES['hinhAnh']['name'];
            $target = "public/img/";
            $targetDir = $target .basename($img);
            if(move_uploaded_file($_FILES['hinhAnh']['tmp_name'],$targetDir)){
            }else{
            }
            $namxb = $_POST['namXuatBan'];
            $tacgia = $_POST['tacGia'];
            $id_dm = $_POST['idDanhMuc'];
            $gia = $_POST['gia'];
            $trangthai = $_POST['trangthai'];
            $check = updateSach($id,$ten,$gia,$img,$namxb,$tacgia,$id_dm,$trangthai);
            if(!$check){
                echo '<script>alert("Cập nhật thành công")</script>';
            }else{
                echo '<script>alert("Cập nhật thất bại")</script>';
            }
        }
        $listSach = getAllSach();
        include "views/sach/list.php";
        break;
    case "themdanhmuc":
        if(isset($_POST['them'])){
            $tenDM = $_POST['ten_danh_muc'];
            $check = insertDM($tenDM);
            if(!$check){
                $tt = "thêm thành công";
            }else{
                $tt = "thêm thất bại";
            }
    }
        include "views/danhMuc/add.php";
        break;
    case "trangcapnhatdm":
        if(isset($_GET['id'])){
            $oneDM = getOneDM($_GET['id']);
        }
        include "views/danhMuc/update.php";
        break;
    case "xoadm":
        if(isset($_GET['id'])){
            deleteDM($_GET['id']);
        }
        $listDM=getAllDM();
        include "views/danhMuc/list.php";
        break;
    case "capnhatdm" :
        if(isset($_POST['luu'])){
            $id = $_POST['id'];
          $tenDM = $_POST['ten_danh_muc'];
          $trangThai = $_POST['trang_thai'];
          $check = updateDM($id,$tenDM,$trangThai);
            if(!$check){
                echo '<script>alert("Cập nhật thành công")</script>';
            }else{
                echo '<script>alert("Cập nhật thất bại")</script>';
            }
        }
        $listDM=getAllDM();
        include "views/danhMuc/list.php";
        break;
    case "themtaikhoan":
        if(isset($_POST['luu'])){
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $ten = $_POST['ten'];
            $check = insertTK($ten,$email,$pass);
            if(!$check){
                $thongBao = "đăng ký thành công";
            }else{
                $thongBao = "đăng ký thất bại";
            }
        }
        include "views/nguoiDung/add.php";
        break;
    case "trangcapnhattk":
        if(isset($_GET['id'])){
           $onetk = getOneTK($_GET['id']);
        }
        include "views/nguoiDung/update.php";
        break;
    case "capnhattk" :
        if(isset($_POST['luu'])) {
            $id = $_POST['id'];
            $trang_thai = $_POST['trang_thai'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $ten = $_POST['ten'];
            $check = updateTK($id,$ten,$email,$pass,$trang_thai);
            if(!$check){
                $thongBao = "Cập nhật thành công";
            }else{
                $thongBao = "Cập nhật thất bại";
            }
        }
        $onetk = getOneTK($id);
        include "views/nguoiDung/update.php";
        break;
    case "xoatk":
        if(isset($_GET['id'])){
            deleteTK($_GET['id']);
        }
        $listTK=getAllTK();
        include "views/nguoiDung/list.php";
        break;
}

?>
<html>

</html>
