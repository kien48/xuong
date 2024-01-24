<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Người Dùng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include "views/menu/menu.php"?>

<div class="container mt-5">
    <h2 class="mb-4">Bảng Người Dùng</h2>
    <a href="index.php?act=themtaikhoan"><button class="btn btn-success">Thêm</button></a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Password</th>
            <th>Trạng Thái</th>
            <th>Thao Tác</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($listTK as $tk){
            extract($tk);
            if($trang_thai == 1){
                $tt = "Đang hoạt động";
            }else{
                $tt = "Dừng hoạt động";
            }
        ?>

        <!-- Thêm các dòng dữ liệu khác tương tự ở đây -->
            <tr>
                <td><?=$id?></td>
                <td><?=$ten?></td>
                <td><?=$email?></td>
                <td><?=$password?></td>
                <td><?=$tt?></td>
                <td>
                    <a href="index.php?act=trangcapnhattk&id=<?=$id?>"><button class="btn btn-primary">Sửa</button></a>
                    <a href="index.php?act=xoatk&id=<?=$id?>"><button class="btn btn-danger" onclick="return xoa()">Xóa</button></a>
                </td>
            </tr>

        <?php } ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function xoa() {
        return confirm('xóa nhá');
    }
</script>
</body>
</html>
