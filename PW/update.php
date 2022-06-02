<?php
require ("conecta.php")

if(!isset($_REQUEST['id']))
{
    echo "usuario nâo identificado";
    exit();
}
$nome = "Mikael";
$email = "mikael@gmail.com";
$SqlUpdate = "UPDATE tb_usuario
                SET nome_us = 'nome',
                    email = 'email',
                WHERE id_us = $id";
mysqli_query($con, $SqlUpdate);
mysqli_close($con);

?>