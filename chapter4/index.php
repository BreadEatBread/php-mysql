<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>

        </title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href="index.php?id=HTML">HTML</a></li>
            <li><a href="./?id=CSS">CSS</a></li> <!-- 자기 자신폴더를 뜯하는 ./ 를 사용 -->
            <li><a href="?id=JavaScrit">JavaScript</a></li> <!-- 자기자신은 생략 가능 바로 ?=id ... 적어도 자동으로 자기자신에게 연결 -->
            <li><a href="#title">Title</a></li> <!-- title 이란 id 변수로 바로 이동 -->
        </ol>

        <h2 id="title">
            <?php
                echo $_GET['id']??'HTML';
            ?>
        </h2>
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
            dolore egoing eu fugiat nulla pariatur. Excepteur sint occaecat cupodatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum.
    </body>
</html>