<?php 

$numeros = array(10, 5, 15);

rsort($numeros);

echo "Ordem decrescente: <br>";

for ($i=0; $i<3; $i++){
    echo $numeros[$i]."<br>";
}

?>