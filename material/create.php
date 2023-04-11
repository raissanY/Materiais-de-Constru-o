<!DOCTYPE html>
<html>
<head>
<title>Adicionar Cliente</title>
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
<legend>Adicionar Cliente</legend>
<form action="php_action/create.php" method="post" class = "formgroup">
<table cellspacing="0" cellpadding="0">
<tr>
<th>Nome</th>
<td><input class = "form-control" type="text"
name="nome" placeholder="Nome"></td>
</tr>
<tr>
<th>CPF</th>
<td><input class = "form-control" type="text"
name="cpf" placeholder="cpf"></td>
</tr>
<tr>
<th>Telefone</th>
<td><input class = "form-control" type="text"
name="tele" placeholder="telefone"></td>
</tr>
<tr>
<th>Bairro</th>
<td><input class = "form-control" type="text"
name="bairro" placeholder="bairro"></td>
</tr>
<tr>
<th>Numero de Residência</th>
<td><input class = "form-control" type="text"
name="numb" placeholder="numero"></td>
</tr>
<tr>
<th>CEP</th>
<td><input class = "form-control" type="text"
name="cep" placeholder="cep"></td>
</tr>
<tr>
<td><button type="submit" class = "btn btn-info">Salvar Dados</button></td>
<td><a href="index.php"><button type="button"
class="btn btn alert">Voltar</button></a></td>
</tr>
</table>
</form>
</fieldset>
</body>
</html>
