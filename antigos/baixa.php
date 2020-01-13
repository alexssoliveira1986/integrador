<?php
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
}

?>

