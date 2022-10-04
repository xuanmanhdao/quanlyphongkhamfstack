<?php require "includes/header.php"; ?>
<!DOCTYPE html>
<link rel="stylesheet" href="style/css/style.css">
<link rel="stylesheet" href="style/css/about.css">
<link rel="stylesheet" href="style/css/home.css">
<link rel="stylesheet" href="style/css/body.css">
<link rel="stylesheet" href="style/fullcalendar.min.css" />
<script src="style/lib/jquery.min.js"></script>
<script src="style/lib/moment.min.js"></script>
<script src="style/fullcalendar.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<html>

<body>
    <?php require "includes/sidebar.php"; ?>
    <div class="content">
        <!--hiển thị thống kê lịch hẹn d w m-->
        <?php  require "includes/body.php";  ?>
        <!--hiển thị trang khi bấm sidebar-->

        <div id="click"></div>
    </div>

</html>