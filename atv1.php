<?php
$participantes = 40;
$valorParticipante = 180;
$orçamento = $participantes * $valorParticipante;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Atividade 1</h3>
    <p>Uma empresa organiza eventos e cobra R$ 180,00 por participante. Crie
        variáveis para armazenar a quantidade de participantes e calcule o valor total do
        orçamento do evento.
    </p>
    <?php echo ("Numero de participantes: " . $participantes . "<br>"); ?>
    <?php echo ("Valor cobrado: R$" . $valorParticipante . "<br>"); ?>
    <?php echo ("O valor total do orçamento e de: " . $orçamento . "<br>"); ?>

</body>

</html>