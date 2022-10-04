<?php
require "../Sql/db.php";
require '../Sql/demsl.php';
?>
    <div class="wrapper">
        <div class="left">
            <center>
                <img src="https://www.thuongxa.net/logos/profile/bac-si-huy-an-logo-cabramatta-nsw-422.jpg" class="profile_image" alt="" />
                <?php
            $sql = "SELECT * FROM bacsi bs inner JOIN khoa k ON bs.MaKhoa=k.MaKhoa Where MaBacSi='".$id."'";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) :
                // output dữ liệu trên trang
                while ($row = $result->fetch_assoc()):
                    ?>
                    <h4>
                        <?php echo ($row['TenBacSi']) ?>
                    </h4>
                    <p><span>ID : </span>
                        <?php echo ($row['MaBacSi']) ?>
                    </p>
                    <p><span>Khoa : </span>
                        <?php echo ($row['TenKhoa']) ?>
                    </p>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <button id="show">Liên hệ admin</button>
                    <button id="close">Đóng</button>
                    <script>
                        $('.Admin').hide();
                        $('#close').hide();
                        $('#admin').hide();
                        $('#show').click(function() {
                            $('.Admin').show();
                            $('.info').hide();
                            $('#close').show();
                            $('#doctor').hide();
                            $('#admin').show();
                        });
                        $('#close').click(function() {
                            $('.Admin').hide();
                            $('#close').hide();
                            $('.info').show();
                            $('#admin').hide();
                            $('#doctor').show();
                        });
                    </script>
            </center>
        </div>
        <div class="center">
            <h2 id="doctor">Thông Tin Bác Sĩ</h2>
            <h2 id="admin">Liên Hệ Admin </h2>
            <div class="info">
                <?php
            $sql = "SELECT * FROM bacsi Where MaBacSi='".$id."'";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) :
                // output dữ liệu trên trang
                while ($row = $result->fetch_assoc()):
                    ?>
                    <p><span>Họ Tên : </span>
                        <?php echo ($row['TenBacSi']) ?>
                    </p>
                    <p><span>Giới Tính : </span>
                        <?php echo ($row['GioiTinh']) ?>
                    </p>
                    <p><span>Số Điện Thoại : </span>
                        <?php echo ($row['SDT']) ?>
                    </p>
                    <p><span>Email : </span>
                        <?php echo ($row['Email']) ?>
                    </p>
                    <p><span>Địa Chỉ : </span>
                        <?php echo ($row['DiaChi']) ?>
                    </p>
                    <?php endwhile; ?>
                    <?php endif; ?>
            </div>
            <div class="Admin">
                <img src="../Doctor/img/lh.png" />
                <h4>______By. FStack______</h4>
                <h4>Facebook:Đa Khoa FStack</h4>
                <h4>Gmail: FStack@gmail.com</h4>
                <h4>Số Điện Thoại: 0987654321</h4>
                <style>
                    .Admin img {
                        margin-left: 50px;
                        height: 210px;
                    }
                    
                    .Admin h4 {
                        padding-top: 10px;
                        margin-left: 250px;
                        margin-top: -100px;
                    }
                </style>
            </div>
        </div>
        <div class="right">
            <div class="show">
                <div class="data-day">
                    <?php
                $day = date("Y/m/d");
                $sql = "SELECT count(MaLichHen)as'soluong' FROM lichhen lh INNER join bacsi bs " .
                        " ON lh.MaKhoa=bs.MaKhoa WHERE lh.NgayKham= '$day' and bs.MaBacSi='".$id."'";
                ?>
                        <h3>Lịch hẹn hôm nay</h3>
                        <span>Tổng : <?php echo dem($conn, $sql) ?> Lịch hẹn</span>
                </div>
            </div>
            <div class="show">
                <div class="data-all">
                    <?php
                $sql = "SELECT count(MaLichHen)as'soluong' FROM lichhen lh INNER join bacsi bs " .
                        " ON lh.MaKhoa=bs.MaKhoa WHERE bs.MaBacSi='".$id."'";
                ?>
                        <h3>Thống Kê tất cả</h3>
                        <span>Tổng :<?php echo dem($conn, $sql) ?> Lịch hẹn</span>
                </div>
            </div>
        </div>
    </div>