<!-- <?php
$cookie_name = "user1";
$cookie_value = "John";
setcookie($cookie_name, $cookie_value, time() + (60), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html> -->











<!-- 
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
session_destroy();
echo "Destroyed"
?>

</body>
</html> -->
<!-- 
<?php
  session_start();
  session_register('no_of_hits');
  ++$no_of_hits;
?> -->

<?php 
  $page_accesses = $_COOKIE['accesses'];
  setcookie('access',++$page_accesses);
?>