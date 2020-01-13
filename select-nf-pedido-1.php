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
	

		
	
			
		<?php
	
	$unidade = $_POST['unidade'];
	$pedido = $_POST['pedido'];
	$origem = $_POST['origem'];
	$tipo = $_POST['tipo'];
	$clicli = $_POST['clicli'];

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
	
	

	$_SESSION["nota"] = $pedido;
	$_SESSION["uni"] = $unidade;
	$_SESSION["origem"] = $origem;
	$_SESSION["tipo"] = $tipo;
	$_SESSION["clicli"] = $clicli;
	
	$sql = ("select * from tb_fatnfh where NFHNUR = '$pedido' and NFHORI = '$origem' and NFHTIP = '$tipo' and NFHEMI= '$unidade' AND NFHCLI='$clicli'");
	foreach ($conn->query($sql) as $row) {
	if (isset($row)){ 
	if ($row['NFHSTS'] == 'G'){
	
	echo '<hr>'.'<h3 style="background-color:DodgerBlue;">' . 'Nota Fiscal Validada na Receita ' . '</h3>';} else echo '<hr>' . '<h3 style="background-color:Tomato;">' . 'Nota Fiscal Não Validada na Receita ' . '</h3>';
	echo '<strong>' . '<hr>' . 'Pedido: ' . '</strong>' . $pedido . '<strong>' . ' Origem: ' . '</strong>' 
	. $origem .'<strong>' . ' Tipo: ' . '</strong>' . $tipo . '<strong>' . ' Unidade: ' . '</strong>' 
	. $unidade . '<strong>' . ' Codigo Cliente: ' . '</strong>' . $clicli . '<hr>' ;
	
	}
	}

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
	$tip='Tipo';
	$notafiscal='NF';
	$pedidofiscal='Pedido';
	$serie='Serie';
	$datasel='Data';
	$ncontrole='Nº Controle';
	$tservico='TS';
	$nfpag='Cart';
	$seq='Seq';
	$cpeca='Peça';
	$dveiculo='Veiculo';
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
	$frete='Frete';
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
	echo "<th>" . $pedidofiscal . "</th>";
	echo "<th>" . $notafiscal . "</th>";
	echo "<th>" . $serie . "</th>";
	echo "<th>" . $datasel . "</th>";
	echo "<th>" . $ncontrole . "</th>";
	echo "<th>" . $tservico . "</th>";
	echo "<th>" . $nfpag . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $cme . "</th>";

	$sql = ("select * from tb_fatnfh where NFHNUR = '$pedido' and NFHORI = '$origem' and NFHTIP = '$tipo' and NFHEMI= '$unidade' AND NFHCLI='$clicli' ");
	foreach ($conn->query($sql) as $row) {
	$ncontrolenfh= $row['NFHNUM'];
	$ncontrolenfh2= $row['NFHNUR'];
	$ncontrolenfh3= $row['NFHCLK'];
	$ncontrolenfh4= $row['NFHCLI'];
	$_SESSION["ncontrolenfh3"] = $ncontrolenfh3;
	$_SESSION["ncontrolenfh"] = $ncontrolenfh;
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
	if (isset($row['NFHSTS'])){
	echo "<td>" . $row['NFHSTS'] . "</td>";}
	if (isset($row['NFHEMI'])){
	echo "<td>" . $row['NFHEMI'] . "</td>";}
	if (isset($row['NFHCLI'])){
	echo "<td>" . $row['NFHCLI'] . "</td>";}
	if (isset($row['NFHCLK'])){
	echo "<td>" . $row['NFHCLK'] . "</td>";}
	if (isset($row['NFHVEN'])){
	echo "<td>" . $row['NFHVEN'] . "</td>";}
	if (isset($row['NFHORI'])){
	echo "<td>" . $row['NFHORI'] . "</td>";}
	if (isset($row['NFHTIP'])){
	echo "<td>" . $row['NFHTIP'] . "</td>";}
	if (isset($row['NFHNUR'])){
	echo "<td>" . $row['NFHNUR'] . "</td>";}
	if (isset($row['NFHNNF'])){
	echo "<td>" . $row['NFHNNF'] . "</td>";}
	if (isset($row['NFHSNF'])){
	echo "<td>" . $row['NFHSNF'] . "</td>";}
	if (isset($row['NFHDNF'])){	
	echo "<td>" . $row['NFHDNF'] . "</td>";}
	if (isset($row['NFHNUM'])){	
	echo "<td>" . $row['NFHNUM'] . "</td>";}
	//VERIFICAR
	if (isset($row['NFHNUM'])){	
	echo "<td>" . $row['NFHNUM'] . "</td>";}
	if (isset($row['NFHTOS'])){	
	echo "<td>" . $row['NFHTOS'] . "</td>";}
	if (isset($row['NFHSND'])){	
	echo "<td>" . $row['NFHSND'] . "</td>";}
	if (isset($row['NFHNOP'])){	
	echo "<td>" . $row['NFHNOP'] . "</td>";}
	if (isset($row['NFHCME'])){	
	echo "<td>" . $row['NFHCME'] . "</td>";}
	echo "</table>";

	$sql = ("select * from tb_fatnfh where NFHNUR = '$pedido' and NFHORI = '$origem' and NFHTIP = '$tipo' and NFHEMI= '$unidade' AND NFHCLI='$clicli' ");
	foreach ($conn->query($sql) as $row) {
	$ncontrolenfh= $row['NFHNUM'];
	$ncontrolenfh2= $row['NFHNUR'];
	$ncontrolenfh3= $row['NFHCLK'];
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
	}

	echo "<table>";
	echo "<tr>";
	echo "<th>" . $seq . "</th>";
	if (isset($row['NFHTIP'])){
	if ($row['NFHTIP'] == 'V'){
	echo "<th>" . $dveiculo . "</th>";
	}
	}else
	//VERIFICAR
	echo "<th>" . $cpeca . "</th>";
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


	$sql = ("select * from tb_fatnfh where NFHNUR = '$pedido' and NFHORI = '$origem' and NFHTIP = '$tipo' and NFHEMI= '$unidade' AND NFHCLI='$clicli'");
	foreach ($conn->query($sql) as $row) {
	
	
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
	
	echo "</tr>" ;

	
	}
	
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
	
	if (isset ($row['NFHVTN'])){
	}else echo '<strong>' . 'Pedido: ' . '</strong>' . $pedido . '<strong>' . ' Unidade: ' . '</strong>' . $unidade . '<strong>'. ' NÃO ENCONTRADA'.'</strong>' . '<hr>';
	
	echo "</tr>";
	echo "</table>" ;
	
	//DEVOLUCAO CME 140
	
	$sql = ("select * from tb_fatnfh where NFHNUR = '$pedido' and NFHORI = '$origem' and NFHTIP = '$tipo' and NFHEMI= '$unidade' AND NFHCLI='$clicli'");
	foreach ($conn->query($sql) as $row) {
	
	$nfdev = $row['NFHRNU'];
	$nfdevserie = $row['NFHRSE'];
	$nfdevemitente = $row['NFHEMI'];
	
	if ($row['NFHCME'] == '140'){
	
	$sql11 = ("select * from TB_FATNFE_KEY where NFENUM_KEY = '$nfdev' and NFEEMI_KEY = '$nfdevemitente' ");
	foreach ($conn->query($sql11) as $row11) {
	$nchavedev = $row11['NFECHA_KEY'];
	
	$sql8 = ("select * from tb_fatnfh where NFHNNF = '$nfdev' and NFHSNF='$nfdevserie' and NFHEMI= '$nfdevemitente' AND NFHCLI='$clicli'");
	foreach ($conn->query($sql8) as $row8) {
	if ($row8['NFHSTS'] == 'G'){
	
	echo '<hr>' . '<h3 style="background-color:DodgerBlue;">' . 'Nota Fiscal Validada na Receita ' . '</h3>';} else echo '<hr>' . '<h3 style="background-color:Tomato;">' . 'Nota Fiscal Não Validada na Receita ' . '</h3>';
	echo '<strong>' . '<hr>' . 'Origem-> Nota Fiscal de Venda: ' . '</strong>' . $nfdev . '<strong>' . ' Serie: ' . '</strong>' . ' 55 ' . '<strong>' . 'Unidade: ' . '</strong>' . $nfdevemitente . '<strong>' . ' Chave de Acesso: ' . '</strong>' . $nchavedev . '<hr>' ;
	
	}
	}
	}	
	$sql8 = ("select * from tb_fatnfh where NFHNNF = '$nfdev' and NFHSNF='$nfdevserie' and NFHEMI= '$nfdevemitente' AND NFHCLI='$clicli'");
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
	
	$sql7 = ("select * from tb_tracad where tracod = '$ncontrolenfh4'  ");
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
	
	
	
	$sql8 = ("select * from tb_fatnfh where NFHNNF = '$nfdev' and NFHSNF='$nfdevserie' and NFHEMI= '$nfdevemitente' AND NFHCLI='$clicli'");
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
	
	
	echo "</tr>";
	echo "</table>" ;
	
	
	
	
	}
	
	$sql = ("select * from tb_fatnfh where NFHNUR = '$pedido' and NFHORI = '$origem' and NFHTIP = '$tipo' and NFHEMI= '$unidade' AND NFHCLI='$clicli' ");
	foreach ($conn->query($sql) as $row) {

	if ($row['NFHSTS'] == '0'){
	
	echo '<hr>' . '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Atualizar Dados do Pedido-> ' 
	. '</h3>' . '</strong>' .'<strong>'. '<hr>'  . 'Pedido: ' . '</strong>' . $pedido . '<strong>' . ' Origem: ' . '</strong>' 
	. $origem .'<strong>' . ' Tipo: ' . '</strong>' . $tipo . '<strong>' . ' Unidade: ' . '</strong>' . $unidade . '<strong>' 
	. ' Codigo Cliente: ' . '</strong>' . $clicli ; 
	
	echo '<form action="upvalor-pedido.php" id="upvaloripi" target="iframe_b" method="POST" enctype="multipart/form-data" >'.'<hr>'
	.'<strong>'.'Item - Seq Peça: '.'</strong>'.'<input type="text" value="0" style="width:30px;font-size: 13px" maxlength="3" name="upseqipiX" required >'
	. ' Informar Seq / Valores para Acerto nos Itens da NF (Caso Necessario)'
	.'<p>'.'<strong>'.'Vlr IPI Peça: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upvaloripiX" required >'
	.'<strong>'.' BC ICMS Peça: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upbaseicmsX" required >'
	.'<strong>'.' Vlr ICMS Peça: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upvaloricmsX" required >'
	.'<strong>'.' BC-ST Peça: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upbasestX" required >'.'<br>'.'<br>'
	.'<strong>'.' ICMS-ST Peça: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upvalorstX" required >'
	.'<strong>'.' Vlr Total Peça: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upvalortpecaX" required >'
	.'<strong>'.' Frete: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upvalorfpecaX" required >'
	.'<strong>'.' Desconto: '.'</strong>'.'<input type="text" value="0,00" style="width:50px;font-size: 13px" maxlength="10" name="upvalordpecaX" required >'
	.'<hr>'.'<strong>'.'Total Geral: '.'</strong>'.' Informar Valores para Acerto Total Geral da NF (Caso Necessario)'
	.'<p>'.'<strong>'.'Total IPI: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHIPI']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotalipiX" required >'
	.'<strong>'.' Total Base ICMS: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHBIC']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotalbaseicmsX" required >'
	.'<strong>'.' Total ICMS: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHVIC']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotalvaloricmsX" required >'
	.'<strong>'.' Total BC-ST: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row2['NFCBST']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotalbasestX" required >'.'<br>'.'<br>'
	.'<strong>'.' Total ICMS-ST: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHSBT']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotalvalorstX" required >'
	.'<strong>'.' Total Frete: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHDAC']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotalfreteX" required >'
	.'<strong>'.' Total Desconto: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHDSM']),"2",",","").' style="width:50px;font-size: 13px" maxlength="10" name="uptotaldescontoX" required >'.'<p>'
	.'<strong>'.' Total NF: '.'</strong>'.'<input type="text" value= '.number_format (str_replace(",",".",$row['NFHVTN']),"2",",","").' style="width:100px;font-size: 13px" maxlength="15" name="upvalornfX" required >'
	.' '.'<input type="submit" class="button" name="enviar" value="Atualizar">'
	.'</form>';

	
	


	}
	
	}
	
	
	
	
	
	
	//echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";
	

				?>
				
<hr>

	

		 </ul>
	</body>
</html>