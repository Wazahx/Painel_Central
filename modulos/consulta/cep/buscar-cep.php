<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cep = $_POST['cep'];
    $cep = preg_replace('/[^0-9]/', '', $cep);

    if (strlen($cep) != 8) {
        $erro = 'CEP inválido';
    } else {
        $url = 'https://viacep.com.br/ws/'.$cep.'/json/';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $resultado = curl_exec($ch);
        curl_close($ch);

        if ($resultado === false) {
            $erro = 'Erro ao buscar o CEP';
        } else {
            $endereco = json_decode($resultado);
            if (isset($endereco->erro)) {
                $erro = 'CEP não encontrado';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buscador de CEP - Resultados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="buscar-cep.php">
        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep" value="<?php echo $cep ?? ''; ?>" required>
        <button type="submit">Buscar</button>
    </form>

    <?php if (isset($endereco)): ?>
    <table>
        <thead>
            <tr>
                <th>CEP</th>
                <th>Logradouro</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $endereco->cep ?? ''; ?></td>
                <td><?php echo $endereco->logradouro ?? ''; ?></td>
                <td><?php echo $endereco->bairro ?? ''; ?></td>
                <td><?php echo $endereco->localidade ?? ''; ?></td>
                <td><?php echo $endereco->uf ?? ''; ?></td>
            </tr>
        </tbody>
    </table>
    <?php elseif (isset($erro)): ?>
    <p class="erro"><?php echo $erro; ?></p>
    <?php endif; ?>
</body>
</html>
