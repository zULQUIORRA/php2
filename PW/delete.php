<?php

    require("conecta.php");

    $id = 5;
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];
    }
    else
    {
        echo "informe o id apagado";
        echo "exemplo";
        $link = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id=3';
        echo '<a href="' .$link .'">' . $link . '</a>';
        exit();
    }
    $sqlDelete  ="DELETE FROM tb_usuario WHERE id_us = $id";

    $resposta = mysqli_query($con,$sqlDelete);








?>    