<?php
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
    // echo '<prE>';
    // print_r($_POST);
    $chuDe='Thông báo FStack';
    $mailKH=$_POST['email'];
    $contentMail="Xin chào $mailKH. Phòng khám FStack là phòng khám chuyên khoa hạng I của thành phố trong lĩnh vực Sản Phụ Khoa và Kế hoạch hóa gia đình. Với sứ mệnh 'Phát triển, bảo vệ và giữ gìn sức khỏe phụ nữ và trẻ em Việt Nam', các y bác sỹ bệnh viện đã cùng nhau tạo ra những điều kì diệu trong suốt 40 năm nỗ lực phát triển.";
    //Import PHPMailer classes into the global namespace
    require 'PHPMailer.php';
    require 'SMTP.php';
    require 'Exception.php';
    $mail = new PHPMailer(true);
    try {
        //Server settings
      //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'thongbao555@gmail.com';                     //SMTP username
        $mail->Password   = 'Haynho123';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet="UTF-8";
        //Recipients
        $mail->setFrom('thongbao555Test@gmail.com', 'Phòng khám FStack');
        $mail->addAddress($_POST['email']);     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo('thongbao555@gmail.com', 'Phòng khám FStack');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        $mail->addAttachment('../asset/img/bac-si.jpg', 'FStack.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $chuDe;
        $mail->Body    = $contentMail;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        Header('Location: ../index.php');
    } catch (Exception $e) {
        echo "Không thể gửi email. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
