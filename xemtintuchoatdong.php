<?php
$page_title = 'Xem bài viết';
include "./includes/header.php";
require 'admin/controllers/connect.php';
$ID_BaiViet = (isset($_GET['ID'])) ? $_GET['ID'] : "";
// echo 'ID: '.$ID_BaiViet;
// die();
// Select
$sql_selectChiTiet = "Select * from tintuc where ID_Baiviet=$ID_BaiViet";
$result_selectChiTiet = $conn->query($sql_selectChiTiet);
?>
<link rel="stylesheet" href="./asset/css/gioithieu.css">
<style>
    p {
        font-size: 1.6rem;
    }
</style>
<!-- Content -->
<div id="click">
    <div class="start-content"></div>
    <?php
    if ($result_selectChiTiet->num_rows > 0) {
        // output data of each rows
        while ($row_SelectChiTiet = $result_selectChiTiet->fetch_assoc()) {
    ?>
            <div class="content-wrap">
                <h1 class="content-heading"><?php echo $row_SelectChiTiet['TieuDe']; ?></h1>
                <h2 class="content-title">Người đăng: <?php echo $row_SelectChiTiet['User_ID']; ?></h2>
                <p class="content-text">Chỉnh sửa lần cuối ngày: <?php echo $row_SelectChiTiet['Ngay_Sua']; ?></p>
                <p class="content-text"><?php echo $row_SelectChiTiet['NoiDung']; ?></p>
            </div>
    <?php
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>
<?php include "./includes/footer.php" ?>