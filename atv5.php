<?php
$valorBruto = 4500;
$desconto = $valorBruto * 10 / 100;
$precoDescontado = $valorBruto - $desconto;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Atividade</h3>
    <p>Uma empresa oferece 10% de desconto para pagamento à vista. Um serviço
        custa R$ 4.500,00. Calcule o valor do desconto e o valor final.</p>
    <?php echo ("Valor do Produto: R$" . $valorBruto . "<br>"); ?>
    <?php echo ("Desconto: R$" . $desconto . "<br>"); ?>
    <?php echo ("Valor com desconto: R$" . $precoDescontado); ?>
</body>

</html>