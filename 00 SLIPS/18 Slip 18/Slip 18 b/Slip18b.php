<?php
    $tid = $_POST['txtid'];
    $tname = $_POST['txtnm'];
    $add = $_POST['txtadd'];
    $sub = $_POST['txtsub'];
    $ch = $_POST['ch'];
    if(isset($_POST['submit'])){
        $uid = 'root';
        $pwd ='';
        $db = 'testdb';
        $con = mysqli_connect('localhost',$uid,$pwd,$db) or die('Wrong');
        echo "Great work, Connection established!";
        switch ($ch) {
            case 1:
                # code...
                $sql = "CREATE table teacher1 (tid int(5), tname varchar(20), addr varchar(20), sub varchar(20))";
                if(!mysqli_query($con, "drop table teacher")){
                    echo "Table does not exist";
                }
                if(mysqli_query($con, $sql)){
                    echo "table created";
                }
                break;
            
            case 2:
                $sql = "INSERT into teacher values($tid, '$tname', '$add', '$sub')";
                if(mysqli_query($con, $sql)){
                    echo 'New record inserted successfully';
                }else{
                    echo 'Error'.$sql.'<br/>'.mysqli_error($con);
                }
                mysqli_close($con);
                break;
            
            case 3:
                $sql = "UPDATE teacher set tname = '$tname', addr = '$add', sub ='$sub' WHERE tid = $tid";
                if(mysqli_query($con, $sql)){
                    echo 'New record updated successfully';
                }else{
                    echo 'Error'.$sql.'<br/>'.mysqli_error($con);
                }
                mysqli_close($con);
                break;

            case 4:
                $sql = "SELECT * from teacher";
                $r = mysqli_query($con, $sql);
                $n = mysqli_num_rows($r);
                for($i = 0; $i < $n; $i++){
                    $row = mysqli_fetch_assoc($r);
                    echo "<br/> Teacher ID  = ".$row["tid"]."<br/>";
                    echo "<br/> Teacher Name  = ".$row["tname"]."<br/>";
                    echo "<br/> Teacher Address  = ".$row["addr"]."<br/>";
                    echo "<br/> Teacher Subject  = ".$row["sub"]."<br/>";
                }
                mysqli_close($con);
                break;
        }

    }
?>