<?php
// Criação de um array associativo onde cada chave é o nome de um aluno e o valor é a sua nota
$notas = [
    'Alice' => 8.5,
    'Bruno' => 7.0,
    'Carla' => 9.2,
    'Daniel' => 6.8,
    'Eva' => 7.5
];
$maiorNota = -1;
$alunoMaiorNota = '';

// Uso de um laço de repetição para encontrar o aluno com a maior nota
foreach ($notas as $aluno => $nota) {
    if ($nota > $maiorNota) {
        $maiorNota = $nota;
        $alunoMaiorNota = $aluno;
    }
}

// Exibição do resultado
echo "O aluno com a maior nota é: $alunoMaiorNota com a nota $maiorNota";
?>
