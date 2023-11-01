<?php

$conn = mysqli_connect("localhost", "root","", "viagem_db");

$sql = "SELECT * FROM pacotes";
if($res = mysqli_query($conn, $sql)){
if(mysqli_num_rows($res) > 0){

while ($pacote = mysqli_fetch_array($res)){

echo "
<div class='row'>
<div class='col'>
<div class='box-pacote'>
<img class='img' src='$pacote[path_imagem]'>  
<div class='row titulo-pacote'>
<img src='img/icons8-avião-50 1.jpg' style='width: 30px;'>
<div>
<p class='titulo-pacote'><b> $pacote[pais] &nbsp; $pacote[numero_noites] noites  </b></p></div> </div>

<div>
<p class='pacote_cidade'>Cidade: &nbsp; $pacote[cidade]</p>

</div>
<p class='titulo-pacote'>$pacote[numero_pessoas] &nbsp; Pessoas </p><br>
<div id='valor'><p class='titulo-pacote'>Valor:<br> R$ $pacote[valor_Pacote]</p></div>
<p class='titulo-pacote'><a href='#'> Comprar</a></p>
</div>
</div>


";
     




}

mysqli_free_result($res);    }

}
else {
echo "Nenhum registro foi encontrada";
}


?>