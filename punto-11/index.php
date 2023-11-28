<?php
    //ENTRY DATA
        $number = 0;

    //PROCESS
      echo "YOUR TABLE IS " . "\n" ;
      for($x = 1; $x <= 100; $x += 2) {
        $number = $number + $x;
        echo $x . "\n";
      } 
        echo "the result is: " . $number;
?>