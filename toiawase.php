<?php
$name = isset ($_POST["name"])?$_POST["name"]:NULL;
$name2 = isset($_POST["name2"])?$_POST["name2"]:NULL;
$age = isset($_POST["age"])?$_POST["age"]:NULL;
$gender = isset($_POST["gender"])?$_POST["gender"]:NULL;










?>




<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="toiawasesheet.css">
    <title>お問い合わせフォーム</title>
</head>
<body>

<div class="first">
<h1>CONTACT</h1>
<p>お問い合わせ<br>〜以下のフォームからお問い合わせください〜</p>
</div>


<label>氏名(必須)</label><br>
<input type="text" placeholder="氏名"><br>



<label>フリガナ(必須)</label><br>
<input type="text" placeholder="フリガナ(全角)"><br>



<label>年齢(必須)</label><br>
<input type="text" placeholder="(例)32">歳<br>




<label>性別(必須)</label><br>
<input type="radio" name = "gender">男性
<input type="radio" name = "gender">女性
<br>


<input type = "checkbox" name = "mailmagazine" value = "1" checked ="checked">メールマガジンの配信希望
<br>


    
<button>送信</button>



</body>
</html>