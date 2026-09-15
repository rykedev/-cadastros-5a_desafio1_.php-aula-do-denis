<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificador de Maioridade</title>
</head>
<body>
    <h2>Verificador de Maioridade</h2>

    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <br><br>

        <label for="ano_nascimento">Ano de Nascimento:</label>
        <input type="number" id="ano_nascimento" name="ano_nascimento" required>

        <br><br>

        <button type="submit">Verificar</button>
    </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $anoNascimento = $_POST['ano_nascimento'];

    // Calcula a idade
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;

    // Verifica a maioridade
    if ($idade >= 18) {
        echo "<script> alert('Acesso permitido, $nome!') </script>";

        //Abre/Cria arquivo (usuarios.txt)para guarda os dados
        //O 'a' vem append, que em ingles siginifica "acresentar"
        $arquivo = fopen('log_acessos.txt', 'a');

        //  Cria uma linha com nome e senha separados por ";"
        $linha = $nome . ";" . $idade . "\n";

        // Escrever  a linha no arquivo
        // fwrite () escrever o conteúdo da varíavel no arquivo aberto
        fwrite($arquivo, $linha);


        // Fechar o arquivo
        fclose($arquivo);

    } else {
        echo "<script> alert('Acesso negado, $nome!') </script>";
    }
}
?>

</body>
</html>