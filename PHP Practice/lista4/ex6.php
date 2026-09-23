<?php

$idade = 34;
$pcd = true;
$gestante = false;
$reservado = true;


if ($reservado == true) {
    echo "Atendimento principal";
} else {
    if ($idade >= 60 || $pcd == true || $gestante == true) {
        echo "Atendimento prioritário";
    } else {
        echo "Atendimento normal";
    }
}
