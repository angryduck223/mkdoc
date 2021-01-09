<?php
    unlink('data/'.basename($_POST['id']));
    header('location: /index.php');
?>