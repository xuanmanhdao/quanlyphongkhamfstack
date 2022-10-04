<?php
require '../controllers/connect.php';
$sql_selectTin = "Select * from tintuc order by Ngay_Sua Desc";
$result_selectTin = $conn->query($sql_selectTin);
?>
<!-- End select -->
<div class="container-fluid">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Xem</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <?php
                if ($result_selectTin->num_rows > 0) {
                    // output data of each row
                    while ($row = $result_selectTin->fetch_assoc()) {
                ?>
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2">
                                <img class="card-img-top" style="height: 40vh; object-fit: cover;" src="<?php echo "{$row['AnhThumbnail']}"; ?>" alt="Ảnh lỗi">
                                <div class="card-img-overlay d-flex flex-column justify-content-end align-item-end TestThu" style="max-width: 100%; background-color: rgba(0, 0, 0, 0.3); color: #fff;">
                                    <h5 class="card-title" style="font-weight: bold;"><?php echo "{$row['TieuDe']}"; ?></h5>
                                    <p class="card-text pb-1 pt-1">Ngày cập nhật cuối:<?php echo "{$row['Ngay_Sua']}"; ?></p>
                                    <a href="xem-chi-tiet-tin-tuc-hoat-dong.php?ID=<?php echo $row['ID_BaiViet'];?>" class="btn btn-primary stretched-link">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </div>
</div>