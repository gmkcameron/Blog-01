<!-- processa_cadastro.php -->
<?php
include "config.php"; // Inclua o arquivo de configuração para obter a conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receba os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Preparar e executar a consulta de inserção
    $sql = "INSERT INTO viagens_db (nome, email) VALUES ('$nome', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}

// Feche a conexão
$conn->close();
?>
