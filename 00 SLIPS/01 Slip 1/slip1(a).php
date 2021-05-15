<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <FORM ACTION="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    Enter no 1: 
    <input type="text" name="no1">
    <br>
    Enter no 2:
    <input type="text" name="no2">
    <br>
    <select name="cal">
    <option value="1">Addition</option>
    <option value="2">Substraction</option>
    <option value="3">Multiplication</option>
    <option value="4">Division</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Submit">
    </FORM>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$no1=$_POST['no1'];
$no2=$_POST['no2'];
$cal=$_POST['cal'];
if((!empty($no1)) && (!empty($no2)))
{
switch($cal)
{
case 1:$add=$no1+$no2;
echo "<h1>addition=".$add."</h1>";
break;

case 2:$sub=$no1-$no2;
echo "<h1>subtraction=".$sub."</h1>";
break;

case 3:$mult=$no1*$no2;
echo "<h1>multiplication=".$mult."</h1>"; break;

case 4:$div=$no1/$no2;
echo "<h1>division=".$div."</h1>";
break;

}
}
else echo "Please enter both 2 nos";
}
else
die("not able to acccess");
?>