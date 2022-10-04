<?php
require '../controllers/connect.php';
$sqlsl = "SELECT * FROM khoa";
$resultl = mysqli_query($conn, $sqlsl);
if (isset($_POST['add'])) {
    $SDT = $_POST['sdt'];
    $HoTen = $_POST['hoten'];
    $DiaChi = $_POST['diachi'];
    $KhoaKham = $_POST['khoakham'];
    $Email = $_POST['email'];
    $GioiTinh = $_POST['gioitinh'];
    $MaBS = idAuto($KhoaKham);
    $sql_taobs = "Insert into bacsi(MaBacSi,TenBacSi,GioiTinh,Email,SDT,MaKhoa,DiaChi) VALUES ('" . $MaBS . "' ,'" . $HoTen . "','" . $GioiTinh . "','" . $Email . "','" . $SDT . "'," . $KhoaKham . ",'" . $DiaChi . "')";
    $sql_inset_login = "INSERT INTO login(Username,Password, Quyen) VALUES ('" . $MaBS . "','1234','1')";
    if ($SDT != "" && $HoTen != "") {
        if (checkBS($KhoaKham) == true) {
            $result_taobs = mysqli_query($conn, $sql_taobs);
            $result_inset_login = mysqli_query($conn, $sql_inset_login);
            echo ' <script type = "text/javascript"> alert("Huế cho biết bạn đã nhập thành công");</script>';
            header("location: ../views/index.php",  true,  301);
            exit;
        } else {

            echo '<script type = "text/javascript"> alert("Khoa đã đủ bác sĩ");</script>';
        //     echo "<script type='text/javascript'>
        //     $(document).ready(function () {
        //         $('#btnThemBS').click(function () {
        //             location.reload(false);
        //             alert('Reloading Page');
        //         });
        //     });
        // </script>";
            header("location: ../views/index.php",  true,  301);
            exit();
        }
    } else {
        echo ' <script type = "text/javascript"> alert("Huế đẹp troia yêu cầu bạn phải nhập thông tin");</script>';
    }
}
function idAuto($KhoaKham)
{
    $a = 0;
    $MaSP = "";
    $ma = "";
    if ($MaSP == "") {
        for ($i = 0; $i < 100; $i++) {
            $a++;
            $ma = "BS" . $KhoaKham . $a;
            if (check($ma) == true) {
                $MaSP = $ma;
                return  $MaSP;
            }
        }
    }
    return "";
}
function check($id)
{
    require '../controllers/connect.php';
    $sqlsl_check = "SELECT * FROM bacsi where MaBacSi = '" . $id . "'";
    $resultl_check = mysqli_query($conn, $sqlsl_check);
    if (mysqli_num_rows($resultl_check) > 0) {
        return false;
    } else {
        return true;
    }
}
function checkBS($KhoaKham)
{
    require '../controllers/connect.php';
    $sqlsl_check2 = "SELECT * FROM bacsi where MaKhoa = '" . $KhoaKham . "'";
    $resultl_check2 = mysqli_query($conn, $sqlsl_check2);
    if (mysqli_num_rows($resultl_check2) > 0) {
        return false;
    } else {
        return true;
    }
}

?>
<dialog id="favDialog" class="dialog_form">
    <div class="thongke-container" style="background-color: white;">
        <div style="background-color: #4c9b1a; ">
            <p>Thêm thông tin Bác sĩ</p>
        </div>
        <div class="div_form">
            <div class="div_main">

                <form class="" style="margin: 5px;" method="POST" action="tao_bac_si.php">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control input__Hue" placeholder="Nhập họ tên " name="hoten">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control input__Hue" placeholder="Nhập SDT " name="sdt">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control input__Hue" placeholder="Enter email" name="email">
                        </div>
                        <div class="col">
                            <div class="" style="margin-left: 20px;">
                                <input type="radio" class="form-check-input" name="gioitinh" value="Nam" checked>Nam
                                <div>
                                    <input type="radio" class="form-check-input" name="gioitinh" value="Nữ" checked>Nữ
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control input__Hue" placeholder="Nhập địa chỉ" name="diachi">
                        </div>
                        <div class="col">
                            <select class="form-select" name="khoakham" style="font-size: 17px;">
                                <option value="">Chọn khoa khám</option>
                                <?php
                                if ($resultl > 0) {
                                    while ($rowk = $resultl->fetch_assoc()) {
                                ?>

                                        <option value="<?= $rowk["MaKhoa"] ?>"><?= $rowk["TenKhoa"] ?></option>
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
                    <button id="btnThemBS" type="submit" style="font-size: 15px;" name="add" class="btn btn-primary">Gửi</button>
                    <button type="button" id="cancel" style="font-size: 15px;" name="thoat" class="btn btn-primary">Thoát</button>

                </form>
            </div>

        </div>
    </div>
</dialog>