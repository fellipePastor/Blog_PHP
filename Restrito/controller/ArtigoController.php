<?php


require_once "model/Artigo.php";


class ArtigoController 

{

public function all()
{
    
    $obj = new Artigo();
    $obj -> setidArtigo(isset($_GET["idArtigo"]) ? $_GET["idArtigo"] : 1);
    $artigos = $obj -> all();
    include "view/Artigo_all.php";
}
public function read()
{
    $obj = new Artigo();
    $obj -> setidArtigo(isset($_GET["idArtigo"]) ? $_GET["idArtigo"] : 1);
    $artigo = $obj->read();
    include "view/Artigo_read.php";
}














}