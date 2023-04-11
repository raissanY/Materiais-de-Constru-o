<?php
 require_once 'connect.php';
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
	<div class="tabelaCompra">

<form method= "POST">

Registros: <select name = 'idcliente'>

<?php
$sql = "SELECT * FROM cliente";
$result = $connect -> query($sql);

	if($result -> num_rows){
		while($row = $result -> fetch_assoc()){
			echo "<option value = ".$row['idcliente']. ">".$row['nome']. "</option>";
		}
	}
	?>
</select> <button type="submit" class = "btn btn-alert">Enviar</button>

<table class = "table table-dark table-striped">
	<thead>
		<tr>
			<th>Cliente</th>
			<th>Produto</th>
			<th>Data</th>
		</tr>
	</thead>
	<tbody>
	
<?php
	@$idc = $_POST['idcliente'];
	@$sql = "SELECT cli.nome, prod.nome_produt, com.data_compra from cliente as cli, produto as prod, compra as com where cli.idcliente = com.idcliente and prod.idproduto = com.idproduto and com.idcompra = com.idcompra and com.idcliente = $idc";
	@$result = $connect -> query($sql);
	if($result -> num_rows >0){
		while($row = $result -> fetch_assoc()){
			echo "<tr>
			<td>". $row['nome']."</td>
			<td>". $row['nome_produt']."</td>
			<td>". $row['data_compra']."</tr>";
		}
	}else{
		echo "<tr><td colspan='5'><center>Sem Dados a apresentar</center></td></tr>";
	}
echo "<a href='../index2.php'><button type='button'>Voltar</button></a>";

	?>


		
</tbody>
</table>
</div>
</form>
</body>
</html>