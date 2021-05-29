<?php
class calculator
{
	var $no1;
	var $no2;
	function calculator($n1,$n2)
	{
	$this->no1=$n1;
	$this->no2=$n2;
	}
	function add()
	{
	$a=($this->no1+$this->no2);
	return $a;
	}
	function sub()
	{
	$s=$this->no1-$this->no2;
	return $s;
	}
	function mult()
	{
	$m=$this->no1*$this->no2;
	return $m;
	}
	function div()
	{
	$d=$this->no1/$this->no2;
	return $d;
	}
}
$ch=$_POST['ch'];
$cal=new calculator(9,5);

echo "Addition:".$cal->add();" <br>";
echo "<br>Subtraction:".$cal->sub();

echo "<br>Multiply:".$cal->mult();
switch($ch)
{
case 1:
echo "<br> Division:". $cal->div();
}
?>
<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<input type="radio" name="ch" value="1"> Div
<input type="submit" value="Div">
</form>
</body>
</html>
