<?php require_once "Sql/db.php";
require 'Sql/demsl.php';
?>
<div class="mycard">
    <div class="row">
        <div class="column">
            <div class="card">
                <?php
        $day=date("Y/m/d");
             $sql="SELECT count(MaLichHen)as'soluong' FROM lichhen lh INNER join bacsi bs ".
                    " ON lh.MaKhoa=bs.MaKhoa WHERE lh.NgayKham='$day' and bs.MaBacSi='".$id."'";?>
                    <h1><span><?php echo dem($conn, $sql)?></span>+</h1>
                    <h3>Lịch Hẹn Hôm nay</h3>

            </div>
        </div>
        <div class="column">
            <div class="card">
                <?php
         $sql="select COUNT(MaLichHen)as'soluong'
         from lichhen lh inner join bacsi bs on bs.MaKhoa=lh.MaKhoa
         where NgayKham> now() - interval 1 week and MaBacSi='".$id."'";?>
                    <h1><span><?php echo dem($conn, $sql)?></span>+</h1>
                    <h3>Lịch Hẹn Tuần này</h3>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <?php
           $year=date("Y");
           $month=date("m");
             $sql="SELECT count(MaLichHen)as'soluong' FROM lichhen lh INNER join bacsi bs ".
                    " ON lh.MaKhoa=bs.MaKhoa WHERE Year(lh.NgayKham)='$year'and Month(lh.NgayKham)='$month' and bs.MaBacSi='".$id."'";?>
                    <h1><span><?php echo dem($conn, $sql)?></span>+</h1>
                    <h3>Lịch Hẹn Tháng này</h3>
            </div>
        </div>
    </div>
</div>
<!--hiển thị ảnh gif-->
<div id="body">
    <img src="https://static.tumblr.com/f9f4253d58950721ab4e47214ebcac39/asrymop/9P4nnlfhb/tumblr_static_tumblr_static_ck5wlz6qil4ccsgw04cwwocsw_640.gif" alt="Omar">
    <div class="box-text">
        <h1>Một chút châm ngôn</h1>
        <h2> Hào quang của y học là nó luôn tiến về phía trước, và luôn luôn có thêm nhiều điều để học. Những bệnh tật của ngày hôm nay không che phủ chân trời của ngày mai, mà thúc đẩy nỗ lực lớn hơn nữa.</h2>
        <p>-- by. FStack --</p>
    </div>
    <script>
        $(function() {
            $('#body').show();
            $('.sidebar #item').click(function() {
                $('#body').hide();

            });
        });
    </script>
</div>