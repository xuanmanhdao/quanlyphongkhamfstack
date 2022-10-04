<?php
require '../controllers/connect.php';
$sqlsl_select = "SELECT MaBacSi,TenBacSi,GioiTinh,SDT,Email,DiaChi,k.TenKhoa FROM bacsi bs ,khoa k WHERE bs.MaKhoa = k.MaKhoa";
$result_select = mysqli_query($conn, $sqlsl_select);
?>
<?php
if (isset($_POST['btnXoa'])) {
    $maBS_Xoa = $_POST['txtMaBS'];
    require '../controllers/connect.php';
    $sqlsl = "DELETE FROM bacsi WHERE MaBacSi = '" . $maBS_Xoa . "'";
    $resultl = mysqli_query($conn, $sqlsl);
    $sqlsl_login = "DELETE FROM login WHERE Username = '" . $maBS_Xoa . "'";
    $resultl_login = mysqli_query($conn, $sqlsl_login);
    header("location: ../views/index.php",  true,  301 );  exit;
}
?>
<div class="div_table">
    <form action="danhsach_bacsi.php" method="post" enctype="multipart/form-data">
        <p>Danh sách thông tin Bác sĩ</p>

        <table class="table table-bordered" style="font-size: 15px; height: 100px;">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã Bác sĩ</th>
                    <th>Tên Bác sĩ</th>
                    <th>Giới tính</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Khoa</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <?php
            if (mysqli_num_rows($result_select) > 0) {
                $i = 1;
                while ($row = mysqli_fetch_assoc($result_select)) {
            ?>
                    <input type="hidden" name="txtMaBS" value="<?= $row["MaBacSi"] ?>">
                    <tbody>
                        <td><?= $i ?></td>
                        <td><?= $row["MaBacSi"] ?></td>
                        <td><?= $row["TenBacSi"] ?></td>
                        <td><?= $row["GioiTinh"] ?></td>
                        <td><?= $row["SDT"] ?></td>
                        <td><?= $row["Email"] ?></td>
                        <td><?= $row["DiaChi"] ?></td>
                        <td><?= $row["TenKhoa"] ?></td>
                        <td>
                            <button style="background-color: #6c757d; padding:3px;" type="menu"><a class="DieuHuong_Hue" style="background-color: #6c757d; padding:0; color: white" href="suabacsi.php?id=<?= $row["MaBacSi"] ?> ">Sửa</a></button>
                            <button style="background-color: #6c757d; padding:3px; color: white" type="submit" name="btnXoa" onclick="return confirm('Thao tác này sẽ xóa bác sĩ.\nChọn OK để tiếp tục!');"> Xoá</button>
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
            <script>
                $(document).ready(function() {
                    $('.DieuHuong_Hue').click(function() {
                        var page = $(this).attr('href');
                        $("#click").load(page);
                        return false;
                    });
                });
            </script>
        </table>
    </form>
</div>
<?php
include("tao_bac_si.php");
?>
<menu>
    <button id="updateDetails" style="width: 20%; color: white; background-color: #4c9b1a; font-size: 18px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);margin: 2%;">Tạo bác sĩ</button>
</menu>

<script>
    (function() {
        var updateButton = document.getElementById('updateDetails');
        var cancelButton = document.getElementById('cancel');

        // Update button opens a modal dialog
        updateButton.addEventListener('click', function() {
            document.getElementById('favDialog').showModal();
        });

        // Form cancel button closes the dialog box
        cancelButton.addEventListener('click', function() {
            document.getElementById('favDialog').close();
        });

    })();
</script>