<?php
    require('lib/print.php')
?>
<?php
    require('view/top.php')
?>
    <form action="create.php".php" method="post">
        <input type="submit" value="추가">
    </form>
<?php
    if(isset($_GET['id'])){ ?>
    <a href="update.php?id=<?=$_GET['id']?>" class="revLink">변경</a>
    <form action="deleteProcess.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="삭제">
    </form>
<?php } ?>
<?php
    require('view/bottom_src.php');
?>
<?php
    require('view/bottom.php');
?>