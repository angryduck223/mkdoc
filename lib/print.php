<?php
    function printTitle(){
        if(isset($_GET['id'])){
            echo htmlspecialchars($_GET['id']);
        } else {
            echo "（*＾-＾*)";
        }
    }

    function printContent(){
        if(isset($_GET['id'])){
            echo "data/".$_GET['id'];
            echo htmlspecialchars(file_get_contents("data/".$_GET['id']));
        } else {
            echo "Welcome! this is testpage";
        }

    }
    
    function printList(){
        $list = scandir('./data');
        for($i=0; $i<count($list); $i++){
            $title = htmlspecialchars($list[$i]);
            if($list[$i] != "."){
                if($list[$i] != ".."){
                    echo "<li><a href=\"index.php?id=$title\">$title</a></li>";
                }
            }
        }
    }
?>