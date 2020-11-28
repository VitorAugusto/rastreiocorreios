<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rastreio Correios</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Rastreador de Encomendas do CORREIOS by Vitor Augusto</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Rastreamento de Encomendas</h1>
        <img src="logocorreios.png" width="35%">
        <p></p>
        <p class="lead">Insira abaixo o código de Rastreio</p>
        <!-- <form> -->
        	<div class="form-group">
        	<input type="text" id="cod" required="true" name="codigoRastreio" class="form-control" style="margin: 0 auto; width: 40%; text-align: center; font-size: 20px;">
        	<p></p>
        	<input type="submit" id="botaoRastrear" value="Rastrear" class="btn btn-primary" onclick="getRastreio()">
        	</div>
        <!-- </form> -->
        <div id="conteudoRastreio">
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="functions.js"></script>

</body>

</html>
