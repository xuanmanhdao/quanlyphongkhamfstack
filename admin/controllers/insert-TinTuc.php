<?php
if (isset($_POST['btnSubmit'])) {
    require "connect.php";
    session_start();
    $ss_username=$_SESSION['ss_username'];
    // Lay du lieu tu form
    $tieuDe = isset($_POST['txtTitle']) ? $_POST['txtTitle'] : "";
    $noiDung = isset($_POST['txtPostContent']) ? $_POST['txtPostContent'] : "";
    if (isset($_POST["chkIsPublic"])) {
        $isPublic = $_POST["chkIsPublic"];
    }else{
        $isPublic = 0;
    }
    $duongDanFileAnh="";
    include '../public/includes/upload-file.php';
    $anhThumbnail_Old = "";
    $duongDanFileAnh = $target_dir . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
    // echo '<prE>';
    // print_r($_POST);
    // exit();
    // ./ Lay du lieu tu form
    // Ket noi sql
   
    // ./ Ket noi sql

    // Insert tin tuc
    $sql = "INSERT INTO tintuc (ID_BaiViet, TieuDe, NoiDung, User_ID, Is_Public, Ngay_Tao, Ngay_Sua, AnhThumbnail)
VALUES (null, '$tieuDe', '$noiDung', '$ss_username', '$isPublic', now(), now(), '$duongDanFileAnh')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../views/index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!-- // ./ Insert tin tuc -->