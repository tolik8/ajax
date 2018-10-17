<?php

$dbHost     = 'localhost';
$dbName     = 'test';
$dbUsername = 'test';
$dbPassword = '';
$dbCharset  = 'utf8';
$dbDSN      = 'mysql:host='.$dbHost.';dbname='.$dbName.';charset='.$dbCharset;

$dbOptions = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$db = new PDO($dbDSN, $dbUsername, $dbPassword, $dbOptions);
