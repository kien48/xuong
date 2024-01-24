<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Sách</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include "views/menu/menu.php"?>
<div class="container mt-5">
    <h2 class="mb-4">Bảng Sách</h2>
    <a href="index.php?act=themsach"><button class="btn btn-success">Thêm</button></a>
    <table class="table" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên Sách</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Năm Xuất Bản</th>
            <th>Tác Giả</th>
            <th>ID Danh Mục</th>
            <th>Trạng Thái</th>
            <th>Thao Tác</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($listSach as $sach){
            extract($sach);
            $anh = "public/img/".$hinh_anh;
            if($trang_thai == 1){
                $tt = "Đang hoạt động";
            }else{
                $tt = "Dừng hoạt động";
            }
         ?>
            <tr>
                <td><?=$id?></td>
                <td><?=$ten_sach?></td>
                <td><?=number_format($gia)?> vnđ</td>
                <td><img src="<?=$anh?>" alt="Hình ảnh sách 1" width="50"></td>
                <td><?=$nam_xuat_ban?></td>
                <td><?=$tac_gia?></td>
                <td><?=$id_danh_muc?></td>
                <td><?=$tt?></td>
                <td>
                    <a href="index.php?act=trangcapnhat&id=<?=$id ?>"><button class="btn btn-primary">Sửa</button></a>
                    <a  href="index.php?act=xoasach&id=<?=$id ?>"><button class="btn btn-danger" onclick="return thongbao()" >Xóa</button></a>
                </td>
            </tr>

        <?php } ?>
        <!-- Thêm các dòng dữ liệu khác tương tự ở đây -->
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function thongbao(){
        return   confirm('xóa nhá')
    }
</script>
</body>
</html>
