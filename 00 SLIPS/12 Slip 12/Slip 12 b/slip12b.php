<?php
$uid='root';
$pwd='';
$db='db';
$snm = $_GET['b'];
$con=mysqli_connect('localhost',$uid,$pwd,$db) or die("Wrong ");
 echo "Great work!!";
  $sql = "Select * from student where sname = '$snm'";
    $r = mysqli_query($con, $sql);
    
    $n = mysqli_num_rows($r);
    
    echo "<table border = 2>";
    echo "<tr> 
               <th> Sno </th>
               <th> Name</th>
               <th> Percentage </th>
          </tr>";
    
    for($i = 0 ; $i < $n; $i++)
    {
         $row = mysqli_fetch_assoc($r);
         echo "<tr> 
                    <td> " . $row["sno"] . "</td>
                    <td> " . $row["sname"] . "</td>
                    <td> " . $row["per"] . "</td>
               </tr>";
         
    }
    mysqli_close($con);
?>