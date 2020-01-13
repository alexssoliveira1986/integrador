<?php
$campo1 = '-nfe.xml';
$unidade = $_POST['unidade'];
echo $unidade;
$chavedeacesso = $_POST['chave'].$campo1;


    //MATRIZ
	if ($unidade=='U00001'){
	$pasta1 = 'H:\dat1\tmp/';
	if(isset($chavedeacesso)){
	$type = filetype("{$pasta1}/{$chavedeacesso}");
	$size = filesize("{$pasta1}/{$chavedeacesso}");
	header("Content-Description: File Transfer");
	header("Content-Type: {$type}");
	header("Content-Length: {$size}");
	header("Content-Disposition: attachament; filename=$chavedeacesso");
	readfile("{$pasta1}/{$chavedeacesso}");
    }
	}
	//ITAIM
	elseif ($unidade=='U00002'){
	$pasta2 = 'H:\dat2\tmp/';
	if(isset($chavedeacesso)){
	$type = filetype("{$pasta2}/{$chavedeacesso}");
	$size = filesize("{$pasta2}/{$chavedeacesso}");
	header("Content-Description: File Transfer");
	header("Content-Type: {$type}");
	header("Content-Length: {$size}");
	header("Content-Disposition: attachament; filename=$chavedeacesso");
	readfile("{$pasta2}/{$chavedeacesso}");
	}
	}
	//FIANDEIRAS
	elseif ($unidade=='U00003'){
	$pasta3 = 'H:\dat3\tmp/';
	if(isset($chavedeacesso)){
	$type = filetype("{$pasta3}/{$chavedeacesso}");
	$size = filesize("{$pasta3}/{$chavedeacesso}");
	header("Content-Description: File Transfer");
	header("Content-Type: {$type}");
	header("Content-Length: {$size}");
	header("Content-Disposition: attachament; filename=$chavedeacesso");
	readfile("{$pasta3}/{$chavedeacesso}");
	}
	}
	//JOAO DIAS
	elseif ($unidade=='U00004'){
	$pasta4 = 'H:\dat4\tmp/';
	if(isset($chavedeacesso)){
	$type = filetype("{$pasta4}/{$chavedeacesso}");
	$size = filesize("{$pasta4}/{$chavedeacesso}");
	header("Content-Description: File Transfer");
	header("Content-Type: {$type}");
	header("Content-Length: {$size}");
	header("Content-Disposition: attachament; filename=$chavedeacesso");
	readfile("{$pasta4}/{$chavedeacesso}");
	}
	}
	//BELEM
	elseif ($unidade=='U00008'){
	$pasta5 = 'H:\dat024\tmp/';
	if(isset($chavedeacesso)){
	$type = filetype("{$pasta5}/{$chavedeacesso}");
	$size = filesize("{$pasta5}/{$chavedeacesso}");
	header("Content-Description: File Transfer");
	header("Content-Type: {$type}");
	header("Content-Length: {$size}");
	header("Content-Disposition: attachament; filename=$chavedeacesso");
	readfile("{$pasta5}/{$chavedeacesso}");
	}
	}
	//CAMPINAS
	elseif ($unidade=='U00009'){
	$pasta6 = 'H:\dat9\tmp/';
	if(isset($chavedeacesso)){
	$type = filetype("{$pasta6}/{$chavedeacesso}");
	$size = filesize("{$pasta6}/{$chavedeacesso}");
	header("Content-Description: File Transfer");
	header("Content-Type: {$type}");
	header("Content-Length: {$size}");
	header("Content-Disposition: attachament; filename=$chavedeacesso");
	readfile("{$pasta6}/{$chavedeacesso}");
	}
	}
	//RIO PRETO
	elseif ($unidade=='U00112'){
	$pasta7 = 'H:\dat012\tmp/';
	if(isset($chavedeacesso)){
	$type = filetype("{$pasta7}/{$chavedeacesso}");
	$size = filesize("{$pasta7}/{$chavedeacesso}");
	header("Content-Description: File Transfer");
	header("Content-Type: {$type}");
	header("Content-Length: {$size}");
	header("Content-Disposition: attachament; filename=$chavedeacesso");
	readfile("{$pasta7}/{$chavedeacesso}");
	}
	}
	//RIBEIRAO
	elseif ($unidade=='U00222'){
	$pasta8 = 'H:\dat022\tmp/';
	if(isset($chavedeacesso)){
	$type = filetype("{$pasta8}/{$chavedeacesso}");
	$size = filesize("{$pasta8}/{$chavedeacesso}");
	header("Content-Description: File Transfer");
	header("Content-Type: {$type}");
	header("Content-Length: {$size}");
	header("Content-Disposition: attachament; filename=$chavedeacesso");
	readfile("{$pasta8}/{$chavedeacesso}");
	}
	}
	//TATUAPE
	elseif ($unidade=='U00224'){
	$pasta9 = 'H:\dat025\tmp/';
	if(isset($chavedeacesso)){
	$type = filetype("{$pasta9}/{$chavedeacesso}");
	$size = filesize("{$pasta9}/{$chavedeacesso}");
	header("Content-Description: File Transfer");
	header("Content-Type: {$type}");
	header("Content-Length: {$size}");
	header("Content-Disposition: attachament; filename=$chavedeacesso");
	readfile("{$pasta9}/{$chavedeacesso}");
	}
	}
?>

