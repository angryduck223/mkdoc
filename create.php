<?php
    require_once('lib/print.php')
?>
<?php
    require('view/top.php')
?>
    <form action="createProcess.php" method="post" class="funcSet">
        <p><input type="text" name="title" placeholder="제목을 입력해 주세요."></p>    
        <p><textarea name="contents" placeholder="내용을 입력해 주세요."></textarea></p>        
        <p><input type="submit" value="확인"></p>    
    </form>
<?php
    require('view/bottom_src.php');
?>
<?php
    require('view/bottom.php');
?>