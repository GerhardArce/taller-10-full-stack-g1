<?php  
  include "./operations.php";
    
  $numberOne = 0;
  $numberTwo = 0;
  $options = "";

  $numberOne = getNumber();
  $numberTwo = getNumber();

  $options = showMenu();
  $result = operate($numberOne, $numberTwo, $options);

echo "The result is: " . $result;
?>