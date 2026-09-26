<?php

include "../infra/conn.php";


if($_SERVER=["REQUEST_METHOD"] == "POST"){

$medicamento = $_POST['medicamento'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$urgencia = $_POST['urgencia'];
$data_solicitacao = $_POST['data_solicitacao'];
$status = $_POST['status'];
$funcionario_id = $_POST['funcionario_id'];

$sql = "INSERT INTO pedidos(medicamento, quantidade, categoria, urgencia, data_solicitacao, status) VALUES ('$medicamento', '$quantidade', '$categoria', '$urgencia', '$data_solicitacao', '$status')";

mysqli_query($conn, $sql);

}

$funcionarios = mysqli_query($conn, "SELECT * FROM funcionarios");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de Pedidos </title>
</head>
<body>

<form method = "POST">

 <label for="idade"> Funcionário relacinado: </label>
    <select name="funcionario_id">

    <?php

    while($funcionario = mysqli_fetch_assoc($funcionarios)){ ?>
    
    <option value="<?php echo $funcionario['id']; ?>">
        <?php echo $funcionario['nome']; ?>
    </option>

    <?php } ?>

    </select>

    <br>

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

<label> Status: </label>
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