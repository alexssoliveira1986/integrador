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
		  background-color: #ddddaa;
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
		<hr>
		
	<?php
	
	//COMPOSIÇÃO VALOR TOTAL = TOTAL DAS PEÇAS + OBSERVAÇÕES = ST + IPI + FRETE + DAC - DESCONTO
	//5403 = 93,09 + 15,43 + 11,17 = 119,69 
	//5405 = 159,60 + 126,72 + 75,32 + 275,21 + 133,00 = 769,85
	//COMPOSIÇÃO DE OUTRAS SOMA MENOS O VALOT TOTAL
	
	$unidade = $_POST['unidade'];
	$date1=date('d-m-Y',strtotime($_POST['date1']));
	$date2=date('d-m-Y',strtotime($_POST['date2']));
	
	if ($unidade=='todas'){
	require("bd-todas.php");}	
	elseif ($unidade=='U00001'){
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
	
	$cfop = '5403';
	$contador = 1;
	
	
	
	echo 'Periodo ' . $date1 . ' até ' . $date2 . ' - LIVRO SAIDA'. '<hr>';
	
	$lcodigo='CODIGO';
	$lempresa = 'EMPRESA';
	$lrazao='RAZÃO SOCIAL';
	$lcnpj = 'CNPJ';
	$lie = 'IE';

	echo "<table>";
	echo "<tr>";
	echo "<th>" . $lcodigo . "</th>"; 
	echo "<th>" . $lempresa . "</th>"; 
	echo "<th>" . $lrazao . "</th>"; 
	echo "<th>" . $lcnpj . "</th>"; 
	echo "<th>" . $lie . "</th>"; 
	
	$sql = ("select * from TB_TRACAD where TRACOD = '$unidade'");
	foreach ($conn->query($sql) as $row) {
	
	
	echo "<tr>";
	echo "<td>" . $row['TRACOD'] . "</td>";
	echo "<td>" . $row['TRANFA'] . "</td>";
	echo "<td>" . $row['TRANOM'] . "</td>";
	echo "<td>" . $row['TRACGC'] . "</td>";
	echo "<td>" . $row['TRAIES'] . "</td>";
	echo "</tr>";
	echo "</table>" . "<br>";
	
	}
	$lseq ='SEQ';
	$lstatus ='STS';
	$lnumero='NF';
	$lserie='SERIE';
	$ldia = 'DIA';
	$luf = 'UF';
	$lvalor = 'VALOR TOTAL';
	$lcfop = 'CFOP';
	$lbasecfop = 'BASE CALCULO ICMS';
	$laliquota = 'ALIQUOTA';
	$licms = 'ICMS';
	$limposto = 'IMPOSTO';
	$lisentas = 'ISENTAS';
	$loutras = 'OUTRAS';
	$lobservacoes = 'OBSERVAÇÕES';
	//$lipi = 'IPI';
	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . $lseq	 . "</th>"; 
	echo "<th>" . $lstatus	 . "</th>"; 
	echo "<th>" . $lnumero . "</th>"; 
	echo "<th>" . $lserie . "</th>"; 
	echo "<th>" . $ldia . "</th>"; 
	echo "<th>" . $luf . "</th>"; 
	echo "<th>" . $lvalor . "</th>"; 
	echo "<th>" . $lcfop . "</th>"; 
	echo "<th>" . $lbasecfop . "</th>"; 
	echo "<th>" . $laliquota . "</th>"; 
	echo "<th>" . $licms . "</th>"; 
	echo "<th>" . $lisentas . "</th>"; 
	echo "<th>" . $loutras . "</th>"; 
	echo "<th>" . $lobservacoes . "</th>"; 
	//echo "<th>" . $lipi . "</th>";
	
	$sql1 = ("SELECT * FROM TB_FATNFH WHERE NFHEMI= '$unidade' AND NFHDNF between '$date1' and '$date2' AND NFHSTS <> '1' AND NFHNNF='371027' ");
	foreach ($conn->query($sql1) as $row1) {
	
	
	
	$lclientenfh=$row1['NFHCLI'];
	$lncnfh=$row1['NFHNUM'];
	$lnopnfh=$row1['NFHNOP'];
	$lnopnfh2=$row1['NFHNOP2'];
	$lnopnfh3=$row1['NFHNOP3'];
	$rest = substr("$lnopnfh", 0, 1);
	$rest2 = substr("$lnopnfh", 0, 1);
	$rest3 = substr("$lnopnfh", 0, 1);
	//echo $rest;
	if ($rest == '5' or $rest == '6' or $rest == '7' or $rest2 == '5' or $rest2 == '6' or $rest2 == '7' or $rest3 == '5' or $rest3 == '6' or $rest3 == '7'){
	
	$sql2 = ("SELECT * FROM TB_FATNFI WHERE NFINUM = '$lncnfh'");
	foreach ($conn->query($sql2) as $row2) {
		
		/*	$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
				
			if ($rest == $t0){
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;	
			}					
			}	*/
		
	$lncnfi=$row2['NFINUM'];	
	$lvlmnfi=$row2['NFIVLM'];
	$lbicnfi=$row2['NFIBIC'];
	$laicnfi=$row2['NFIAIC'];
	$lvicnfi=$row2['NFIVIC'];
	$ldmtnfi=$row2['NFIDMT'];
	$lipinfi=$row2['NFIIPI'];
	$ldacnfi=$row2['NFIDAC'];
	$lnopnfi=$row2['NFINOP'];
	
	
	$vlt = str_replace (',', '.', str_replace ('.', '', $row2['NFIVLT']));
	
	}

	$sql2 = ("SELECT NFIAIC, NFINOP, SUM(NFIDAC) AS NFIDAC1, SUM(NFIVLM) AS NFIVLM1, SUM(NFIIPI) AS NFIIPI1, SUM(NFIBIC) AS NFIBIC1, SUM(NFICST_CTB) AS NFICST_CTB1, SUM(NFIVIC) AS NFIVIC1, SUM(NFIVIC_DAC) AS NFIVIC_DAC1 FROM TB_FATNFI WHERE NFINUM = '$lncnfh' GROUP BY NFINOP, NFIAIC ORDER BY NFINOP");
	foreach ($conn->query($sql2) as $row2) {
	$vtotal = str_replace (',', '.', str_replace ('.', '', $row2['NFIVLM1']));
	$vbt1 = str_replace (',', '.', str_replace ('.', '', $row2['NFIBIC1']));
	$vicms1 = str_replace (',', '.', str_replace ('.', '', $row2['NFIVIC1']));
	$vfrete1 = str_replace (',', '.', str_replace ('.', '', $row2['NFIVIC_DAC1']));
	$vdac1 = str_replace (',', '.', str_replace ('.', '', $row2['NFIDAC1']));
	$vipi1 = str_replace (',', '.', str_replace ('.', '', $row2['NFIIPI1']));
	$vst1 = str_replace (',', '.', str_replace ('.', '', $row2['NFICST_CTB1']));
	$ticmsfrete = ($vicms1 + $vfrete1);
	$vtotal1 = ($vdac1 + $vtotal + $vipi1 + $vst1);
	$vtb1 = ($vdac1 + $vbt1 );
	
	//$ticmsfrete = $vicms1 + $vfrete1;
	//$totalgeral = str_replace (',', '.', str_replace ('.', '', $vtotal));
	//$totaldifal = number_format($row2['NFIVLM1'], 2, ',', ' ');
	
	if (isset($row2['NFINOP'])){
	
	
	echo "<tr>";
	echo "<td>" . $contador ++ . "</td>";
	echo "<td>" . $row1['NFHSTS'] . "</td>";
	echo "<td>" . $row1['NFHNNF'] . "</td>";
	echo "<td>" . $row1['NFHSNF'] . "</td>";
	echo "<td>" . $row1['NFHDNF'] . "</td>";
	
	if ($lncnfh == $lncnfi){
	$sql3 = ("SELECT * FROM TB_FATNFC WHERE NFCNUM = '$lncnfh'");
	foreach ($conn->query($sql3) as $row3) {	
	echo "<td>" . $row3['NFCUFC'] . "</td>";
	}}else echo "<td>" . 'SEM UF'. "</td>";
	if ($row1['NFHSTS'] == 'G'){
	echo "<td>" . number_format (str_replace(",",".",$vtotal1),"2",",","") . "</td>";
	echo "<td>" . $row2['NFINOP'] . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$vtb1),"2",",","") . "</td>";
	echo "<td>" . $row2['NFIAIC'] . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$vicms1),"2",",","") . "</td>";
	echo "<td>" . 'ISENTAS' . "</td>";
	echo "<td>" . number_format (str_replace(",",".",$vipi1),"2",",","") . "</td>";
	echo "<td>" . 'OBSERVAÇÕES' . "</td>";
	}else echo "<td>" . '0,00' . "</td>" ."<td>" . $row2['NFINOP'] . "</td>". "<td>" . '0,00' . "</td>". "<td>" . $row2['NFIAIC'] . "</td>". "<td>" . '0,00' . "</td>". "<td>" . '0,00' . "</td>". "<td>" . '0,00' . "</td>"."<td>" . 'Cancelada ou Inutilizada' . "</td>";
	
	}
	
	}
	
	}
	
	}
	echo "</tr>";
	echo "</table>" . "<br>";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";

				?>
	
		<hr>

	<ul>
		<li><a class="active" onclick='history.go(-1)' target="_self" onclick="submit()">Visualizar2</button></a></li>
		</ul>

	 
	</body>
</html>