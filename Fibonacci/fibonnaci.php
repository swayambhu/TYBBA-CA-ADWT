<?php
    $num = 10;
    $a = 0;
    $b=1;
    echo "$a <br/>$b<br/>";
    for($i  = 1; $i <= $num-2; $i++){
        echo $c = $a + $b;
        $a = $b;
        $b = $c;
        echo "<br/>";
    }

?>