<html>
<head>
<title>slip20a</title></head>
<body>
<?php
$a=$_GET["sub"]??null;
if(is_null($a))
{
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>"method="GET">
Select your subject: <br>
<select name="sub[]" multiple>
<option value="php">php</option>
<option value="java">java</option>
<option value="Software testing">Software Testing</option>
</select>
<input type="submit" name="s" value="select subject">
</form>
<?php
}
else
{
if(array_key_exists('s',$_GET))
{
$d=join(" * ",$a);
printf("your selection %s",$d);
}
}
?>
</body>
</html>