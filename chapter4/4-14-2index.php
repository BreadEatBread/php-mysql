<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1><a href = "4-14-2index.php">WEB</a></h1>
        <ol>
            <li><a href="?id=HTML">HTML</a></li>
            <li><a href="?id=CSS">CSS</a></li> 
            <li><a href="?id=JavaScript">JavaScript</a></li> 
            <li><a href="?id=PHP">PHP</a></li>
        </ol>

        <h2>
            <?php
                if(isset($_GET['id'])) {
                echo $_GET['id'];  
                }else{
                echo "Welcome";
                }       
            ?>
        </h2>       
            <?php
            if(isset($_GET['id'])) {
                echo file_get_contents("data/".$_GET['id']);
            } else {
                echo "Hello, PHP";
            }
            ?>       
    </body>
</html>