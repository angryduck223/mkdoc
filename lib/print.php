<?php
    function printTitle(){
        if(isset($_GET['id'])){
            echo htmlspecialchars($_GET['id']);
        } else {
            echo "해당 페이지는 윈도우10을 쾌적하게 사용하기 위한 방법들을 공유하기 위해 제작 되었습니다";
        }
    }

    function printContent(){
        if(isset($_GET['id'])){
            $basename = basename($_GET['id']);
            echo htmlspecialchars(file_get_contents("data/".$basename));
        } else {
            echo "문서 읽는 순서- <br>";
            echo "- 초기 설정 > 탐색기 설정 > 제어판 설정 > 앱 설정 + 추가 설정(선택 사항)<br>";
            echo "적용 시간<br>";
            echo "- 15 ~ 20분";
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