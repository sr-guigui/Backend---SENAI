<?php
$nome = "Guilherme";
$nivel_acesso = 2;

if($nivel_acesso == 1){
    echo "Acesso Básico";
}
else if($nivel_acesso == 2){
    echo"Acesso intermediário";
}
else if ($nivel_acesso == 3){
    echo"Acesso Administrador";
}
else{
    echo"Acesso Inválido";
}
?>