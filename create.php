<?php
    require_once('lib/print.php')
?>
<?php
    require('view/top.php')
?>
    <a href="create.php">add</a>
    <form action="createProcess.php" method="post">
        <p><input type="text" name="title" placeholder="Please enter a title."></p>    
        <p><textarea name="contents" placeholder="Please enter the contents."></textarea></p>        
        <p><input type="submit" value="confirm"></p>    
    </form>
        <input type="button" value="dark" onclick="dayHandler(this)">
<?php
    require('view/bottom_src.php');
?>
<?php
    require('view/bottom.php');
?>