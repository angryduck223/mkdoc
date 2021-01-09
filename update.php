<?php
    require_once('lib/print.php')
?>
<?php
    require('view/top.php')
?>
    <a href="create.php">add</a>
    <?php
        if(isset($_GET['id'])){ ?>
            <a href="update.php?id=<?=$_GET['id']?>">rev</a>
    <?php } ?>
    <form action="updateProcess.php" method="post">
        <input type="hidden" name="oldtitle" value="<?=$_GET['id']?>">
        <p><input type="text" name="title" value="<?php printTitle() ?>" placeholder="Please enter a title."></p>    
        <p><textarea name="contents" placeholder="Please enter the contents."><?php printContent() ?></textarea></p>
        <p><input type="submit" value="confirm"></p>    
    </form>
    <input type="button" value="dark" onclick="dayHandler(this)">
<?php
    require('view/bottom_src.php');
?>
<?php
    require('view/bottom.php');
?>