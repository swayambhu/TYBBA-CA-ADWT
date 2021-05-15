<html>
<head><title>Temperature Conversion</title></head>
<body>
  
<?php

  $fahr = $_GET['fahrenheit']??null;
  
  // if (empty($_GET['fahrenheit']) OR $_GET['fahrenheit']== 'undefined')
  // if(is_null($fahr)) {
  ?>
  
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
  Fahrenheit temperature:
  <input type="text" name="fahrenheit" value="<?php echo $fahr ?>"/> <br />
  <input type="submit" name="Convert_to_Celsius!" />
  </form>
  
  <?php
  if(is_null($fahr)) {
    
  } else {
    $celsius = ($fahr - 32) * 5/9;
    printf("%.2fF is %.2fC", $fahr, $celsius);
  }

?>
  
</body>
</html>
