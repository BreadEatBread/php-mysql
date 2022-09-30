<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1><a href = "4-13-5index.php">WEB</a></h1>
        <ol>
            <li><a href="?id=HTML">HTML</a></li>
            <li><a href="?id=CSS">CSS</a></li> <!-- 자기 자신폴더를 뜯하는 ./ 를 사용 -->
            <li><a href="?id=JavaScript">JavaScript</a></li> <!-- 자기자신은 생략 가능 바로 ?=id ... 적어도 자동으로 자기자신에게 연결 -->
        </ol>

        <h2>
            <?php
                if(isset($_GET['id'])) {
                echo $_GET['id'];  // $_GET['id']
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