<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Integrador</title>
		<meta charset="utf-8" />
		<meta name="description" content="Integrador" />
		<style>
		table {
		  font-family: tahoma;
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
		</style>
		</head>
		<body>
			<font face="tahoma"> <h1>Integrador</h1>
			<hr>
		<nav>
		<strong>Menu de Navegação</strong>
		</nav>	
		<hr>
		<strong>Consulta NF</strong></br>
		
	<?php
	
	$unidade = $_POST['unidade'];
	$nota = $_POST['nf'];

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
	
	
	
	$sql3 = ("select * from TB_FATNFE_KEY where NFENUM_KEY = '$nota' and NFEEMI_KEY = '$unidade' ");
	foreach ($conn->query($sql3) as $row3) {
	$nchave = $row3['NFECHA_KEY'];
	
	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota' and NFHEMI= '$unidade' ");
	foreach ($conn->query($sql) as $row) {
	
	if ($row['NFHSTS'] == 'G'){
		
		
	
	echo '<hr>' . '<h3 style="background-color:DodgerBlue;">' . 'Nota Fiscal Validada na Receita ' . '</h3>';} else echo '<hr>' . '<h3 style="background-color:Tomato;">' . 'Nota Fiscal Não Validada na Receita ' . '</h3>';
	echo '<strong>' . '<hr>' . 'Nota Fiscal: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . ' 55 ' . '<strong>' . 'Unidade: ' . '</strong>' . $unidade . '<strong>' . ' Chave de Acesso: ' . '</strong>' . $nchave . '<hr>' ;
	
	};
	};
	//else echo 'Nota Fiscal Não Validada na Receita';
	//echo date('d-m-Y',  strtotime($date1)).'<br>';
	//echo date('d-m-Y',  strtotime($date2)).'<br>';
	
	if (empty ($row)){echo '<hr>'.'<strong>' . 'Nota Fiscal: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . ' 55 ' . '<strong>' . 'Unidade: ' . '</strong>' . $unidade . '<strong>'. ' NÃO ENCONTRADA'.'</strong>' . '<hr>';
	echo '<br><td><a href="select-nf.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>';
	echo exit;
	}else 
	//Cabeçalho 
		
	
	$uni='Unidade';
	$cliente='Cliente';
	$status='Status';
	$ori='Origem';
	$notafiscal='Nota Fiscal';
	$serie='Serie';
	$datasel='Data';
	$ncontrole='Nº Controle';
	$seq='Seq';
	$cpeca='Codigo Peça';
	$cncmpeca='Codigo NCM';
	$qpeca='Qtde';
	$valorbi='BC ICMS Peça';
	$valorvi='Vlr ICMS Peça';
	$valorbst='BC-ST Peça';
	$valorvst='ICMS-ST Peça';
	$valoripip='Vlr IPI Peça';
	$valortp='Vlr Total Peça';
	$nop='NOP';
	$cme='CME';
	$if='IF';
	$st='ST';

	echo "<table>";
	echo "<tr>";
    echo "<th>" . $uni . "</th>";
	echo "<th>" . $cliente . "</th>";
	echo "<th>" . $status . "</th>";
	echo "<th>" . $ori . "</th>";
	echo "<th>" . $notafiscal . "</th>";
	echo "<th>" . $serie . "</th>";
	echo "<th>" . $datasel . "</th>";
	echo "<th>" . $ncontrole . "</th>";
	
	
	
	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota' and NFHEMI= '$unidade' ");
	foreach ($conn->query($sql) as $row) {
	
	$ncontrolenfh= $row['NFHNUM'];
	$ncontrolenfh2= $row['NFHNNF'];
	
	$sql1 = ("select * from tb_fatnfi where nfinum='$ncontrolenfh' ");
	foreach ($conn->query($sql1) as $row1) {
	if ($row['NFHNUM']=($row1['NFINUM'])){
	
	$ncontrolenfi= $row1['NFIPRO'];
	$ncontrolenfi2= $row1['NFINUM'];
	}
	
	}
	
	}
	

		
	echo "<tr>";
	echo "<td>" . $row['NFHEMI'] . "</td>";
	echo "<td>" . $row['NFHCLI'] . "</td>";
	echo "<td>" . $row['NFHSTS'] . "</td>";
	echo "<td>" . $row['NFHORI'] . "</td>";
	echo "<td>" . $row['NFHNNF'] . "</td>";
	echo "<td>" . $row['NFHSNF'] . "</td>";
	echo "<td>" . $row['NFHDNF'] . "</td>";
	echo "<td>" . $row['NFHNUM'] . "</td>";
	echo "</table>";
	echo '<br>';
	
	
	
	

	echo "<table>";
	echo "<tr>";
	echo "<th>" . $seq . "</th>";
	echo "<th>" . $cpeca . "</th>";
	//echo "<th>" . $cncmpeca . "</th>";
	echo "<th>" . $qpeca . "</th>";
	echo "<th>" . $valorbi . "</th>";
	echo "<th>" . $valorvi . "</th>";
	echo "<th>" . $valorbst . "</th>";
	echo "<th>" . $valorvst . "</th>";
	echo "<th>" . $valoripip . "</th>";
	echo "<th>" . $valortp . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $cme . "</th>";
	echo "<th>" . $if . "</th>";
	echo "<th>" . $st . "</th>";
	echo "</tr>";

	
	
	
	
	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota' and NFHEMI= '$unidade' ");
	foreach ($conn->query($sql) as $row) {
	
	
	$ncontrolenfh= $row['NFHNUM'];
	
	
	$sql1 = ("select * from tb_fatnfi where nfinum='$ncontrolenfh' ");
	foreach ($conn->query($sql1) as $row1) {
	if ($row['NFHNUM']=($row1['NFINUM'])){
	
	
	$sql2 = ("select * from tb_fatnfc where nfcnum='$ncontrolenfh' ");
	foreach ($conn->query($sql2) as $row2) {
	if ($row['NFHNUM']=($row2['NFCNUM'])){
	
	
	$sql4 = ("select * from TB_PCAPRC where PRCCOD ='$ncontrolenfi'  ");
	foreach ($conn->query($sql4) as $row4 ) {
	if ($row4['PRCCOD']=($row1['NFIPRO'])){
		

		
	
	echo "<td>" . $row1['NFISEQ'] . "</td>";
	echo "<td>" . $row4['PRCCOD'] . "</td>";
	//echo "<td>" . $row4['PRCCCF'] . "</td>";
	echo "<td>" . $row1['NFIQTD'] . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIBIC']),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIVIC']),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIBST_G']),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$row1['NFICST_CTB']),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIIPI']),"2",",","") . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIVLT']),"2",",","") . "</td>";
	echo "<td>" . $row1['NFINOP'] . "</td>";
	echo "<td>" . $row1['NFICME'] . "</td>";
	echo "<td>" . $row1['NFICT1'] . "</td>";
	echo "<td>" . $row1['NFIALR'] . "</td>";
	
	echo "</tr>";
	

	
	}
	
    }	
	
	}
	
	}
	
	}
	
	}
	

	}
	

	echo "</table>";

	echo '<hr>' . '<strong>' . 'Total Geral-> ' . '</strong>' . '<hr>' ; 
	if (isset ($row)){
	echo '<strong>'. "<table>" . "<tr>" . "<td>";
	echo 'Total IPI: ' . '</strong>' . number_format (str_replace(",",".",$row['NFHIPI']),"2",",","") ;}
	if (isset ($row)){
	echo '<strong>' . '<br>' .'Total Base ICMS: ' . '</strong>' . number_format (str_replace(",",".",$row['NFHBIC']),"2",",","")  ;}
	if (isset ($row)){
	echo '<strong>' . ' | Total ICMS: ' . '</strong>' . number_format (str_replace(",",".",$row['NFHVIC']),"2",",","") ;}
	if (isset ($row2)){
	echo '<strong>' . '<br>' . 'Total BC-ST: ' . '</strong>' . number_format (str_replace(",",".",$row2['NFCBST']),"2",",","") ;}
	if (isset ($row)){
	echo '<strong>' . ' | Total ICMS-ST: ' . '</strong>' . number_format (str_replace(",",".",$row['NFHSBT']),"2",",","") ;}
	if (isset ($row)){
	echo '<strong>' . '<br>' . 'Total NF: ' . '</strong>' . number_format (str_replace(",",".",$row['NFHVTN']),"2",",","");
	echo '<br>' . "</td>" ."</tr>" . "</table>";}
	

	else echo '<strong>' . 'Nota Fiscal: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . ' 55 ' . '<strong>' . 'Unidade: ' . '</strong>' . $unidade . '<strong>'. ' NÃO ENCONTRADA1'.'</strong>' . '<hr>';
	
	

	
				?>
		
	
	<br>
	<td><a href="select-nf.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
		
		<?php
	$unidade = $_POST['unidade'];
	$nota = $_POST['nf'];
	
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
	
	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota' and NFHEMI= '$unidade' ");
	foreach ($conn->query($sql) as $row) {
	
	$ncontrolenfh = $row['NFHNUM'];	

	if ($row['NFHSTS'] == 'G'){		
	echo '<td><a href="baixa-1xml.php?file='.$nchave.'" target="_self"><button type="button" onclick="submit()">Baixar XML</button></a></td>'.' ';	
	echo '<td><a href="http://www.nfe.fazenda.gov.br/portal/consultaRecaptcha.aspx?tipoConsulta=completa&tipoConteudo=XbSeqxE8pl8=" target="_blank"><button type="button" onclick="submit()">Consultar XML Receita</button></a></td>';	

	}else echo '<td><a href="num-2.php" target="_self"> <button type="button" onclick="submit()">Consultar XML</button></a></td>';
}


		?>		

		<br></font>		

		</p>			
	</body>
</html>