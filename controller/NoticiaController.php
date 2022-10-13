<?php

include_once "model/Noticia.php"; //incluir a model

class NoticiaController
{
    public function abrirCadastro()
    {
        include_once "view/cadastro_noticia.php";
    }

    public function abrirConsulta()
    {
        $usu = new Noticia();
        $dadosNoticia = $usu->consultar();
        include_once "view/consulta_noticia.php";
    }

    public function cadastrar()
    {
        $usu = new Noticia();//colocar a classe em uso
        //enviar valores do formulário para a classe
        $usu->data      = $_POST["data"];
        $usu->titulo      = $_POST["titulo"];
        $usu->codcategoria      = $_POST["codcategoria"];
        $usu->conteudo      = $_POST["conteudo"];
        $usu->imagem      = $_POST["imagem"];
        $usu->cadastrar(); //executar o método que cadastra
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='".URL."cadastro-noticia';
            </script>";
    }


}
?>