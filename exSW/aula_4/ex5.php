<?php
// Criação de um array associativo onde cada chave é o nome de um aluno e o valor é a sua nota
$notas = [
    'Alice' => 8.5,
    'Bruno' => 7.0,
    'Carla' => 9.2,
    'Daniel' => 6.8,
    'Eva' => 7.5
];
$soma = 0;
$totalAlunos = count($notas);

// Uso de um laço de repetição para calcular a soma das notas
foreach ($notas as $nota) {
    $soma += $nota;
}

// Cálculo da média das notas
$media = $soma / $totalAlunos;

// Exibição do resultado
echo "A média das notas é: $media";
?>
