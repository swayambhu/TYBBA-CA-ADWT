<?php   
    session_start();
    $newt = $tm + 60;
    if($newt < time())
        echo "Time out";
    else{
        echo "ROll no =$_GET['rollNo']";
        echo "Name =$_GET['name']";
    }
    session_destroy();
?>