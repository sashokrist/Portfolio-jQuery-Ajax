<?php
    if(isset($_POST['order'])){
        $content = $_POST['order'];
        $fp = foprn('list.html', 'w');
        fwrite($fp, $content);
        fclose($fp);
    }
?>