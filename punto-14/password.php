<?php
  function securityLong($pass) {
    return strlen($pass) >= 8; {
    }
  }
  
function upperLetter($pass) {
  $ar = str_split($pass);
  
  foreach($ar as $e) {
    if ($e == strtoupper($e)) {
      return true;
    } 
  }
  return false;
}

function numberWords($pass) {
  $ar = str_split($pass);
  
  foreach($ar as $e) {
      if (is_numeric($e)) {
        return true;
      } 
    }
    return false;
 }
?>