<?php 



class Comentario
{

private $idComentario;
private $descricao;
private $datapost;
private $Pai_id;
private $idArtigo;
private $Autor_Autor;

private $con;


public function __construct($idComentario = null)
{
    $this->idComentario= $idComentario;
    $this->con = new PDO(SERVIDOR,USUARIO,SENHA);

}

public function all(){

    $sql= $this->con->prepare("SELECT * FROM comentario WHERE idArtigo	= ? order by datapost DESC ");
    $sql -> execute([$this->idArtigo]);
    $row = $sql->fetchAll(PDO::FETCH_CLASS);
    return $row;
	
    
}
public function create(){

    $sql= $this->con->prepare("INSERT INTO `comentario`(`idComentario`, `descricao`, `datapost`, `Pai_id`, `idArtigo`, `Autor_idAutor`) VALUES (null,?,?,?,?,?)");
    $sql -> execute([$this->descricao,date("Y-m-d H:i:s"),1,$this->idArtigo,1]);
    
    if($sql->errorCode()=='00000'){
        header("location: ?idArtigo=".$this->idArtigo);
    }else{
        echo($sql->errorInfo()[2]);
    }
}





/**
 * Get the value of idComentario
 */ 
public function getIdComentario()
{
return $this->idComentario;
}

/**
 * Set the value of idComentario
 *
 * @return  self
 */ 
public function setIdComentario($idComentario)
{
$this->idComentario = $idComentario;

return $this;
}

/**
 * Get the value of descricao
 */ 
public function getDescricao()
{
return $this->descricao;
}

/**
 * Set the value of descricao
 *
 * @return  self
 */ 
public function setDescricao($descricao)
{
$this->descricao = $descricao;

return $this;
}

/**
 * Get the value of datapost
 */ 
public function getDatapost()
{
return $this->datapost;
}

/**
 * Set the value of datapost
 *
 * @return  self
 */ 
public function setDatapost($datapost)
{
$this->datapost = $datapost;

return $this;
}

/**
 * Get the value of Pai_id
 */ 
public function getPai_id()
{
return $this->Pai_id;
}

/**
 * Set the value of Pai_id
 *
 * @return  self
 */ 
public function setPai_id($Pai_id)
{
$this->Pai_id = $Pai_id;

return $this;
}

/**
 * Get the value of Artigo_id
 */ 
public function getidArtigo()
{
return $this->idArtigo;
}

/**
 * Set the value of Artigo_id
 *
 * @return  self
 */ 
public function setidArtigo($idArtigo)
{
$this->idArtigo = $idArtigo;

return $this;
}

/**
 * Get the value of Autor_Autor
 */ 
public function getAutor_Autor()
{
return $this->Autor_Autor;
}

/**
 * Set the value of Autor_Autor
 *
 * @return  self
 */ 
public function setAutor_Autor($Autor_Autor)
{
$this->Autor_Autor = $Autor_Autor;

return $this;
}
}


























?>