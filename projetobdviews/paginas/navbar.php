<?php
    session_start();
    if(!isset($_SESSION['acesso'])){
        header('Location: login.php');        
    }
?>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/dashboard">Sistema da Associação</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <!-- Após desenvolver o código em PHP, essa funcionalidade só será visível ao administrador -->
         <!-- Início -->
        <?php
          if ($_SESSION['nivel'] == 'adm'):
        ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuários
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="usuarios.php">Gerenciar</a></li>
            </ul>
          </li>
        <?php
          endif;
        ?>
         <!-- Fim -->

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Membros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="membros.php">Gerenciar membros</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cargos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cargos.php">Gerenciar cargos</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Atividades
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="atividades.php">Gerenciar atividades</a></li>
            <li><a class="dropdown-item" href="relatorio_compras.php">Relatórios</a></li>
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Seja bem vindo(a) 
                    <?php
                      if (isset($_SESSION['usuario']))
                        echo $_SESSION['usuario'];
                    ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="editar_usuario.php">Editar dados</a></li>
                    <li><a class="dropdown-item" href="logout.php">Sair</a></li>
                </ul>
            </li>
        </ul>
    </div>
  </div>
</nav>
