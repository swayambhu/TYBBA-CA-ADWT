<?php
       $unm = $_GET['u'];
       if(strlen($unm) == 0)
          echo "*Enter User Name";
       else if(strlen($unm) < 5)   
          echo "*User Name is too short";
       else if(strlen($unm)> 15)
          echo "*User Name is too long";
       else
          echo "Valid User Name";
?>