<?php
include_once 'connect.php';
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Desafio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?page=novo">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?page=listar">Listar Usuários</a>
        </li>
      </ul>

      <form class="d-flex" role="search"  method="POST" action="consultar.php">
        <input class="form-control me-2" type="text" name="consultar" placeholder="Digite RG ou CPF" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"  href="?page=consultar">Consultar</button>
      </form>

      <form class="d-flex" role="search" method="POST" action="pesquisar.php" >
        <input class="form-control me-2" type="text" name="pesquisar" placeholder="Buscar usuário por nome" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" href="?page=pesquisar">Pesquisar</button>
      </form>

    </div>
  </div>  
</nav>
    <?php 
        switch(@$_REQUEST["page"]){
            case "novo":
                include("novousuario.php");
                break;
            case "listar":
                include("listarusuarios.php");
                break;
            case "salvar":
                include("salvarusuario.php");
                break;
            case "editar":
                include("editarusuario.php");
                break;
            case "pesquisar":
                include("pesquisar.php");
                break;            
            case "consultar":
              include("consultar.php");
              break;            
            default:
            print "<h1></h1>";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
    
</body>
</html>