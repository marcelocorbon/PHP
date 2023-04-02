<?php 
    $nome = $_POST["nome"];
    $ra = $_POST["ra"];
    $curso = $_POST['curso'];
    $notama1 = $_POST["notama1"];
    $notamb1 = $_POST["notamb1"];
    $notap1 = $_POST["notap1"];
    $notama2 = $_POST["notama2"];
    $notamb2 = $_POST["notamb2"];
    $notap2 = $_POST["notap2"];
    $bonus = isset($_POST['bonus']) ? true : false;
    $presenca = $_POST["presenca"];
    $situacao = "";

    $notaa1 = $notama1*0.2 + $notamb1*0.1 + $notap1*0.7;
    $notaa2 = $notama2*0.2 + $notamb2*0.1 + $notap2*0.7;

    $media = ($notaa1 + 2*$notaa2) / 3;

    if ($bonus AND $media < 10){
        $media += 0.5;
    }

    if ($presenca >= 75 && $media >= 5){
        $situacao = "Aprovado";
    } else if ($presenca >= 75 && $media < 5 && $media > 3){
        $situacao = "RE";
    } else if ($presenca >= 75 && $media < 3){
        $situacao = "Reprovado por nota";
    } else {
        $situacao = "Reprovado por falta";
    }


    echo "<h1>DADOS DO ALUNO</h1>";
    echo "<p><strong>Nome:</strong> " . $nome . "</p>";
    echo "<p><strong>RA:</strong> " . $ra . "</p>";
    echo "<p><strong>Curso:</strong> " . $curso . "</p>";
    echo "<p><strong>Média Final:</strong> " . number_format($media, 2) . "</p>";
    echo "<p><strong>Situação:</strong> " . $situacao . "</p>";

?>