<html>
<head>

<title>Login</title>
</head>

<body>

<form action="autenticar.php" method="post">

<?php 
if (isset($_GET['erro'])) 
{ 
    if ($_GET['erro'] == "dadoserrado") 
    { 
        echo "<script>alert('Dados estão incorretos!'); 
               window.location.href='login.php';</script>
               ";
    
    }
}


?>

<input type="email" name="email" placeholder="Email" required>
<input type="password"  name="senha" placeholder="Senha" required>
<button  id="cadastrar" type="submit" >Logar</button>
</form>
<label> Nao possui conta <a href="cadastro.php">Criar Conta</a><label>
</body>
</html>