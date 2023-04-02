<?php 
$numeros = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$par = 0;
$impar = 0;


for ($i=0; $i<20; $i++){
    if ($numeros[$i] % 2 == 0){
        $par = $numeros[$i] + $par;
    } else {
        $impar = $numeros[$i] + $impar;
    }
}

echo $par."<br>";
echo $impar;

?>