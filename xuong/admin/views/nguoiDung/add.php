<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Người Dùng</title>
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include "views/menu/menu.php"?>
<?php if(isset($thongBao) && $thongBao != ""){
    echo $thongBao;
} ?>
<div class="container mt-5">
    <h2>Thêm Người Dùng</h2>

    <form action="index.php?act=themtaikhoan" method="post">
        <div class="form-group">
            <label for="ten_nguoi_dung">Tên Người Dùng:</label>
            <input type="text" class="form-control" id="ten_nguoi_dung" name="ten" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Mật Khẩu:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
<!--        <div class="form-group">-->
<!--            <label for="trang_thai">Trạng Thái:</label>-->
<!--            <select class="form-control" id="trang_thai" name="trang_thai" required>-->
<!--                <option value="1">Đang hoạt động</option>-->
<!--                <option value="0">Dừng hoạt động</option>-->
<!--            </select>-->
<!--        </div>-->
        <button type="submit" class="btn btn-primary" name="luu">Thêm Người Dùng</button>
    </form>
</div>

<!-- Link Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
