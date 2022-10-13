<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>EtecNews - Usuários</title>
</head>
<body>
    <!-- Navbar -->
    <?php include_once "recursos/navbar.php"?>
        <!-- Formulário -->
        <div class="container">
            <form action="<?php echo URL;?>enviar-usuario" method="post">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="card mt-3">
                            <div class="card-header">
                                Atualizar dados
                            </div>
                        <div class="card-body">
                            <form>
                            <div class="form-group">
                                <label for="codusuario">Código</label>
                                <input type="text" name="codusuario" id="codusuario" class="form-control" value="<?php echo $dadosUsuario->codusuario;?>" readonly required>
                            </div>
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $dadosUsuario->nome;?>" required> 
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $dadosUsuario->email;?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="senha" class="form-label">Senha</label>
                                    <input type="password" class="form-control" name="senha" id="senha" required>
                                </div>
                                <div class="mb-3">
                                    <label for="">Acesso</label>
                                    <select class="form-select" name="acesso" id="acesso">
                                        <option selected>Selecione...</option>
                                        <option value="1" <?php if($dadosUsuario->acesso == 1) echo "selected";  ?>>Administrador</option>
                                        <option value="2" <?php if($dadosUsuario->acesso == 2) echo "selected";  ?>>Usuário</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-dark">Editar</button>
                            </form>
                        </div>
                    </div>
                    <!-- Voltar para o Início -->
                    <div class="col-5"><a href="<?php echo URL;?>" class="btn btn-outline-dark mt-3">Voltar</a></div>
                </div>
            </form>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>