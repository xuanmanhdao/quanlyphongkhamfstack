<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login/css/style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@200&display=swap" rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/a81368914c.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>Document</title>
</head>

<?php
// session_start();
require 'admin/controllers/connect.php';
// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["btn_submit"])) {
    // lấy thông tin người dùng
    $username = $_POST["username"];
    $password = $_POST["password"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);
    if ($username == "" || $password == "") {
        echo "username hoặc password bạn không được để trống!";
    } else {
        $sql = "select * from login where Username = '$username' and Password = '$password' ";
        //$query = mysqli_query($conn,$sql);
        //$num_rows = mysqli_num_rows($query);
        $result_Select = $conn->query($sql);
        if ($result_Select->num_rows > 0) {
            while ($row = $result_Select->fetch_assoc()) {
                // Nếu tài khoản là bác sĩ
                if ($row['Quyen'] == 1) {
                    session_start();
                    $_SESSION['id'] = $_POST['username'];
                    header("Location: Doctor/index.php");
                }
                // Ngược lại tài khoản là admin
                else if ($row['Quyen'] == 0) {
                    session_start();
                    $_SESSION['ss_username'] = $_POST['username'];
                    header("Location: admin/views/index.php");
                }
            }
        } else {
            echo ' <script type = "text/javascript"> alert("Sai thông tin tài khoản");</script>';
        }
        //tiến hành lưu tên đăng nhập vào session để tiện xử lý 
        //$_SESSION['username'] = $username;
        // Thực thi hành động sau khi lưu thông tin vào session
        // tiến hành chuyển hướng trang web tới một trang gọi là index.php
        //header('Location: index.php');
    }
}

?>

<body>


    <!-- <img class="wave" src="img/wave.png"> -->
    <div class="container">

        <div class="img">
            <img src="login/img/img.svg">
        </div>
        <div class="login-container">
            <form method="POST" action="login.php">

                <img class="imgavatar" src="login/img/avatar.svg">
                <h2>Welcome</h2>
                <div class="input-div one ">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input" name="username" type="text">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input" name="password" type="password">
                    </div>
                </div>
                <!-- <a class="buttonForgot" href="#">Forgot Password</a> -->
                <input name="btn_submit" type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="login/js/main.js"></script>
</body>

</html>
<!-- fthfthhtthftt -->