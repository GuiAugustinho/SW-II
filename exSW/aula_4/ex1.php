<?php
// a) Criação do array associativo $pessoa com as chaves: nome, idade, cidade
$pessoa = [
    'nome' => 'João',
    'idade' => 30,
    'cidade' => 'São Paulo'
];

// b) Adição de uma nova chave chamada 'profissao' ao array $pessoa
$pessoa['profissao'] = 'Engenheiro';

// c) Criação do array indexado $amigos com os nomes de três amigos
$amigos = ['Maria', 'Carlos', 'Ana'];

// d) Combinação dos arrays $pessoa e $amigos em um novo array chamado $dados
$dados = array_merge($pessoa, $amigos);

// e) Exibição do conteúdo do array $dados usando print_r
print_r($dados);
?>
