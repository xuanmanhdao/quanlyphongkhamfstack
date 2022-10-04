<?php require '../Sql/db.php'; ?>

<style>
    #search {
        background-image: url('/css/searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
        box-shadow: 0 2px 4px 0 rgb(84, 85, 83);
    }
    
    .mytable h3 {
        margin-top: 1px;
        margin-bottom: 15px;
    }
    
    #myTable {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
        font-size: 18px;
        box-shadow: 0 2px 4px 0 rgb(84, 85, 83);
    }
    
    #myTable th,
    #myTable td {
        text-align: left;
        padding: 12px;
    }
    
    #myTable tr {
        border-bottom: 1px solid #ddd;
    }
    
    #myTable tr.header,
    #myTable tr:hover {
        background-color: #f1f1f1;
    }
    .notfound{
            display: none;
          }
</style>
<div class="mytable">
    <center>
        <h3>Danh Sách Bệnh Nhân Hẹn Lịch</h3>
    </center>
    <input type="text" id="search"  placeholder="Nhập Từ khóa tìm kiếm.." title="Tìm Kiếm Bệnh Nhân">
    <table id="myTable">
          <thead>
          <tr class="header">
          <th>STT</th>
          <th>Tên bệnh nhân</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Ngày khám</th>
            <th>Thời Gian</th>
            <th> Bệnh</th>
          </tr>
          </thead>
          <tbody>
            
          <?php
                    $query = "SELECT * FROM lichhen lh inner join khoa k on lh.MaKhoa=k.MaKhoa inner join bacsi bs on bs.MaKhoa=k.MaKhoa WHERE bs.MaBacSi= '".$id."'";
                $result = mysqli_query($conn, $query);
            if ($result->num_rows > 0) :
                $stt = 1;
                while ($array = mysqli_fetch_row($result)):
                    ?>
            <tr>
            <td>  <?php echo $stt++; ?></td>
                <td>
                    <?php echo $array[1]; ?>
                </td>
                <td>
                    <?php echo $array[2]; ?>
                </td>
                <td>
                    <?php echo $array[4]; ?>
                </td>
                <td>
                    <?php echo $array[5]; ?>
                </td>
                <td>
                    <?php echo $array[6]; ?>
                </td>
                <td>
                    <?php echo $array[7]; ?>
                </td>
            </tr>
                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>           
             <tr class='notfound'>
              <td colspan="7" rowspan="1" headers=""><center>Không có dữ liệu phù hợp</center></td>  
            </tr>
          </tbody>
        </table>
        <!-- Script -->
        <script type='text/javascript'>
            $(document).ready(function(){
           // tìm kiếm trên cột tên
                $('#search').keyup(function(){
                   // Tìm kiếm văn bản
                    var search = $(this).val();
                  // Ẩn tất cả các hàng trong bảng
                    $('table tbody tr').hide();
                    // Đếm tổng kết quả tìm kiếm
                    var len = $('table tbody tr:not(.notfound) td:contains("'+search+'")').length;
                    if(len > 0){
                     // Tìm kiếm văn bản trong các cột và hiển thị hàng đối sánh
                      $('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
                          $(this).closest('tr').show();
                      });
                    }else{
                      $('.notfound').show();
                    }
                    
                });
               
            });

            // Tìm kiếm không phân biệt chữ hoa chữ thường (có thể xóa)
            $.expr[":"].contains = $.expr.createPseudo(function(arg) {
                return function( elem ) {
                    return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
                };
            });
        </script>
    </body>
</html>
