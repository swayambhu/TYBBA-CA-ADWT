<?php
session_start();
$t=$_REQUEST['etime'] ?? Null;
$exp=date("1,d-m-y h:i:s",time());

if($t<$exp)
echo "Time Out";
else
{
echo "Name : ".$_REQUEST['uname']."<br>";
echo " City : ".$_REQUEST['city']."<br>";
echo " Ph No : ".$_REQUEST['pno']."<br>";

}   
session_destroy();       
?>