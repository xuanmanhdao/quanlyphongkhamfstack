<?php
  require_once "db.php";
function dem($conn, $sql)
{ 
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();//;dữ liệu dưới dạng mảng 2 chiều
          return $row['soluong']; 
    } else {
        return '0'; 
    }
}

?>
