<?php
 
class Categoria {
    //atributos da tabela categoria
    public $codcategoria;
    public $nomecategoria; 

    public function __construct() //será executado ao usar a classe (essa vai ser a primeira coisa que vai ser executada)
    {
        include_once "Conexao.php"; //incluindo conexão
    }

    public function cadastrar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("INSERT INTO categoria (nomecategoria) 
        VALUES (:nomecategoria)");

        //enviando o valor dos parâmetros
        $cmd->bindParam(":nomecategoria",    $this->nomecategoria);

        $cmd->execute(); //executar o comando
    }

    public function consultar()
    {
        $con = Conexao::conectar(); // Primeiro é preciso acessar o BD
        $cmd = $con->prepare("SELECT * FROM categoria"); // Comando SQL 
        $cmd->execute(); // Executar o comando
        return $cmd->fetchAll(PDO::FETCH_OBJ); // Transforma em vetores as coisas / FETCH_OBJ transforma em objeto
    }

    public function excluir()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("DELETE FROM categoria WHERE codcategoria = :codcategoria");

        //enviando o valor dos parâmetros
        $cmd->bindParam(":codcategoria",    $this->codcategoria);

        $cmd->execute(); //executar o comando
    }

    public function atualizar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("UPDATE categoria SET nomecategoria = :nomecategoria WHERE codcategoria = :codcategoria");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":codcategoria", $this->codcategoria);
        $cmd->bindParam(":nomecategoria", $this->nomecategoria);

        $cmd->execute(); //executar o comando
    }

    public function retornar()
    {
        $con = Conexao::conectar(); //acessar o BD
        $cmd = $con->prepare("SELECT * FROM categoria
        WHERE codcategoria = :codcategoria"); //comando SQL
        $cmd->bindParam(":codcategoria", $this->codcategoria);
        $cmd->execute(); //executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

}
?>