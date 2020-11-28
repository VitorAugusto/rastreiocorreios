<?php

include('simple_html_dom.php');

//echo "SOU UM RASTREADOR !!";

$post = array('Objetos' => $_POST['codigoRastreio']);
// iniciar CURL
$ch = curl_init();
header('Content-type: text/html; charset=utf-8'); 
// informar URL e outras funções ao CURL
curl_setopt($ch, CURLOPT_URL, "https://www2.correios.com.br/sistemas/rastreamento/resultado_semcontent.cfm");
//curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0');
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

$html = str_get_html($output);

$html->find('style', 0)->innertext = 'foo';
$html->find('script', 0,1)->innertext = 'foo';

echo $html;

// Imprimir a saída
//echo $output;



?>