<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Integrador</title><link rel="shortcut icon" href="i5.ico" type="image/x-icon" />
		<meta charset="utf-8" />
		<meta name="description" content="Integrador" />
		<style>
		table {
		  font-family: Calibri;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #aaaaaa;
		  text-align: left;
		  padding: 1px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
		</head>
		
		<body>
			<font face="Calibri"> <h1>Integrador</h1>
			<hr>
		<nav>
		<strong>Menu de Navegação</strong>
		</nav>	
		<hr>
		<strong>Relatório Mkt - Novos </strong><hr></font>
		<font size="2" face="Calibri">
		<table>
  
	<?php
	
	require_once ("bd-u1.php");

	$date1n = $_SESSION['date1n'];
	$date2n = $_SESSION['date2n'];
	
	$arquivo = $date1n.'-'.$date2n.'-'.'mktnovos.xls';
	
	
	$emailerrado = '/(@naotem|@ntem|nao@tem|contato@contato|naotem@|@mail.mercadolivre.com|@ct.vtex.com.br|nf@|sem@email|@naotememail|@nova)/';
	
	$contador = 1;
	
	$aspas = "'";
	$seq = 'Seq';
	$nnf='NF';
	$codcliente='Codigo';
	$cliente='Cliente';
	$email = 'Email';
	$unidade='Unidade';
	$empresa='Empresa';
	$origem='Origem';
	$dorigem='Descrição Origem';
	$datavenda='Data Venda';
	
	//MATRIZ
	$html = '';
	$html .= '<strong>'.'Periodo ' . $date1n. ' ' . ' até ' . $date2n .'</strong>'.'<br>'. "<hr>";
	$html .= '<strong>'.'U00001 - MATRIZ' . '	- VENDA VEICULOS NOVOS '.'</strong>'.'<br>';
	
	$html .= "<table>" . "<tr>";
	//$html .= "<th>" . $seq . "</th>";
	$html .= "<th>" . $codcliente  . "</th>";
	$html .= "<th>" . $cliente . "</th>";
	$html .= "<th>" . $email . "</th>";
	$html .= "<th>" . $unidade . "</th>";
	$html .= "<th>" . $empresa . "</th>";
	$html .= "<th>" . $origem . "</th>";
	$html .= "<th>" . $dorigem . "</th>";
	$html .= "<th>" . $datavenda . "</th>";
	$html .= "</tr>";


		
	$sql = ("SELECT * FROM TB_PCADOC where DOCSTS <> 'C' AND DOCORI = '03'  AND DOCSES = 'S' AND DOCCME = '210' AND DOCEMI = 'U00001' AND DOCDTR between '$date1n' and '$date2n' order by DOCEMI, DOCDTR");
	foreach ($conn->query($sql) as $row) {
	
	$codempresadoc = $row['DOCEMI'];
	$codclientedoc = $row['DOCCLI'];
	$codorigemdoc = $row['DOCORI'];
	$datacontrole = $row['DOCDTR'];
	$ncontrole_cli = $row['DOCCGC_CLI'];
	$xcontador = ($contador ++);
	
	$sql1 = ("SELECT * FROM TB_TRACAD WHERE TRATPT = 'C' AND TRACOD = '$codclientedoc'");
	foreach ($conn->query($sql1) as $row1) {
	
	$codclientetra = $row1['TRACOD'];
	$emailclientetra = $row1['TRAEMA'];

	$sql1 = ("SELECT * FROM TB_TRACAD WHERE TRACOD = '$codempresadoc'");
	foreach ($conn->query($sql1) as $row1) {
	
	$codunidadetra = $row1['TRACOD'];
	$codempresatra = $row1['TRANFA'];
	
	$sql2 = ("SELECT * FROM TB_TABORI WHERE ORICOD='$codorigemdoc'");
	foreach ($conn->query($sql2) as $row2) {
			
	$codorigemnome = $row2['ORINOM'];
	if (!preg_match($emailerrado, $emailclientetra)){
	
	
	

	
    $html .= "<tr>" ;
	//$html .= "<td>" . $xcontador . "</td>";
	

	if (isset($row['DOCCLI'])){
	
	if ($codclientedoc == $codclientetra){
		
	if (isset($row['DOCNOM_CLI'])){	
	
	$html .= "<td>" . $row['DOCCLI'] . "</td>";
	}
	}
	}
	if (isset($row['DOCNOM_CLI'])){
	$html .= "<td>" . $row['DOCNOM_CLI'] . "</td>";
	}
	
	if (isset($emailclientetra)){
	$html .= "<td>" . filter_var($emailclientetra, FILTER_VALIDATE_EMAIL) . "</td>";
	} elseif (empty($emailclientetra)){
	$html .= "<td>" . 'Email Não Cadastrado' . "</td>";
	}
	if (isset($row['DOCEMI'])){
	$html .= "<td>" . $row['DOCEMI'] . "</td>";
	}
	if ($codempresadoc == $codunidadetra){
	if (isset($codempresatra)){
	$html .= "<td>" . $codempresatra . "</td>";
	}
	}
	if (isset($row['DOCORI'])){
	$html .= "<td>" . $row['DOCORI'] . "</td>";
	}
	if (isset($codorigemnome)){
	$html .= "<td>" . $codorigemnome . "</td>";
	}
	if (isset($row['DOCDTR'])){
	$html .= "<td>" . $row['DOCDTR'] . "</td>";
	}

	
	}
	
	}
	}
	}
	}
	
	$html .= "</table>"  . "<br>" . "<hr>";
	
    // ITAIM
	
		
	$html .= '<br>'.'<strong>'.'U00002 - ITAIM' . '	- VENDA VEICULOS NOVOS '.'</strong>'.'<br>';
	
	$html .= "<table>" . "<tr>";
	$html .= "<th>" . $codcliente  . "</th>";
	$html .= "<th>" . $cliente . "</th>";
	$html .= "<th>" . $email . "</th>";
	$html .= "<th>" . $unidade . "</th>";
	$html .= "<th>" . $empresa . "</th>";
	$html .= "<th>" . $origem . "</th>";
	$html .= "<th>" . $dorigem . "</th>";
	$html .= "<th>" . $datavenda . "</th>";
	$html .= "</tr>";


		
	$sql = ("SELECT * FROM TB_PCADOC where DOCSTS <> 'C' AND DOCORI = '03'  AND DOCSES = 'S' AND DOCCME = '210' AND DOCEMI = 'U00002' AND DOCDTR between '$date1n' and '$date2n' order by DOCEMI, DOCDTR");
	foreach ($conn->query($sql) as $row) {
	
	$codempresadoc = $row['DOCEMI'];
	$codclientedoc = $row['DOCCLI'];
	$codorigemdoc = $row['DOCORI'];
	$datacontrole = $row['DOCDTR'];
	$ncontrole_cli = $row['DOCCGC_CLI'];
	$xcontador = ($contador ++);
	
	$sql1 = ("SELECT * FROM TB_TRACAD WHERE TRATPT = 'C' AND TRACOD = '$codclientedoc'");
	foreach ($conn->query($sql1) as $row1) {
	
	$codclientetra = $row1['TRACOD'];
	$emailclientetra = $row1['TRAEMA'];

	$sql1 = ("SELECT * FROM TB_TRACAD WHERE TRACOD = '$codempresadoc'");
	foreach ($conn->query($sql1) as $row1) {
	
	$codunidadetra = $row1['TRACOD'];
	$codempresatra = $row1['TRANFA'];
	
	$sql2 = ("SELECT * FROM TB_TABORI WHERE ORICOD='$codorigemdoc'");
	foreach ($conn->query($sql2) as $row2) {
			
	$codorigemnome = $row2['ORINOM'];
	if (!preg_match($emailerrado, $emailclientetra)){
	
	
	

	
    $html .= "<tr>" ;

	if (isset($row['DOCCLI'])){
	
	if ($codclientedoc == $codclientetra){
		
	if (isset($row['DOCNOM_CLI'])){	
	
	$html .= "<td>" . $row['DOCCLI'] . "</td>";
	}
	}
	}
	if (isset($row['DOCNOM_CLI'])){
	$html .= "<td>" . $row['DOCNOM_CLI'] . "</td>";
	}
	
	if (isset($emailclientetra)){
	$html .= "<td>" . filter_var($emailclientetra, FILTER_VALIDATE_EMAIL) . "</td>";
	} elseif (empty($emailclientetra)){
	$html .= "<td>" . 'Email Não Cadastrado' . "</td>";
	}
	if (isset($row['DOCEMI'])){
	$html .= "<td>" . $row['DOCEMI'] . "</td>";
	}
	if ($codempresadoc == $codunidadetra){
	if (isset($codempresatra)){
	$html .= "<td>" . $codempresatra . "</td>";
	}
	}
	if (isset($row['DOCORI'])){
	$html .= "<td>" . $row['DOCORI'] . "</td>";
	}
	if (isset($codorigemnome)){
	$html .= "<td>" . $codorigemnome . "</td>";
	}
	if (isset($row['DOCDTR'])){
	$html .= "<td>" . $row['DOCDTR'] . "</td>";
	}

	
	}
	
	}
	}
	}
	}
	
	$html .= "</table>"  . "<br>" . "<hr>";
          
        
	 // JOÃO DIAS
	
	
	$html .= '<br>'.'<strong>'.'U00004 - JOÃO DIAS' . '	- VENDA VEICULOS NOVOS '.'</strong>'.'<br>';
	
	$html .= "<table>" . "<tr>";
	$html .= "<th>" . $codcliente  . "</th>";
	$html .= "<th>" . $cliente . "</th>";
	$html .= "<th>" . $email . "</th>";
	$html .= "<th>" . $unidade . "</th>";
	$html .= "<th>" . $empresa . "</th>";
	$html .= "<th>" . $origem . "</th>";
	$html .= "<th>" . $dorigem . "</th>";
	$html .= "<th>" . $datavenda . "</th>";
	$html .= "</tr>";


		
	$sql = ("SELECT * FROM TB_PCADOC where DOCSTS <> 'C' AND DOCORI = '03'  AND DOCSES = 'S' AND DOCCME = '210' AND DOCEMI = 'U00004' AND DOCDTR between '$date1n' and '$date2n' order by DOCEMI, DOCDTR");
	foreach ($conn->query($sql) as $row) {
	
	$codempresadoc = $row['DOCEMI'];
	$codclientedoc = $row['DOCCLI'];
	$codorigemdoc = $row['DOCORI'];
	$datacontrole = $row['DOCDTR'];
	$ncontrole_cli = $row['DOCCGC_CLI'];
	$xcontador = ($contador ++);
	
	$sql1 = ("SELECT * FROM TB_TRACAD WHERE TRATPT = 'C' AND TRACOD = '$codclientedoc'");
	foreach ($conn->query($sql1) as $row1) {
	
	$codclientetra = $row1['TRACOD'];
	$emailclientetra = $row1['TRAEMA'];

	$sql1 = ("SELECT * FROM TB_TRACAD WHERE TRACOD = '$codempresadoc'");
	foreach ($conn->query($sql1) as $row1) {
	
	$codunidadetra = $row1['TRACOD'];
	$codempresatra = $row1['TRANFA'];
	
	$sql2 = ("SELECT * FROM TB_TABORI WHERE ORICOD='$codorigemdoc'");
	foreach ($conn->query($sql2) as $row2) {
			
	$codorigemnome = $row2['ORINOM'];
	if (!preg_match($emailerrado, $emailclientetra)){
	
	
	

	
    $html .= "<tr>" ;

	if (isset($row['DOCCLI'])){
	
	if ($codclientedoc == $codclientetra){
		
	if (isset($row['DOCNOM_CLI'])){	
	
	$html .= "<td>" . $row['DOCCLI'] . "</td>";
	}
	}
	}
	if (isset($row['DOCNOM_CLI'])){
	$html .= "<td>" . $row['DOCNOM_CLI'] . "</td>";
	}
	
	if (isset($emailclientetra)){
	$html .= "<td>" . filter_var($emailclientetra, FILTER_VALIDATE_EMAIL) . "</td>";
	} elseif (empty($emailclientetra)){
	$html .= "<td>" . 'Email Não Cadastrado' . "</td>";
	}
	if (isset($row['DOCEMI'])){
	$html .= "<td>" . $row['DOCEMI'] . "</td>";
	}
	if ($codempresadoc == $codunidadetra){
	if (isset($codempresatra)){
	$html .= "<td>" . $codempresatra . "</td>";
	}
	}
	if (isset($row['DOCORI'])){
	$html .= "<td>" . $row['DOCORI'] . "</td>";
	}
	if (isset($codorigemnome)){
	$html .= "<td>" . $codorigemnome . "</td>";
	}
	if (isset($row['DOCDTR'])){
	$html .= "<td>" . $row['DOCDTR'] . "</td>";
	}

	
	}
	
	}
	}
	}
	}
	
	$html .= "</table>"  . "<br>" . "<hr>";
	
	 // RIBEIRAO
	
	
	$html .= '<br>'.'<strong>'.'U00222 - RIBEIRAO PRETO' . '	- VENDA VEICULOS NOVOS '.'</strong>'.'<br>';
	
	$html .= "<table>" . "<tr>";
	$html .= "<th>" . $codcliente  . "</th>";
	$html .= "<th>" . $cliente . "</th>";
	$html .= "<th>" . $email . "</th>";
	$html .= "<th>" . $unidade . "</th>";
	$html .= "<th>" . $empresa . "</th>";
	$html .= "<th>" . $origem . "</th>";
	$html .= "<th>" . $dorigem . "</th>";
	$html .= "<th>" . $datavenda . "</th>";
	$html .= "</tr>";


		
	$sql = ("SELECT * FROM TB_PCADOC where DOCSTS <> 'C' AND DOCORI = '03'  AND DOCSES = 'S' AND DOCCME = '210' AND DOCEMI = 'U00222' AND DOCDTR between '$date1n' and '$date2n' order by DOCEMI, DOCDTR");
	foreach ($conn->query($sql) as $row) {
	
	$codempresadoc = $row['DOCEMI'];
	$codclientedoc = $row['DOCCLI'];
	$codorigemdoc = $row['DOCORI'];
	$datacontrole = $row['DOCDTR'];
	$ncontrole_cli = $row['DOCCGC_CLI'];
	$xcontador = ($contador ++);
	
	$sql1 = ("SELECT * FROM TB_TRACAD WHERE TRATPT = 'C' AND TRACOD = '$codclientedoc'");
	foreach ($conn->query($sql1) as $row1) {
	
	$codclientetra = $row1['TRACOD'];
	$emailclientetra = $row1['TRAEMA'];

	$sql1 = ("SELECT * FROM TB_TRACAD WHERE TRACOD = '$codempresadoc'");
	foreach ($conn->query($sql1) as $row1) {
	
	$codunidadetra = $row1['TRACOD'];
	$codempresatra = $row1['TRANFA'];
	
	$sql2 = ("SELECT * FROM TB_TABORI WHERE ORICOD='$codorigemdoc'");
	foreach ($conn->query($sql2) as $row2) {
			
	$codorigemnome = $row2['ORINOM'];
	if (!preg_match($emailerrado, $emailclientetra)){
	
	
	

	
    $html .= "<tr>" ;

	if (isset($row['DOCCLI'])){
	
	if ($codclientedoc == $codclientetra){
		
	if (isset($row['DOCNOM_CLI'])){	
	
	$html .= "<td>" . $row['DOCCLI'] . "</td>";
	}
	}
	}
	if (isset($row['DOCNOM_CLI'])){
	$html .= "<td>" . $row['DOCNOM_CLI'] . "</td>";
	}
	
	if (isset($emailclientetra)){
	$html .= "<td>" . filter_var($emailclientetra, FILTER_VALIDATE_EMAIL) . "</td>";
	} elseif (empty($emailclientetra)){
	$html .= "<td>" . 'Email Não Cadastrado' . "</td>";
	}
	if (isset($row['DOCEMI'])){
	$html .= "<td>" . $row['DOCEMI'] . "</td>";
	}
	if ($codempresadoc == $codunidadetra){
	if (isset($codempresatra)){
	$html .= "<td>" . $codempresatra . "</td>";
	}
	}
	if (isset($row['DOCORI'])){
	$html .= "<td>" . $row['DOCORI'] . "</td>";
	}
	if (isset($codorigemnome)){
	$html .= "<td>" . $codorigemnome . "</td>";
	}
	if (isset($row['DOCDTR'])){
	$html .= "<td>" . $row['DOCDTR'] . "</td>";
	}

	
	}
	
	}
	}
	}
	}
	
	$html .= "</table>"  . "<br>" . "<hr>";
	
		 // TATUAPE
	
	
	$html .= '<br>'.'<strong>'.'U00224 - TATUAPE' . '	- VENDA VEICULOS NOVOS '.'</strong>'.'<br>';
	
	$html .= "<table>" . "<tr>";
	$html .= "<th>" . $codcliente  . "</th>";
	$html .= "<th>" . $cliente . "</th>";
	$html .= "<th>" . $email . "</th>";
	$html .= "<th>" . $unidade . "</th>";
	$html .= "<th>" . $empresa . "</th>";
	$html .= "<th>" . $origem . "</th>";
	$html .= "<th>" . $dorigem . "</th>";
	$html .= "<th>" . $datavenda . "</th>";
	$html .= "</tr>";


		
	$sql = ("SELECT * FROM TB_PCADOC where DOCSTS <> 'C' AND DOCORI = '03'  AND DOCSES = 'S' AND DOCCME = '210' AND DOCEMI = 'U00224' AND DOCDTR between '$date1n' and '$date2n' order by DOCEMI, DOCDTR");
	foreach ($conn->query($sql) as $row) {
	
	$codempresadoc = $row['DOCEMI'];
	$codclientedoc = $row['DOCCLI'];
	$codorigemdoc = $row['DOCORI'];
	$datacontrole = $row['DOCDTR'];
	$ncontrole_cli = $row['DOCCGC_CLI'];
	$xcontador = ($contador ++);
	
	$sql1 = ("SELECT * FROM TB_TRACAD WHERE TRATPT = 'C' AND TRACOD = '$codclientedoc'");
	foreach ($conn->query($sql1) as $row1) {
	
	$codclientetra = $row1['TRACOD'];
	$emailclientetra = $row1['TRAEMA'];

	$sql1 = ("SELECT * FROM TB_TRACAD WHERE TRACOD = '$codempresadoc'");
	foreach ($conn->query($sql1) as $row1) {
	
	$codunidadetra = $row1['TRACOD'];
	$codempresatra = $row1['TRANFA'];
	
	$sql2 = ("SELECT * FROM TB_TABORI WHERE ORICOD='$codorigemdoc'");
	foreach ($conn->query($sql2) as $row2) {
			
	$codorigemnome = $row2['ORINOM'];
	if (!preg_match($emailerrado, $emailclientetra)){
	
	
	

	
    $html .= "<tr>" ;

	if (isset($row['DOCCLI'])){
	
	if ($codclientedoc == $codclientetra){
		
	if (isset($row['DOCNOM_CLI'])){	
	
	$html .= "<td>" . $row['DOCCLI'] . "</td>";
	}
	}
	}
	if (isset($row['DOCNOM_CLI'])){
	$html .= "<td>" . $row['DOCNOM_CLI'] . "</td>";
	}
	
	if (isset($emailclientetra)){
	$html .= "<td>" . filter_var($emailclientetra, FILTER_VALIDATE_EMAIL) . "</td>";
	} elseif (empty($emailclientetra)){
	$html .= "<td>" . 'Email Não Cadastrado' . "</td>";
	}
	if (isset($row['DOCEMI'])){
	$html .= "<td>" . $row['DOCEMI'] . "</td>";
	}
	if ($codempresadoc == $codunidadetra){
	if (isset($codempresatra)){
	$html .= "<td>" . $codempresatra . "</td>";
	}
	}
	if (isset($row['DOCORI'])){
	$html .= "<td>" . $row['DOCORI'] . "</td>";
	}
	if (isset($codorigemnome)){
	$html .= "<td>" . $codorigemnome . "</td>";
	}
	if (isset($row['DOCDTR'])){
	$html .= "<td>" . $row['DOCDTR'] . "</td>";
	}

	
	}
	
	}
	}
	}
	}
	
	$html .= "</table>"  . "<br>" . "<hr>";
		
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; 	
		
	?>
	
	
	<br>
		<td><a href="select-mkt.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
		<td><a href="select-mkt-rel-xls.php" target="_self"> <button type="button" onclick="this.disabled=true">Gerar XLS</button></a></td>
		<br></font>
		
		</p>			
	</body>
</html>