<?php
include "config.php";

// Exemplo de uso de Prepared Statements
$login = mysqli_real_escape_string($con, $_POST['login']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

// Preparar e executar a consulta (substitua 'sua_tabela' pelo nome real da sua tabela)
$query = "SELECT * FROM viagens WHERE login = ? AND senha = ?";
$stmt = mysqli_prepare($con, $query);

// Vincular parâmetros
mysqli_stmt_bind_param($stmt, "ss", $login, $senha);

// Executar a consulta
mysqli_stmt_execute($stmt);

// Obter resultados
$result = mysqli_stmt_get_result($stmt);

// ... (restante do seu código para processar os resultados)

// Fechar a consulta preparada
mysqli_stmt_close($stmt);

// Fechar a conexão no final do script (opcional, dependendo das necessidades do seu aplicativo)
mysqli_close($con);
?>
