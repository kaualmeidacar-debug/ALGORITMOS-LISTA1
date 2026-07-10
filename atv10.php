<?php
$cliente = "Neymar";
$nomeEvento = "Cruzeiro do Neymar";
$valorTotal = 1000;

// calculos
$entrada = $valorTotal * 30 / 100;
$valorRestante = $valorTotal - $entrada;

$desconto = $valorRestante * 10 / 100;
$valorDesconto = $valorRestante - $desconto;
$taxa = $valorDesconto * 5 / 100;

$valorFinal = $taxa + $valorDesconto;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Atividade 10</h3>
    <p>Uma empresa especializada em eventos precisa calcular os custos de uma festa contratada
        por um cliente. Crie variáveis para armazenar as seguintes informações:<br>
        ● Nome do cliente;<br>
        ● Nome do evento;<br>
        ● Valor total do evento;<br>
        Em seguida, realize os seguintes cálculos a partir do valor total do evento:<br>
        1. Calcule o valor da entrada, correspondente a 30% do valor total do evento.<br>
        2. Calcule o valor restante após o pagamento da entrada.<br>
        3. Aplique um desconto de 10% sobre o valor restante.<br>

        4. Calcule uma taxa de organização de 5% sobre o valor após o desconto.<br>
        5. Calcule o valor final, somando o valor com desconto e a taxa de organização.<br>
    </p>
    <!-- PHP -->
    <?php echo ("Nome do cliente: " . $cliente . "<br>"); ?>
    <?php echo ("Nome do evento: " . $nomeEvento . "<br>"); ?>
    <?php echo ("Valor total do evento: R$" . $valorTotal . "<br>"); ?>

    <h4>Calculos:</h4>
    <?php echo ("Valor da entrada: R$" . $entrada . "<br>"); ?>
    <?php echo ("Valor restante: R$" . $valorRestante . "<br>"); ?>
    <?php echo ("Desconto no valor restante de: R$" . $valorDesconto . "<br>"); ?>
    
    <?php echo("Taxa de organização: R$" . $taxa . "<br>"); ?>
    <?php echo("Valor final: R$" . $valorFinal . "<br>"); ?>





</body>

</html>