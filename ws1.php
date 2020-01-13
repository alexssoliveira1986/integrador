<?php
// Start the session
session_start();
?>
<?php
$url = "http://localhost/ws.php";
$cep = file_get_contents($url);
$json = json_decode($cep);

/*echo '<strong>'.' NOTA: '.'</strong>'.$json->NF.'<br>'.
'<strong>'.' SERIE: '.'</strong>' .$json->SERIE.'<br>'.
'<strong>'.' CODIGO: '.'</strong>' .$json->CLIENTE.'<br>';*/
echo $cep;

?>