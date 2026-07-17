<?php

/**Faça um algoritmo que realize uma operação cambial. O turista deve informar
o valor que possui em reais e a cotação do dólar naquele dia. O algoritmo deverá
converter o valor para dólares.
Resultado esperado: com R$ 500,00 e cotação do dólar a R$ 5,00, o turista terá
US$ 100,00.
 */
$real = 500;
$cambial = 500 / 5;




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<H3>Atividade 15</H3>
<p><?php echo("Os " . $real . "R$ do turista foram convertidos em: US$" . $cambial); ?></p>
</body>

</html>