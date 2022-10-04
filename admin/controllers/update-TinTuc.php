<?php
if (isset($_POST['btnSubmit'])) {
    session_start();
    $ss_username=$_SESSION['ss_username'];
    // Lay du lieu tu form
    $ID_BaiViet = (isset($_POST['ID_BaiViet_Sua'])) ? $_POST['ID_BaiViet_Sua'] : "";
    $tieuDe = isset($_POST['txtTitle']) ? $_POST['txtTitle'] : "";
    $noiDung = isset($_POST['txtPostContent']) ? $_POST['txtPostContent'] : "";
    $anhThumbnail_Old = isset($_POST['AnhThumbnail_Old']) ? $_POST['AnhThumbnail_Old'] : "";
    $duongDanFileAnh = "";
    if (isset($_POST["chkIsPublic"])) {
        $isPublic = $_POST["chkIsPublic"];
    } else {
        $isPublic = 0;
    }
    // include '../public/includes/upload-file.php';
    $target_dir = "../public/image/";
    //Vị trí file lưu tạm trong server (file sẽ lưu trong image, với tên giống tên ban đầu)
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        // echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // echo "Sorry, your file was not uploaded.";
        $duongDanFileAnh = $anhThumbnail_Old;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            $duongDanFileAnh = $target_dir . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }
    }

    echo $duongDanFileAnh;
    // ./ Lay du lieu tu form
    // Ket noi sql
    require "connect.php";
    // ./ Ket noi sql

    // Insert tin tuc
    $sql = "Update tintuc
    set TieuDe='$tieuDe', NoiDung='$noiDung', User_ID='$ss_username', Is_Public='$isPublic', Ngay_Sua= now(), AnhThumbnail='$duongDanFileAnh'
    where ID_BaiViet=$ID_BaiViet";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!-- // ./ Insert tin tuc -->