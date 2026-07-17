<?php 
/**Faça um algoritmo que receba o ano de nascimento de uma pessoa, calcule e
mostre a idade atual dessa pessoa e quantos anos ela terá em 2028.
Resultado esperado: uma pessoa nascida em 2000 terá 26 anos em 2026 e 28
anos em 2028. */

$nasc = 1985;
$idadeAtual = 2026 - $nasc ;
$idade28 = 2028 - $nasc;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Atividade 19</h3>
    <p><?php echo("Ano de nascimento: " . $nasc); ?></p>
    <p><?php echo("Idade atual: " . $idadeAtual); ?></p>
    <p><?php echo("Idade em 2028: " . $idade28); ?></p>
</body>
</html>