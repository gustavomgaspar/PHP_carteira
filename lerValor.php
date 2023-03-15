<?php 
function lerValor(){
    $caminho = "registro.txt";
    $arquivo = file($caminho);
    $ultimaLinha = count($arquivo) -1 ;
    return $arquivo[$ultimaLinha];

}

?>