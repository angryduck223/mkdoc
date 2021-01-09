<?php
    require_once('lib/print.php')
?>
<?php
    require('view/top.php')
?>
    <?php
        if(isset($_GET['id'])){ ?>
    <?php } ?>
    <form action="updateProcess.php" method="post" class="funcSet">
        <input type="hidden" name="oldtitle" value="<?=$_GET['id']?>">
        <p><input type="text" name="title" value="<?php printTitle() ?>" placeholder="제목을 입력해 주세요."></p>    
        <p><textarea name="contents" placeholder="내용을 입력해 주세요."><?php printContent() ?></textarea></p>
        <p><input type="submit" value="확인"></p>    
    </form>
<?php
    require('view/bottom_src.php');
?>
<?php
    require('view/bottom.php');
?>