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
    <title>お問い合せフォーム</title>
</head>
<body>
   

<?php if ($mode == "input"){ ?>
<!--入力画面-->
<div class="top">
    <h1>CONTACT</h1>
</div>

<div class="first">
<form action="./toiawase.php" method="post">
<p>Name<br>
<input type="text" name="fullname" value="<?php $_SESSION["fullname"]?>"></p><br>
<br>
<p>Address<br>
<input type="text" name="add" value="<?php $_SESSION["add"]?>"></p><br>
<br>
<p>Email<br>
<input type="email" name="email" value="<?php $_SESSION["email"]?>"></p><br>
<br>
<p>Age<br>
<input type="text" name="age" value="<?php $_SESSION["age"]?>"> 歳</p><br>
<br>
<p>Gender<br><input type="radio" name="gender">男性
<input type="radio" name="gender">女性</p>
<br>

<input type="submit" name="verification" value="Confirm">

</form>
</div>


<?php } elseif ($mode == "verification"){?>

    <div class="kakunin">
    <h1>CONTACT</h1>
    </div>


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

<?php } else { ?>
<!--完了画面-->
<div class="third">
<p>Thank you for your inquiry</p>
<img src = "../toiawase/image.png" alt="イラスト">
</div>

<?php } ?>
</body>
</html>