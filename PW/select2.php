<?php
require("conecta.php");

$SqlSelect = "SELECT * FROM tb_usuario";
$respostas = mysqli_query($con, $SqlSelect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

<?php while($linha = mysqli_fetch_assoc($respostas)){?>
        <tr>
            <td><?php echo $linha['nome_us'] ?></td>
            <td><?php echo $linha['email'] ?></td>
        </tr>
    <?php } ?>
    <tbody>
  </table>  
</body>
</html>


