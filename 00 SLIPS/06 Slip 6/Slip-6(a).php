<html>
<head>
    <title>Login</title>
</head>
<body>
    
<?php
if(isset($_POST['Login'])){
$u=$_POST['txtuid'];
$p=$_POST['txtpwd'];
$uid='root';
$pwd='';
$db='testdb';

//hostname, username, password, databaseName
$con=mysqli_connect('localhost',$uid,$pwd,$db) or die("wrong");

echo "Great work connection established!";

$sql="Select * from Login where username='$u' and password='$p'";
$r=mysqli_query($con,$sql);
$n=mysqli_num_rows($r);

if($n >= 1){
echo "<h3><span style='color:blue'>Login Successfully</span></h3>";

}else{
echo "<h3><span style='color:red'>Login Denied</span></h3>";
}
mysqli_close($con);
}
?>

<form name="f1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"  >

<b>USERNAME :</b><br/>
<input type="text" name="txtuid"><br/>
<b>PASSWORD :</b><br/>
<input type="password" name="txtpwd"><br/>
<input type="reset"  value="RESET"> 
<input type="submit" name="Login" value="SUBMIT">
</form>
</body>
</html>