<?php
// Inclua qualquer código de processamento aqui, se necessário.

// Inclua o código HTML para o formulário abaixo.
?>

<!DOCTYPE html>
<html>
<head>
    <title>Criar Nova Postagem</title>
</head>
<body>
    <h1>Criar Nova Postagem</h1>
    
    <form action="processar_post.php" method="post">
        <label for="titulo">Título da Postagem:</label>
        <input type="text" id="titulo" name="titulo" required><br>
        
        <label for="conteudo">Conteúdo da Postagem:</label>
        <textarea id="conteudo" name="conteudo" rows="4" required></textarea><br>
        
        <input type="submit" value="Publicar Postagem">
    </form>
</body>
</html>
