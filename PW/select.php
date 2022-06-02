<?php
//
require("conecta.php");

//exibir todos os registros da tabela usuario

$sqlSelect = " SELECT   * FROM TB_USUARIO ";

// EXECUTAR O BANCO
$resp = mysqli_query ($con, $sqlSelect);

//QUANTO O REGISTRO TEM A TABELA
echo mysqli_num_rows($resp);
//exibir valores na tabela

// $campo = mysqli_fetch_assoc($resp);
echo"<br>";
//exibir
// echo $campo["nome_us"]."<br>";

while ($campo = mysqli_fetch_assoc($resp) ) {
    echo "nome :" . $campo["nome_us"] . 
    "email :" . $campo ["email"] ."<br>";
}

// while ($indice = mysql_fetch_row($resp)) {
//     echo "Nome :" . $indice[1].
//          "Email :" . $indice[2]. "<br>";
         
// }


?>