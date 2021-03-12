<?php   
session_start();
$con = new PDO("mysql:host=localhost;dbname=viverblog","root","");

if (isset($_POST)){
  $sql = $con-> prepare ("INSERT INTO autor  (idAutor,Nome, email, senha) values (null, ?, ?,?)");
  $sql->execute(array(  $_POST['nome'], $_POST['email'],md5($_POST['senha']) ));
}
 

     header("Location: login.php");


?>
