<?php
 
include_once "model/Categoria.php"; //incluir a model

class CategoriaController
{
    public function abrirCadastro()
    {
        include_once "view/cadastro_categoria.php";
    }

    public function abrirConsulta()
    {
        $usu = new Categoria();
        $dadosCategoria = $usu->consultar();
        include_once "view/consulta_categoria.php";
    }

    public function cadastrar()
    {
        $usu = new Categoria();//colocar a classe em uso
        //enviar valores do formulário para a classe
        $usu->nomecategoria = $_POST["nomecategoria"];
        $usu->cadastrar(); //executar o método que cadastra
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='".URL."cadastro-categoria';
            </script>";
    }

    public function excluir($cod)
    {
        $usu = new Categoria();
        $usu->codcategoria = $cod;
        // O excluir() está sendo mandado para $usu que está dentro de Usuario, lá na Model onde tem o comando SQL DELETE
        $usu->excluir();
        header("Location:".URL."consulta-categoria");
    } 

    public function editar($cod)
    {
        //buscar os dados na classe Usuario (model)
        $usu = new Categoria();
        $usu->codcategoria = $cod;
        $dadosCategoria = $usu->retornar();
        include_once "view/editar_categoria.php"; //exibir a tela de editar dados do usuário
    }

    public function atualizar()
    {
        $usu = new Categoria();//colocar a classe em uso
        //enviar valores do formulário para a classe
        $usu->codcategoria = $_POST["codcategoria"];
        $usu->nomecategoria = $_POST["nomecategoria"];
        $usu->atualizar(); //executar o método que atualizar
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Dados atualizados com sucesso!');
                window.location='".URL."consulta-categoria';
            </script>";
    }


}
?>