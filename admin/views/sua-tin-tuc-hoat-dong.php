<?php
$page_title = 'Trang chủ';
$thisPage = 'index';
include "../public/includes/header.php";
require '../controllers/connect.php';
$ID_BaiViet = (isset($_GET['ID'])) ? $_GET['ID'] : "";
// Select
$sql_selectChiTiet = "Select * from tintuc where ID_Baiviet=$ID_BaiViet";
$result_selectChiTiet = $conn->query($sql_selectChiTiet);
// Update
?>
<!-- Box Comment -->
<div id="click">
    <?php
    if ($result_selectChiTiet->num_rows > 0) {
        // output data of each rows
        while ($row_SelectChiTiet = $result_selectChiTiet->fetch_assoc()) {
    ?>
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">THÊM</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="../controllers/update-TinTuc.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="hidden" name="ID_BaiViet_Sua" value="<?php echo $row_SelectChiTiet['ID_BaiViet']; ?>">
                            <label for="exampleInputEmail1">Tiêu đề</label>
                            <input type="text" name="txtTitle" class="form-control" id="exampleInputEmail1" value="<?php echo $row_SelectChiTiet['TieuDe']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội dung</label>
                            <textarea class="form-control" name="txtPostContent" id="content_post" cols="30" rows="10" required><?php echo $row_SelectChiTiet['NoiDung']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Ảnh thumbnail</label>
                            <input type="hidden" name="AnhThumbnail_Old" value="<?= $row_SelectChiTiet["AnhThumbnail"] ?>">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="fileToUpload" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            <span class="d-flex flex-row justify-content-end align-item-center">
                                <p>Ảnh thumbnail cũ:</p>
                                <img style="width: 100px;" src="<?= $row_SelectChiTiet["AnhThumbnail"] ?>" alt="Ảnh lỗi" />
                            </span>
                            <script>
                                // Thêm mã sau nếu bạn muốn tên của tệp xuất hiện trên select
                                $(".custom-file-input").on("change", function() {
                                    var fileName = $(this).val().split("\\").pop();
                                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                });
                            </script>
                        </div>
                        <div class="form-check">
                            <?php
                            if ($row_SelectChiTiet['Is_Public'] == 1) {
                            ?>
                                <input type="checkbox" name="chkIsPublic" class="form-check-input" id="exampleCheck1" value="1" checked>
                            <?php
                            } else if ($row_SelectChiTiet['Is_Public'] == 0) {
                            ?>
                                <input type="checkbox" name="chkIsPublic" class="form-check-input" id="exampleCheck1" value="1">
                            <?php
                            } else {
                            ?>
                                <input type="checkbox" name="chkIsPublic" class="form-check-input" id="exampleCheck1" value="1">
                            <?php
                            }
                            ?>
                            <label class="form-check-label" for="exampleCheck1">Công khai</label>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
            <script src="../public/ckeditor/ckeditor.js"></script>
            <script>
                // Thay thế <textarea id="post_content"> với CKEditor
                CKEDITOR.replace('content_post'); // tham số là biến name của textarea
            </script>
    <?php
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>
<!-- /.card -->
<?php include "../public/includes/footer.php"; ?>