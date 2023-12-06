<?php
    //ENTRY DATA
        $people = 0;
        $afilationtype = "";
        const Price = 25000;

    //PROCESS
        echo "Write your type of afilation (ONLY A OR B) \n"; 
        $afilationtype = strtoupper(readline());

        echo "Write the number of people \n";
        $people = strtoupper(readline());

    //EXIT DATA
        if($afilationtype == "B" || $afilationtype == "A"){
          $total = $people * Price;
          $total = $total * .70;
          echo "The total is: " . $total . "\n";
        } else {
          $total = $people * Price;
          echo "You don't have any afilation " . $total . "\n";
        }
?>