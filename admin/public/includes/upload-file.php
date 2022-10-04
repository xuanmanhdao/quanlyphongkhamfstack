<!-- Begin -->
<?php
$target_dir = "../public/image/";
//Vị trí file lưu tạm trong server (file sẽ lưu trong image, với tên giống tên ban đầu)
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// if (isset($_POST["btnSubmit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if ($check !== false) {
//         //echo "<br>File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         //echo "<br>File is not an image.";
//         $uploadOk = 0;
//     }
// }

if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error or $duongDanFileAnh = $anhThumbnail_Old
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    $duongDanFileAnh = $anhThumbnail_Old;
} // if everything is ok, try to upload file 
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    $duongDanFileAnh = $target_dir . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
}
// echo '<br> Đường dẫn file: ' . $duongDanFileAnh . '<br>';
// echo '<br><img src="' . $duongDanFileAnh . '" alt="AnhLoi"/>';
// echo '<br>Target_file: ' . $target_file . ' and ' . $_FILES["fileToUpload"]["tmp_name"];
// die();
?>
<!-- End -->