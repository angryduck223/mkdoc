<?php
    function printTitle(){
        if(isset($_GET['id'])){
            echo $_GET['id'];
        } else {
            echo "（*＾-＾*)";
        }
    }

    function printContent(){
        if(isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
        } else {
            echo "Welcome! this is testpage";
        }
    }

    function printList(){
        $list = scandir('./data');
        for($i=0; $i<count($list); $i++){
            if($list[$i] != "."){
                if($list[$i] != ".."){
                    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <title>mkdoc</title>
</head>
<body>
    <div id="topbar">
        <h1><a href="index.php">web22</a></h1>
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
    <a href="create.php">ADD</a>
    <form action="createProcess.php" method="post">
        <p><input type="text" name="title" placeholder="Please enter a title."></p>    
        <p><textarea name="contents" placeholder="Please enter the contents."></textarea></p>        
        <p><input type="submit" value="confirm"></p>    
    </form>

    <div id="funcbar">
        <input type="button" value="dark" onclick="dayHandler(this)">
    </div>
    <script src="index.js"></script>
</html>