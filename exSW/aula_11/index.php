<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consulta de CEP - ViaCEP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Consulta de CEP</h1>
    <form method="GET">
        <input type="text" name="cep" placeholder="Digite o CEP" maxlength="8" required pattern="\d{8}">
        <br>
        <input type="submit" value="Buscar">
    </form>

    <!-- O restante do PHP continua igual a partir daqui -->

   <?php
// Função de exibir erro com tema Venom
function venom_error(string $msg): void {
    echo "
    <div class='venom-error'>
        <img src='https://media.giphy.com/media/WoW7fOaY16s6A/giphy.gif' alt='Venom' class='anim'>
        <p>“{$msg}”</p>
    </div>
    ";
}

if (isset($_GET['cep'])) {
    $cep = preg_replace('/\D/', '', $_GET['cep']);

    // Validar formato
    if (strlen($cep) !== 8) {
        venom_error("Cuidado, você entrou na teia do Venom: CEP inválido!");
    } else {
        $url  = "https://viacep.com.br/ws/{$cep}/json/";
        $json = @file_get_contents($url);
        $data = $json ? json_decode($json, true) : null;

        if (!$data || isset($data['erro'])) {
            venom_error("Ei, essa aranha não achou nada – Venom diz: CEP não encontrado!");
        } else {
            // Tabela de estados e regiões
            $estados = [
                "AC" => ["Acre", "Norte"],
                "AL" => ["Alagoas", "Nordeste"],
                "AP" => ["Amapá", "Norte"],
                "AM" => ["Amazonas", "Norte"],
                "BA" => ["Bahia", "Nordeste"],
                "CE" => ["Ceará", "Nordeste"],
                "DF" => ["Distrito Federal", "Centro-Oeste"],
                "ES" => ["Espírito Santo", "Sudeste"],
                "GO" => ["Goiás", "Centro-Oeste"],
                "MA" => ["Maranhão", "Nordeste"],
                "MT" => ["Mato Grosso", "Centro-Oeste"],
                "MS" => ["Mato Grosso do Sul", "Centro-Oeste"],
                "MG" => ["Minas Gerais", "Sudeste"],
                "PA" => ["Pará", "Norte"],
                "PB" => ["Paraíba", "Nordeste"],
                "PR" => ["Paraná", "Sul"],
                "PE" => ["Pernambuco", "Nordeste"],
                "PI" => ["Piauí", "Nordeste"],
                "RJ" => ["Rio de Janeiro", "Sudeste"],
                "RN" => ["Rio Grande do Norte", "Nordeste"],
                "RS" => ["Rio Grande do Sul", "Sul"],
                "RO" => ["Rondônia", "Norte"],
                "RR" => ["Roraima", "Norte"],
                "SC" => ["Santa Catarina", "Sul"],
                "SP" => ["São Paulo", "Sudeste"],
                "SE" => ["Sergipe", "Nordeste"],
                "TO" => ["Tocantins", "Norte"],
            ];

            $uf     = $data['uf'];
            $estado = $estados[$uf][0];
            $regiao = $estados[$uf][1];

            // Sucesso com tema Spider-Man
            echo "
            <div class='spider-success'>
                <img src='https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif' alt='Spider-Man' class='anim'>
                <p>“Você é o amigão da vizinhança!”</p>
                <div class='resultado'>
                    <p><strong>Logradouro:</strong> {$data['logradouro']}</p>
                    <p><strong>Bairro:</strong> {$data['bairro']}</p>
                    <p><strong>Localidade:</strong> {$data['localidade']}</p>
                    <p><strong>UF:</strong> {$uf}</p>
                    <p><strong>Estado:</strong> {$estado}</p>
                    <p><strong>Região:</strong> {$regiao}</p>
                </div>
            </div>
            ";
        }
    }
}
?>


</body>
</html>
