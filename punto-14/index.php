<?php
  //ENTRY DATA
  include "./password.php";

  $user = "";
  $password = "";

  //PROCESS
  echo "WRITE YOUR USER \n";
  $user = readline();
  

  echo "WRITE YOUR PASSWORD \n";
  $password = readline();

  if (securityLong($password)) {
  if (upperLetter($password)) {
  if (numberWords($password)) {
        echo "Your password is sure \n";
      } else {
        echo "Your password hasn't the correct number of words \n";
      } 
    } else {
      echo "Your password hasn't a upper letter \n";
    }
  } else {
    echo "Your password hasn't a correct long \n";
  }
?>