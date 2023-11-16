<html>
 <header>
       <link rel="stylesheet" href="estilo/justified-nav.css">
        <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/style.css">
 </header>





<?php 

//Variaveis para conectar no banco
 $servidor_db ="localhost";
 $usuario_db="root";
 $senha_db=""; //No banco local a senha e vazia, mas se o seu tem senha edicione nesse variavel

 //Conectando com o banco de dados
 $conexao = new mysqli($servidor_db,$usuario_db,$senha_db);

 if ($conexao->connect_error){
    die("Conexão falhou: ". $conexao->connect_error);
 }

   echo "<div class='alert alert-info' role='alert'>  Conectado com sucesso no no Mysql.</div>";

//Criar o banco de dados
$nomeDoBanco = "viagens_db";
$sql = "CREATE DATABASE IF NOT EXISTS " . $nomeDoBanco;

if ($conexao->query($sql) === TRUE){
    
   echo "<div class='alert alert-success' role='alert'>  Banco de dados 'viagens_db' foi criado com sucesso.</div>";
}
else{
     echo "Erro ao criar o banco de dados" .$conexao->error; 
    
 
}

//Comando para criar tabelas no bando de dados
$sql = "
      CREATE TABLE IF NOT EXISTS $nomeDoBanco.cadastro (
            id INT(6) AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(250) NOT NULL,
            email VARCHAR(250) NOT NULL,

      )


";

if ($conexao->query($sql) === TRUE){
   // echo "<h2>Tabela criada com sucesso.</h2>";
   echo "<div class='alert alert-success' role='alert'> 
          <h3> 1)  Conexão com banco de dados.✅</h3>
          <h3> 2) Criação do banco de dados.✅</h3>
          <h3> 3) Criação de tabelas.✅</h3>
          <hr>
           
          <h5>Seu banco foi configurado com sucesso. 😀<br> Tudo pronto para cadastrar o seus pacotes de viagem.</h5>
          <button type='button' class='btn btn-primary' ><a href='cadastroPacotes.html'style='color:white;'>Cadastrar pacote de viagem</a></button>
         
         </div>";

}
else {
    echo "<h2>Erro ao criar a tabela:</h2>" . $conexao->error;
}






?>


</html>