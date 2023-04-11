<?php require_once("php_action/connect.php") ?>


<!DOCTYPE html>
<html>
<head>
<title>Efetuar Compra</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min
.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundl
e.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</head>
<style type="text/css">

fieldset{
margin:auto;
margin-top: 100px;
width:50%;
}
table tr th{
padding-top: 20px;
}*/
</style>
<body>
<fieldset> 
<legend>Adicionar Compra</legend>

<form action="php_action/create3.php" method="post" class = "formgroup">

<table cellspacing="0" cellpadding="0">

<tr>

Cliente: <select name = 'idcliente'>

<?php
$sql = "SELECT * FROM cliente";
$result = $connect -> query($sql);

	if($result -> num_rows){
		while($linha = $result -> fetch_assoc()){
			echo "<option value = ".$linha['idcliente']. ">".$linha['nome']. "</option>";
		}
	}


?>

</select> <br>

<th> Data da Compra </th>
<td> <input class = "form-control" type="date" name="dat" placeholder="data da compra" min= <?php echo date("Y-m-d"); ?> ></td> </tr>
<th> Quantidade de Produtos </th>
<td> <input class = "form-control" type="number" name="qd" placeholder="Quantidade" min = "0"></td> </tr>
<tr>
<th>Valor do Produto</th>
<td> <input class = "form-control" type="text" name="vl" placeholder="Valor"></td> </tr>
<tr>




<?php 
	
	$sql = "SELECT * FROM produto";
	$result = $connect -> query($sql);

	if($result -> num_rows){
		while($linha = $result -> fetch_assoc()) {
			echo "<input type = 'checkbox' name = 'idp' value = " . $linha['idproduto'] . ">" . " | " . $linha['nome_produt'] ." ".$linha['valor_produt']."<br>";

		
		}	}
	

?>



<tr>
<td> <button type="submit" class = "btn btn-info">Salvar Dados</button> </td>
<td><a href="index2.php"><button type="button"
class="btn btnalert">Voltar</button></a></td>

</tr>
</table>
</form>
</fieldset>
</body>
</html>
