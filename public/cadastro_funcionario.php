<?php

include "../infra/conn.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO funcionarios(nome, email) VALUES ('$nome', '$email')";

mysqli_query($conn, $sql);

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de Funcionários </title>
</head>
<body>

<form method = "POST">

<label> Nome do Funcionário: </label>
<input type = "text" name = "nome">

<br>

<label> Email do Funcionário: </label>
<input type = "email" name = "email">

<br>

<button type = "submit"> Cadastrar </button>

</form>

</body>
</html>