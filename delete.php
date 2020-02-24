<?php

require_once('dbconnect.php');
require_once('function.php');


$id = $_POST['id'];

$stmt = $dbh->prepare('DELETE FROM reserves WHERE id=?');
$stmt->execute([$id]);

header('Location: index.php');