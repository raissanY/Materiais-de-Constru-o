<?php require_once 'php_action/connect.php'; ?>
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
<div class="tabelacompra">
<a href="php_action/createx.php"><button type="button" class="btn btnsuccess">Acessar Registros</button></a>
<table class = "table table-bordered">
<thead>
<tr>
<th>Nome do Produto</th>
<th>Valor do Produto</th>
<th>Quantidade</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM produto";
$result = $connect -> query($sql);
if($result -> num_rows > 0){
while($row = $result -> fetch_assoc()){
echo "<tr>
<td>".$row["nome_produt"]."</td>
<td>".$row["valor_produt"]."</td>
<td>".$row["Qtd_produt"]."</td>

</tr>";
}
}else{
echo "<tr><td colspan='5'><center>Sem Dados a apresentar</center></td></tr>";
}
echo "
<a href='index.php?'><button type='button' class='btn btn danger'>Acessar Clientes</button></a>
<a href='index2.php?'><button type='button' class='btn btn danger'>Acessar Compras</button></a>
";
?>
</tbody>
</table>
</div>
</body>
</html>
