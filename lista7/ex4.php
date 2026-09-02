<?php

function verificarIdade($idade){
    if ($idade < 16){
        echo "Não pode votar";
    }
    else if($idade < 18){
        return "Voto opicional";
    }
    else{
        return "Voto Obrigatorio";
    }
}
echo verificarIdade(17);