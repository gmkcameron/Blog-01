<?php
// processar_login.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere e valide as informações fornecidas pelo usuário
    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_EMAIL);
    $senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);

    // Conecte-se ao banco de dados e verifique as credenciais
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $dbname = "cadastro";

    $conn = new mysqli($nome, $senha, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "SELECT id, nome FROM cadastro WHERE nome = '$nome' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuário autenticado com sucesso
    
        // Redirecione para a página principal ou outra página desejada
        header("Location: index.php")
        exit();  // ou die();
    } else {
        // Credenciais inválidas
        echo "Login falhou. Verifique seu e-mail e senha.";
    }    

    // Feche a conexão
    $conn->close();
}
?>
