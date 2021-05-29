<?php
$uid='root';
$pwd='';
$db='demodb';
$cp=$_POST['txtnm'];
$con=mysqli_connect('localhost',$uid,$pwd,$db) or die("Wrong ");
 echo "Great work!!";

$sql="Select s.sid,s.sname,s.class,c.cname from stud s,comp c,stud_comp sc where s.sid=sc.sid and c.cid=sc.cid and c.cname='$cp' and sc.rank=1";

$r=mysqli_query($con,$sql);
$n=mysqli_num_rows($r);

for($i=0;$i<$n;$i++)
{
$row=mysqli_fetch_assoc($r);
echo "<br>Roll no: ".$row["sid"]."<br>";
echo "Name: ".$row["sname"]."<br>";
echo "Class: ".$row["class"]."<br>";
echo "Competition Name: ".$row["cname"]."<br>";

}
mysqli_close($con);
?>