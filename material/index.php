<?php require_once 'php_action/connect.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link
href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
rel = "stylesheet" 
integrity = "sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<script
src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity = "sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin = "anonymous">
</script>
</head>
<body>
<div class="tabela">
<a href="php_action/createx.php"><button type="button" class="btn btnsuccess">Acessar Registros</button></a>
<a href="create.php"><button type="button" class="btn btnsuccess">Inscrever Cliente</button></a>
<table class = "table table-bordered">
<thead>
<tr>
<th>Nome</th>
<th>CPF</th>
<th>Telefone</th>
<th>Bairro</th>
<th>Numero</th>
<th>CEP</th>
</tr>
</thead>
<tbody>

<?php
$sql = "SELECT * FROM cliente";
$result = $connect -> query($sql);
if($result -> num_rows > 0){
while($row = $result -> fetch_assoc()){
echo "<tr>
<td>".$row["nome"]."</td>
<td>".$row["cpf"]."</td>
<td>".$row["telefone"]."</td>
<td>".$row["bairro"]."</td>
<td>".$row["numero"]."</td>
<td>".$row["cep"]."</td>
<td>
</tr>";
}
}else{
echo "<tr><td colspan='5'><center>Sem Dados a apresentar</center></td></tr>";
}
echo "
<a href='index2.php?'><button type='button' class='btn btn danger'>Acessar Compras</button></a>
<a href='index3.php?'><button type='button' class='btn btn danger'>Acessar Estoque</button></a>
";
?>
</tbody>
</table>
</div>
</body>
</html>