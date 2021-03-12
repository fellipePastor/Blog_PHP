<?php


require_once "model/Comentario.php";


class ComentarioController 
{

public function all()
{
    
    
    $obj = new Comentario();
    $obj -> setidArtigo(isset($_GET["idArtigo"]) ? $_GET["idArtigo"] : 1);
    $comentarios = $obj->all();
    
    include "view/Comentario_all.php";
}

public function create()
{
    $obj = new Comentario();
    $obj -> setidArtigo(isset($_GET["idArtigo"]) ? $_GET["idArtigo"] : 1);
    if(isset($_POST["descricao"])){
        $obj ->setDescricao($_POST["descricao"]);
        $obj ->create();

    }
   
    include "view/Comentario_create.php";
}

}