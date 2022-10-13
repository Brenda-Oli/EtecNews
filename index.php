<?php

//classes necessárias
include_once "controller/HomeController.php";
include_once "controller/UsuarioController.php";
include_once "controller/CategoriaController.php";
include_once "controller/NoticiaController.php";

//minha url
define('URL','http://localhost/etecnewsCRUD/');

/* SE existe(isset) url */
if(isset($_GET['url']))
{
    /* explode - quebra e guarda as coisas, em um array, de acordo com o delimitador que nesse caso é a '/' */
    $url = explode('/', $_GET['url']);
    switch($url[0])
    {
        case 'cadastro-usuario':
            $usu = new UsuarioController();
            $usu->abrirCadastro();
        break;
        
        case 'consulta-usuario':
            $usu = new UsuarioController();
            $usu->abrirConsulta();
        break;

        case 'cadastro-categoria':
            $usu = new CategoriaController();
            $usu->abrirCadastro();
        break;

        case 'consulta-categoria':
            $usu = new CategoriaController();
            $usu->abrirConsulta();
        break;

        case 'cadastro-noticia':
            $usu = new NoticiaController();
            $usu->abrirCadastro();
        break;

        case 'consulta-noticia':
            $usu = new NoticiaController();
            $usu->abrirConsulta();
        break;

        /* Enviar os cadastros */

        case 'enviar-usuario':
            $usu = new UsuarioController();
            $usu->cadastrar();
        break;
        case 'enviar-categoria':
            $usu = new CategoriaController();
            $usu->cadastrar();
        break;
        case 'enviar-noticia':
            $usu = new NoticiaController();
            $usu->cadastrar();
        break;

        /* Excluir os cadastros */
        /* Colocamos o [1] para pegar o codusuario que é mandado para a url.  O [0] é o excluir-usuario, porque ele é a primeira posição do array que fica lá em cima no

            $url = explode('/', $_GET['url']);
            switch($url[0])
            {
        */
        case 'excluir-usuario':
            $usu = new UsuarioController();
            $usu->excluir($url[1]);
        break;
        case 'excluir-categoria':
            $usu = new CategoriaController();
            $usu->excluir($url[1]);
        break;

        // Editar dados do usuario
        case 'editar-usuario':
            $usu = new UsuarioController();
            $usu->editar($url[1]);
        break;

        case 'atualizar-usuario':
            $usu = new UsuarioController();
            $usu->atualizar();
        break;

        // Editar categorias
        case 'editar-categoria':
            $usu = new CategoriaController();
            $usu->editar($url[1]);
        break;

        case 'atualizar-categoria':
            $usu = new CategoriaController();
            $usu->atualizar();
        break;

        // Editar noticias
       

        default:
            echo "página não encontrada<br>
            Verificar se existe a rota criada<br>
            Tentando acessar a rota: $url[0]";

            //poderá depois abrir uma página de aviso
        break;

    }

}
else
{
    //abrir a página inicial
    $home = new HomeController();
    $home->abrirHome();
}
?>