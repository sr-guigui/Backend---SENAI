<?php

echo "Caixa eletrônico - Itaú <br>";
echo "1- Pizza de costela, 2 - Indian Burger, 3 - Soda Gi, 4 - Kenko sushi, 5 - Sair <br>";

$opcao = 1;

switch ($opcao) {
    case 1;
        echo "A pizza de costela é R$ 35,00";
        break;
    case 2;
        echo "O Indian Burger é R$ 25,00";
        break;
    case 3;
        echo "A Soda Gi é R$ 10,00";
        break;
    case 4;
        echo "O Kenko sushi é R$ 30,00";
        break;
    case 5;
        echo "Sair";
        break;
    default:
        echo "Opção inválida";
        break;
}
