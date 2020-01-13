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
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		</head>
<style>
.button {
font-family: Calibri;
  background-color: #4F4F4F;
  border: none;
  color: white;
  padding: 5px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
}
table {
		  font-family: Calibri;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #aaaaaa;
		  text-align: left;
		  padding: 2px;
		}

		tr:nth-child(even) {
		  background-color: #ddddbb;
		}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #4F4F4F;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 5px 8px;
  text-decoration: none;
  cursor:pointer
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: #4F4F4F;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #828282;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 4px 8px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #A9A9A9;}

.dropdown:hover .dropdown-content {
  display: block;
}
.footer {
    position:absolute;
    bottom:0;
    width:100%;
}

</style>
</head>
		<body>
	
		<nav>
		<font size="2" face="Calibri">
		</nav>	
	
		<p>

		
		<font size="3" face="Calibri">
		<table>
  
	<?php
	$mkt = $_POST['mkt'];
	
	$date1=date('d-m-Y',strtotime($_POST['date1']));
	$date2=date('d-m-Y',strtotime($_POST['date2']));
	
	$_SESSION["mkt"] = $mkt;
	$_SESSION["date1n"] = $date1;
	$_SESSION["date2n"] = $date2;
	
	
	
	if ($mkt=='novo'){
	require("bd-u1.php");
	
	echo '<hr>'.'Periodo ' . $date1 . ' até ' . $date2 . ' - NOVOS'. '<hr>';
	/*
		$emailerrado = '/(@chevroletnova.com.br|naopossui@|@naotem|@ntem|nao@tem|contato@contato|naotem@|@mail.mercadolivre.com|@ct.vtex.com.br|nf@|sem@email|@naotememail|@nova)/';
	
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
	
	//echo '<strong>'.'Periodo ' . $date1 . ' ' . ' até ' . $date2 .'</strong>'.'<br>'. "<hr>";
	echo 'U00001 - MATRIZ' . '	- VENDA VEICULOS NOVOS '.'<br>';
	
	echo "<table>" . "<tr>";
	//echo "<th>" . $seq . "</th>";
	echo "<th>" . $codcliente  . "</th>";
	echo "<th>" . $cliente . "</th>";
	echo "<th>" . $email . "</th>";
	echo "<th>" . $unidade . "</th>";
	echo "<th>" . $empresa . "</th>";
	echo "<th>" . $origem . "</th>";
	echo "<th>" . $dorigem . "</th>";
	echo "<th>" . $datavenda . "</th>";
	echo "</tr>";


	if ($ecommerce = 'ecommerce'){	
	$sql = ("SELECT * FROM TB_PCADOC where DOCSTS <> 'C' AND DOCORI = '03'  AND DOCSES = 'S' AND DOCCME = '210' AND DOCEMI = 'U00001' AND DOCDTR between '$date1' and '$date2' order by DOCEMI, DOCDTR");
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
	
	
	

	
    echo "<tr>" ;
	//echo "<td>" . $xcontador . "</td>";
	

	if (isset($row['DOCCLI'])){
	
	if ($codclientedoc == $codclientetra){
		
	if (isset($row['DOCNOM_CLI'])){	
	
	echo "<td>" . $row['DOCCLI'] . "</td>";
	}
	}
	}
	if (isset($row['DOCNOM_CLI'])){
	echo "<td>" . $row['DOCNOM_CLI'] . "</td>";
	}
	
	if (isset($emailclientetra)){
	echo "<td>" . filter_var($emailclientetra, FILTER_VALIDATE_EMAIL) . "</td>";
	} elseif (empty($emailclientetra)){
	echo "<td>" . 'Email Não Cadastrado' . "</td>";
	}
	if (isset($row['DOCEMI'])){
	echo "<td>" . $row['DOCEMI'] . "</td>";
	}
	if ($codempresadoc == $codunidadetra){
	if (isset($codempresatra)){
	echo "<td>" . $codempresatra . "</td>";
	}
	}
	if (isset($row['DOCORI'])){
	echo "<td>" . $row['DOCORI'] . "</td>";
	}
	if (isset($codorigemnome)){
	echo "<td>" . $codorigemnome . "</td>";
	}
	if (isset($row['DOCDTR'])){
	echo "<td>" . $row['DOCDTR'] . "</td>";
	}

	
	}
	
	}
	}
	}
	}
	
	echo "</table>"  . "<br>" . "<hr>";
	
    // ITAIM
	
		
	echo 'U00002 - ITAIM' . '	- VENDA VEICULOS NOVOS '.'<br>';
	
	echo "<table>" . "<tr>";
	echo "<th>" . $codcliente  . "</th>";
	echo "<th>" . $cliente . "</th>";
	echo "<th>" . $email . "</th>";
	echo "<th>" . $unidade . "</th>";
	echo "<th>" . $empresa . "</th>";
	echo "<th>" . $origem . "</th>";
	echo "<th>" . $dorigem . "</th>";
	echo "<th>" . $datavenda . "</th>";
	echo "</tr>";


		
	$sql = ("SELECT * FROM TB_PCADOC where DOCSTS <> 'C' AND DOCORI = '03'  AND DOCSES = 'S' AND DOCCME = '210' AND DOCEMI = 'U00002' AND DOCDTR between '$date1' and '$date2' order by DOCEMI, DOCDTR");
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
	
	
	

	
    echo "<tr>" ;

	if (isset($row['DOCCLI'])){
	
	if ($codclientedoc == $codclientetra){
		
	if (isset($row['DOCNOM_CLI'])){	
	
	echo "<td>" . $row['DOCCLI'] . "</td>";
	}
	}
	}
	if (isset($row['DOCNOM_CLI'])){
	echo "<td>" . $row['DOCNOM_CLI'] . "</td>";
	}
	
	if (isset($emailclientetra)){
	echo "<td>" . filter_var($emailclientetra, FILTER_VALIDATE_EMAIL) . "</td>";
	} elseif (empty($emailclientetra)){
	echo "<td>" . 'Email Não Cadastrado' . "</td>";
	}
	if (isset($row['DOCEMI'])){
	echo "<td>" . $row['DOCEMI'] . "</td>";
	}
	if ($codempresadoc == $codunidadetra){
	if (isset($codempresatra)){
	echo "<td>" . $codempresatra . "</td>";
	}
	}
	if (isset($row['DOCORI'])){
	echo "<td>" . $row['DOCORI'] . "</td>";
	}
	if (isset($codorigemnome)){
	echo "<td>" . $codorigemnome . "</td>";
	}
	if (isset($row['DOCDTR'])){
	echo "<td>" . $row['DOCDTR'] . "</td>";
	}

	
	}
	
	}
	}
	}
	}
	
	echo "</table>"  . "<br>" . "<hr>";
          
        
	 // JOÃO DIAS
	
	
	echo 'U00004 - JOÃO DIAS' . '	- VENDA VEICULOS NOVOS '.'<br>';
	
	echo "<table>" . "<tr>";
	echo "<th>" . $codcliente  . "</th>";
	echo "<th>" . $cliente . "</th>";
	echo "<th>" . $email . "</th>";
	echo "<th>" . $unidade . "</th>";
	echo "<th>" . $empresa . "</th>";
	echo "<th>" . $origem . "</th>";
	echo "<th>" . $dorigem . "</th>";
	echo "<th>" . $datavenda . "</th>";
	echo "</tr>";


		
	$sql = ("SELECT * FROM TB_PCADOC where DOCSTS <> 'C' AND DOCORI = '03'  AND DOCSES = 'S' AND DOCCME = '210' AND DOCEMI = 'U00004' AND DOCDTR between '$date1' and '$date2' order by DOCEMI, DOCDTR");
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
	
	
	

	
    echo "<tr>" ;

	if (isset($row['DOCCLI'])){
	
	if ($codclientedoc == $codclientetra){
		
	if (isset($row['DOCNOM_CLI'])){	
	
	echo "<td>" . $row['DOCCLI'] . "</td>";
	}
	}
	}
	if (isset($row['DOCNOM_CLI'])){
	echo "<td>" . $row['DOCNOM_CLI'] . "</td>";
	}
	
	if (isset($emailclientetra)){
	echo "<td>" . filter_var($emailclientetra, FILTER_VALIDATE_EMAIL) . "</td>";
	} elseif (empty($emailclientetra)){
	echo "<td>" . 'Email Não Cadastrado' . "</td>";
	}
	if (isset($row['DOCEMI'])){
	echo "<td>" . $row['DOCEMI'] . "</td>";
	}
	if ($codempresadoc == $codunidadetra){
	if (isset($codempresatra)){
	echo "<td>" . $codempresatra . "</td>";
	}
	}
	if (isset($row['DOCORI'])){
	echo "<td>" . $row['DOCORI'] . "</td>";
	}
	if (isset($codorigemnome)){
	echo "<td>" . $codorigemnome . "</td>";
	}
	if (isset($row['DOCDTR'])){
	echo "<td>" . $row['DOCDTR'] . "</td>";
	}

	
	}
	
	}
	}
	}
	}
	
	echo "</table>"  . "<br>" . "<hr>";
	
	 // RIBEIRAO
	
	
	echo 'U00222 - RIBEIRAO PRETO' . '	- VENDA VEICULOS NOVOS '.'<br>';
	
	echo "<table>" . "<tr>";
	echo "<th>" . $codcliente  . "</th>";
	echo "<th>" . $cliente . "</th>";
	echo "<th>" . $email . "</th>";
	echo "<th>" . $unidade . "</th>";
	echo "<th>" . $empresa . "</th>";
	echo "<th>" . $origem . "</th>";
	echo "<th>" . $dorigem . "</th>";
	echo "<th>" . $datavenda . "</th>";
	echo "</tr>";


		
	$sql = ("SELECT * FROM TB_PCADOC where DOCSTS <> 'C' AND DOCORI = '03'  AND DOCSES = 'S' AND DOCCME = '210' AND DOCEMI = 'U00222' AND DOCDTR between '$date1' and '$date2' order by DOCEMI, DOCDTR");
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
	
	
	

	
    echo "<tr>" ;

	if (isset($row['DOCCLI'])){
	
	if ($codclientedoc == $codclientetra){
		
	if (isset($row['DOCNOM_CLI'])){	
	
	echo "<td>" . $row['DOCCLI'] . "</td>";
	}
	}
	}
	if (isset($row['DOCNOM_CLI'])){
	echo "<td>" . $row['DOCNOM_CLI'] . "</td>";
	}
	
	if (isset($emailclientetra)){
	echo "<td>" . filter_var($emailclientetra, FILTER_VALIDATE_EMAIL) . "</td>";
	} elseif (empty($emailclientetra)){
	echo "<td>" . 'Email Não Cadastrado' . "</td>";
	}
	if (isset($row['DOCEMI'])){
	echo "<td>" . $row['DOCEMI'] . "</td>";
	}
	if ($codempresadoc == $codunidadetra){
	if (isset($codempresatra)){
	echo "<td>" . $codempresatra . "</td>";
	}
	}
	if (isset($row['DOCORI'])){
	echo "<td>" . $row['DOCORI'] . "</td>";
	}
	if (isset($codorigemnome)){
	echo "<td>" . $codorigemnome . "</td>";
	}
	if (isset($row['DOCDTR'])){
	echo "<td>" . $row['DOCDTR'] . "</td>";
	}

	
	}
	
	}
	}
	}
	}
	
	echo "</table>"  . "<br>" . "<hr>";
	
		 // TATUAPE
	
	
	echo 'U00224 - TATUAPE' . '	- VENDA VEICULOS NOVOS '.'<br>';
	
	echo "<table>" . "<tr>";
	echo "<th>" . $codcliente  . "</th>";
	echo "<th>" . $cliente . "</th>";
	echo "<th>" . $email . "</th>";
	echo "<th>" . $unidade . "</th>";
	echo "<th>" . $empresa . "</th>";
	echo "<th>" . $origem . "</th>";
	echo "<th>" . $dorigem . "</th>";
	echo "<th>" . $datavenda . "</th>";
	echo "</tr>";


		
	$sql = ("SELECT * FROM TB_PCADOC where DOCSTS <> 'C' AND DOCORI = '03'  AND DOCSES = 'S' AND DOCCME = '210' AND DOCEMI = 'U00224' AND DOCDTR between '$date1' and '$date2' order by DOCEMI, DOCDTR");
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
	
	
	

	
    echo "<tr>" ;

	if (isset($row['DOCCLI'])){
	
	if ($codclientedoc == $codclientetra){
		
	if (isset($row['DOCNOM_CLI'])){	
	
	echo "<td>" . $row['DOCCLI'] . "</td>";
	}
	}
	}
	if (isset($row['DOCNOM_CLI'])){
	echo "<td>" . $row['DOCNOM_CLI'] . "</td>";
	}
	
	if (isset($emailclientetra)){
	echo "<td>" . filter_var($emailclientetra, FILTER_VALIDATE_EMAIL) . "</td>";
	} elseif (empty($emailclientetra)){
	echo "<td>" . 'Email Não Cadastrado' . "</td>";
	}
	if (isset($row['DOCEMI'])){
	echo "<td>" . $row['DOCEMI'] . "</td>";
	}
	if ($codempresadoc == $codunidadetra){
	if (isset($codempresatra)){
	echo "<td>" . $codempresatra . "</td>";
	}
	}
	if (isset($row['DOCORI'])){
	echo "<td>" . $row['DOCORI'] . "</td>";
	}
	if (isset($codorigemnome)){
	echo "<td>" . $codorigemnome . "</td>";
	}
	if (isset($row['DOCDTR'])){
	echo "<td>" . $row['DOCDTR'] . "</td>";
	}

	
	}
	
	}
	}
	}
	}
	
	echo "</table>"  . "<br>" . "<hr>";
		
	}	*/
	echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";
	?>
		<ul>
		<li><a href="select-mkt-ofcb.php" target="iframe_b" onclick="submit()">Visualizar</button></a></li>
		<li><a href="select-mkt-ofc-xls.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>
	<?php
	exit;
	}	
	elseif ($mkt=='usado'){
	require("bd-u1.php");
	echo '<hr>'.'Periodo ' . $date1 . ' até ' . $date2 . ' - USADOS'. '<hr>';
	echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";
	?>
		<ul>
		<li><a href="select-mkt-ofcb.php" target="iframe_b" onclick="submit()">Visualizar</button></a></li>
		<li><a href="select-mkt-ofc-xls.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>
	<?php
	exit;
	}
	elseif ($mkt=='ecommerce'){
	require("bd-u1.php");
	
	echo '<hr>'.'Periodo ' . $date1 . ' até ' . $date2 . ' - ECOMMERCE'. '<hr>';
	
	echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";
	?>
		<ul>
		<li><a href="select-mkt-ofcb.php" target="iframe_b" onclick="submit()">Visualizar</button></a></li>
		<li><a href="select-mkt-ofc-xls.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>
	<?php
	exit;
	}
	elseif ($mkt=='oficina'){
	require("bd-u1.php");
	
	echo '<hr>'.'Periodo ' . $date1 . ' até ' . $date2 . ' - OFICINA'. '<hr>';
	/*
	$uni='Unidade';
	$ts='Tipo de Serviço';
	$vp='Vendas de Peças';
	$vs='Vendas de Serviço';
	$ttv='Total das Vendas';
	$ipi='IPI';
	$ns='Descrição do Serviço';
	$cp='Custo Peças';
	$cs='Custo Serviço';
	$iss='ISS';
	$icms='ICMS';
	$pis='PIS';
	$cofins='COFINS';
	$ctv='Custo Total das Vendas';
	
	echo "<table>" . "<tr>";
	
	echo "<th>" . $uni . "</th>";
	echo "<th>" . $ts  . "</th>";
	echo "<th>" . $vp  . "</th>";
	echo "<th>" . $vs  . "</th>";
	echo "<th>" . $ttv  . "</th>";
	echo "<th>" . $ipi  . "</th>";
	echo "<th>" . $cp  . "</th>";
	echo "<th>" . $cs  . "</th>";
	echo "<th>" . $iss  . "</th>";
	echo "<th>" . $icms  . "</th>";
	echo "<th>" . $pis  . "</th>";
	echo "<th>" . $cofins  . "</th>";
	echo "<th>" . $ctv  . "</th>";
	echo "<th>" . $ns  . "</th>";
	
	echo "</tr>";
	
	$sql = ("SELECT DOCEMI,DOCTOS,SUM(DOCVLS) AS DOCVLS1,SUM(DOCVLM) AS DOCVLM1,SUM(DOCCSV) AS DOCCSV1,SUM(DOCVTN) AS DOCVTN1,SUM(DOCVIP) AS DOCVIP1,SUM(DOCCSR) AS DOCCSR1,SUM(DOCVIC) AS DOCVIC1,SUM(DOCVIS) AS DOCVIS1, SUM(DOCCST) AS DOCCST1,SUM(DOCPIS_VAL) AS DOCPIS_VAL1,SUM(DOCCOF_VAL) AS DOCCOF_VAL1 FROM TB_PCADOC WHERE DOCEMI='U00224' AND DOCRSE='OS' AND DOCDTR BETWEEN '$date1' AND '$date2' GROUP BY DOCEMI,DOCTOS ORDER BY DOCEMI,DOCTOS");
	foreach ($conn->query($sql) as $row) {
	//$xvls = $row['DOCVIP1'];
	$xvls = str_replace (',', '.', str_replace ('.', '', $row['DOCVLS1']));
	//$xvlm = $row['DOCVIP1'];
	$xvlm = str_replace (',', '.', str_replace ('.', '', $row['DOCVLM1']));
	//$xvtn = $row['DOCVIP1'];
	$xvtn = str_replace (',', '.', str_replace ('.', '', $row['DOCVTN1']));
	//$xvip = $row['DOCVIP1'];
	$xvip = str_replace (',', '.', str_replace ('.', '', $row['DOCVIP1']));
	//$xvic = $row['DOCCST1'];
	$xvic = str_replace (',', '.', str_replace ('.', '', $row['DOCCST1']));
	//$xvic1 = $row['DOCVIC1'];
	$xvic1 = str_replace (',', '.', str_replace ('.', '', $row['DOCVIC1']));
	//$xvis = $row['DOCVIS1'];
	$xvis = str_replace (',', '.', str_replace ('.', '', $row['DOCVIS1']));
	//$xcsr = $row['DOCCSR1'];
	$xcsr = str_replace (',', '.', str_replace ('.', '', $row['DOCCSR1']));
	//$xdocpis = $row['DOCPIS_VAL1'];
	$xcsv = str_replace (',', '.', str_replace ('.', '', $row['DOCCSV1']));
	//$xdocpis = $row['DOCPIS_VAL1'];
	$xdocpis = str_replace (',', '.', str_replace ('.', '', $row['DOCPIS_VAL1']));
	//$xdoccofins = $row['DOCCOF_VAL1'];
	$xdoccofins = str_replace (',', '.', str_replace ('.', '', $row['DOCCOF_VAL1']));

	$xtotcusto = ($xcsr + $xcsv);
	$xtot = ($xvis + $xvic1 + $xdocpis + $xdoccofins);
	$xvtnt = ($xvtn - $xvip);
 
	echo  "<tr>";
	echo "<td>" . $row['DOCEMI']  . "</td>";
	echo "<td>" . $row['DOCTOS']  . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$xvlm),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$xvls),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$xvtnt),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$xvip),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$xvic),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$xtotcusto),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$xvis),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$xvic1),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$xdocpis),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$xdoccofins),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$xtot),"2",",","") . "</td>";
	
	if ($row['DOCTOS'] == 'A1' OR $row['DOCTOS'] == 'A2' OR $row['DOCTOS'] == 'A4' OR $row['DOCTOS'] == 'A5' OR $row['DOCTOS'] == 'A9'){
	echo "<td>" . 'ACESSORIOS'  . "</td>";		
	}elseif ($row['DOCTOS'] == 'A6' OR $row['DOCTOS'] == 'D1' OR $row['DOCTOS'] == 'F1' OR $row['DOCTOS'] == 'R1' OR $row['DOCTOS'] == 'R2' OR $row['DOCTOS'] == 'R3'){
	echo "<td>" . 'NOVOS'  . "</td>";		
	}elseif ($row['DOCTOS'] == 'A7' OR $row['DOCTOS'] == 'F5'){
	echo "<td>" . 'FROTISTA'  . "</td>";		
	}elseif ($row['DOCTOS'] == 'A8' OR $row['DOCTOS'] == 'D2' OR $row['DOCTOS'] == 'F2'){
	echo "<td>" . 'USADOS'  . "</td>";		
	}elseif ($row['DOCTOS'] == 'D4' OR $row['DOCTOS'] == 'D8' OR $row['DOCTOS'] == 'V1' OR $row['DOCTOS'] == 'V2' OR $row['DOCTOS'] == 'V3' OR $row['DOCTOS'] == 'V5' OR $row['DOCTOS'] == 'V6' OR $row['DOCTOS'] == 'V8'){
	echo "<td>" . 'MECANICA'  . "</td>";		
	}elseif ($row['DOCTOS'] == 'N2' OR $row['DOCTOS'] == 'S1' OR $row['DOCTOS'] == 'S2	'){
	echo "<td>" . 'FUNILARIA'  . "</td>";		
	}else echo "<td>" . $row['DOCTOS']  . "</td>";
	
	echo  "</tr>";	
	
	
	}
	
	echo "</table>";*/
	echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";
	?>

	<ul>
		<li><a href="select-mkt-ofcb.php" target="iframe_b" onclick="submit()">Visualizar</button></a></li>
		<li><a href="select-mkt-ofc-xls.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>
	<?php
	
	
		
	}

	
	exit;
	
	echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";

	?>

	<br>
	<ul>
		<li><a class="active" onclick='history.go(-1)' target="_self" onclick="submit()">Voltar</button></a></li>
		<li><a href="select-mkt-ofc-xls.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>

	 
	</body>
</html>