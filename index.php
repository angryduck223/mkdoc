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
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mkdoc</title>
        <script>

        function dayHandler(self){
            var target = document.querySelector('body');
            if (self.value === 'dark') {
                target.style.backgroundColor = 'black';
                target.style.color = 'white';
                self.value = 'light';
                
                var list = document.querySelectorAll('a');
                for (var i = 0; i < list.length; i++) {
                    list[i].style.color = 'antiquewhite'
                }
            } else {
                target.style.backgroundColor = 'antiquewhite';
                target.style.color = 'black';
                self.value = 'dark';
                
                var list = document.querySelectorAll('a');
                for (var i = 0; i < list.length; i++) {
                    list[i].style.color = 'black'
                }
            }
        }
    </script>
</head>
<body>
    <h1><a href="index.php">web22</a></h1>
    <ol>
        <?php printList(); ?>
    </ol>
    <h2>
        <?php printTitle(); ?>  
    </h2>
    <?php printContent(); ?>
</body>
</html>