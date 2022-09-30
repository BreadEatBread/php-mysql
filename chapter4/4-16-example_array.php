<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title></title>
    </head>
    <script>
        var coworkers = ['egoing', 'leezche', 'duru', 'taeho'];
        coworkers.push('graphittie');

        for(var item of coworkers) {
            document.write(item + '<br>');
        }

        var obj = {
            egoing: 1,
            leezche: 2,
            duru: 3,
            taeho: 4,
        }
        for(var key in obj){
            document.write('${key}: ${obj[key]}<br>');
        }
    </script>
    <?php
        $coworkers = array('egoing', 'leezche', 'duru', 'taeho');
        echo $coworkers[1];
        array_push($coworkers, 'graphittie');
        foreach ($coworkers as $item) {
            var_dump($item);
        }

        $obj = array('egoing' => 1, 'leezche' => 2, 'duru' => 3, 'taeho' => 4);
        echo '<br><br>'.json_encode($obj);

        foreach ($obj as $key => $value){
            echo "<br>$key: $value";
        }
    ?>
</html>