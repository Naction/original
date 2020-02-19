<?php

//やること
//データの受け取り。
// DBに保存
// topページにリダイレクト


// // ファイルの読み込み
// require_once('dbconnect.php');
// require_once('function.php');

// データの受け取り
$reserve = $_POST['reserv[time]'];
$name = $_POST['お名前'];
$tel = $_POST['電話番号'];
$mail = $_POST['メールアドレス'];
$currentTime = date("Y/m/d H:i:s");

// DBへのデータ保存
$stmt = $dbh->prepare('INSERT INTO tasks (reserv[time], お名前, 電話番号 , メールアドレス) VALUES (?, ?, ?)');
$stmt->execute([$reserve, $name, $tel, $mail, $currentTime]);

// リダイレクト
// header('location:index.php');