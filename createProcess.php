<?php
    file_put_contents('data/'.$_POST['title'], $_POST['contents']);
    header('location: /index.php?id='.$_POST['title']);
?>