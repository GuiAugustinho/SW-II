<?php
// Criação de um array com 10 números inteiros
$numeros = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
$soma = 0;

// Uso de um laço de repetição para calcular a soma de todos os elementos do array
foreach ($numeros as $numero) {
    $soma += $numero;
}

// Exibição do resultado
echo "A soma de todos os elementos é: $soma";
?>
