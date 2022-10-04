<?php require "Sql/db.php";?>
<div class="sidebar">
    <center>
        <img src="https://www.thuongxa.net/logos/profile/bac-si-huy-an-logo-cabramatta-nsw-422.jpg" class="profile_image" alt=""/>
        <?php    
        $sql = "SELECT * FROM bacsi Where MaBacSi='".$id."'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) :
            // output dữ liệu trên trang
            $row = $result->fetch_assoc()?>
        <h4> <?php echo ($row['TenBacSi']) ?></h4>
        <?php endif; ?>
    </center>
    <a id="item" href="home"><i class="bi bi-house-door"></i><span>Trang Chủ</span></a>
    <a id="item"href="calendar"><i class="bi bi-calendar-event"></i><span>Lịch hẹn</span></a>
    <a id="item"href="list"><i class="bi bi-list-columns-reverse"></i><span>Danh sách hẹn</span></a>
    <a id="item"href="about"><i class="bi bi-info-circle"></i><span>Thông tin cá nhân</span></a>
    <a id="out"href="view/DoiPass.php"><i class="bi bi-key"></i><span>Đổi Mật Khẩu</span></a>

</div>
   <script> 
                $('.sidebar #item').click(function(){//sự kiện click vào thẻ a 
               var page= $(this).attr('href');//lấy chuổi trong href
               $("#click").load('view/'+page+'.php');//show dữ liệu vào thẻ div click từ tệp php tương ứng thẻ a chọn
               return false;
                });
         
         </script>
