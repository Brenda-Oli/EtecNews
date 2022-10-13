<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETECNEWS</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="recursos/estilo.css">
</head>
<body>
    <!-- Etecnews -->
    <div class="nome">
        ETECNEWS
    </div>
    <!-- Boas Vindas -->
    <div class="container">
        <div class="card text-center mt-3">
            <div class="card-header">
                Seja bem-vindo(a)!
            </div>
            <div class="card-body">
                <h5 class="card-title">Site de notícias - O Projeto</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum ducimus sapiente adipisci quod ipsa. Voluptas, ad minus!</p>
            </div>
        </div>
        <!-- Opções -->
        <div class="row mt-5">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Usuario</h5>
                        <p class="card-text"></p>
                        <a href="<?php echo URL; ?>cadastro-usuario" class="btn btn-dark">Cadastrar</a>
                        <a href="<?php echo URL; ?>consulta-usuario" class="btn btn-dark">Consultar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categoria</h5>
                        <p class="card-text"></p>
                        <a href="<?php echo URL; ?>cadastro-categoria" class="btn btn-dark">Cadastrar</a>
                        <a href="<?php echo URL; ?>consulta-categoria" class="btn btn-dark">Consultar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Noticia</h5>
                    <p class="card-text"></p>
                    <a href="<?php echo URL; ?>cadastro-noticia" class="btn btn-dark">Cadastrar</a>
                    <a href="<?php echo URL; ?>consulta-noticia" class="btn btn-dark">Consultar</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 