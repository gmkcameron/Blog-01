<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $titulo = $_POST["titulo"];
    $conteudo = $_POST["conteudo"];
    
    // Conecte-se ao banco de dados e insira os dados (substitua com suas configurações)
    $conn = new mysqli("localhost", "seu_usuario", "sua_senha", "seu_banco_de_dados");
    
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO postagens (titulo, conteudo) VALUES ('$titulo', '$conteudo')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Postagem criada com sucesso.";
    } else {
        echo "Erro ao criar a postagem: " . $conn->error;
    }
    
    $conn->close();
}
?>
