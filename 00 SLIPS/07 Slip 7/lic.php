<?php
$nm=$_POST["txtnm"]?? Null;
$ad=$_POST["txtadd"]?? Null;
$mno=$_POST["txtmbno"]?? Null;
setcookie('ns',$nm);
setcookie('as',$ad);
setcookie('ms',$mno);
$n=$_COOKIE['ns']?? Null;
$a=$_COOKIE['as']?? Null;
$m=$_COOKIE['ms']?? Null;
?>
<html>
<head><title> LIC</title></head>
<body>
<?php
$pno=$_POST['txtpno']?? Null;
if( is_null($pno))
{
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>"; method="POST">
Policy_No:
<input type="text" name="txtpno"><br>
Name:
<input type="text" name="txtpnm"><br>
Premium:
<input type="text" name="txtpre"><br>
<input type="submit" value="Submit">
</form>
<?php
}
else
{
$pnm=$_POST['txtpnm'];
$pre=$_POST['txtpre'];
echo "Employee Details .<br>";
echo "Name:= $n.<br>";
echo "Address:= $a.<br>";
echo "Mobile No:= $m.<br>";
echo "LIC Details.<br>";
echo "Policy no:=$pno.<br>";
echo "Name:=$pnm.<br>";
echo "premium:=$pre.<br>";
}
?>
</body>
</html>