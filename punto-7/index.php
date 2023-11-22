<?php
    //ENTRY DATA
        $one = 0;
        $two = 0;
        $total = 0;

    //PROCESS
        echo "choose the operation \n 1. Addition \n 2. Subtraction \n 3. Multiplication \n 4. Division \n"; 
        $total = strtoupper(readline());

        echo "Write the first name \n"; 
        $one = strtoupper(readline());

        echo "Write the second name \n";
        $two = strtoupper(readline());

    //EXIT DATA
        switch($total):
          case 1:
            $total = $one + $two;
            echo "The result is " . $total;
            break;
          case 2:
            $total = $one - $two;
            echo "The result is " . $total;
            break;
          case 3:
            $total = $one * $two;
            echo "The result is " . $total;
            break;
          case 4:
            $total = $one / $two;
            echo "The result is " . $total;
            break;
          default:
            echo "Invalid result";
          endswitch;
?>