<?php
$valor = $_POST["valor"];
$dinheiro = $_POST["dim"];
if($dinheiro<$valor){
    echo "Falta Money";
}
else{
     echo "O troco é: " ,$dinheiro-$valor;
}
?>