<?php

class Noticia {
    //atributos da tabela categoria
    public $codnoticia;
    public $data; 
    public $titulo;
    public $codcategoria;
    public $imagem;
    public $conteudo;

    public function __construct() //será executado ao usar a classe (essa vai ser a primeira coisa que vai ser executada)
    {
        include_once "Conexao.php"; //incluindo conexão
    }

    public function cadastrar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("INSERT INTO noticia (data, titulo, codcategoria, imagem, conteudo) 
        VALUES (:data, :titulo, :codcategoria, :imagem, :conteudo)");

        //enviando o valor dos parâmetros
        $cmd->bindParam(":data",    $this->data);
        $cmd->bindParam(":titulo",    $this->titulo);
        $cmd->bindParam(":codcategoria",    $this->codcategoria);
        $cmd->bindParam(":imagem",    $this->imagem);
        $cmd->bindParam(":conteudo",    $this->conteudo);

        $cmd->execute(); //executar o comando
    }

    public function consultar()
    {
        $con = Conexao::conectar(); // Primeiro é preciso acessar o BD
        $cmd = $con->prepare("SELECT * FROM noticia"); // Comando SQL 
        $cmd->execute(); // Executar o comando
        return $cmd->fetchAll(PDO::FETCH_OBJ); // Transforma em vetores as coisas / FETCH_OBJ transforma em objeto
    }

}
?>