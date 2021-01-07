<?php
    unlink('data/'.$_POST['id']);
    header('location: /index.php');
?>