<?php
// Start the session
session_start();
?>
<?php 

$ncnpj = $_POST['cnpj'];
$service_url = "https://www.receitaws.com.br/v1/cnpj/" . $ncnpj;
$response = file_get_contents($service_url);
$json = json_decode($response);

if (isset($json->cnpj)){

  echo '<strong>'."NOME: " .'</strong>'. $json->nome.'<br>';
  echo '<strong>'."SITUAÇÃO: ".'</strong>'. $json->situacao.'<br>';
  echo '<strong>'."CNPJ: " .'</strong>'.$json->cnpj.'<br>';
  echo '<strong>'."NATUREZA: " .'</strong>'. $json->natureza_juridica.'<br>';
  echo '<strong>'."END: " .'</strong>'. $json->logradouro.' ';
  echo '<strong>'."Nº: " .'</strong>'. $json->numero.'<br>';
  echo '<strong>'."CEP: " .'</strong>'. $json->cep.' ';
  echo '<strong>'."BAIRRO: " .'</strong>'. $json->bairro.'<br>';
  echo '<strong>'."MUNICIPIO: " .'</strong>'. $json->municipio.' ';
  echo '<strong>'."UF: " .'</strong>'. $json->uf.'<br>';
  echo '<strong>'."EMAIL: " .'</strong>'. $json->email.' ';
  echo '<strong>'."TEL: " .'</strong>'. $json->telefone.'<br>';}else echo '<strong>'.'CNPJ: '.'</strong>'. $ncnpj .'<strong>'.' NÃO ENCONTRADO NA BASE DE DADOS '.'</strong>';

//$token = "B70448AB-27EE-4B96-B0B4-A2EE3BC28D6C";
//  $ncnpj = $_POST['cnpj'];
  //$cnpj = "06990590000123";
  //$plugin = "ST";

  //URL do serviço
 // $service_url = "https://sintegraws.com.br/api/v1/execute-api.php?token=" . $token . "&cnpj=" . $ncnpj . "&plugin=" . $plugin;

  //Faz a chamada da API
 // $response = file_get_contents($service_url);

  //Aqui fazemos o parse do json retornado
//  $json = json_decode($response);

  //Aqui exibimos uma mensagem caso tenha ocorrido algum erro
 // if ($json->code != '0') 
 // {
 //   die("Erro " . $json->code . ": " . $json->message);
 // }

  //Mostra informações do sintegra
  //echo '<strong>'."Nome empresarial: " .'</strong>'. $json->nome_empresarial.'<br>';
 // echo '<strong>'."Situação CNPJ: ".'</strong>'. $json->situacao_cnpj.'<br>';
 // echo '<strong>'."CNPJ: " .'</strong>'.$json->cnpj.'<br>';
 // echo '<strong>'."Situação IE: " .'</strong>'. $json->situacao_ie.'<br>';
  //echo '<strong>'."Inscrição Estadual: " .'</strong>'. $json->inscricao_estadual;

  //preencher os outros campos
  // ...

//$cnpj = "https://www.receitaws.com.br/v1/cnpj/".$ncnpj;
//$xcnpj = file_get_contents($cnpj);
//$json = json_decode($xcnpj);
//echo $xcnpj;

?>