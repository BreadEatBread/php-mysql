<?php
    $mysqli = mysqli_connect("localhost", "root", "koreanit", "tutorials");
    $res = mysqli_query($mysqli,"SHOW TABLES FROM tutorials;");
    if(!$res) {
        echo mysqli_error($mysqli);
    }

    $row = mysqli_fetch_row($res);
    var_dump($row);
?>