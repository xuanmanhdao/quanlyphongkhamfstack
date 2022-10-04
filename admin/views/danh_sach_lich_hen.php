<?php
if (isset($_POST['timkiem'])) {
    $page_title = 'Trang chủ';
    $thisPage = 'index';
    include "../public/includes/header.php";
}
?>
<?php
require '../controllers/connect.php';
if (isset($_POST['timkiem'])) {
    $sdt = $_POST['timkiemsdt'];
    $ten =  $_POST['timkiemten'];
    if ($sdt != "" && $ten == "") {

        $sqlsl = "SELECT MaLichHen, TenKhachHang,SDT,k.TenKhoa,DiaChi,NgayKham,ThoiGian,MoTa FROM lichhen lh,khoa k WHERE lh.MaKhoa = k.MaKhoa and SDT = '" . $sdt . "'";
        $resultl = mysqli_query($conn, $sqlsl);
    } else if ($ten != "" && $sdt == "") {
        $sqlsl = "SELECT MaLichHen, TenKhachHang,SDT,k.TenKhoa,DiaChi,NgayKham,ThoiGian,MoTa FROM lichhen lh,khoa k WHERE lh.MaKhoa = k.MaKhoa and TenKhachHang like '%" . $ten . "%'";
        $resultl = mysqli_query($conn, $sqlsl);
    } else if ($ten != "" && $sdt != "") {
        $sqlsl = "SELECT  MaLichHen, TenKhachHang,SDT,k.TenKhoa,DiaChi,NgayKham,ThoiGian,MoTa FROM lichhen lh,khoa k WHERE lh.MaKhoa = k.MaKhoa and TenKhachHang like '%" . $ten . "%' and SDT = '" . $sdt . "'";
        $resultl = mysqli_query($conn, $sqlsl);
    } else {
        echo ' <script type = "text/javascript"> alert("Huế cho biết, bạn chưa nhập thông tin");</script>';
        $sqlsl = "SELECT MaLichHen, TenKhachHang,SDT,k.TenKhoa,DiaChi,NgayKham,ThoiGian,MoTa FROM lichhen lh,khoa k WHERE lh.MaKhoa = k.MaKhoa ";
        $resultl = mysqli_query($conn, $sqlsl);
    }
} else {

    $sqlsl = "SELECT  MaLichHen, TenKhachHang,SDT,k.TenKhoa,DiaChi,NgayKham,ThoiGian,MoTa FROM lichhen lh,khoa k WHERE lh.MaKhoa = k.MaKhoa Order by NgayKham desc";
    $resultl = mysqli_query($conn, $sqlsl);
}
?>
<?php
if (isset($_POST['btnXoa'])) {
    $maLH_Xoa = $_POST['txtMaLH'];
    require '../controllers/connect.php';
    $sqlsl = "DELETE FROM lichhen WHERE MaLichHen = " . $maLH_Xoa . "";
    $resultl = mysqli_query($conn, $sqlsl);
    header("location: ../views/index.php",  true,  301);
    exit;
}
?>
<?php
if (isset($_POST['timkiem'])) {
    echo '<div id="click">';
}
?>
<br>
<form action="danh_sach_lich_hen.php" method="POST" style="margin-left: 1%;">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Tìm kiếm số điện thoại" name="timkiemsdt">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Tìm kiếm tên" name="timkiemten">
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary" name="timkiem">Tìm kiếm</button>
        </div>
    </div>
</form>
<br>
<form action="../views/danh_sach_lich_hen.php" method="POST" style="margin-left: 2%;">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã lịch hẹn</th>
                <th>Tên Khách hàng</th>
                <th>Số điện thoại</th>
                <th>Khoa</th>
                <th>Địa chỉ</th>
                <th>Ngày khám</th>
                <th>Thời gian</th>
                <th>Mô tả</th>
                <th>Chức năng</th>
            </tr>
        </thead>

        <?php


        if (mysqli_num_rows($resultl) > 0) {
            $i = 1;
            while ($row = mysqli_fetch_assoc($resultl)) {
        ?>
                <tbody>
                    <input type="hidden" name="txtMaLH" value="<?= $row["MaLichHen"] ?>">
                    <td><?= $i ?></td>
                    <td><?= $row["MaLichHen"] ?></td>
                    <td><?= $row["TenKhachHang"] ?></td>
                    <td><?= $row["SDT"] ?></td>
                    <td><?= $row["TenKhoa"] ?></td>
                    <td><?= $row["DiaChi"] ?></td>
                    <td><?= $row["NgayKham"] ?></td>
                    <td><?= $row["ThoiGian"] ?></td>
                    <td><?= $row["MoTa"] ?></td>
                    <td> <a style="background-color: #6c757d; color: white; padding: 2px;" href="sua_lich_kham.php?id=<?= $row["MaLichHen"] ?>">Sửa</a>
                        <button style="background-color: #6c757d; color: white;" type="submit" name="btnXoa" onclick="return confirm('Thao tác này sẽ xóa bác sĩ.\nChọn OK để tiếp tục!');"> Xoá</button>
                    </td>
                </tbody>
        <?php
                $i++;
            }
        } else {
            echo 'danh sách rỗng!!!';
        }
        $conn->close();
        ?>
    </table>
</form>
<?php
if (isset($_POST['timkiem'])) {
    echo '<div id="click">';
}
?>
<?php
if (isset($_POST['timkiem'])) {
    include "../public/includes/footer.php";
}
?>