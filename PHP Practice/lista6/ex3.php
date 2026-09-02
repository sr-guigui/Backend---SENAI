<?php

echo "Caixa eletrônico - Itaú <br>";
echo "1- Consulta saldo, 2 - Fazer saque, 3 - Depósito, 4 - Ver extrato, 5 - Sair <br>";

$opcao =1;

switch ($opcao) {
    case 1;
        echo "Seu saldo é R$ 630,81";
        break;
    case 2;
        echo "Qual valor?";
        break;
    case 3;
        echo "Depósito";
        break;
    case 4;
        echo "Ver extrato";
        break;
    case 5;
        echo "Sair";
        break;
    default:
        echo "Opção inválida";
        break;
}
?>