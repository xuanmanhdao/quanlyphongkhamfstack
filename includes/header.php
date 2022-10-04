<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>
    <!-- css reset zero-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./asset/css/base.css">
    <link rel="stylesheet" href="./asset/css/header.css">
    <link rel="stylesheet" href="./asset/css/container.css">
    <link rel="stylesheet" href="./asset/css/footer.css">
    <link rel="stylesheet" href="./asset/fonts/fontawesome-free-5.15.4-web/css/all.min.css"> <!-- Icon -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="main">

        <header class="header">

            <!-- Header info -->
            <div class="header__navbar-info">
                <ul class="header__list">
                    <li class="header__list-item">
                        <span class="header__list-icon">
                            <i class="fas fa-phone"></i>
                        </span>
                        <span class="header__list-title">Giải đáp 0243 211 5944</span>
                    </li>
                    <li class="header__list-item">
                        <span class="header__list-icon">
                            <i class="fas fa-phone"></i>
                        </span>
                        <span class="header__list-title">Đặt khám 1900 6922</span>
                    </li>
                    <li class="header__list-item">
                        <span class="header__list-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        <span class="header__list-title">Số 10 Quang Trung, Hà Đông</span>
                    </li>
                </ul>
            </div>

            <!-- Header select -->
            <div class="header__select">
                <div class="header__home">
                    <div class="header__logo">
                        <a href="index.php" class="header__home-link">
                            <img src="./asset/img/logo_phongkham-removebg-2.png" alt="Logo" onerror="this.onerror=null;this.src='./asset/img/logo_benhvienphusanhanoi.png'">
                        </a>
                    </div>
                    <div class="header__hospital-title">
                        <a href="index.php" class="header__home-link">PHÒNG KHÁM ĐA KHOA FSTACK</a>
                        <p>FSTACK GENERAL CLINIC</p>
                    </div>
                </div>
                <div class="header__button">
                    <div class="header__button-item">
                        <button class="header__button-color"><a href="dangki.php" class="header__button-link">Đặt lịch
                                khám</a></button>
                    </div>
                    <div class="header__button-item">
                        <button class="header__button-color"><a href="login.php" class="header__button-link">Đăng nhập</a></button>
                    </div>
                </div>
            </div>

            <!-- Header navbar -->
            <nav class="header__navbar">
                <ul id="Sidebar" class="header__navbar-list">
                    <li class="header__navbar-item"><a href="content_index" class="header__navbar-link">Trang chủ</a></li>
                    <li class="header__navbar-item header__navbar-dropdown  dropdown-btn">
                        <a href="content_index" class="header__navbar-link">Gói dịch vụ</a>
                        <div class="header__dropdown-content">
                            <a href="" class="dropdown-item">LỚP HỌC TIỀN SẢN MIỄN PHÍ</a>
                            <a href="" class="dropdown-item">DỊCH VỤ ĐẺ, MỔ ĐẺ</a>
                            <a href="" class="dropdown-item">KHÁM THAI, SÀNG LỌC, CHUẨN ĐOÁN TRƯỚC SINH, SAU SINH</a>
                            <a href="" class="dropdown-item">SÀNG LỌC TIỀN SẢN GIẬT</a>
                            <a href="" class="dropdown-item">ĐIỀU TRỊ HIẾM MUỘN</a>
                            <a href="" class="dropdown-item">KHÁM, ĐIỀU TRỊ BỆNH LÝ PHỤ KHOA</a>
                            <a href="" class="dropdown-item">LƯU TRỮ TẾ BÀO GỐC</a>
                            <a href="" class="dropdown-item">SÀNG LỌC, ĐIỀU TRỊ UNG THƯ PHỤ KHOA</a>
                        </div>
                    </li>
                    <li class="header__navbar-item"><a href="tintuchoatdong" class="header__navbar-link">Tin tức hoạt động</a></li>
                    <li class="header__navbar-item"><a href="content_index" class="header__navbar-link">Thông tin thuốc</a></li>
                    <li class="header__navbar-item header__navbar-dropdown  dropdown-btn">
                        <a href="content_index" class="header__navbar-link">Kiến thức</a>
                        <div class="header__dropdown-content">
                            <a href="" class="dropdown-item">LỚP HỌC TIỀN SẢN MIỄN PHÍ</a>
                            <a href="" class="dropdown-item">DỊCH VỤ ĐẺ, MỔ ĐẺ</a>
                            <a href="" class="dropdown-item">KHÁM THAI, SÀNG LỌC, CHUẨN ĐOÁN TRƯỚC SINH, SAU SINH</a>
                            <a href="" class="dropdown-item">SÀNG LỌC TIỀN SẢN GIẬT</a>
                            <a href="" class="dropdown-item">ĐIỀU TRỊ HIẾM MUỘN</a>
                            <a href="" class="dropdown-item">KHÁM, ĐIỀU TRỊ BỆNH LÝ PHỤ KHOA</a>
                            <a href="" class="dropdown-item">LƯU TRỮ TẾ BÀO GỐC</a>
                            <a href="" class="dropdown-item">SÀNG LỌC, ĐIỀU TRỊ UNG THƯ PHỤ KHOA</a>
                        </div>
                    </li>
                    <li class="header__navbar-item"><a href="gioithieu" class="header__navbar-link">Giới thiệu</a></li>
                </ul>
                <script>
                    $(document).ready(function() {
                        $('#Sidebar li a').click(function() {
                            var page = $(this).attr('href');
                            $("#click").load(page + '.php');
                            return false;
                        });
                    });
                </script>
            </nav>
        </header>