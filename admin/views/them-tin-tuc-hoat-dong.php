<?php
$page_title = 'Thêm tin tức - Hoạt động';
?>
<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">THÊM</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="../controllers/insert-TinTuc.php" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tiêu đề</label>
                <input type="text" name="txtTitle" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nội dung</label>
                <textarea class="form-control" name="txtPostContent" id="content_post" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Ảnh thumbnail</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="fileToUpload" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
                <script>
                    // Add the following code if you want the name of the file appear on select
                    $(".custom-file-input").on("change", function() {
                        var fileName = $(this).val().split("\\").pop();
                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                    });
                </script>
            </div>
            <div class="form-check">
                <input type="checkbox" name="chkIsPublic" class="form-check-input" id="exampleCheck1" value="1">
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