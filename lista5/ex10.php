<?php
$peso = 10;
$altura = 1.74;
$idade = 17;
$imc = $peso/($altura*$altura);


if ($imc >=19 and $imc <=24){
    echo" Você está com o peso ideal! Seu IMC é = " . $imc;
}
else if ($imc >24 and $imc <=29){
    echo" Você está com sobrepeso = " . $imc;
}

else if ($imc >29 and $imc <=34){
    echo" Você está com OBSIDADE GRAU I! Seu IMC é = " .$imc;
}

else if ($imc >34 and $imc <=39){
    echo" Você está com SOBREPESO GARU II! Seu IMC é = " .$imc;
}

else if ($imc >40){
    echo" Você está com OBESIDADE GRAU III ! Seu IMC é = " .$imc;
}

else{
    echo "Você está SUPER MAGRO se alimente! Seu IMC é = " . $imc;
}
?>