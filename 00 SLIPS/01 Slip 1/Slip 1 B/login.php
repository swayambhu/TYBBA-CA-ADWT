<?php
session_start();
$t=date("1,d-m-y h:i:s",time()+20);

if($_REQUEST['name']=='admin' && $_REQUEST['pwd']=='admin')
{
   ?>
<html>
<body>

<form action="new.php" method=get>
<input type='hidden' name='etime' value="<?php echo $t?>">
Enter Name : <input type=textbox name=uname><br>
Enter City : <input type=textbox name=city><br>
Enter Phone No : <input type=textbox name=pno><br>
<input type=submit name=submit value=DISPLAY>
</form>
</body>
</html>
<?php
}
else echo "Invalid Username Or Password"
?>