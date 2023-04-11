<?php 
require_once 'php_action/connect.php'; 
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
	<button onclick = "window.print()">Imprimir</button>

<div class="tabelacompra">
<a href="create3.php"><button type="button" class="btn btnsuccess">Adicionar Compra</button></a>
<a href="php_action/createx.php"><button type="button" class="btn btnsuccess">Acessar Registros</button></a>
<table class = "table table-bordered">
<thead>
<tr>
<th>Cliente</th>	
<th>Data da Compra</th>
<th>Valor</th>
<th>Produto</th>
<th>Quantidade</th>
</tr>
</thead>
<tbody>

<?php

$sql = "SELECT com.idcompra, cli.idcliente, cli.nome, com.data_compra, com.idcliente, com.idproduto, com.qtdcompra, com.valor_compra, prod.idproduto, prod.nome_produt, prod.valor_produt, prod.Qtd_produt, (prod.valor_produt * com.qtdcompra) as total
FROM cliente as cli, produto as prod, compra as com WHERE cli.idcliente = com.idcliente and prod.idproduto = com.idproduto";



$result = $connect -> query($sql);
if($result -> num_rows > 0){
while($row = $result -> fetch_assoc()){
echo "<tr>
<td>".$row["nome"]."</td>
<td>".$row["data_compra"]."</td>
<td>".$row["valor_compra"]."</td>
<td>".$row["nome_produt"]."</td>
<td>".$row["qtdcompra"]."</td>

</tr>";

}
}else{
echo "<tr><td colspan='5'><center>Sem Dados a apresentar</center></td></tr>";
}


echo "
<a href='index.php?'><button type='button' class='btn btn danger'>Acessar Clientes</button></a>
<a href='index3.php?'><button type='button' class='btn btn danger'>Acessar Estoque</button></a>
";
?>

</table>
</div>
</body>
</html>
