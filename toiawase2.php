<?php
session_start();
if(isset ($_POST["verification"]) && $_POST["verification"]){
    $_SESSION["fullname"] =$_POST["fullname"];
    $_SESSION["add"] =$_POST["add"];
    $_SESSION["email"] =$_POST["email"];
    $_SESSION["age"] =$_POST["age"];
    $_SESSION["gender"] =$_POST["gender"];
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
    <title>確認画面</title>
</head>
<body>

<div class="top">
    <h1>CONTACT</h1>
</div>

<!--確認画面-->
<div class="second">
<form action="./toiawase3.php" method="post">
<p>Name<br><?php echo $_SESSION["fullname"] ?></p><br>
<br>

<p>Address<br><?php echo $_SESSION["add"]?></p><br>
<br>

<p>Email<br><?php echo $_SESSION["email"]?></p><br>
<br>

<p>Age<br><?php echo $_SESSION["age"]?></p><br>
<br>

<p>Gender<br><?php echo $_SESSION["gender"]?></p><br>
<br>

<button type="button" name="back" onclick="history.back()"><< Back</button>
<input type="submit" name="send" value="Submit >>"></input>

</form>
</div>


</body>
</html>