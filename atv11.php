<?php 
$ladoAC = 5;
$ladoBD = 8;

$area = $ladoAC * $ladoBD;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h3>Atividade 11</h3>
<p>Desenvolva um algoritmo capaz de ler os dois lados de um retângulo e calcular
sua área, apresentando o resultado na tela. (Pesquise a fórmula)</p>

<?php echo("Sendo os lados A e C: " . $ladoAC . "<br>"); ?>
<?php echo("E os lados A e C: " . $ladoBD . "<br>"); ?>
<?php echo("Então a área será: " . $area); ?>

</body>

</html>