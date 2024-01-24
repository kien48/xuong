<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sách</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include "views/menu/menu.php"?>


<?php if(isset($tt) && $tt != ""){
    echo $tt;
} ?>
<div class="container mt-5">
    <h2 class="mb-4">Thêm Sách</h2>
    <form action="index.php?act=themsach" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="tenSach">Tên Sách:</label>
            <input type="text" class="form-control" id="tenSach" name="tenSach" required>
        </div>
        <div class="form-group">
            <label for="gia">Giá:</label>
            <input type="text" class="form-control" id="gia" name="gia" required>
        </div>
        <div class="form-group">
            <label for="hinhAnh">Hình ảnh:</label>
            <input type="file" class="form-control-file" id="hinhAnh" name="hinhAnh" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="namXuatBan">Năm Xuất Bản:</label>
            <input type="text" class="form-control" id="namXuatBan" name="namXuatBan" required>
        </div>
        <div class="form-group">
            <label for="tacGia">Tác Giả:</label>
            <input type="text" class="form-control" id="tacGia" name="tacGia" required>
        </div>
        <div class="form-group">
            <label for="idDanhMuc">ID Danh Mục:</label>
            <select name="idDanhMuc" id="">
                <option value="" selected>chọn danh mục sách</option>
                <?php foreach ($listDM as $dm){
                    extract($dm);
                 ?>
                    <option value="<?=$id?>"><?=$ten_danh_muc?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="them">Thêm Sách</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

