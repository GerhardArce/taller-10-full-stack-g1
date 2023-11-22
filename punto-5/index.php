<?php
    //ENTRY DATA
        $people = 0;
        $afilationtype = "";
        const Price = 25000;

    //PROCESS
        echo "Write your type of afilation (ONLY A OR B) \n"; 
        $afilationtype = readline();

        echo "Write the number of people \n";
        $people = readline();

    //EXIT DATA
        if($afilationtype == "B" ){
          $total = $people * Price;
          echo "The total is: " . $total . "\n";
        } else if($afilationtype == "A"){
          $total = $people * Price;
          $total2 = $total * .70;
          echo "The total is: " . $total2 . "\n";
        }
?>