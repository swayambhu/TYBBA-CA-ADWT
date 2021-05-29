<?php
$uid='root';
$pwd='';
$db='testdb';
$con=mysqli_connect('localhost',$uid,$pwd,$db) or die("Wrong ");
 echo "Great work, Connection established";

if($_SERVER['REQUEST_METHOD']="POST")
{
if($_POST['s']=="Insert")
{
$eno=$_POST['txteno'];
$enm=$_POST['txtenm'];
$ead=$_POST['txtead'];
$esal=$_POST['txtesal'];
$dno=$_POST['txtdno'];
$sql="Insert into emp values($eno,'$enm','$ead',$esal,$dno)";
mysqli_query($con,$sql);
echo mysqli_affected_rows($con)."  Record Inserted";
mysqli_close($con);
}
}
?>
<html><head><title>slip20b</title></head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<b>Enter Employee No:</b>
<input type="text" name="txteno"><br>
<b>Enter Employee Name:</b>
<input type="text" name="txtenm"><br>
<b>Enter Address:</b>
<input type="text" name="txtead"><br>
<b>Enter Employee Salary:</b>
<input type="text" name="txtesal"><br>
<b>Enter DeptNo:</b>
<input type="text" name="txtdno"><br>
<input type="submit" name="s" value="Insert"> <br>
<b>Enter Deptartment No:</b>
<input type="text" name="txtd"><br>
<input type="submit" name="s" value="Display"> <br>
</form>

<?php
if($_SERVER['REQUEST_METHOD']="POST")
{
if($_POST['s']=="Display")
{
$d=$_POST['txtd'];

$sql="Select max(sal) from emp where deptno=$d";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_array($r);
$maxsal=$row[0];

$sql="Select min(sal) from emp where deptno=$d";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_array($r);
$minsal=$row[0];

$sql="Select sum(sal) from emp where deptno=$d";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_array($r);
$sumsal=$row[0];

echo "<table border=2>";
echo "<tr><th>Maximum Salary</th>";
echo"<th>Minimum Salary</th>";
echo"<th>Sum Salary</th></tr>";

echo"<tr><th>$maxsal</th>";
echo"<th>$minsal</th>";
echo"<th>$sumsal</th></tr></table>";
}
}
?>
</body>
</html>


