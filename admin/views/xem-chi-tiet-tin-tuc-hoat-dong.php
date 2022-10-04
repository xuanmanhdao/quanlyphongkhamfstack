<?php
$page_title = 'Trang chủ';
$thisPage = 'index';
include "../public/includes/header.php";
require '../controllers/connect.php';
$ID_BaiViet = (isset($_GET['ID'])) ? $_GET['ID'] : "";
// Select
$sql_selectChiTiet = "Select * from tintuc where ID_Baiviet=$ID_BaiViet";
$result_selectChiTiet = $conn->query($sql_selectChiTiet);
?>
<!-- Box Comment -->
<div id="click">
    <div class="card card-widget">
        <?php
        if ($result_selectChiTiet->num_rows > 0) {
            // output data of each rows
            while ($row_SelectChiTiet = $result_selectChiTiet->fetch_assoc()) {
        ?>
                <div class="card-header">
                    <div class="user-block">
                        <img class="img-circle" src="../public/dist/img/user1-128x128.jpg" alt="User Image">
                        <span class="username"><a href="#">Người đăng: <?php echo $row_SelectChiTiet['User_ID']; ?></a></span>
                        <span class="description">Chỉnh sửa lần cuối ngày: <?php echo $row_SelectChiTiet['Ngay_Sua']; ?></span>
                    </div>
                    <!-- /.user-block -->
                    <form action="../controllers/delete-TinTuc.php" method="post">
                        <div class="d-flex flex-row justify-content-end align-item-center">
                            <input type="hidden" name="ID_BaiViet_Xoa" value="<?php echo $row_SelectChiTiet['ID_BaiViet']; ?>">
                            <a href="sua-tin-tuc-hoat-dong.php?ID=<?php echo $row_SelectChiTiet['ID_BaiViet'];?>" class="btn btn-primary" style="margin-right: 0.625rem;" onclick="return confirm('Thao tác này sẽ sửa bài viết.\nChọn OK để tiếp tục!');"><i class="fas fa-edit"></i> Sửa</a>
                            <button type="submit" name="btnXoa" class="btn btn-primary" onclick="return confirm('Thao tác này sẽ xóa bỏ bài viết.\nChọn OK để tiếp tục!');"><i class="fas fa-trash-alt"></i> Xóa</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="max-width: 100%;">
                    <h3 style="font-weight: bold;"><?php echo $row_SelectChiTiet['TieuDe']; ?></h3>
                    <p><?php echo $row_SelectChiTiet['NoiDung']; ?></p>
                </div>
                <!-- /.card-body -->
        <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
</div>
<!-- /.card -->
<?php include "../public/includes/footer.php"; ?>