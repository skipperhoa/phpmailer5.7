<?php
//require("PHPMailerAutoload.php");
require("class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "nguyenthanhhoa.com@gmail.com";  // SMTP username
$mail->Password = "Hoa0975595084"; // SMTP password

$mail->From = "nguyenthanhhoa.com@gmail.com";
$mail->FromName = "thanhhoa";
$mail->AddAddress("thanhhoacth2013@gmail.com", "thanh hoa");
//$mail->AddAddress("ellen@example.com");                  // name is optional
//$mail->AddReplyTo("info@example.com", "Information");
/*
$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name

*/
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$table = "<html><head><title>Đơn hàng</title><style>table {
    border-collapse: collapse;
  }
  table td, table th {
    border: 1px solid black;
  }
  table tr:first-child th {
    border-top: 0;
  }
  table tr:last-child td {
    border-bottom: 0;
  }
  table tr td:first-child,
  table tr th:first-child {
    border-left: 0;
  }
  table tr td:last-child,
  table tr th:last-child {
    border-right: 0;
  }</style>
  </head>
  <body>
  <table>
<tr>
    <th colspan='8'><h2>Đơn hàng mới</h2></th>
</tr>
<tr>
    <th>Khách hàng</th>
    <th>Địa chỉ</th>
    <th>Số điện thoại</th>
    <th>Sản phẩm</th>
    <th>Hình</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
</tr>
<tr>
    <td>Nguyễn Văn A</td>
    <td>Nguyễn Văn A</td>
    <td>Nguyễn Văn A</td>
    <td><img src='' height='100' width='100'></td>
    <td>Nguyễn Văn A</td>
    <td>Nguyễn Văn A</td>
    <td>Nguyễn Văn A</td>
    <td>Nguyễn Văn A</td>
</tr>

</table></body></html>";
$mail->Body    = $table;
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. 
";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>