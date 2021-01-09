<?php
    require_once('lib/print.php')
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <title>Windows10 최적화 문서</title>
</head>
<body>
    <div id="topbar">
        <h1><a href="index.php">Windows10 최적화 문서</a>
            <div class="time">00:00</div>
        </h1>
    
</div>
<div id="main">
    <div id="listbar">
        <ol>
            <?php printList(); ?>
        </ol>
    </div>
    <div id="content">
        <h2>
            <?php printTitle(); ?>
        </h2>
        <?php printContent(); ?>
    </div>
</div>
<div id="funcbar"></div>
