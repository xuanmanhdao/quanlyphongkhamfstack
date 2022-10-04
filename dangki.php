<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt lịch khám</title>
    <!-- css reset zero-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./asset/css/base.css">
    <!-- <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script> -->
    <link rel="stylesheet" href="admin/public/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="./asset/css/main.css">
    <link rel="stylesheet" href="./asset/css/footer.css">
    <link rel="stylesheet" href="./asset/fonts/fontawesome-free-5.15.4-web/css/all.min.css"> <!-- Icon -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        .co-chu {
            font-size: 1.6rem !important;
        }
    </style>
</head>

<?php

$thisPage = "index";
require 'admin/controllers/connect.php';
$sqlsl = "SELECT * FROM khoa";
$resultl = mysqli_query($conn, $sqlsl);

if (isset($_POST['add'])) {
    $SDT = $_POST['sdt'];
    $HoTen = $_POST['hoten'];
    $DiaChi = $_POST['diachi'];
    $KhoaKham = $_POST['khoakham'];
    $NgayKham = $_POST['ngaykham'];
    $GioKham = $_POST['giokham'];
    $MoTa = $_POST['mota'];
    // echo 'bạn da gui thanh cong' . $KhoaKham;
    mysqli_set_charset($conn, "utf8");
    $sqls = "INSERT INTO lichhen (TenKhachHang, SDT, MaKhoa, DiaChi, NgayKham, ThoiGian, MoTa) VALUES ('" . $HoTen . "','" . $SDT . "'," . $KhoaKham . ",'" . $DiaChi . "','" . $NgayKham . "','" . $GioKham . "','" . $MoTa . "')";
    // die();
    if ($SDT != "") {
        $result = mysqli_query($conn, $sqls);
        // echo ("Thêm thành công");
        echo ' <script type = "text/javascript"> alert("Đặt lịch thành công");</script>';
    } else {
        echo ' <script type = "text/javascript"> alert("Chưa nhập đủ thông tin");</script>';
    }
} else {
    //mysqli_set_charset($conn, "utf8");

}

?>

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
                            <img src="./asset/img/logo_benhvienphusanhanoi.png" alt="Logo">
                        </a>
                    </div>
                    <div class="header__hospital-title">
                        <a href="index.php" class="header__home-link">PHÒNG KHÁM ĐA KHOA FSTACK</a>
                        <p>FSTACK GENERAL CLINIC</p>
                    </div>
                    <div class="em" style="float: right; background-color: #4c9b1a; height: 60px; margin-right: -300px; margin-top: 15px;">
                        <div class="int1" style="padding: 5px; width: 170px; ">
                            <p style="font-size: 16px; color: #4c9b1a; background-color: white;">TỔNG ĐÀI ĐẶT KHÁM</p>
                        </div>
                        <p style="color: white; text-align: center; font-size: 17px; margin-top: -15px;">1900 6922</p>
                    </div>
                </div>
            </div>

            <!-- Header navbar -->
        </header>
        <hr class="hr_thanh">
        <div class="form_tieude" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
            <p>ĐẶT LỊCH KHÁM</p>
        </div>
        <div class="form_dangky" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">

            <form action="" method="POST">
                <div class="mb-3 mt-3">
                    <label class="form-label co-chu">Số điện thoại:</label>
                    <input type="text" class="form-control co-chu" placeholder="Nhập số điện thoại" name="sdt" required>
                </div>
                <div class="mb-3">
                    <label class="form-label co-chu">Họ tên :</label>
                    <input type="text" class="form-control co-chu" placeholder="Nhập họ tên" name="hoten">
                </div>
                <div class="mb-3">
                    <label class="form-label co-chu">Địa chỉ :</label>
                    <input type="text" class="form-control co-chu" placeholder="Nhập địa chỉ" name="diachi">
                </div>
                <div class="mb-3">
                    <label class="form-label co-chu">Khoa khám :</label>
                    <select class="form-select co-chu" name="khoakham">
                        <option value="">Chọn khoa khám</option>
                        <?php
                        if ($resultl > 0) {
                            while ($row = $resultl->fetch_assoc()) {
                        ?>

                                <option value="<?= $row["MaKhoa"] ?>"><?= $row["TenKhoa"] ?></option>
                            <?php
                            }
                        } else {
                            ?>
                            <option value="Null">Không có dữ liệu khoa</option>
                        <?php
                            // echo "0 result";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label co-chu">Ngày khám :</label>
                    <input type="date" class="form-control co-chu" name="ngaykham">
                </div>
                <div class="mb-3">
                    <label class="form-label co-chu">Giờ khám :</label>
                    <input type="time" class="form-control co-chu" name="giokham">
                </div>
                <div class="mb-3">
                    <label class="form-label co-chu">Mô tả bệnh :</label>
                    <input type="text" class="form-control co-chu" placeholder="Nhập mô tả" name="mota">
                </div>
                <button type="submit" name="add" class="btn btn-primary co-chu">Gửi</button>
            </form>

        </div>
        <?php
        include "./includes/footer.php"
        ?>
    </div>
</body>

</html>