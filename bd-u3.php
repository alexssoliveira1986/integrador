<?php 
$user = 'sercon3';
$pass = 'sercon3';
try {
  $conn = new PDO('oci:dbname=srcn1;charset=utf8', $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>