<?php
 // INPUT
  $number = 0;
  $x = 0;

  echo "WRITE A NUMBER \n";
  $number = readline();

  //OUTPUT
  echo "YOUR TABLE IS " . "\n" ;
  while($x <= 30) {
    $result = $number * $x;
    echo $number . " x " . $x . " = " . $result . "\n";
    $x ++;
  } 