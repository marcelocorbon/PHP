<?php 
    // Definir os dois vetores originais
  $vetor1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
  $vetor2 = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);

  // Inicializar o vetor de números não comuns
  $vetor_nao_comum = array();

  // Verificar quais números não são comuns aos dois vetores
  foreach ($vetor1 as $numero) {
    if (!in_array($numero, $vetor2)) {
      array_push($vetor_nao_comum, $numero);
    }
  }

  foreach ($vetor2 as $numero) {
    if (!in_array($numero, $vetor1)) {
      array_push($vetor_nao_comum, $numero);
    }
  }

  // Imprimir o vetor de números não comuns
  foreach ($vetor_nao_comum as $numero) {
    echo "$numero ";
  }
?>