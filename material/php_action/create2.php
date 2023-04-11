<?php
require_once 'connect.php';
if($_POST){
$idprodut = $_POST['idprodut'];
$nomep = $_POST['produt'];
$valorp = $_POST['val'];
$qtdp = $_POST['quant'];

$sql = "INSERT INTO produto VALUES 
('$id','$nomep','$valorp','$qtdp')";

if($connect -> query($sql) === TRUE){
echo "<a href='../create.php'><button 
type='button'>Voltar</button></a>";
echo "<a href='../index.php'><button 
type='button'>Inicio</button></a>";
}else{
echo "Erro ".$sql. ' '.$connect -> connect_error;
}
$connect -> close();
}

?>