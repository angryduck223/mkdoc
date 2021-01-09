<?php
    require_once('lib/print.php')
?>
<?php
    require('view/top.php')
?>
<div id="funcLink">
    <a href="create.php">추가</a>
</div>
<?php
        if(isset($_GET['id'])){ ?>
            <div id="funcLink">
                <a href="update.php?id=<?=$_GET['id']?>">변경</a>
            </div>  
                <form action="deleteProcess.php" method="post">
                    <input type="hidden" name="id" value="<?=$_GET['id']?>">
                    <input type="submit" value="삭제">
                </form>
            </div>
            <?php } ?>
            <input type="button" value="켬" onclick="dayHandler(this)">
<?php
    require('view/bottom_src.php');
?>
<?php
    require('view/bottom.php');
?>