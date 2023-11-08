<?php
session_start();

// Verifique se o usuário está autenticado (se não, redirecione para a página de login)
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

// Exiba as informações do usuário (neste caso, apenas o nome de usuário)
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Painel de Controle</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $username; ?>!</h2>
    <p>Esta é a sua página de painel de controle.</p>
    <a href="logout.php">Sair</a> <!-- Adicione um link para fazer logout -->
</body>
</html>
