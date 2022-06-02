<?php
// criar uma variavel de string e resulta em sql

require("conecta.php");

$sqlInsert = "insert into tb_usuario 
 (nome_us, email)
 values('Joao', 'joaolindao@etec.com'),
       ('Kauan', 'kauan@etec.com')";

  $resp = mysqli_query($con,$sqlInsert);

   if($resp){
       echo "Cadastro feito com sucesso";
       mysqli_close($con);
   }
   else{
     echo myseqli_connect_error();  
   }




?>