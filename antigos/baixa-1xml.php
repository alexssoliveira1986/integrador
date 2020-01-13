<?php
// Start the session
session_start();
?>
<?php
$campo1 = '-nfe.xml';
$chavedeacesso = $_SESSION['chave'].$campo1;
$pasta = 'U:\/';
if(isset($chavedeacesso)){	
	$type = filetype("{$pasta}/{$chavedeacesso}");
	$size = filesize("{$pasta}/{$chavedeacesso}");
	header("Content-Description: File Transfer");
	header("Content-Type: {$type}");
	header("Content-Length: {$size}");
	header("Content-Disposition: attachament; filename=$chavedeacesso");
	readfile("{$pasta}/{$chavedeacesso}");
	//unlink("{$pasta}/{$chavedeacesso}");

}
/*foreach (glob("C:\\xampp\htdocs\xmls/*") as $ver){
				$name = basename($ver);
				echo '<br>' . $ver . '<br>';
				//echo '<li><a href="baixa.php?file='.$name.'">'.$name.' <button type="button" onclick="submit()">Baixar</button></a></li>';			
			}
$pasta = 'C:\\xampp\htdocs\download-xml';
if(isset($_GET['file'])){
	$file = $_GET['file'];
	$type = filetype("{$pasta}/{$file}");
	$size = filesize("{$pasta}/{$file}");
	header("Content-Description: File Transfer");
	header("Content-Type: {$type}");
	header("Content-Length: {$size}");
	header("Content-Disposition: attachament; filename=$file");
	readfile("{$pasta}/{$file}");
	unlink("{$pasta}/{$file}");
	exit;
}*/
?>

