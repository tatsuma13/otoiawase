<?php
session_start();
$mode = "input";
if(isset ($_POST["back"]) && $_POST["back"]){
    
}elseif(isset ($_POST["verification"]) && $_POST["verification"]){
    $_SESSION["fullname"] =$_POST["fullname"];
    $_SESSION["add"] =$_POST["add"];
    $_SESSION["email"] =$_POST["email"];
    $_SESSION["age"] =$_POST["age"];
    $_SESSION["gender"] =$_POST["gender"];
    $mode = "verification";

}elseif(isset ($_POST["send"]) && $_POST["send"]){
   $message = "お問い合わせを受け付けました\r\n"
            ."名前：". $_SESSION["fullname"]. "\r\n"
            ."住所：". $_SESSION["add"]. "\r\n"
            ."Eメール：". $_SESSION["email"]. "\r\n"
            ."年齢：". $_SESSION["age"]. "\r\n"
            ."性別：". $_SESSION["gender"]. "\r\n"
            .preg_replace("/\r\n|\r|\n/","\r\n",$_SESSION["message"]);
            mail($_SESSION["email"],"お問い合わせを受け付けました",$message);
            mail("onakahara1525@gamil.com","お問い合せを受け付けました","$massage");

    $_SESSION = array();
    $mode = "send";

}else {
    $_SESSION = array();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="toiawasesheet.css" >
    <title>入力画面</title>
</head>
<body>

<!--確認画面-->
<div class="second">
<form action="./toiawase.php" method="post">
<p>Name<br><?php echo $_SESSION["fullname"] ?></p><br>
<br>

<p>Address<br><?php echo $_SESSION["add"]?></p><br>
<br>

<p>Email<br><?php echo $_SESSION["email"]?></p><br>
<br>

<p>Age</p><br><?php echo $_SESSION["age"]?><p>歳</p><br>
<br>

<p>Gender<br><?php echo $_SESSION["gender"]?></p><br>
<br>

<input type="submit" name="back" value="Back">
<input type="submit" name="send" value="Submit">
</form>
</div>


</body>
</html>