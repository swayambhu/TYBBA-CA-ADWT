<?php
    $num = $_POST['num1'];
    if($num){
        for($i=1; $i<=10; $i++){
            $mult = $num * $i;
            echo "$num * $i = $mult <br/>";
        }
    }else{
        echo "Invalid ENtry";
    }
?>