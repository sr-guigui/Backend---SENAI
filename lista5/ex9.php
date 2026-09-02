<?php
$n1 = 10;
$n2 = 5;
$operacao = "+";
if ($operacao == "+"){
    echo "A soma é:" . $n1+$n2;
}
else if ($operacao == "-"){
    echo "A subtração é :" . $n1-$n2;

}
else if($operacao == "x"){
    echo "A multiplicação é : " . $n1*$n2;
}
else if ($operacao == "/"){
    echo"A divisão : " . $n1*$n2;
}
else{
    echo "Operação inválida";
}