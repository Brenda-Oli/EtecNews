<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ETECNEWS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Dropdown usuário -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Usuário
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo URL;?>cadastro-usuario">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="<?php echo URL;?>consulta-usuario">Consultar</a></li>
                    </ul>
                </li>
                    <!-- Dropdown notícia -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Notícia
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo URL; ?>cadastro-noticia">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="<?php echo URL; ?>consulta-noticia">Consultar</a></li>
                    </ul>
                </li>
                <!-- Dropdown categoria -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categoria
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo URL; ?>cadastro-categoria">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="<?php echo URL; ?>consulta-categoria">Consultar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>