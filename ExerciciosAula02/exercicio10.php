<?php
    $altura_chico = 1.5;
    $altura_juca = 1.1;
    $anos = 0;
  
    while ($altura_juca <= $altura_chico) {
      $altura_chico += 0.02;
      $altura_juca += 0.03;
      $anos++;
    }
  
    echo "Serão necessários $anos anos para que Juca seja maior que Chico.";
?>