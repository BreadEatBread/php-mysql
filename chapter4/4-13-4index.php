<!DOCTYPE html>
<html>
    <?php 
        $id = $_GET['id']??'HTML'; 
    ?>  
    <head>
        <meta charset="utf-8">
        <title>

        </title>
    </head>
    <body>
        <h1><a href = "4-13-4index.php">WEB</a></h1>
        <ol>
            <li><a href="4-13-4index.php?id=HTML">HTML</a></li>
            <li><a href="./?id=CSS">CSS</a></li> <!-- 자기 자신폴더를 뜯하는 ./ 를 사용 -->
            <li><a href="?id=JavaScript">JavaScript</a></li> <!-- 자기자신은 생략 가능 바로 ?=id ... 적어도 자동으로 자기자신에게 연결 -->
            <li><a href="4-13-4index.php?#title">Title</a></li> <!-- title 이란 id 변수로 바로 이동 -->
        </ol>

        <h2 id="title">
            <?php
                if(isset($id)) {
                echo $id;  // $_GET['id']
                }else{
                echo "Welcome";
                }       
            ?>
        </h2>
        <?php
            echo file_get_contents("data/$id"); // 메인화면에 자동으로 data 폴더안의 $id에 해당하는 파일내용 띄워두기
        ?>
    </body>
</html>