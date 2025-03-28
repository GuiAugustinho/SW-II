<?php
// Criação de um array com 15 números inteiros
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
$pares = 0;
$impares = 0;

// Uso de um laço de repetição para contar quantos números são pares e quantos são ímpares
foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

// Exibição dos resultados
echo "Quantidade de números pares: $pares\n";
echo "Quantidade de números ímpares: $impares";
?>
