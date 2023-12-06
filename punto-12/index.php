<?php
    //ENTRY DATA
        $x = 0;

    //PROCESS
      echo "WRITE A NUMBER \n";
      $number = readline();
        
      echo "YOUR TABLE IS: \n";
      for(; $x <= 30; $x ++) {
        $s = $number * $x;
        echo "$number x $x = $s  \n";
      } 
?>