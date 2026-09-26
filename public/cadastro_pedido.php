<?php

include "../infra/conn.php";

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de Pedidos </title>
</head>
<body>

<form method = "POST">

<label> Nome do Medicamento: </label>
<input type = "text" name = "medicamento">

<br>

<label> Quantidade: </label>
<input type = "int" name = "quantidade">

<br>

<label> Categoria: </label>
<input type = "text" name = "categoria">

<br>

<label> Urgência: </label>
<select name="urgencia">

<option value="Baixa"> Baixa</option>
<option value="Média"> Média</option>
<option value="Alta"> Alta</option>

</select>

<br>

<label> Data da Solicitação: </label>
<input type = "date" name = "data_solicitacao">

<br>

<label> Data da Solicitação: </label>
<select name="status">

<option value="Solicitado"> Solicitado </option>
<option value="Em separação"> Em separação </option>
<option value="Recebido"> Recebido </option>

</select>

<br>

<button type = "submit"> Cadastrar </button>

</form>

<br>

<a href="../index.php"> Voltar </a>

</body>
</html>