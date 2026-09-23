<?php
$nome_cliente = $_POST["nome"];
$idade_cliente = $_POST["idade"];
$service = $_POST["servico"];

$servico_m = mb_strtolower($service,'UTF-8');

echo "Olá $nome_cliente!";
if ($servico_m == "corte" ){
 echo "<br> O serviço solicitado ficou em R$30";
}
elseif($servico_m == "barba"){
    echo "<br> O serviço solicitado ficou em R$10";
}
elseif($servico_m == "barba+corte" || "corte+barba"){
    echo"<br> O serviço solicitado ficou em R$45";
}
else{
    echo "<br> O serviço solicitado não existe";
    }
?>
