<!DOCTYPE html>
<?php
    $method = $_SERVER['REQUEST_METHOD'];
    $num = $_POST['num'] ?? null;
?>
<html>
    <head>
        <meta charset = "utf-8">
        <title>
        </title>
    </head>
    <body>
        <h1><?=$method?></h1>
        <?php
            if ($method == 'POST'){
                echo "<h2>num: $num</h2>";
                goto END;
            }
        ?>
        <form method = "POST">
            <input type = "number" name = "num">
            <button>제출</button>
        </form>
        <?php END: ?>
    </body>
</html>