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
		  background-color: #dddddd;
		}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #4F4F4F;
  font-family: Calibri;
   cursor:pointer
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
  font-family: Calibri;
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
   font-family: Calibri;
}

.dropdown-content a {
  color: white;
  padding: 4px 8px;
  text-decoration: none;
  display: block;
  text-align: left;
   font-family: Calibri;
}

.dropdown-content a:hover {background-color: #A9A9A9;}

.dropdown:hover .dropdown-content {
  display: block;
}
.footer {
    position:absolute;
    bottom:0;
    width:100%;
	 font-family: Calibri;
}
</style>
</head>
		<body>
	
		<nav>
		<font size="2" face="Calibri">
		</nav>	
	
		
	<?php
	
	$unidade = $_POST['unidade'];
	$nota = $_POST['nf'];
	$serie = $_POST['serie'];
	
	$_SESSION["nota"] = $nota;
	$_SESSION["serie"] = $serie;

	if ($unidade=='U00001'){
	require("bd-u1.php");}
	elseif ($unidade=='U00002'){
	require("bd-u2.php");}
	elseif ($unidade=='U00003'){
	require("bd-u3.php");}
	elseif ($unidade=='U00004'){
	require("bd-u4.php");}
	elseif ($unidade=='U00008'){
	require("bd-u8.php");}
	elseif ($unidade=='U00009'){
	require("bd-u9.php");}
	elseif ($unidade=='U00112'){
	require("bd-u112.php");}
	elseif ($unidade=='U00222'){
	require("bd-u222.php");}
	elseif ($unidade=='U00224'){
	require("bd-u224.php");}
	
	elseif ($unidade=='OUTRAS'){
	require("bd-u1.php");
	
	$sqldoc = ("select * from TB_PCADOC where DOCNUM = '$nota' AND DOCSER='$serie' AND DOCSES='E' AND DOCCME='110' AND DOCORI='35' ");
	foreach ($conn->query($sqldoc) as $rowdoc) {
	
	echo '<hr>' .'<h3 style="background-color:Yellow;">' . 'Nota Fiscal de Importação ' . '</h3>';
	echo '<strong>' . '<hr>' . 'Nota Fiscal de Importação: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . $serie . '<strong>' . ' Emitente: ' . '</strong>' . $rowdoc['DOCEMI'] . '<strong>' . ' Chave de Acesso: ' . '</strong>' . $rowdoc['DOCCHA'] . '<hr>' ;

	echo "<table>";
	echo "<tr>";
	echo "<th>" . 'Emitente' . "</th>";
	echo "<th>" . 'Nota Fiscal' . "</th>";
	echo "<th>" . 'Serie' . "</th>";
	echo "<th>" . 'Data' . "</th>";
	echo "<th>" . 'Unidade' . "</th>";
	echo "<th>" . 'Valor Contabil' . "</th>";
	echo "<th>" . 'CME' . "</th>";
	echo "<th>" . 'NOP' . "</th>";
	echo "<th>" . 'UF' . "</th>";
	
	echo "<tr>";
	echo "<td>" . $rowdoc['DOCEMI'] . "</td>";
	echo "<td>" . $rowdoc['DOCNUM'] . "</td>";
	echo "<td>" . $rowdoc['DOCSER'] . "</td>";
	echo "<td>" . $rowdoc['DOCDTR'] . "</td>";
	echo "<td>" . $rowdoc['DOCEMP'] . "</td>";
	echo "<td>" . $rowdoc['DOCVTN'] . "</td>";
	echo "<td>" . $rowdoc['DOCCME'] . "</td>";
	echo "<td>" . $rowdoc['DOCNOP'] . "</td>";
	echo "<td>" . $rowdoc['DOCEST'] . "</td>";
	
	

	echo "</tr>";
	echo "</table>" . "<hr>";
	
	
	
	}
	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . 'Seq' . "</th>";
	echo "<th>" . 'Descrição' . "</th>";
	echo "<th>" . 'Peça' . "</th>";
	echo "<th>" . 'Qtde' . "</th>";
	echo "<th>" . 'NCM' . "</th>";
	echo "<th>" . 'Valor Contabil' . "</th>";
	echo "<th>" . 'CME' . "</th>";
	echo "<th>" . 'NOP' . "</th>";
	echo "<th>" . 'UF' . "</th>";
	
	echo "<tr>";
	
	$sqldoi = ("select * from TB_PCADOI where DOINUM = '$nota' AND DOISER='$serie' AND DOISES='E' AND DOICME='110' AND DOIORI='35'");
	foreach ($conn->query($sqldoi) as $rowdoi) {
	
	echo "<td>" . $rowdoi['DOISEQ'] . "</td>";
	echo "<td>" . $rowdoi['DOIDES'] . "</td>";
	echo "<td>" . $rowdoi['DOIPRO'] . "</td>";
	echo "<td>" . $rowdoi['DOIQTD'] . "</td>";
	echo "<td>" . $rowdoi['DOINCM'] . "</td>";
	echo "<td>" . $rowdoi['DOIVTI'] . "</td>";
	echo "<td>" . $rowdoi['DOICME'] . "</td>";
	echo "<td>" . $rowdoi['DOINOP'] . "</td>";
	echo "<td>" . $rowdoi['DOIEST'] . "</td>";
	
	
	echo "</tr>";
	

	
	
	}
	echo "</table>" . "<hr>";
	
	if ($rowdoc['DOCNOP'] == '2102' && $rowdoc['DOCEST'] == 'EX' ){
	echo '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Atualizar NF -> ' . 
	'</h3>' . '</strong>'. 'Nota de Importação alterar somente UF: De '.$rowdoc['DOCEST'].'  para (PE)'
	.'<form action="upimp.php" id="upvei" target="iframe_b" method="POST" enctype="multipart/form-data" >'
	.'</strong>'.'<br>'.'<input type="submit" class="button" name="enviar" value="Atualizar">'
	.'</form>';
	}elseif ($rowdoc['DOCNOP'] == '2102' && $rowdoc['DOCEST'] == 'PE' ){
	echo '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Atualizar NF -> ' . 
	'</h3>' . '</strong>'. 'Nota de Importação alterar UF: De '.$rowdoc['DOCEST'].'  para (EX) e NOP '.$rowdoc['DOCNOP'].'  para (3102)'
	.'<form action="upimp1.php" id="upvei" target="iframe_b" method="POST" enctype="multipart/form-data" >'
	.'</strong>'.'<br>'.'<input type="submit" class="button" name="enviar" value="Atualizar">'
	.'</form>';
	}
		
	exit;
	}
	
	
	
	
	
	$sql5 = ("select * from TB_FATNFE_HIS where NFENUM_HIS = '$nota' AND NFESER_HIS='$serie' AND NFEEMI_HIS= '$unidade' ");
	foreach ($conn->query($sql5) as $row5) {
	$ncontrolenfh_his = $row5['NFETXT_HIS'];	
	}	
	
	$sql3 = ("select NFEKEY_HIS,NFESEQ_HIS from TB_FATNFE_HIS where NFENUM_HIS = '$nota' AND NFESER_HIS='$serie' AND NFEEMI_HIS = '$unidade' AND NFESEQ_HIS = '1' GROUP BY NFESEQ_HIS, NFEKEY_HIS ");
	foreach ($conn->query($sql3) as $row3) {
	$nchave = $row3['NFEKEY_HIS'];
	
	$_SESSION["nota"] = $nota;
	$_SESSION["serie"] = $serie;
	$_SESSION["chave"] = $nchave;
	$_SESSION["uni"] = $unidade;
};
	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota' AND NFHSNF = '$serie' AND NFHEMI= '$unidade' ");
	foreach ($conn->query($sql) as $row) {
	
	if ($row['NFHSTS'] == 'G'){
	
	echo '<hr>' .'<h3 style="background-color:DodgerBlue;">' . 'Nota Fiscal Validada na Receita ' . '</h3>';} else echo '<hr>' . '<h3 style="background-color:Tomato;">' . 'Nota Fiscal Não Validada na Receita ' . '</h3>';
	$ret = substr("$ncontrolenfh_his", 0, 90);
	if ($serie == 'E'){
	echo '<strong>' . '<hr>' . 'Status de Validação: ' . '</strong>' . 'Invalido para RPS';
	}else echo '<strong>' . '<hr>' . 'Status de Validação: ' . '</strong>' . $ret;
	if ($row['NFHCME'] == '140' AND $serie == '55'){
	echo '<strong>' . '<hr>' . 'Nota Fiscal de Devolução: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . $serie . '<strong>' . ' Unidade: ' . '</strong>' . $unidade . '<strong>' . ' Chave de Acesso: ' . '</strong>' . $nchave . '<hr>' ;
	}elseif ($row['NFHCME'] == '210' AND $serie == '55'){	
	echo '<strong>' . '<hr>' . 'Nota Fiscal de Venda: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . $serie . '<strong>' . ' Unidade: ' . '</strong>' . $unidade . '<strong>' . ' Chave de Acesso: ' . '</strong>' . $nchave . '<hr>' ;
	}else echo '<strong>' . '<hr>' . 'Nota Fiscal: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . $serie . '<strong>' . ' Unidade: ' . '</strong>' . $unidade . '<strong>' . ' Chave de Acesso: ' . '</strong>' . 'Invalido para RPS' . '<hr>' ;
	};
	

	if (empty ($row)){echo '<hr>'.'<strong>' . 'Nota Fiscal: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . $serie . '<strong>' . ' Unidade: ' . '</strong>' . $unidade . '<strong>' .' NÃO ENCONTRADA'.'</strong>' . '<hr>';
	if (isset($nchave)){ 
	echo '<strong>' .' Chave de Acesso: ' . '</strong>'. $nchave . '<strong>'.'<hr>';} else echo '<strong>' .' Chave de Acesso: ' . '</strong>'.'<strong>' .' NÃO ENCONTRADA'.'</strong>'.'<hr>';
	

	 exit;
	}else 
	

	//Cabeçalho 
		
	$status='St';
	$uni='Unidade';
	$cliente='Codigo';
	$ncliente='Nome';
	$ccpfcnpj='CPF/CNPJ';
	$cie='IE';
	$cend='End';
	$cbai='Bairro';
	$cmun='Mun';
	$cest='Est';
	$cemail='Email';
	$vend='Vendedor';
	$ori='Ori';
	$tip='Tipo/OS';
	$notafiscal='NF';
	$serie='Serie';
	$datasel='Data';
	$ncontrole='Nº Controle';
	$tservico='TS';
	$nfpag='Cart';
	$seq='Seq';
	$cpeca='Peça';
	$cservico='Serv';
	$dveiculo='Desc Vei';
	$tveiculo='Texto';
	$cncmpeca='NCM';
	$qpeca='Qtde';
	$valoripip='Vlr IPI Peça';
	$valorbi='BC ICMS Peça';
	$valorvi='Vlr ICMS Peça';
	$valorbst='BC-ST Peça';
	$valorvst='ICMS-ST Peça';
	$valortp='Vlr Total Peça';
	$nop='NOP';
	$cme='CME';
	$if='IF';
	$st='ST';
	$frete='Fr';
	$desconto='Desc';

	echo "<table>";
	echo "<tr>";
	echo "<th>" . $status . "</th>";
    echo "<th>" . $uni . "</th>";
	echo "<th>" . $cliente . "</th>";
	echo "<th>" . $ncliente . "</th>";
	echo "<th>" . $vend . "</th>";
	echo "<th>" . $ori . "</th>";
	echo "<th>" . $tip . "</th>";
	echo "<th>" . $notafiscal . "</th>";
	echo "<th>" . $serie . "</th>";
	echo "<th>" . $datasel . "</th>";
	echo "<th>" . $ncontrole . "</th>";
	echo "<th>" . $tservico . "</th>";
	echo "<th>" . $nfpag . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $cme . "</th>";
	
	
	
	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota' AND NFHSNF = '$serie' AND NFHEMI= '$unidade' ");
	foreach ($conn->query($sql) as $row) {
		
	$ncontrolenfh= $row['NFHNUM'];
	$ncontrolenfh2= $row['NFHNNF'];
	$ncontrolenfh5= $row['NFHSNF'];
	$ncontrolenfh3= $row['NFHCLK'];
	$ncontrolenfh4= $row['NFHCLI'];
	
	$_SESSION["ncontrolenfh3"] = $ncontrolenfh3;
	$_SESSION["ncontrolenfh"] = $ncontrolenfh;
	$_SESSION["ncontrolenfh4"] = $ncontrolenfh4;
	$_SESSION["ncontrolenfh5"] = $ncontrolenfh5;
	$sql1 = ("select * from tb_fatnfi where nfinum='$ncontrolenfh' ");
	foreach ($conn->query($sql1) as $row1) {
	if ($row['NFHNUM']=($row1['NFINUM'])){

	$ncontrolenfi= $row1['NFIPRO'];
	$ncontrolenfi2= $row1['NFINUM'];
	$ncontrolenfi3= $row1['NFISEQ'];

	
	}
	
	}
	
	}
		
	echo "<tr>";
	echo "<td>" . $row['NFHSTS'] . "</td>";
	echo "<td>" . $row['NFHEMI'] . "</td>";
	echo "<td>" . $row['NFHCLI'] . "</td>";
	echo "<td>" . $row['NFHCLK'] . "</td>";
	echo "<td>" . $row['NFHVEN'] . "</td>";
	echo "<td>" . $row['NFHORI'] . "</td>";
	echo "<td>" . $row['NFHTIP'].$row['NFHNUR'] . "</td>";
	echo "<td>" . $row['NFHNNF'] . "</td>";
	echo "<td>" . $row['NFHSNF'] . "</td>";
	echo "<td>" . $row['NFHDNF'] . "</td>";
	echo "<td>" . $row['NFHNUM'] . "</td>";
	echo "<td>" . $row['NFHTOS'] . "</td>";
	echo "<td>" . $row['NFHSND'] . "</td>";
	echo "<td>" . $row['NFHNOP'] . "</td>";
	echo "<td>" . $row['NFHCME'] . "</td>";
	echo "</table>" ;
	
	
	$ncontrolenfh4= $row['NFHCLI'];
	
	$sql7 = ("select * from tb_tracad where tracod = '$ncontrolenfh4' ");
	foreach ($conn->query($sql7) as $row7) {
	if ($row7['TRACOD']=($row['NFHCLI'])){
	echo "<table>";
	echo "<tr>";
	echo "<th>" . $tip . "</th>";
	echo "<th>" . $ccpfcnpj . "</th>";
	echo "<th>" . $cie . "</th>";
	echo "<th>" . $cend . "</th>";
	echo "<th>" . $cbai . "</th>";
	echo "<th>" . $cmun . "</th>";
	echo "<th>" . $cest . "</th>";
	echo "<th>" . $cemail . "</th>";
	echo "<tr>";
	echo "<td>" . $row7['TRATPS'] . "</td>";
	echo "<td>" . $row7['TRACGC'] . "</td>";
	echo "<td>" . $row7['TRAIES'] . "</td>";
	echo "<td>" . $row7['TRAEND'] . "</td>";
	echo "<td>" . $row7['TRABAI'] . "</td>";
	echo "<td>" . $row7['TRAMUN'] . "</td>";
	echo "<td>" . $row7['TRAEST'] . "</td>";
	echo "<td>" . $row7['TRAEMA'] . "</td>";
	echo "</tr>";
	echo "</table>" . "<hr>";

	
	}
	}
	
	
	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . $seq . "</th>";
	if ($row['NFHTIP'] == 'V'){
	echo "<th>" . $dveiculo . "</th>";
	}elseif ($row['NFHSNF'] <> '55'){
	echo "<th>" . $cservico . "</th>";
	}else
	echo "<th>" . $cpeca . "</th>";
	echo "<th>" . $qpeca . "</th>";
	echo "<th>" . $valoripip . "</th>";
	echo "<th>" . $valorbi . "</th>";
	echo "<th>" . $valorvi . "</th>";
	echo "<th>" . $valorbst . "</th>";
	echo "<th>" . $valorvst . "</th>";
	echo "<th>" . $valortp . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $cme . "</th>";
	echo "<th>" . $if . "</th>";
	echo "<th>" . $st . "</th>";
	echo "<th>" . $frete . "</th>";
	echo "<th>" . $desconto . "</th>";
	echo "</tr>";

	
	
	
	

	$ncontrolenfh= $row['NFHNUM'];
	
	
	$sql1 = ("select * from tb_fatnfi where nfinum='$ncontrolenfh' ");
	foreach ($conn->query($sql1) as $row1) {
	if ($row['NFHNUM']=($row1['NFINUM'])){
	
	
	$sql2 = ("select * from tb_fatnfc where nfcnum='$ncontrolenfh' ");
	foreach ($conn->query($sql2) as $row2) {
	if ($row['NFHNUM']=($row2['NFCNUM'])){
	
	

	
	echo "<td>" . $row1['NFISEQ'] . "</td>";
	if ($row['NFHTIP'] == 'V'){
	echo "<td>" . $row1['NFIDSC'] . "</td>";
	}elseif ($row['NFHSNF'] <> '55'){
	echo "<td>" . $row1['NFIDSC'] . "</td>";
	}else
	echo "<td>" . $row1['NFIPRO'] . "</td>";
	echo "<td>" . $row1['NFIQTD'] . "</td>";
	
	if (isset ($row1['NFIIPI'])){
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIIPI']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row1['NFIBIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIBIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row1['NFIVIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIVIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row1['NFIBST_G'])){
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIBST_G']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row1['NFICST_CTB'])){
	echo "<td>" . number_format (str_replace(",",".",$row1['NFICST_CTB']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row1['NFIVLT'])){
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIVLT']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	echo "<td>" . $row1['NFINOP'] . "</td>";
	echo "<td>" . $row1['NFICME'] . "</td>";
	echo "<td>" . $row1['NFICT1'] . "</td>";
	echo "<td>" . $row1['NFIALR'] . "</td>";
	echo "<td>" . $row1['NFIDAC'] . "</td>";
	echo "<td>" . $row1['NFIVLD'] . "</td>";
	
	echo "</tr>";
	

	
	}
	
	}
	
	}
	
	}
	

	
	

	echo "</table>" ;
	
	

	
	

	



	echo '<hr>' . '<strong>' . 'Total Geral-> ' . '</strong>' . '<hr>' ; 

	echo "<table>";
	echo "<tr>";
	echo "<th>" . 'Total IPI' . '</strong>' . "</th>";
	echo "<th>" . 'Total Base ICMS' . '</strong>' . "</th>";
	echo "<th>" . 'Total ICMS' . '</strong>' . "</th>";
	echo "<th>" . 'Total BC-ST' . '</strong>' . "</th>";
	echo "<th>" . 'Total ICMS-ST' . '</strong>' . "</th>";
	echo "<th>" . 'Total Frete' . '</strong>' . "</th>";
	echo "<th>" . 'Total Desconto' . '</strong>' . "</th>";
	echo "<th>" . 'Total NF' . '</strong>' . "</th>";
	echo "</tr>";
	if (isset ($row['NFHIPI'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHIPI']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row['NFHBIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHBIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row['NFHVIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHVIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row2['NFCBST'])){
	echo "<td>" . number_format (str_replace(",",".",$row2['NFCBST']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row['NFHSBT'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHSBT']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row['NFHDAC'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHDAC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row['NFHDSM'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHDSM']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row['NFHVTN'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHVTN']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	

	echo "</tr>";
	echo "</table>" ;
	
	$ncontrolenfh= $row['NFHNUM'];
	$sql4 = ("select * from TB_FATNFH_EXT where NFHNUM_EXT = '$ncontrolenfh'");
	foreach ($conn->query($sql4) as $row4) {
	$ncontrolenfh_EXT = $row4['NFHNUM_EXT'];
	
	}
	
	
	$sql5 = ("select * from TB_FATNFE_HIS where NFENUM_HIS = '$nota' AND NFESER_HIS= '$serie' AND NFEEMI_HIS= '$unidade'");
	foreach ($conn->query($sql5) as $row5) {
		
	$ncontrolenfh_his = $row5['NFETXT_HIS'];	
	}	
 
 	$ret1 = substr("$ncontrolenfh_his", 0, 4);
	
	$zero531 = '0531';//'Rejeicao: Total da BC ICMS difere do somatorio dos itens';
	$zero533 = '0533';//'Rejeicao: Total da BC ICMS-ST difere do somatorio dos itens';
	$zero538 = '0538';//'Rejeicao: Total do IPI difere do somatorio dos itens ';
	$zero863 = '0863';//'Rejeicao: Total do IPI devolvido difere do somatorio dos itens;
	$zero225 = '0225';//'Rejeicao: Falha no Schema XML do lote de NFe'; 
	$zero211 = '0211';//'Rejeicao: IE do substituto invalida';
	$zero234 = '0234';//'Rejeicao: IE do destinatario nao vinculada ao CNPJ';
	$zero232 = '0232';//'Rejeicao: IE do destinatario nao informada';
	
	if ($ret1 == $zero225 or $ret1 == $zero211 or $ret1 == $zero234 or $ret1 == $zero232){
	if ($row['NFHSTS'] == '1' && $row['NFHTIP'] <> 'V'){
	
	echo '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Atualizar Dados-> ' . '</h3>' . '</strong>' . '<strong>' . '<hr>' . 'Nota Fiscal: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . $serie . '<strong>' . ' Unidade: ' . '</strong>' . $unidade . '<strong>' . ' Chave de Acesso: ' . '</strong>' . $nchave.'<hr>';
	
	echo 'Verifique o cadastro do cliente Campo "IE" deixando igual a site do Sintegra http://www.sintegra.gov.br/ qualquer duvida entre em contato com o Depto Fiscal - ITAIM Telefone (11) 3049-0500';
	}
	
	}
	if ($ret1 == $zero531 or $ret1 == $zero533 or $ret1 == $zero538 ){
	if ($row['NFHSTS'] == '1' && $row['NFHTIP'] <> 'V'){
	
	echo '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Atualizar Dados-> ' . '</h3>' . '</strong>' . '<strong>' . '<hr>' . 'Nota Fiscal: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . $serie . '<strong>' . ' Unidade: ' . '</strong>' . $unidade . '<strong>' . ' Chave de Acesso: ' . '</strong>' . $nchave;

	echo '<form action="upvalor.php" id="upvaloripi" target="iframe_b" method="POST" enctype="multipart/form-data" >'.'<hr>'
	.'<strong>'.'Item - Seq Peça: '.'</strong>'.'<input type="text" value="0" style="width:30px;font-size: 13px" maxlength="3" name="upseqipiX" required >'
	. ' Informar Seq / Valores para Acerto nos Itens da NF (Caso Necessario)'
	.'<p>'.'<strong>'.'Vlr IPI Peça: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upvaloripiX" required >'
	.'<strong>'.' BC ICMS Peça: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upbaseicmsX" required >'
	.'<strong>'.' Vlr ICMS Peça: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upvaloricmsX" required >'
	.'<strong>'.' BC-ST Peça: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upbasestX" required >'
	.'<strong>'.' ICMS-ST Peça: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upvalorstX" required >'
	.'<strong>'.' Vlr Total Peça: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upvalortpecaX" required >'
	.'<strong>'.' Frete: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upvalorfpecaX" required >'
	.'<strong>'.' Desconto: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upvalordpecaX" required >'
	.'<hr>'.'<strong>'.'Total Geral: '.'</strong>'.' Informar Valores para Acerto Total Geral da NF (Caso Necessario)'
	.'<p>'.'<strong>'.'Total IPI: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHIPI']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotalipiX" required >'
	.'<strong>'.' Total Base ICMS: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHBIC']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotalbaseicmsX" required >'
	.'<strong>'.' Total ICMS: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHVIC']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotalvaloricmsX" required >'
	.'<strong>'.' Total BC-ST: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row2['NFCBST']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotalbasestX" required >'
	.'<strong>'.' Total ICMS-ST: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHSBT']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotalvalorstX" required >'
	.'<strong>'.' Total Frete: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHDAC']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotalfreteX" required >'
	.'<strong>'.' Total Desconto: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHDSM']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotaldescontoX" required >'.'<p>'
	.'<strong>'.' Total NF: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHVTN']),"2",",","").' style="width:100px;font-size: 13px" maxlength="15" name="upvalornfX" required >'
	.' '.'<input type="submit" class="button" name="enviar" value="Atualizar">'
	.'</form>';

	
	}
	
	}
	
		
	if ($ret1 == $zero863){	
	if ($row['NFHSTS'] == '1' && $row['NFHTIP'] <> 'V'){
	
	echo '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Atualizar Dados-> ' . '</h3>' . '</strong>' . '<strong>' . '<hr>' . 'Nota Fiscal: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . $serie . '<strong>' . ' Unidade: ' . '</strong>' . $unidade . '<strong>' . ' Chave de Acesso: ' . '</strong>' . $nchave;

	echo '<form action="up863.php" id="upvaloripi" target="iframe_b" method="POST" enctype="multipart/form-data" >'.'<hr>'
	.'<strong>'.'Item - Seq Peça: '.'</strong>'.'<input type="text" value="0" style="width:30px;font-size: 13px" maxlength="3" name="upseqipiX" required >'
	. ' Informar Seq / Valores para Acerto nos Itens da NF (Caso Necessario)'
	.'<p>'.'<strong>'.'Vlr IPI Peça: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upvaloripiX" required >'
	.' '.'<input type="submit" class="button" name="enviar" value="Atualizar">'
	.'</form>' ;

	
	}
	
	}
	
	$ret = substr("$ncontrolenfh_his", 0, 4);
	$zero696r = '0696'; //'Rejeicao: Operacao com nao contribuinte deve indicar operacao com consumidor final';

	if ($ret == $zero696r ){
	if ($row['NFHSTS'] == '1' && $row['NFHTIP'] <> 'V'){
		
	echo '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Atualizar Erro 0696 -> ' . 
	'</h3>' . '</strong>'. 'Erro 0696 Revenda para Consumo Interno: De (2) para (3) = '.'<strong>'.'Consta '.$row4['NFHINDFINAL_EXT'].'</strong>'
	.'<form action="up696.php" id="up696" target="iframe_b" method="POST" enctype="multipart/form-data" >'
	.'</strong>'.'<input type="submit" class="button" name="enviar" value="Atualizar">'
	.'</form>';
		
	}else 
		
	echo '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Atualizar Erro 0696 -> ' . 
	'</h3>' . '</strong>'. 'Erro 0696 Consumo Interno para Revenda: De (3) para (2) = '.'<strong>'.'Consta '.$row4['NFHINDFINAL_EXT'].'</strong>'
	.'<form action="up696c.php" id="up696c" target="iframe_b" method="POST" enctype="multipart/form-data" >'
	.'</strong>'.'<input type="submit" class="button" name="enviar" value="Atualizar">'
	.'</form>';
	
	}
	if ($row['NFHSTS'] == '1' && $row['NFHTIP'] == 'V'){
	echo '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Inutilizar NF -> ' . 
	'</h3>' . '</strong>'. 'Marca Status NF como Cancelada para Inutilizar: De (1) para (C) = '.'<strong>'.'Consta '.$row['NFHSTS'].'</strong>'
	.'<form action="upvei.php" id="upvei" target="iframe_b" method="POST" enctype="multipart/form-data" >'
	.'</strong>'.'<input type="submit" class="button" name="enviar" value="Atualizar">'
	.'</form>';
	}
	
	if ($row['NFHSTS'] == '1' && $row['NFHORI'] == '02' && $row['NFHORI'] == '20'){
	echo '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Inutilizar NF -> ' . 
	'</h3>' . '</strong>'. 'Marca Status NF como Cancelada para Inutilizar: De (1) para (C) = '.'<strong>'.'Consta '.$row['NFHSTS'].'</strong>'
	.' - Rodar o CVEX6GER da OS = '.$row['NFHTIP'].$row['NFHNUR'].' - Tipo de Serviço = '.$row['NFHTOS']
	.'<form action="upvei.php" id="upvei" target="iframe_b" method="POST" enctype="multipart/form-data" >'
	.'</strong>'.'<input type="submit" class="button" name="enviar" value="Atualizar">'
	.'</form>';
	}
	
	if ($row['NFHSTS'] == '1' && $row['NFHORI'] == '02' && $row['NFHORI'] == '20'){
	echo '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Inutilizar NF -> ' . 
	'</h3>' . '</strong>'. 'Marca Status NF como Cancelada para Inutilizar: De (1) para (C) = '.'<strong>'.'Consta '.$row['NFHSTS'].'</strong>'
	.' - Rodar o CVEX6GER da OS = '.$row['NFHTIP'].$row['NFHNUR'].' - Tipo de Serviço = '.$row['NFHTOS']
	.'<form action="upvei.php" id="upvei" target="iframe_b" method="POST" enctype="multipart/form-data" >'
	.'</strong>'.'<input type="submit" class="button" name="enviar" value="Atualizar">'
	.'</form>';
	}
	
	
	//DEVOLUCAO CME 140
	
	$nfdev = $row['NFHRNU'];
	$nfdevserie = $row['NFHRSE'];
	$nfdevemitente = $row['NFHEMI'];

	if ($row['NFHCME'] == '140'){
	
	$sql11 = ("select NFEKEY_HIS,NFESEQ_HIS from TB_FATNFE_HIS  where NFENUM_HIS = '$nfdev' AND NFESER_HIS='$nfdevserie' AND NFEEMI_HIS = '$nfdevemitente'  AND NFESEQ_HIS = '1' GROUP BY NFESEQ_HIS, NFEKEY_HIS");
	foreach ($conn->query($sql11) as $row11) {
	$nchavedev = $row11['NFEKEY_HIS'];
	
	$sql8 = ("select * from tb_fatnfh where NFHNNF = '$nfdev' AND NFHSNF='$nfdevserie' AND NFHEMI= '$nfdevemitente' ");
	foreach ($conn->query($sql8) as $row8) {
	if ($row8['NFHSTS'] == 'G'){
	$sql5 = ("select * from TB_FATNFE_HIS where NFENUM_HIS = '$nfdev' AND NFESER_HIS='$nfdevserie' AND NFEEMI_HIS= '$nfdevemitente' ");
	foreach ($conn->query($sql5) as $row5) {
	$ncontrolenfh_his = $row5['NFETXT_HIS'];	
	}	
	echo '<hr>' . '<h3 style="background-color:DodgerBlue;">' . 'Nota Fiscal Validada na Receita ' . '</h3>';} else echo '<hr>' . '<h3 style="background-color:Tomato;">' . 'Nota Fiscal Não Validada na Receita ' . '</h3>';
	$retdev = substr("$ncontrolenfh_his", 0, 90);
	echo '<strong>' . '<hr>' . 'Status de Validação: ' . '</strong>' . $retdev;
	echo '<strong>' . '<hr>' . 'Nota Fiscal de Venda: ' . '</strong>' . $nfdev . '<strong>' . ' Serie: ' . '</strong>' . $nfdevserie . '<strong>' . ' Unidade: ' . '</strong>' . $nfdevemitente . '<strong>' . ' Chave de Acesso: ' . '</strong>' . $nchavedev . '<hr>' ;
	
	
	}
	}	
	$sql8 = ("select * from tb_fatnfh where NFHNNF = '$nfdev' AND NFHSNF='$nfdevserie' AND NFHEMI= '$nfdevemitente' ");
	foreach ($conn->query($sql8) as $row8) {
	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . $status . "</th>";
    echo "<th>" . $uni . "</th>";
	echo "<th>" . $cliente . "</th>";
	echo "<th>" . $ncliente . "</th>";
	echo "<th>" . $vend . "</th>";
	echo "<th>" . $ori . "</th>";
	echo "<th>" . $tip . "</th>";
	echo "<th>" . $notafiscal . "</th>";
	echo "<th>" . $serie . "</th>";
	echo "<th>" . $datasel . "</th>";
	echo "<th>" . $ncontrole . "</th>";
	echo "<th>" . $tservico . "</th>";
	echo "<th>" . $nfpag . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $cme . "</th>";
	
		
	echo "<tr>";
	echo "<td>" . $row8['NFHSTS'] . "</td>";
	echo "<td>" . $row8['NFHEMI'] . "</td>";
	echo "<td>" . $row8['NFHCLI'] . "</td>";
	echo "<td>" . $row8['NFHCLK'] . "</td>";
	echo "<td>" . $row8['NFHVEN'] . "</td>";
	echo "<td>" . $row8['NFHORI'] . "</td>";
	echo "<td>" . $row8['NFHTIP'] . "</td>";
	echo "<td>" . $row8['NFHNNF'] . "</td>";
	echo "<td>" . $row8['NFHSNF'] . "</td>";
	echo "<td>" . $row8['NFHDNF'] . "</td>";
	echo "<td>" . $row8['NFHNUM'] . "</td>";
	echo "<td>" . $row8['NFHTOS'] . "</td>";
	echo "<td>" . $row8['NFHSND'] . "</td>";
	echo "<td>" . $row8['NFHNOP'] . "</td>";
	echo "<td>" . $row8['NFHCME'] . "</td>";
	echo "</table>";
	
	$sql7 = ("select * from tb_tracad where tracod = '$ncontrolenfh4' ");
	foreach ($conn->query($sql7) as $row7) {
	if ($row7['TRACOD']=($row['NFHCLI'])){
	echo "<table>";
	echo "<tr>";
	echo "<th>" . $tip . "</th>";
	echo "<th>" . $ccpfcnpj . "</th>";
	echo "<th>" . $cend . "</th>";
	echo "<th>" . $cbai . "</th>";
	echo "<th>" . $cmun . "</th>";
	echo "<th>" . $cest . "</th>";
	echo "<th>" . $cemail . "</th>";
	echo "<tr>";
	echo "<td>" . $row7['TRATPS'] . "</td>";
	echo "<td>" . $row7['TRACGC'] . "</td>";
	echo "<td>" . $row7['TRAEND'] . "</td>";
	echo "<td>" . $row7['TRABAI'] . "</td>";
	echo "<td>" . $row7['TRAMUN'] . "</td>";
	echo "<td>" . $row7['TRAEST'] . "</td>";
	echo "<td>" . $row7['TRAEMA'] . "</td>";
	echo "</tr>";
	echo "</table>" . "<hr>";
	
	}
	}
	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . $seq . "</th>";
	if ($row['NFHTIP'] == 'V'){
	echo "<th>" . $dveiculo . "</th>";
	}else
	echo "<th>" . $cpeca . "</th>";
	echo "<th>" . $qpeca . "</th>";
	echo "<th>" . $valoripip . "</th>";
	echo "<th>" . $valorbi . "</th>";
	echo "<th>" . $valorvi . "</th>";
	echo "<th>" . $valorbst . "</th>";
	echo "<th>" . $valorvst . "</th>";
	echo "<th>" . $valortp . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $cme . "</th>";
	echo "<th>" . $if . "</th>";
	echo "<th>" . $st . "</th>";
	echo "<th>" . $frete . "</th>";
	echo "<th>" . $desconto . "</th>";
	echo "</tr>";
	
	
	
	$sql8 = ("select * from tb_fatnfh where NFHNNF = '$nfdev' AND NFHSNF='$nfdevserie' AND NFHEMI= '$nfdevemitente' ");
	foreach ($conn->query($sql8) as $row8) {
	
	
	$ncontrolenfhdev= $row8['NFHNUM'];
	
	
	$sql9 = ("select * from tb_fatnfi where nfinum='$ncontrolenfhdev' ");
	foreach ($conn->query($sql9) as $row9) {
	if ($row8['NFHNUM']=($row9['NFINUM'])){
	
	
	$sql10 = ("select * from tb_fatnfc where nfcnum='$ncontrolenfhdev' ");
	foreach ($conn->query($sql10) as $row10) {
	if ($row8['NFHNUM']=($row10['NFCNUM'])){
	
	

	
	echo "<td>" . $row9['NFISEQ'] . "</td>";
	if ($row8['NFHTIP'] == 'V'){
	echo "<td>" . $row9['NFIDSC'] . "</td>";
	}else
	echo "<td>" . $row9['NFIPRO'] . "</td>";
	echo "<td>" . $row9['NFIQTD'] . "</td>";
	
	if (isset ($row9['NFIIPI'])){
	echo "<td>" . number_format (str_replace(",",".",$row9['NFIIPI']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row9['NFIBIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row9['NFIBIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row9['NFIVIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row9['NFIVIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row9['NFIBST_G'])){
	echo "<td>" . number_format (str_replace(",",".",$row9['NFIBST_G']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row9['NFICST_CTB'])){
	echo "<td>" . number_format (str_replace(",",".",$row9['NFICST_CTB']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row9['NFIVLT'])){
	echo "<td>" . number_format (str_replace(",",".",$row9['NFIVLT']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	echo "<td>" . $row9['NFINOP'] . "</td>";
	echo "<td>" . $row9['NFICME'] . "</td>";
	echo "<td>" . $row9['NFICT1'] . "</td>";
	echo "<td>" . $row9['NFIALR'] . "</td>";
	echo "<td>" . $row9['NFIDAC'] . "</td>";
	echo "<td>" . $row9['NFIVLD'] . "</td>";
	
	echo "</tr>";
	

	
	}
	
	}
	
	}
	
	}
	

	}
	

	echo "</table>" ;
	
	$vpidev = ($row9['NFIIPI']);
	$vtidev = ($row8['NFHIPI']);
	
	
	
	
	
	

	



	echo '<hr>' . '<strong>' . 'Total Geral-> ' . '</strong>' . '<hr>' ; 

	echo "<table>";
	echo "<tr>";
	echo "<th>" . 'Total IPI' . '</strong>' . "</th>";
	echo "<th>" . 'Total Base ICMS' . '</strong>' . "</th>";
	echo "<th>" . 'Total ICMS' . '</strong>' . "</th>";
	echo "<th>" . 'Total BC-ST' . '</strong>' . "</th>";
	echo "<th>" . 'Total ICMS-ST' . '</strong>' . "</th>";
	echo "<th>" . 'Total Frete' . '</strong>' . "</th>";
	echo "<th>" . 'Total Desconto' . '</strong>' . "</th>";
	echo "<th>" . 'Total NF' . '</strong>' . "</th>";
	echo "</tr>";
	if (isset ($row8['NFHIPI'])){
	echo "<td>" . number_format (str_replace(",",".",$row8['NFHIPI']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row8['NFHBIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row8['NFHBIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row8['NFHVIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row8['NFHVIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row10['NFCBST'])){
	echo "<td>" . number_format (str_replace(",",".",$row10['NFCBST']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row8['NFHSBT'])){
	echo "<td>" . number_format (str_replace(",",".",$row8['NFHSBT']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row8['NFHDAC'])){
	echo "<td>" . number_format (str_replace(",",".",$row8['NFHDAC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row8['NFHDSM'])){
	echo "<td>" . number_format (str_replace(",",".",$row8['NFHDSM']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row8['NFHVTN'])){
	echo "<td>" . number_format (str_replace(",",".",$row8['NFHVTN']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	

	echo "</tr>";
	echo "</table>" ;
	
	
	
	
	
	}
	
	

	
	
	
	}
	
	?>
	<font size="2" face="Calibri">
	<?php

	
	

				?>
				

	
		
	
	
	<hr>
	<ul>
		
	
	<font size="3" face="Calibri">

		

		<?php
		
	$unidade = $_POST['unidade'];
	$nota = $_POST['nf'];
	$serie = $_POST['serie'];
	
	if ($unidade=='U00001'){
	require("bd-u1.php");}
	elseif ($unidade=='U00002'){
	require("bd-u2.php");}
	elseif ($unidade=='U00003'){
	require("bd-u3.php");}
	elseif ($unidade=='U00004'){
	require("bd-u4.php");}
	elseif ($unidade=='U00008'){
	require("bd-u8.php");}
	elseif ($unidade=='U00009'){
	require("bd-u9.php");}
	elseif ($unidade=='U00112'){
	require("bd-u112.php");}
	elseif ($unidade=='U00222'){
	require("bd-u222.php");}
	elseif ($unidade=='U00224'){
	require("bd-u224.php");}
	
	$sql = ("select NFHNNF, NFHSNF, NFHEMI, NFHSTS from tb_fatnfh where NFHNNF = '$nota' AND NFHSNF= '$serie' AND NFHEMI= '$unidade' GROUP BY NFHNNF, NFHSNF, NFHEMI, NFHSTS ");
	foreach ($conn->query($sql) as $row) {
	


	
	if ($row['NFHSTS'] == 'G' AND $row['NFHSNF'] == '55'){		
	echo '<li><a href="baixa-1xml.php?file='.$nchave.'" <button class="active" target="iframe_b" onclick="submit()">Baixar XML</button></a></li>'.' ';	
	echo '<li><a href="http://www.nfe.fazenda.gov.br/portal/consultaRecaptcha.aspx?tipoConsulta=completa&tipoConteudo=XbSeqxE8pl8=" <button class="active" target="_blank" onclick="submit()">Consultar XML Receita</button></a></li>';	
	}elseif ($row['NFHSTS'] == '1' AND $row['NFHSNF'] == '55'){	echo '<li><a href="baixa-2xml.php?file='.$nchave.'" <button class="active" target="iframe_b" onclick="submit()">Baixar XML Invalido</button></a></li>' . "<script>alert('Reemita a NF caso queria efetuar o Download do XML Invalido');</script>";
	}
}

	//echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";


		?>		

		 </ul>
	</body>
</html>