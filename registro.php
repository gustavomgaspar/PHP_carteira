<?php
function Registro($valor){

    $date = date("F j, Y, g:i a");
    $caminho = "registro.txt";


    $arquivo = fopen($caminho,"a+");
    fwrite($arquivo,PHP_EOL.$date);
    fwrite($arquivo,PHP_EOL.$valor);
    fclose($arquivo);
}
?>