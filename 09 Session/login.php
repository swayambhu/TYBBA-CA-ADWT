<?php
    $auth_yes = 0;
    session_start();
    $_SESSION('t');
    $tm = time();
?>
<form method="GET" action="new.php">
    <label for="name"><input type="text" name="name" id="name"></label></br>
    <label for="rollNo"><input type="number" name="rollNo" id="rollNo"></label></br>
    <input type="submit" value="submit">
</form>
