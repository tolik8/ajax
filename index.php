<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AJAX</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php
    require 'set_ini.php';
    require 'pdo.php';
    $login = 'user';
?>

    <span id="login" class="hide"><?=$login?></span>
    <p><span id="tel_1">(xxx) xxx-xx-xx</span> <span id="getTel_1" class="getInfo">get</span></p>
    <p><span id="tel_2">(xxx) xxx-xx-xx</span> <span id="getTel_2" class="getInfo">get</span></p>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>