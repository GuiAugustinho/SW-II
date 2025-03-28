<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {

        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];


        $media = ($nota1 + $nota2 + $nota3) / 3;

        echo "<h2>A média das suas notas é: " . number_format($media, 2) . "</h2>";
    } else {
        echo "<h2>Você esqueceu de preencher todas as notas. Tente novamente!</h2>";
    }
} else {
    echo '
    <form method="POST" action="">
        Informe a Nota 1: <input type="number" name="nota1" required><br>
        Informe a Nota 2: <input type="number" name="nota2" required><br>
        Informe a Nota 3: <input type="number" name="nota3" required><br>
        <input type="submit" value="Calcular Média">
    </form>
    ';
}
?>
