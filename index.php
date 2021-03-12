<?php
  require_once 'config/config.php';
  require_once 'controller/ArtigoController.php';
  require_once 'controller/ComentarioController.php';


  $artigoController = new ArtigoController();
  $comentarioController = new ComentarioController();
  
  /**
   * puxar uma mensagem de acordo com o parametro get
   *  echo 'Hello ' . htmlspecialchars($_GET["idAtir"]) . '!';*/
  

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <title>TPA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="js/js.js"></script>
 
</head>

<body>


   


</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<img classe="logo" src="images/logo.jpg"> 

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
            <h2><a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <h2><a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <h2> <a class="nav-link" href="#">Link</a>
            </li>
            
        </ul>
    </div>
    <ul class="navbar-nav">
    <li class="nav-ite">
        
    <h3>  <a   class="nav-link" href="login.php">Faça Login ou Registre-se</a></h2>
     </li>
</ul>
</nav>

<div class="container" style="margin-top:30px">

    <div class="row">

    <div class="col-lg-3 col-md-6">
                <h3>Artigos</h3>
                
                <ul class="nav nav-pills flex-column">
                    
                    <?php $artigoController->all(); ?>

                </ul>
                <hr class="d-sm-none">
   </div>  


        <div class="col-sm-9">
           <?php $artigoController->read(); ?>
           <?php $comentarioController->all(); ?>
           <a href="login.php"><h3>Para comentar faça login ou registre-se<h3></a>
        </div>

    </div>
</div>



</body>
</html>


