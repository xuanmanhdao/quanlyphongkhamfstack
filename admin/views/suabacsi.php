<?php
if (isset($_POST['btnSua'])) {
    require '../controllers/connect.php';
    $ID = $_POST['txtID'];
    $SDT = $_POST['sdt'];
    $HoTen = $_POST['hoten'];
    $DiaChi = $_POST['diachi'];
    $KhoaKham = $_POST['khoakham'];
    $Email = $_POST['email'];
    $GioiTinh = $_POST['gioitinh'];
    $sql_update = "UPDATE bacsi SET TenBacSi='" . $HoTen . "',GioiTinh='" . $GioiTinh . "',SDT='" . $SDT . "',Email='" . $Email . "',DiaChi='" . $DiaChi . "',MaKhoa=" . $KhoaKham . " WHERE ID = '" . $ID . "'";
    if ($SDT != "" && $HoTen != "") {
        $result_update = mysqli_query($conn, $sql_update);
        echo ' <script type = "text/javascript"> alert("Huế cho biết bạn đã sửa thành công");</script>';
        header("location: ../views/index.php",  true,  301);
        exit;
    } else {
        echo '<script type="text/javascript">
        $(document).ready(function () {
            $("button").click(function () {
                location.reload(true);
                alert("Reloading Page");
            });
        });
    </script>';
    }
}
require '../controllers/connect.php';

$sqlsl = "SELECT * FROM khoa";
$resultl = mysqli_query($conn, $sqlsl);
$sqlsl_select = "SELECT ID,TenBacSi,GioiTinh,SDT,Email,DiaChi, MaKhoa FROM bacsi  WHERE  MaBacSi = '" . $_GET['id'] . "'";
// echo $sqlsl_select;
// die();
$result_edit = mysqli_query($conn, $sqlsl_select);
?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">THÊM</h3>
    </div>
    <?php
    if ($result_edit->num_rows > 0) { // co ban ghi kh

        while ($row = $result_edit->fetch_assoc()) {
            $makhoacu = $row['MaKhoa'];

    ?>
            <form class="" method="POST" action="suabacsi.php">
                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $row['ID'] ?>" placeholder="Nhập họ tên " name="txtID" required>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên bác sĩ</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row['TenBacSi'] ?>" placeholder="Nhập họ tên " name="hoten" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số điện thoại</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row['SDT'] ?>" placeholder="Nhập SDT " name="sdt" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gmail</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row['Email'] ?>" placeholder="Enter email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giới tính</label>
                        <?php
                        if ($row['GioiTinh'] == 'Nam') {
                        ?>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="gioitinh" value="Nam" checked>
                                <label class="form-check-label">Nam</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="gioitinh" value="Nữ">
                                <label class="form-check-label">Nữ</label>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="gioitinh" value="Nam">
                                <label class="form-check-label">Nam</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="gioitinh" value="Nữ" checked>
                                <label class="form-check-label">Nữ</label>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quê quán</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row['DiaChi'] ?>" placeholder="Nhập địa chỉ" name="diachi" required>
                    </div>
                    <div class="form-group">
                        <label>Khoa</label>
                        <select class="form-control" name="khoakham">
                            <option value="">Chọn khoa khám</option>
                            <?php
                            // $sql1 = 
                            if ($resultl > 0) {
                                while ($rowi = $resultl->fetch_assoc()) {

                            ?>

                                    <option <?php if ($makhoacu == $rowi['MaKhoa']) echo 'selected =  selected ' ?> value="<?= $rowi["MaKhoa"] ?>"><?= $rowi["TenKhoa"] ?></option>
                                <?php
                                }
                            } else {
                                ?>
                                <option value="Null">Không có dữ liệu khoa</option>
                            <?php
                                // echo "0 result";
                            }
                            ?>
                        </select>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="btnSua">Sửa</button>
                </div>
            </form>
    <?php
        }
    }
    ?>
</div>