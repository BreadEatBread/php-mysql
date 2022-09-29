<?php
$name = $_GET['name'];
$address = $_GET['address'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
    </head>
    <body>
        안녕하세요. <?= $address; ?>에 사시는 <?= $name; ?>님
    </body>
</html>