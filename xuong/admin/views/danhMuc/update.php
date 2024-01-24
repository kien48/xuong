<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Danh Mục Sách</title>
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include "views/menu/menu.php"?>
<div class="container mt-5">
    <h2>Sửa Danh Mục Sách</h2>
    <form action="index.php?act=capnhatdm" method="post">
        <div class="form-group">
            <label for="ten_danh_muc">Tên Danh Mục:</label>
            <input type="hidden" name="id" value="<?=$oneDM['id']?>">
            <input type="text" class="form-control" id="ten_danh_muc" name="ten_danh_muc" required value="<?=$oneDM['ten_danh_muc']?>">
        </div>
                <div class="form-group">
                    <label for="trang_thai">Trạng Thái:</label>
                    <select class="form-control" id="trang_thai" name="trang_thai" required>
                        <option value="1" <?=($oneDM['trang_thai']) == 1 ? "selected" : "" ?>>Đang hoạt động</option>
                        <option value="0" <?=($oneDM['trang_thai']) == 0 ? "selected" : "" ?>>Dừng hoạt động</option>
                    </select>
                </div>
        <button type="submit" class="btn btn-primary" name="luu">Cập Nhật Danh Mục</button>
    </form>
</div>

<!-- Link Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
