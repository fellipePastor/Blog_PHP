<?php
include "config/config.php";
session_start();
$email = $_POST['email'];
$senha= $_POST['senha'];

$con = new PDO(SERVIDOR,USUARIO,SENHA);
$sql = $con->prepare("SELECT * FROM autor WHERE email=? AND senha=? ");
$sql->execute( [$email, md5($senha)]);

$row = $sql->fetchObject(); // devolve um único registro


// Se o usuário foi localizado
if ($row){
$_SESSION['autor'] = $row;

header("Location: Restrito/index.php");
}else{
    header("Location: login.php?erro=dadoserrado");
}




?>