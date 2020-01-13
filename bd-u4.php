<?php 
$user = 'sercon4';
$pass = 'sercon4';
try {
  $conn = new PDO('oci:dbname=srcn1;charset=utf8', $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>