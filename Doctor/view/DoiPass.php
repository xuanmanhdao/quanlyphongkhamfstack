<script type='text/javascript' src='http://code.jquery.com/jquery-2.0.2.js'></script>

<div class="wrapper login">
    <div class="container">
        <div class="col-left">
            <div class="login-text">

                <h2>Xin Chào</h2>
                <p>Nếu Không Có Nhu Cầu Đổi<br>Bấm Nút Quay Lại.</p>
                <a href="../index.php" class="btn">Quay Lại</a>
            </div>
        </div>

        <div class="col-right">
            <div class="login-form">
                <h2>
                    <center>Đổi Mật Khẩu</center>
                </h2>
                <form id="pass_form">
                    Mật Khẩu cũ<br>
                    <input type="password" name="passwordOld" id="passwordOld" required> Mật Khẩu mới<br>
                    <input type="password" name="passwordNew" id="passwordNew" required>
                    <input type="button" name="button" id="button" value="Submit" />
                </form>
                <div id="message"></div>
                </form>
                <a href="../../logout.php">Đăng Xuất</a>
            </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(function() {
        $('#button').click(function() {//tạo 1 sự kiện click
            $.ajax({
                url: "../Sql/ChangePass.php",//địa chỉ gửi dữ liệu đi
                method: "POST",//phương thức gửi dữ liệu
                data: $('#pass_form').serialize(),//lấy tất cả dữ liệu input từ trong form 
                success: function(data) {//nếu gửi dữ liệu thành công 
                    $('#message').fadeIn().html(data);//trả về kết quả php vào thẻ div message
                    setTimeout(function() {//xét khoảng thời gian sau thực thi thành công
                        $("#passwordOld").val("");//
                        $("#passwordNew").val("");//xóa input 
                        $('#message').fadeOut("slow");//ẩn đi
                    }, 2000);//với thời gian 2000s
                }
            });

        });
    });
</script>
<style>
    .wrapper {
        margin: 0 auto;
        width: 100%;
        max-width: 1140px;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    
    .container {
        position: relative;
        width: 100%;
        max-width: 600px;
        height: auto;
        display: flex;
        background: #ffffff;
        box-shadow: 0 0 5px #1cff67;
    }
    
    .login .col-left,
    .login .col-right {
        padding: 30px;
        display: flex;
    }
    
    .login .col-left {
        width: 60%;
        clip-path: polygon(0 0, 0% 100%, 100% 0);
        background: #44c7f5;
    }
    
    .login .col-right {
        padding: 60px 30px;
        width: 50%;
        margin-left: -10%;
    }
    
    .login .login-text {
        position: relative;
        width: 100%;
        color: #ffffff;
    }
    
    .btn {
        padding: 7px 20px;
        font-size: 16px;
        text-decoration: none;
        border-radius: 30px;
        color: #ffffff;
        background: linear-gradient(to right, #01acac, #01dbdf);
    }
    
    .login .btn:hover {
        color: #ffffff;
        background: linear-gradient(to right, #ad0202, #f59c9c);
    }
    
    a:hover {
        color: #ffffff;
        padding: 7px 20px;
        background: linear-gradient(to right, #ad0202, #f59c9c);
        border-radius: 30px;
        text-decoration: none;
    }
    
    #button {
        background: rgb(6, 205, 255);
        margin-top: 20px;
        margin-left: 10px;
    }
    
    #button:hover {
        background: linear-gradient(to right, #01a9ac, #01dbdf);
    }
    
    .login .login-form {
        position: relative;
        width: 100%;
    }
    
    .login .login-form h2 {
        margin: 0 0 15px 0;
        font-size: 22px;
        font-weight: 700;
    }
    
    .login .login-form p {
        margin: 0 0 10px 0;
        text-align: left;
        color: #666666;
        font-size: 15px;
    }
    
    .login .login-form input {
        width: 100%;
        height: 35px;
        padding: 0 10px;
        outline: none;
        border: 1px solid #cccccc;
        border-radius: 30px;
    }
</style>