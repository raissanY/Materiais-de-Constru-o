<?php
$localhost = "127.0.0.1";
$username="root";
$password = "";
$bdnome = "material";

$connect = new mysqli($localhost,$username,$password,$bdnome);

if($connect -> connect_error){
die ("A conexão falhou: ".$connect -> connect_error);
}
else{
echo "Conexão realizada com sucesso!";
}

?>