<?php
    //ENTRY DATA
        $age = 0;
        $name = "";

    //PROCESS
        echo "Write your name \n"; 
        $name = strtoupper(readline());

        echo "Write your age \n";
        $age = strtoupper(readline());

    //EXIT DATA
        if($age >= 18) {
          echo "Sir " . $name . " You are an adult" . "\n";
        } else {
          echo "Boy " . $name . " You aren't an adult" . "\n";
        }
?>