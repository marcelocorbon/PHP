<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Veículo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php 

    require_once 'Carro.php';
    require_once 'Moto.php';

    $tipo = $_POST["tipo-veiculo"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];
    $preco = $_POST["preco"];

    ?>

    <div class="resultados">

    <?php
    if($tipo == 'carro') {
      $carro1 = new Carro($marca, $modelo, $ano, $preco);
      echo '<h2>Informações do carro:</h2>' . $carro1->getInfo();
    } else if($tipo == 'moto') {
      $moto1 = new Moto($marca, $modelo, $ano, $preco);
      echo '<h2>Informações da moto:</h2>' . $moto1->getInfo();
    } else {
      echo '<h2>Opção inválida, escolha entre carro ou moto.</h2>';
    };
  ?>
  
</div>
</body>
</html>

