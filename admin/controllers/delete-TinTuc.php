<?php
if (isset($_POST['btnXoa'])) {
    $ID_BaiVietXoa = (isset($_POST['ID_BaiViet_Xoa'])) ? $_POST['ID_BaiViet_Xoa'] : "Rỗng";
    require 'connect.php';
    // Delete
    $sql_deleteChiTiet = "Delete from tintuc where ID_Baiviet=$ID_BaiVietXoa";
    $result_deleteChiTiet = $conn->query($sql_deleteChiTiet);
    // Header('Location: http://localhost/websitephongkham/');
    header("location: ../views/index.php",  true,  301 );  exit;
    // echo("<script>location.href = './xem-danh-sach-tin-tuc-hoat-dong.php/';</script>");
}
$conn->close();
?>
<!-- End select -->