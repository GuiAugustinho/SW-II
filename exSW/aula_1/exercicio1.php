<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o parâmetro 'nome' foi enviado pelo formulário
    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        // Recebe o nome e exibe a saudação
        $nome = $_POST['nome'];
        echo "<h1>Olá, $nome! Bem-vindo(a) à nossa página!</h1>";
    } else {
        // Caso o nome não tenha sido informado
        echo "<h1>Por favor, insira seu nome.</h1>";
    }
} else {
    // Exibe o formulário quando não foi enviado um nome
    echo '
    <form method="POST" action="">
        Digite seu nome: <input type="text" name="nome" required><br>
        <input type="submit" value="Enviar">
    </form>
    ';
}
?>
