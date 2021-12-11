<?php
  $a = 25;
  $b = 2;
  function soma(){
      global $a, $b;
      $b = $a + $b;
  }
  soma();
  echo $b;
  echo "Parabens !"
?>