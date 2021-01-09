<?php
    require_once('lib/print.php')
?>
<?php
    require('view/top.php')
?>
    <a href="create.php">추가</a>
    <?php
        if(isset($_GET['id'])){ ?>
            <a href="update.php?id=<?=$_GET['id']?>">rev</a>
    <?php } ?>
    <form action="updateProcess.php" method="post">
        <input type="hidden" name="oldtitle" value="<?=$_GET['id']?>">
        <p><input type="text" name="title" value="<?php printTitle() ?>" placeholder="제목을 입력해 주세요."></p>    
        <p><textarea name="contents" placeholder="내용을 입력해 주세요."><?php printContent() ?></textarea></p>
        <p><input type="submit" value="확인"></p>    
    </form>
    <input type="button" value="켬" onclick="dayHandler(this)">
<?php
    require('view/bottom_src.php');
?>
<?php
    require('view/bottom.php');
?>