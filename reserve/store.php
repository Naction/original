<?php

//やること
//データの受け取り。
// DBに保存
// topページにリダイレクト


// // ファイルの読み込み
 require_once('../dbconnect.php');
 require_once('../function.php');

// データの受け取り
// $data = $_POST['reserv[time]'];
// $date = $_POST['reserv[date]'];
// reserv[time],users reserv[date],
$name = $_POST['お名前'];
$tel = $_POST['電話番号'];
$mail = $_POST['メールアドレス'];
// $currentTime = date("Y/m/d H:i:s");


// DBへのデータ保存
$stmt = $dbh->prepare('INSERT INTO users (name, tel, email) VALUES (?, ?, ?)');
$stmt->execute([$name, $tel, $mail]);


// リダイレクト
header('location:http://localhost/php/original/index.php');