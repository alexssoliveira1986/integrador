<?php
$pasta = 'C:\\xampp\htdocs1\download-xml';
if(isset($_GET['file'])){
	$file = $_GET['file'];
	$type = filetype("{$pasta}/{$file}");
	$size = filesize("{$pasta}/{$file}");
	
	readfile("{$pasta}/{$file}");
	unlink("{$pasta}/{$file}");
	exit;
}

?>