<?php
    require('lib/print.php');
    require('view/top.php');
?>
        <form action = "process_create.php" method = "post">
            <p><input type = "text" name = "title" placeholder = "title"></p>
            <p><textarea name = "decription" placeholder = "description"></textarea></p>
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