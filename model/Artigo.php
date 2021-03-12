<?php

class Artigo{


    private $idArtigo;
    private $nome;
    private $autor;
    private $descricao;
    private $data;
    private $Autor_idAutor;
    private $con;


    public function __construct($idArtigo = null)
    {
        $this->idArtigo= $idArtigo;
        $this->con = new PDO(SERVIDOR,USUARIO,SENHA);

    }

    public function all(){

        $sql= $this->con->prepare("SELECT * FROM artigo");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }
    public function read()
    {
        $sql = $this->con->prepare("SELECT * FROM artigo WHERE idArtigo=?");
        $sql -> execute([$this->idArtigo]);
        $row = $sql ->fetchObject();
        return $row;
    }
	


















    /**
     * Get the value of idArtigo
     */ 
    public function getIdArtigo()
    {
        return $this->idArtigo;
    }

    /**
     * Set the value of idArtigo
     *
     * @return  self
     */ 
    public function setIdArtigo($idArtigo)
    {
        $this->idArtigo = $idArtigo;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

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
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of Autor_idAutor
     */ 
    public function getAutor_idAutor()
    {
        return $this->Autor_idAutor;
    }

    /**
     * Set the value of Autor_idAutor
     *
     * @return  self
     */ 
    public function setAutor_idAutor($Autor_idAutor)
    {
        $this->Autor_idAutor = $Autor_idAutor;

        return $this;
    }
}














?>
