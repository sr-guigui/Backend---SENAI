<?php
$nome = $_POST["nome"];
$peso = $_POST ["peso"];
if( $peso > 50){
    $multa = ($peso-50) * 4;
    echo "Olá $nome, você superou o peso limite, deve pagar uma multa de R$$multa";
}
else{
    echo"Olá $nome, o peso pego de peixes está dentro do limite";
}
