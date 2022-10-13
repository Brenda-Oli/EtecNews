<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Categoria</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS DataTables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>
<body>
    <!-- Navbar -->
    <?php include_once "recursos/navbar.php"?>
    <!-- Tabela -->
    <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <table class="table table-dark mt-5">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($dadosCategoria as $value) {
                            echo
                            "<tr>
                                <th scope='row'>$value->codcategoria</th>
                                <td>$value->nomecategoria</td>
                                <td>
                                <a href='". URL ."excluir-categoria/$value->codcategoria' onclick='return confirm(\"Tem certeza?\")' class='btn btn-outline-danger btn-sm'><i class='fa fa-trash'></i> Excluir</a>
                                <a href='". URL ."editar-categoria/$value->codcategoria' class='btn btn-outline-warning btn-sm'><i class='fa fa-edit'></i> Editar</a>
                            </td>
                            </tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                    <!-- Voltar para o Início -->
                <div class="col-5"><a href="<?php echo URL;?>" class="btn btn-outline-dark mt-3">Voltar</a></div>
                </div>
            </div>
        </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Jquery --> 
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>

    <!-- JS DataTables -->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabela').DataTable();
        });
    </script>
</body>
</html>