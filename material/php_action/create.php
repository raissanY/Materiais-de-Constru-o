<?php
require_once 'connect.php';
if($_POST){
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['tele'];
$bairro = $_POST['bairro'];
$numero = $_POST['numb'];
$cep = $_POST['cep'];

$sql = "INSERT INTO cliente (nome,cpf,telefone,bairro,numero,cep) 
VALUES ('$nome','$cpf','$telefone','$bairro', '$numero', '$cep')";
if($connect -> query($sql) === TRUE){
echo "<p> Novo cliente cadastrado com sucesso!</p>";
echo "<a href='../create.php'><button 
type='button'>Voltar</button></a>";
echo "<a href='../index.php'><button 
type='button'>Início</button></a>";
}else{
echo "Erro ".$sql. ' '.$connect -> connect_error;
}
$connect -> close();
}

?>