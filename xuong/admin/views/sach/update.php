<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Sách</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include "views/menu/menu.php";
var_dump($getOneSach);
$hinhPath = "public/img/".$getOneSach['hinh_anh'];
if(is_file($hinhPath)){
    $hinh = '<img src="'.$hinhPath.'" alt="">';
}else{
    $hinh = '<img src="" alt="không có ảnh">';
}
?>


<?php if(isset($tt) && $tt != ""){
    echo $tt;
} ?>
<div class="container mt-5">
    <h2 class="mb-4">Cập Nhật Sách</h2>
    <form action="index.php?act=capnhatsach" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="tenSach">Tên Sách:</label>
            <input type="hidden" value="<?=$getOneSach['id']?>" name="id">
            <input type="text" class="form-control" id="tenSach" name="tenSach" value="<?=$getOneSach['ten_sach']?>" required>
        </div>
        <div class="form-group">
            <label for="gia">Giá:</label>
            <input type="text" class="form-control" id="gia" name="gia" value="<?=$getOneSach['gia']?>" required>
        </div>
        <div class="form-group">
            <label for="hinhAnh">Hình ảnh:</label>
            <input type="file" class="form-control-file" id="hinhAnh" name="hinhAnh" accept="image/*" >
            <?=$hinh?>
        </div>
        <div class="form-group">
            <label for="namXuatBan">Năm Xuất Bản:</label>
            <input type="text" class="form-control" id="namXuatBan" name="namXuatBan" value="<?=$getOneSach['nam_xuat_ban']?>" required>
        </div>
        <div class="form-group">
            <label for="tacGia">Tác Giả:</label>
            <input type="text" class="form-control" id="tacGia" name="tacGia" value="<?=$getOneSach['tac_gia']?>" required>
        </div>
        <div class="form-group">
            <label for="idDanhMuc">ID Danh Mục:</label>
            <select name="idDanhMuc" id="">
                <option value="" selected>chọn danh mục sách</option>
                <?php foreach ($listDM as $dm){
                    extract($dm);
                    ?>
                    <option <?php if($dm['id'] == $getOneSach['id_danh_muc']) echo "selected"; ?> value="<?=$dm['id']?>"><?=$ten_danh_muc?></option>
                <?php } ?>
            </select>


        </div>
        <div class="form-group">
            <label for="trang_thai">Trạng thái:</label>
            <select name="trangthai" id="">
                <option value="1" <?=($getOneSach['trang_thai'] ==1) ? "selected" : ""  ?>>Đang hoạt động</option>
                <option value="0" <?=($getOneSach['trang_thai'] ==0) ? "selected" : ""  ?>>Dừng hoạt động</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="sua">Cập Nhật</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

