<?php
function dem($thang)
{
    require '../controllers/connect.php';
    //$resultl->data_seek(0);
    $sqlsl = "SELECT Month(NgayKham) as thang, COUNT(MaLichHen) as soluong FROM `lichhen` WHERE YEAR(NgayKham) =YEAR(CURDATE()) and Month(NgayKham) = '$thang'";
    $resultl = mysqli_query($conn, $sqlsl);
    while ($row = $resultl->fetch_assoc()) {
        if ($row['thang'] != null) {

            $giatri = $row['soluong'];
            return $giatri;
            //break;
            //$khoa = $row['']
        } else {
            return "0";
        }
    }
    return "lỗi ở dong 24";
}

function showKhoa($thang)
{
    require '../controllers/connect.php';
    $sql_khoa = " SELECT TenKhoa,MAX(lh.soluong) as TongSoLuong FROM khoa k ,(SELECT k.MaKhoa, COUNT(MaLichHen) as soluong FROM lichhen lh,khoa k WHERE lh.MaKhoa = k.MaKhoa and YEAR(NgayKham) =YEAR(CURDATE()) and Month(NgayKham) = " . $thang . " GROUP by k.MaKhoa) lh WHERE lh.MaKhoa = k.MaKhoa ";
    $resultl_khoa = mysqli_query($conn, $sql_khoa);
    while ($row_khoa = $resultl_khoa->fetch_assoc()) {
        if ($row_khoa['TenKhoa'] != null) {

            $giatri = $row_khoa['TenKhoa'];
            return $giatri;
        } else {
            return "Trống";
        }
    }
    return "lỗi ở dong 45";
}
?>

<div class="thongke-container" style="background-color: white;">
    <form action="" method="POST">
        <div class="row" style="margin : 1%">
            <div class="col-sm bg-white" style="background-color: #FFFFFF;">
                <div class="_thang1">
                    <div class="tieudethang" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1">Tháng 1</p>
                    </div>
                    <div class="div_thang1" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1_2"> <?= dem(1) ?> Đơn</p>

                        <div class="_tenkhoa">
                            <p>Khoa : <?= showKhoa(1) ?> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm bg-white ">
                <div class="_thang_2">
                    <div class="tieudethang" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1">Tháng 2</p>
                    </div>
                    <div class="div_thang1" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1_2"> <?= dem(2) ?> Đơn</p>
                        <div class="_tenkhoa">
                            <p>Khoa : <?= showKhoa(2) ?> </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm bg-white ">
                <div class="_thang_2">
                    <div class="tieudethang" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1">Tháng 3</p>
                    </div>
                    <div class="div_thang1" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">

                        <p class="p_thang1_2"><?= dem(3) ?> đơn</p>
                        <div class="_tenkhoa">
                            <p>Khoa : <?= showKhoa(5) ?> </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm bg-white " style="background-color: #FFFFFF;">
                <div class="_thang1">
                    <div class="tieudethang" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1">Tháng 4</p>
                    </div>
                    <div class="div_thang1" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">

                        <p class="p_thang1_2"><?= dem(4) ?> đơn</p>
                        <div class="_tenkhoa">
                            <p>Khoa : <?= showKhoa(4) ?> </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row" style="margin : 1%">
            <div class="col-sm bg-white " style="background-color: #FFFFFF;">
                <div class="_thang1">
                    <div class="tieudethang" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1">Tháng 5</p>
                    </div>
                    <div class="div_thang1" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">

                        <p class="p_thang1_2"><?= dem(5) ?> đơn</p>
                        <div class="_tenkhoa">
                            <p>Khoa : <?= showKhoa(5) ?> </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm bg-white ">
                <div class="_thang_2">
                    <div class="tieudethang" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1">Tháng 6</p>
                    </div>
                    <div class="div_thang1" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">

                        <p class="p_thang1_2"><?= dem(6)  ?> đơn</p>
                        <div class="_tenkhoa">
                            <p>Khoa : <?= showKhoa(6) ?> </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm bg-white ">
                <div class="_thang_2">
                    <div class="tieudethang" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1">Tháng 7</p>
                    </div>
                    <div class="div_thang1" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">

                        <p class="p_thang1_2"><?= dem(7)  ?> đơn</p>
                        <div class="_tenkhoa">
                            <p>Khoa : <?= showKhoa(7) ?> </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm bg-white">
                <div class="_thang_2">
                    <div class="tieudethang" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1">Tháng 8</p>
                    </div>
                    <div class="div_thang1" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">

                        <p class="p_thang1_2"><?= dem(8)  ?> đơn</p>
                        <div class="_tenkhoa">
                            <p>Khoa : <?= showKhoa(8) ?> </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row" style="margin : 1%">
            <div class="col-sm bg-white " style="background-color: #FFFFFF;">
                <div class="_thang1">
                    <div class="tieudethang" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1">Tháng 9</p>
                    </div>
                    <div class="div_thang1" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">

                        <p class="p_thang1_2"><?= dem(9) ?> đơn</p>
                        <div class="_tenkhoa">
                            <p>Khoa : <?= showKhoa(9) ?> </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm bg-white ">
                <div class="_thang_2">
                    <div class="tieudethang" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1">Tháng 10</p>
                    </div>
                    <div class="div_thang1" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">

                        <p class="p_thang1_2"><?= dem(10)  ?> đơn</p>
                        <div class="_tenkhoa">
                            <p>Khoa : <?= showKhoa(10) ?> </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm bg-white">
                <div class="_thang_2">
                    <div class="tieudethang" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1">Tháng 11</p>
                    </div>
                    <div class="div_thang1" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">

                        <p class="p_thang1_2"><?= dem(11)  ?> đơn</p>
                        <div class="_tenkhoa">
                            <p>Khoa : <?= showKhoa(11) ?> </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm bg-white">
                <div class="_thang_2">
                    <div class="tieudethang" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">
                        <p class="p_thang1">Tháng 12</p>
                    </div>
                    <div class="div_thang1" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)">

                        <p class="p_thang1_2"><?= dem(12) ?> đơn</p>
                        <div class="_tenkhoa">
                            <p>Khoa : <?= showKhoa(12) ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
?>