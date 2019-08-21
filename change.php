<?php
    if(isset($_POST['list'])){
        $content = $_POST['list'];
        $fp = foprn('list.html', 'w');
        fwrite($fp, $content);
        fclose($fp);
        echo $content;
    }
?>