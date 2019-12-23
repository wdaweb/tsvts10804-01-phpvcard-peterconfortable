<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Calistoga|Noto+Sans+TC:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="pick/<?= $_SESSION['test']['kind'] ?>.css">
    <title>Document</title>


</head>

<body>
    <div class="contain">
        <div class=box1>
            <img src="upload/<?= $_SESSION['test']['photo'] ?>" class="photo">
            <h1 class="name"><?= $_SESSION['test']['myname'] ?></h1>
            <p class="job1"><?= $_SESSION['test']['job'] ?></p>
            <hr>
            <p class="info1"><?= $_SESSION['test']['word'] ?></p>
            <p class="mail1"><?= $_SESSION['test']['mail'] ?></p>
            <p class="phone1"><?= $_SESSION['test']['phone'] ?></p>
        </div>
        <button onclick="window.history.go(-1)" style="margin: 20px;">回頁面</button>
    </div>
</body>

</html>