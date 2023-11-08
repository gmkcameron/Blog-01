<?php
// Faça a conexão com o banco de dados (substitua com suas credenciais)
$host = "localhost";
$usuario = "seu_usuario";
$senha = "sua_senha";
$banco = "seu_banco_de_dados";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Receba dados do formulário de login
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar as credenciais (substitua com sua consulta real)
$sql = "SELECT * FROM viagens WHERE username = '$username' AND password = '$password'";

$resultado = $conexao->query($sql);

if ($resultado->num_rows == 1) {
    // Credenciais válidas
    session_start();
    $_SESSION['username'] = $username;
    header("Location: dashboard.php"); // Redirecione para a página do painel após o login
} else {
    // Credenciais inválidas
    header("Location: login.html?erro=1"); // Redirecione de volta à página de login com uma mensagem de erro
}
?>
