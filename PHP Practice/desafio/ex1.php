<?php
$combustivel = $_POST ["combustivel"];
$litros = $_POST['litros'];
$gasolina = 6.2;
$etanol = 4.2;
$diesel = 6;
$combustivel_formt = strtolower($combustivel);
if($combustivel_formt == 'gasolina'){
    $preco = $litros * $gasolina;
    echo "O valor a ser pago de $combustivel é R$ $preco";
} 
elseif($combustivel == 'etanol'){
    $preco = $litros * $etanol;
    echo "O valor a ser pago de $combustivel é R$ $preco";
} 
else{ $preco = $litros * $diesel;
    echo "O valor a ser pago de $combustivel é R$ $preco";
}
?>