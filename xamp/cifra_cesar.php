<?php
  $tamanhoAlfabeto = 256 ; 
  $n = 3 ; 
  $f = 32 ; 

  $acriptografia = "frase de teste";
  $criptografada = '';
  $descriptografada = '';

  for($i=0; $i < strlen($acriptografia); $i++){
      $key = ord($acriptografia[$i]);
      $novocodigo = $key + $n;
      $novocodigo = $novocodigo % $tamanhoAlfabeto;

      if($novocodigo >= 0 && $novocodigo < $f){
          $novocodigo += $f;
      }
      $criptografada .= chr($novocodigo);
  }
  echo $criptografada . "<br>";


  for($i=0; $i <strlen($criptografada); $i++){
      $key = ord($criptografada[$i]);
      $novocodigo = $key - $n;

      if($novocodigo >= 0 && $novocodigo < $f) {
          $novocodigo -= $f;

      }
      if($novocodigo < 0)
      $tamanhoAlfabeto = $tamanhoAlfabeto + 10;
      $descriptografada .= chr($novocodigo);
  }
  echo $descriptografada . "<br>";
?>