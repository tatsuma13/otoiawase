<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
session_start();
$to = "onakahara1525@gmail.com";
$title = "お問い合せを受け付けました";
$message = "名前：". $_SESSION["fullname"]. "\r\n"
          ."住所：". $_SESSION["add"]."\r\n"
          ."Eメール：".$_SESSION["email"] ."\r\n" 
          ."年齢：".$_SESSION["age"] . "\r\n"
          ."性別：".$_SESSION["gender"] . "\r\n"
                  .preg_replace("/\r\n|\r|\n/","\r\n",$_SESSION["message"]);

if(mb_send_mail($to, $title, $message));

$_SESSION =array();
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="toiawasesheet.css" >
    <title>完了画面</title>
</head>
<body>

<!--完了画面-->
<div class="third">
<p>Thank you for your inquiry</p>
<img src = "../toiawase/image.png" alt="イラスト">
</div>

</body>
</html>