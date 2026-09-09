<?php

$musica = ["Anima Christi", "Media Vita", "Veni Veni Emanuel", "Na sua estante", "Mulher de fases", "Flor de Maracujá"];

foreach ($musica as $nome_musica) {
    echo $nome_musica . "<br>";
}
echo "Quantidade de músicas: " . count($musica);
?>