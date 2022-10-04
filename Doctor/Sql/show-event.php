<?php
    require_once "db.php"; 
    $sql = "SELECT * FROM lichhen lh inner join bacsi bs on bs.MaKhoa=lh.MaKhoa  where bs.MaBacSi='".$id."'ORDER BY MaLichHen";
    $result = mysqli_query($conn, $sql);
    $eventArray = array();
while ($row = mysqli_fetch_assoc($result)) {//Dữ liệu trả về sẽ có dạng: Array(‘tên_field1’=>giá trị 1,);
    $eventsArray['id'] =  $row['MaLichHen'];
    $time = strtotime($row['ThoiGian']);
    $eventsArray['title'] = date('H:i', $time).'  '.$row['TenKhachHang'];
    $eventsArray['start'] = $row['NgayKham'];
    $eventsArray['description'] = '<center>'.date('H:i', $time).'  '.$row['TenKhachHang'].'<br>Bệnh: '.$row['MoTa'].'</center>';
    $events[] = $eventsArray;
}mysqli_close($conn);
echo json_encode($events);//Để conver $events thành định dạng JSON để truyền vào fullcalendar
//(Hàm json_encode trả về giá trị đã encode JSON, trường hợp xử lý lỗi sẽ trả về FALSE.)
//(Tất cả các string data convert phải được encode thành encoding UTR-8)
?>
