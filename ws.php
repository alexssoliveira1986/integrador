<?php
// Start the session
session_start();
?>
<?php

	header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=utf-8"); 
	
	clearstatcache();
$nota = $_POST['notaws'];
$_SESSION["nota"] = $nota;
$user = 'sercon';
$pass = 'sercon';

try {
  $conn = new PDO('oci:dbname=srcn1;charset=utf8', $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$consulta = $conn->prepare("select * from TB_FATNFH where NFHNNF = '$nota' AND NFHEMI= 'U00001' ");
		$consulta->execute(array());  
		$resultadoDaConsulta = $consulta->fetchAll();
		if ($_POST){
		$nota = $_POST['notaws'];
	} else {
		echo '[{"erro":"Sem parametros na url"}]';
		exit(); 
	}
		$StringJson = "";
		
	if ( count($resultadoDaConsulta) ) {
		foreach($resultadoDaConsulta as $registro) {
			
			if ($StringJson != "[") {$StringJson .= "";}
			$StringJson .= '{ "NF":"' . $registro['NFHNNF']  . '",';
			$StringJson .= '"SERIE":"' . $registro['NFHSNF']  . '",';
			$StringJson .= '"CLIENTE":"' . $registro['NFHCLI']  . '" }';
			
		}  
		//echo $StringJson . "";
		
		
		$json = json_decode($StringJson);
		echo ' NOTA: '.''.$json->NF.''.' SERIE: '.'' .$json->SERIE.''.''.' CODIGO: '.'' .$json->CLIENTE.'';
		
  } 
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


?>
