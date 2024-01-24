<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Người Dùng</title>
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include "views/menu/menu.php"?>
<?php if(isset($thongBao) && $thongBao != ""){
    echo $thongBao;
} ?>
<div class="container mt-5">
    <h2>Cập Nhật Người Dùng</h2>

    <form action="index.php?act=capnhattk" method="post">
        <div class="form-group">
            <label for="ten_nguoi_dung">Tên Người Dùng:</label>
            <input type="hidden" name="id" value="<?=$onetk[0]['id']?>">
            <input type="text" class="form-control" id="ten_nguoi_dung" name="ten" value="<?=$onetk[0]['ten']?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?=$onetk[0]['email']?>" required>
        </div>
        <div class="form-group">
            <label for="password">Mật Khẩu:</label>
            <input type="password" class="form-control" id="password" name="password" value="<?=$onetk[0]['password']?>" required>
        </div>
                <div class="form-group">
                    <label for="trang_thai">Trạng Thái:</label>
                    <select class="form-control" id="trang_thai" name="trang_thai" required>
                        <option value="1" <?= $onetk[0]['trang_thai'] == 1 ? "selected" : "" ?>>Đang hoạt động</option>
                        <option value="0" <?= $onetk[0]['trang_thai'] == 0 ? "selected" : "" ?>>Dừng hoạt động</option>
                    </select>
                </div>
        <button type="submit" class="btn btn-primary" name="luu">Cập Nhật Người Dùng</button>
    </form>
</div>

<!-- Link Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
