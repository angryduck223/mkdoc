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
    <a href="create.php">add</a>
    <?php
        if(isset($_GET['id'])){ ?>
            <a href="update.php?id=<?=$_GET['id']?>">rev</a>
            <form action="deleteProcess.php" method="post">
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <input type="submit" value="remove">
            </form>
            <?php } ?>
    <div id="funcbar">
        <input type="button" value="dark" onclick="dayHandler(this)">
    </div>
    <script src="index.js"></script>
</html>