<?php
    require('lib/print.php');
    require('view/top.php');

    $conn = mysqli_connect('localhost', 'root', 'koreait', 'tutorials');

    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    $list = '';

    while ($row = mysqli_fetch_array($result)) {
        $lsit = $list . "<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}
$article = array(
    'title' => 'Welcome',
    'description' => 'Hello, web'
);
if ( isset($_GET['id'])) {
$sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
}
?>
        <ol><?= $list ?></ol>
        <form action = "process_create.php" method = "post">
            <p><input type = "text" name = "title" placeholder = "title"></p>
            <p><textarea name = "description" placeholder = "description"></textarea></p>
            <p><input type = "submit"></p>
        </form>
        <!-- <form action="create_process.php" method="post">
            <p>
                <input type="text" name="title" placeholder="Title" />
            </p>
            <p>
                <textarea name="description" placeholder="Description"></textarea>
            </p>
            <p>
                <input type="submit" value="Submit" />
            </p>
        </form> -->
        <h2>
            <?php
               print_title();    
            ?>
        </h2>       
            <?php
            print_description();
            ?>       
    <?php
        require('view/bottom.php');
    ?>