<?php
require_once "db.php";//được sử dụng để chèm một tập tin php trong một số tập tin khác
//require: sẽ tạo ra lỗi nghiêm trọng (E_COMPILE_ERROR) và dừng tập lệnh.
//include: sẽ chỉ tạo cảnh báo (E_WARNING) và tập lệnh sẽ tiếp tục.
//$id = $_SESSION["Username"];
//  if (isset($_POST['button']))
{
    $result = mysqli_query($conn, "select * from login where Username='$id'");
    $row = mysqli_fetch_array($result);
    $old_pass = $_POST['passwordOld'];
    $new_pass = $_POST['passwordNew'];
    $password = $row['Password'];
if ($password == $old_pass) {
    $run = mysqli_query($conn, "update login set Password='$new_pass' where Username='$id'");
    if ($run) {
        echo "Đổi thành công";
    } else {
        echo "Đổi thất bại";
    }
} else {
    echo "Mật khẩu cũ không chính xác";
}
}
?>
