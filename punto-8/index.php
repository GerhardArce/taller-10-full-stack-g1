<?php
    //ENTRY DATA
        $people = 0;
        $afilationtype = "";
        const Price = 25000;

    //PROCESS
        echo "Write your type of afilation (CHOOSE A, B, C OR D) \n"; 
        $afilationtype = strtoupper(readline());

        echo "Write the number of people \n";
        $people = strtoupper(readline());

        $total = $people * Price;

    //EXIT DATA
    switch ($afilationtype):
        case "A":
          $total = $total * .70;
          echo "The total is: " . $total . "\n";
          break;
        case "B":
          $total = $total * .75;
          echo "The total is: " . $total . "\n";
          break;
        case "C":
          $total = $total * .90;
          echo "The total is: " . $total . "\n";
          break;
        case "D":
          $total = $total * .95;
          echo "The total is: " . $total . "\n";
          break;
        default:
          echo "Invalid afilation: " . $total;
      endswitch;       
?>