<?php

require '../pdo.php';

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$n = filter_input(INPUT_POST, 'n', FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT phone FROM phones WHERE login = :login AND n = :n";
$stmt = $db->prepare($sql);
$stmt->bindParam(':login', $login);
$stmt->bindParam(':n', $n);
$stmt->execute();
$rows = $stmt->fetch();
$array = ['phone' => $rows['phone']];
$json = json_encode($array);

//echo $rows['phone'];
echo $json;