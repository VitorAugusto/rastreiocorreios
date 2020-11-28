<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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
      <a class="navbar-brand" href="#">Rastreador de Encomendas do CORREIOS</a>
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
        <p></p>
        <img src="logocorreios.png" width="35%">
        
        <?php

        include('simple_html_dom.php');

        $_POST['codigoRastreio'] = 'BJ805328055BR';
        

          $post = array('Objetos' => $_POST['codigoRastreio']);
          // iniciar CURL
          $ch = curl_init();
          header('Content-type: text/html; charset=ISO-8859-1'); 
          // informar URL e outras funções ao CURL
          curl_setopt($ch, CURLOPT_URL, "https://www2.correios.com.br/sistemas/rastreamento/resultado_semcontent.cfm");
          curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0');
          curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept-Language: pt']);
          curl_setopt($ch, CURLOPT_ENCODING , "gzip");
          curl_setopt($ch, CURLOPT_HEADER, 0);
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($post));
          // Acessar a URL e retornar a saída
          $output = curl_exec($ch); 
           //$result = iconv("Windows-1251", "UTF-8", $output); 
          // liberar
          curl_close($ch);
          // Imprimir a saída
          //echo $output;
          // Create a DOM object
          $html = str_get_html($output);

          $html->find('style', 0)->innertext = 'foo';
          $html->find('script', 0,1)->innertext = 'foo';

          echo gettype($html);

          echo $html;
          ?>
      </div>
    </div>
  </div>

</body>

</html>
