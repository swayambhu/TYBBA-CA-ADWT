<html>
<head><title>Temperature Conversion</title></head>
<body>
  
<?php

  
  if (empty($_GET['fahrenheit']) OR $_GET['fahrenheit']== 'undefined') {
  ?>
  
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
  Fahrenheit temperature:
  <input type="text" name="fahrenheit" /> <br />
  <input type="submit" name="Convert_to_Celsius!" />
  </form>
  
  <?php
  } else {
    $fahr = $_GET['fahrenheit'];
    $celsius = ($fahr - 32) * 5/9;
    printf("%.2fF is %.2fC", $fahr, $celsius);
  }

?>
  
</body>
</html>