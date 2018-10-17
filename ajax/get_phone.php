<?php

require '../pdo.php';

$login = $_POST['login'];
$n = $_POST['n'];

$sql = "SELECT phone FROM phones WHERE login = :login AND n = :n";
$stmt = $db->prepare($sql);
$stmt->bindParam(':login', $login);
$stmt->bindParam(':n', $n);
$stmt->execute();
$rows = $stmt->fetch();
$result = $rows['phone'];

echo $result;
