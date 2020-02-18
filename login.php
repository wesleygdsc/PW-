<!DOCTYPE HTML>
<HTML>
<head><title>Pesquisar</title></head>
<body>
<?php
$loginComSucesso =False;
$login =$_POST["NomeDoUsuario"];
$senha=$_POST["SenhaDoUsuario"];

$nomeValidoDeUsuario="aluno1";
$senhaValidaDeUsuario=123;
echo"<script> alert ('".$login."') </script>";
echo"<script> alert ('".$senha."') </script>";

if($login == $nomeValidoDeUsuario && $senha == $senhaValidaDeUsuario ){
    $loginComSucesso= true;
}

//echo"alert('$loginComSucesso<br>')";

if ($loginComSucesso==false){
echo "<script> alert('".$loginComSucesso."') </script>";
echo "<script> alert('$loginComSucesso era falso e foi convertidso como string vazia')e login falhou </script>";
}else{
    echo "<script> alert ('".$login."') </script>";
    echo "<script> alert ('login feito com sucesso') </script>";
}
?>
</body>
<html>