<?php
require_once 'connect.php';
if($_POST){
$data_compra = $_POST['dat'];
$idc = $_POST['idcliente'];
$idp = $_POST['idp'];
$qtd = $_POST['qd'];
@$valorp = $_POST['vl'];
@$qtdcompra = $_POST['qd'];
$valor_compra = @$valorp * @$qtdcompra; 


$sql = "INSERT INTO compra (data_compra, idcliente, idproduto, qtdcompra,valor_compra) VALUES ('$data_compra', '$idc', '$idp','$qtd', '$valor_compra')";

}
if($connect ->query($sql)){
echo "<br>"."Cliente n°:  ".$idc."<br>". "Produto: ". $idp."<br>"."Data da Compra: ".$data_compra. "<br>"."Quantidade de Produtos: ".$qtd."<br>"."Valor da Compra: R$".$valor_compra."<br>";
}


echo "<p> Nova Compra Efetuada com sucesso!<p>";
echo "<a href='../create3.php'><button type='button'>Voltar</button></a>
<a href='../index2.php'><button type='button'>Acessar Compras</button></a>";
{}

$sql2 = "UPDATE produto set Qtd_produt = Qtd_produt - $qtd where idproduto = $idp";
if ($connect -> query($sql2)){
}





$connect -> close();

?>
 
 <button onclick = "window.print()">Imprimir</button>

 