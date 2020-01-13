<?php
// Start the session
session_start();
?>
<?php 

$ncep = $_POST['cep'];
$json1 = "/json/";
$url = "https://viacep.com.br/ws/".$ncep.$json1;
$cep = file_get_contents($url);
$json = json_decode($cep);

if (isset($json->cep)){

echo '<strong>'.'CEP: '.'</strong>'. $ncep .'<br>'
.'<strong>'.' END: '.'</strong>'.$json->logradouro.'<br>'
.'<strong>'.' BAIRRO: '.'</strong>' .$json->bairro.'<br>'
.'<strong>'.' UF: '.'</strong>' .$json->uf.'<br>'.'<strong>'.' IBGE: '
.'</strong>' .$json->ibge;}else echo '<strong>'.'CEP: '.'</strong>'. $ncep .'<strong>'.' NÃO ENCONTRADO NA BASE DE DADOS '.'</strong>';
//echo $cep;
?>