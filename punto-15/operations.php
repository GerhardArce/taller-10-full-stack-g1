<?php
  function getNumber() {
    echo "Write a number \n";
    return readline();
  }

  function showMenu() {
    echo "Choose the operation \n
    1. Addition \n
    2. Substraction \n
    3. Multiplication \n
    4. Division \n";
    return readline();
  }

  function operate($x, $y, $option) {
    switch($option){
    case 1:
      return add($x, $y);
    case 2:
      return sub($x, $y);
    case 3: 
      return dot($x, $y);
    case 4:
      return split($x, $y);
    default:
      return "Invalid option";  
    }
  }

  function add($x, $y) {
    return $x + $y;
  }

  function sub($x, $y) {
    return $x - $y;
  }

  function dot($x, $y) {
    return $x * $y;
  }

  function split($x, $y) {
    return $x / $y;
  }
?>