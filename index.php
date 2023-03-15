<html>
    <head>

    </head>
    <body>
<?php
include('registro.php');
include('lerValor.php');

if(isset($_POST['submit'])){
    $entrada = @$_POST['entrada'];
    $carteira = lerValor()+$entrada;
    Registro($carteira);
    echo $carteira;
}else{
    echo lerValor();
}


?>
<form method="post">
    <input name="entrada" step="any" type="number">
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>