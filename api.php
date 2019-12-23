<?php
// print_r($_POST);

/* 用一個變數去接POST 過來的資料 */
$info=$_POST;
// print_r($info) ;

/* 將$_FILES的 資料copy*/
copy($_FILES['photo']['tmp_name'],"upload/".$_FILES['photo']['name']);

/* 將圖片路徑先存入到$info這個陣列中 */
$info['photo']=$_FILES['photo']["name"];
// print_r($info);
session_start();
/* 將$info這陣列內的所有資料換成$_SESSION的陣列 */
$_SESSION['test']=$info;

// print_r($_SESSION);

header("location:preview.php");
