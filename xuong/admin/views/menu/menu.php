<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php?act=trangchu">Trang Chủ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=trangchu">Sách <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=danhmuc">Danh Mục</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=taikhoan">Tài khoản</a>
            </li>
            <li class="nav-item dropdown" style="padding-right: 10px">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    <?php echo $_SESSION['user']['ten'] ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Thông tin tài khoản</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php?act=dangxuat">Đăng xuất</a>
                </div>
            </li>
        </ul>
    </div>
</nav>