<!DOCTYPE html>
<html>
<head>
<title>Adicionar ao Estoque</title>
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
<tr>
<th>Nome do Produto</th>
<td><input class = "form-control" type="text"
name="produt" placeholder="produto"></td>
</tr>
<tr>
<th>Valor</th>
<td><input class = "form-control" type="text"
name="val" placeholder="preço"></td>
</tr>
<tr>
<th>Quantidade</th>
<td><input class = "form-control" type="text"
name="quant" placeholder="quantidade"></td>
</tr>
<tr>
<td><button type="submit" class = "btn btnalert">Salvar Dados</button></td>
<td><a href="index.php"><button type="button"
class="btn btn-info">Voltar</button></a></td>
</tr>
</table>
</form>
</fieldset>
</body>
</html>

<?php
$sql = "SELECT*from produto";
$result = $connect -> query($sql);

if($result -> num_rows){

	while($linha = $resultado -> fetch_assoc()){
		$qtd2 = $linha['Qtd_produt'];
		echo "<tr>";
	}}


?>