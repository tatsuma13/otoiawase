<?php
$error =array();

if(isset ($_POST["verification"]) && $_POST["verification"]){
}
elseif(!empty($_POST["fullname"])){
        $error[] = "Is blank！";
    }
    elseif(!empty($_POST["add"])){
        $error[] = "Is blank！";
    }
    elseif(!empty($_POST["email"])){
        $error[] = "Is blank！"; 
    }
    elseif(!empty($_POST["age"])){
        $error[] = "Is blank！"; 
    }
   elseif(!empty($_POST["gender"])){
        $error[] = "Please check";
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
   
<!--入力画面-->
<div class="top">
    <h1>CONTACT</h1>
</div>

<div class="first">
<form action="./toiawase2.php" method="POST">

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
<input type="number" name="age" value="<?php $_SESSION["age"]?>"></p><br>
<br>
<p>Gender<br>
<input type="radio" name="gender" value="Man">Man
<input type="radio" name="gender" value="Woman">Woman</p>
<br>

<input type="submit" name="verification" value="Confirm >>">





</form>
</div>

</body>
</html>