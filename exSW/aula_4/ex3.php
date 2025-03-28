<?php
// Criação de um array com 8 números inteiros
$numeros = [15, 3, 9, 27, 6, 12, 21, 18];
$maior = $numeros[0];
$menor = $numeros[0];

// Uso de um laço de repetição para encontrar o maior e o menor valor no array
foreach ($numeros as $numero) {
    if ($numero > $maior) {
        $maior = $numero;
    }
    if ($numero < $menor) {
        $menor = $numero;
    }
}

// Exibição dos resultados
echo "O maior valor é: $maior\n";
echo "O menor valor é: $menor";
?>
