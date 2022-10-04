<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title></title>
    </head>
    <body>
        <h1>Function</h1>
        <h2>parameter &amp argument</h2>
        <?php
            function sum($left, $right) {
                print($left + $right);
                print("<br>");
            }

            sum(2,4);
            sum(4,6);
        ?>
    </body>
</html>