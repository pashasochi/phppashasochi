<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<meta name="theme-color" content="#282828"/>
<title>Аналитические материалы по фин. сектору</title>
<meta name="author" content="Website">
<meta name="description" content="Аналитические материал">
<meta name="keywords" content="Аналитические материал">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="Аналитические материал">
<meta property="og:image" content="preview.html">
<meta property="og:site_name" content="page">
<meta property="og:title" content="page">
<meta property="og:type" content="website">
<meta property="og:url" content="http://Аналитические материал">

<!-- FAVICON FILES -->
<link href="ico/favicon.png" rel="shortcut icon">


<style type="text/css">

.form-horizontal{
 padding-bottom: 40px;
 border-radius: 15px;
 text-align: center;
}
.form-horizontal .heading{
 display: block;
 font-size: 35px;
 font-weight: 700;
 border-bottom: 1px solid #f0f0f0;
 margin-bottom: 30px;
}
.form-horizontal .form-group{
 padding: 0 40px;
 margin: 0 0 25px 0;
 position: relative;
}
.form-horizontal .form-control{
 background: #f0f0f0;
 border: none;
 border-radius: 20px;
 box-shadow: none;
 padding: 0 220px 0 45px;
 height: 40px;
 transition: all 0.3s ease 0s;
}
.form-horizontal .form-control:focus{
 background: #e0e0e0;
 box-shadow: none;
 outline: 0 none;
}
.form-horizontal .form-group i{
 position: absolute;
 top: 12px;
 left: 60px;
 font-size: 17px;
 color: #c8c8c8;
 transition : all 0.5s ease 0s;
}
.form-horizontal .form-control:focus + i{
 color: #00b4ef;
}
.form-horizontal .fa-question-circle{
 display: inline-block;
 position: absolute;
 top: 12px;
 right: 60px;
 font-size: 20px;
 color: #808080;
 transition: all 0.5s ease 0s;
}
.form-horizontal .fa-question-circle:hover{
 color: #000;
}
.form-horizontal .main-checkbox{
 float: left;
 width: 20px;
 height: 20px;
 background: #11a3fc;
 border-radius: 50%;
 position: relative;
 margin: 5px 0 0 5px;
 border: 1px solid #11a3fc;
}
.form-horizontal .main-checkbox label{
 width: 20px;
 height: 20px;
 position: absolute;
 top: 0;
 left: 0;
 cursor: pointer;
}
.form-horizontal .main-checkbox label:after{
 content: "";
 width: 10px;
 height: 5px;
 position: absolute;
 top: 5px;
 left: 4px;
 border: 3px solid #fff;
 border-top: none;
 border-right: none;
 background: transparent;
 opacity: 0;
 -webkit-transform: rotate(-45deg);
 transform: rotate(-45deg);
}
.form-horizontal .main-checkbox input[type=checkbox]{
 visibility: hidden;
}
.form-horizontal .main-checkbox input[type=checkbox]:checked + label:after{
 opacity: 1;
}
.form-horizontal .text{
 float: left;
 margin-left: 7px;
 line-height: 20px;
 padding-top: 5px;
 text-transform: capitalize;
}
.form-horizontal .btn{
 float: center;
 font-size: 14px;
 color: #fff;
 background: #00b4ef;
 border-radius: 30px;
 padding: 10px 25px;
 border: none;
 text-transform: capitalize;
 transition: all 0.5s ease 0s;
}
@media only screen and (max-width: 479px){
 .form-horizontal .form-group{
 padding: 0 25px;
 }
 .form-horizontal .form-group i{
 left: 45px;
 }
 .form-horizontal .btn{
 padding: 10px 20px;
 }
}

</style>




</head>
<body style="background-image: url(back.png);">



<?php
require_once 'php/PHPMailer.php';
require_once 'php//SMTP.php';
require_once 'php//Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//проверяем, существуют ли переменные в массиве POST


if(!isset($_POST['fio']) and !isset($_POST['email']))

{ 

echo '
<div id="box" class="container" style="" >
<p style="text-align:center"><img src="image1.png">
 <div class="row"> <div class="col-md-offset-3 col-md-6">
 <form action="index.php" method="post" class="form-horizontal">
 <span class="heading">Мы готовим аналитические материалы по фин. сектору. <br>Если у Вас есть предложения, то заполните форму ниже:</span>
 <div class="form-group">
 <input name="fio" type="text" class="form-control" id="inputName" placeholder="Ваше имя" size="30" >
 <i class="fa fa-user"></i>
 </div>

 <div class="form-group">
 <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Адрес эл. почты или телефон" size="30">
 <i class="fa fa-user"></i>
 </div>



 <button type="submit" class="btn btn-default" style="cursor: pointer">Отправить</button>
 </div>
 </form>
<p style="text-align:center"><img src="image2.png">

 </div>
';

} else {
 //отправляем форму
 $fio = $_POST['fio'];
 $email = $_POST['email'];
 $fio = htmlspecialchars($fio);
 $email = htmlspecialchars($email);
 $fio = urldecode($fio);
 $email = urldecode($email);
 $fio = trim($fio);
 $email = trim($email);





$from = 'mail@synergy-market.ru';
$to = 'a300933@yandex.ru';

$mail = new PHPMailer();

$mail->isSMTP();

$mail->CharSet = 'UTF-8';
$mail->SMTPDebug = 0;
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'zaglushka2020@yandex.ru';
$mail->Password = '12345678!!!';
$mail->setFrom("zaglushka2020@yandex.ru", "Страница заглушка");
$mail->addAddress("sysoevpa@mail.ru");

$subject = "Сообщение со страницы заглушки";

$mail->Subject = $subject;

$message = "Получены следующие данные: Имя:" .$fio. ", Эл. адрес/телефон: " .$email . "\r\n";

$mail->Body = $message;


 if ($mail->send()){
// echo "Сообщение успешно отправлено";

echo '
<div id="box" class="container" style="">
<p style="text-align:center"><img src="image1.png">

 <div class="row">

 <div class="col-md-offset-3 col-md-6">
 <form action="index.php" method="get" class="form-horizontal">
 <span class="heading">Сообщение успешно отправлено. <br>Мы свяжемся с вами в ближайшее время</span>
 <button type="submit" class="btn btn-default" style="cursor: pointer;">Вернуться на главную</button>

 </div>
 </form>
<p style="text-align:center"><img src="image2.png">

 </div>

';




 } else {
echo '
<div id="box" class="container" style="">
<p style="text-align:center"><img src="image1.png">

 <div class="row">

 <div class="col-md-offset-3 col-md-6">
 <form action="index.php" method="get" class="form-horizontal">
 <span class="heading" style="color:red;">При отправки сообщения возникли ошибки. <br> Напишите нам по адресам указаных на странице Контакты</span>
 <button type="submit" class="btn btn-default" style="cursor: pointer">Вернуться на главую</button>

 </div>
 </form>
<p style="text-align:center"><img src="image2.png">

 </div>


';
 }

}





?>


</body>
</html>
