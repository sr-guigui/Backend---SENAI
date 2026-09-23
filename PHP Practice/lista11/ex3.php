<?php
$nota1 = $_POST["not1"];
$nota2 = $_POST["not2"];
$nota3 = $_POST["not3"];
$media = ($nota1+$nota2+$nota3)/3;
if ($media>6) {
    echo "Passou ", $media;
} else {
    echo "Repetiu Nengue, sua média foi ",$media;
}
?>
