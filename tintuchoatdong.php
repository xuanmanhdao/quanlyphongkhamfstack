<link rel="stylesheet" href="./asset/css/tintuchoatdong.css">
<?php
$page_title = 'Tin tức-Hoạt động';
// BƯỚC 1: KẾT NỐI CSDL
require 'admin/controllers/connect.php';
// BƯỚC 2: TÌM TỔNG SỐ RECORDS
$result = mysqli_query($conn, 'select count(ID_BaiViet) as total from tintuc where Is_Public=1');
$row = mysqli_fetch_assoc($result);
$total_records = $row['total'];

// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 6;

// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
// tổng số trang
$total_page = ceil($total_records / $limit);

// Giới hạn current_page trong khoảng 1 đến total_page
if ($current_page > $total_page) {
    $current_page = $total_page;
} else if ($current_page < 1) {
    $current_page = 1;
}

// Tìm Start
$start = ($current_page - 1) * $limit;

// BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
// Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
$sql_selectTin = "SELECT * FROM tintuc where Is_Public=1 order by Ngay_Sua Desc LIMIT $start, $limit";

// $sql_selectTin = "Select * from tintuc order by Ngay_Sua Desc";
$result_selectTin = $conn->query($sql_selectTin);
?>
<!-- Content -->

<div class="content-wrapper">
    <!-- <button onclick="window.print()">Thử in</button> -->
    <!-- Image container -->
    <div class="image-container">
        <!-- Heading -->
        <div class="content-heading">
            <h1 class="heading-text">TIN TỨC - HOẠT ĐỘNG</h1>
        </div>
        <!-- Image post -->
        <div class="image-wrap">
            <?php
            // PHẦN HIỂN THỊ TIN TỨC
            // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
            if ($result_selectTin->num_rows > 0) {
                // output data of each row
                while ($row = $result_selectTin->fetch_assoc()) {
            ?>
                    <div class="image-item">
                        <div class="post__thumbail">
                            <img class="post__thumbail-img" src="<?php echo 'admin' . substr($row['AnhThumbnail'], 2); ?>" alt="" onerror="this.onerror=null;this.src='./asset/img/ung-thu.jpg'">
                        </div>
                        <div class="post__text">
                            <h3>
                                <a class="post__title-link" style="pointer-events: auto;" href="xemtintuchoatdong.php?ID=<?php echo $row['ID_BaiViet']; ?>" role="button"><?php echo substr($row['TieuDe'], 0, 24) . " ...";?></a>
                            </h3>
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

    <div class="pagination">
        <ul class="page-list">
            <?php
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG

            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1) {
                echo '<li class="page-number"><a href="tintuchoatdong.php?page=' . ($current_page - 1) . '" class="page-number__item">&laquo;</a></li>';
            }

            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++) {
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page) {
                    echo '<li class="page-number"><a href="" class="page-number__item active">' . $i . '</a></li>';
                } else {
                    echo '<li class="page-number"><a href="tintuchoatdong.php?page=' . $i . '" class="page-number__item">' . $i . '</a>';
                }
            }

            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1) {
                echo '<li class="page-number"><a href="tintuchoatdong.php?page=' . ($current_page + 1) . '" class="page-number__item">&raquo;</a>';
            }
            ?>
        </ul>
    </div>
</div>