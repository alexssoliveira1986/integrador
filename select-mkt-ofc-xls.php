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
		
	require_once ("bd-u1.php");

	$date1n = $_SESSION['date1n'];
	$date2n = $_SESSION['date2n'];
	
	$arquivo = $date1n.'-'.$date2n.'-'.'ofc.xls';
	
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
	
	$html = '';	
	$html .= "<table>" . "<tr>";
	

	$html .= "<th>" . $uni . "</th>";
	$html .= "<th>" . $ts  . "</th>";
	$html .= "<th>" . $vp  . "</th>";
	$html .= "<th>" . $vs  . "</th>";
	$html .= "<th>" . $ttv  . "</th>";
	$html .= "<th>" . $ipi  . "</th>";
	$html .= "<th>" . $cp  . "</th>";
	$html .= "<th>" . $cs  . "</th>";
	$html .= "<th>" . $iss  . "</th>";
	$html .= "<th>" . $icms  . "</th>";
	$html .= "<th>" . $pis  . "</th>";
	$html .= "<th>" . $cofins  . "</th>";
	$html .= "<th>" . $ctv  . "</th>";
	$html .= "<th>" . $ns  . "</th>";
	
	$html .= "</tr>";
	
	$sql = ("SELECT DOCEMI,DOCTOS,SUM(DOCVLS) AS DOCVLS1,SUM(DOCVLM) AS DOCVLM1,SUM(DOCCSV) AS DOCCSV1,SUM(DOCVTN) AS DOCVTN1,SUM(DOCVIP) AS DOCVIP1,SUM(DOCCSR) AS DOCCSR1,SUM(DOCVIC) AS DOCVIC1,SUM(DOCVIS) AS DOCVIS1, SUM(DOCCST) AS DOCCST1,SUM(DOCPIS_VAL) AS DOCPIS_VAL1,SUM(DOCCOF_VAL) AS DOCCOF_VAL1 FROM TB_PCADOC WHERE DOCSTS <> 'C' AND DOCEMI='U00224' AND DOCRSE='OS' AND DOCDTR BETWEEN '$date1n' AND '$date2n' GROUP BY DOCEMI,DOCTOS ORDER BY DOCEMI,DOCTOS");
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
 
	$html .=  "<tr>";
	$html .= "<td>" . $row['DOCEMI']  . "</td>";
	$html .= "<td>" . $row['DOCTOS']  . "</td>";
	$html .= "<td>" . number_format (str_replace(",",".",$xvlm),"2",",","") . "</td>";
	$html .= "<td>" . number_format (str_replace(",",".",$xvls),"2",",","") . "</td>";
	$html .= "<td>" . number_format (str_replace(",",".",$xvtnt),"2",",","") . "</td>";
	$html .= "<td>" . number_format (str_replace(",",".",$xvip),"2",",","") . "</td>";
	if ($row['DOCTOS'] == 'F2'){
		$html .= "<td>" . number_format (str_replace(",",".",$xvlm),"2",",","") . "</td>";
	}else $html .= "<td>" . number_format (str_replace(",",".",$xvic),"2",",","") . "</td>";
	$html .= "<td>" . number_format (str_replace(",",".",$xtotcusto),"2",",","") . "</td>";
	$html .= "<td>" . number_format (str_replace(",",".",$xvis),"2",",","") . "</td>";
	$html .= "<td>" . number_format (str_replace(",",".",$xvic1),"2",",","") . "</td>";
	$html .= "<td>" . number_format (str_replace(",",".",$xdocpis),"2",",","") . "</td>";
	$html .= "<td>" . number_format (str_replace(",",".",$xdoccofins),"2",",","") . "</td>";
	$html .= "<td>" . number_format (str_replace(",",".",$xtot),"2",",","") . "</td>";
	
	if ($row['DOCTOS'] == 'A1' OR $row['DOCTOS'] == 'A2' OR $row['DOCTOS'] == 'A4' OR $row['DOCTOS'] == 'A5' OR $row['DOCTOS'] == 'A9'){
	$html .= "<td>" . 'ACESSORIOS'  . "</td>";		
	}elseif ($row['DOCTOS'] == 'A6' OR $row['DOCTOS'] == 'D1' OR $row['DOCTOS'] == 'F1' OR $row['DOCTOS'] == 'R1' OR $row['DOCTOS'] == 'R2' OR $row['DOCTOS'] == 'R3'){
	$html .= "<td>" . 'NOVOS'  . "</td>";		
	}elseif ($row['DOCTOS'] == 'A7' OR $row['DOCTOS'] == 'F5'){
	$html .= "<td>" . 'FROTISTA'  . "</td>";		
	}elseif ($row['DOCTOS'] == 'A8' OR $row['DOCTOS'] == 'D2' OR $row['DOCTOS'] == 'F2'){
	$html .= "<td>" . 'USADOS'  . "</td>";		
	}elseif ($row['DOCTOS'] == 'D4' OR $row['DOCTOS'] == 'D8' OR $row['DOCTOS'] == 'V1' OR $row['DOCTOS'] == 'V2' OR $row['DOCTOS'] == 'V3' OR $row['DOCTOS'] == 'V5' OR $row['DOCTOS'] == 'V6' OR $row['DOCTOS'] == 'V8'){
	$html .= "<td>" . 'MECANICA'  . "</td>";		
	}elseif ($row['DOCTOS'] == 'N2' OR $row['DOCTOS'] == 'S1' OR $row['DOCTOS'] == 'S2	'){
	$html .= "<td>" . 'FUNILARIA'  . "</td>";		
	}else $html .= "<td>" . $row['DOCTOS']  . "</td>";
	
	$html .=  "</tr>";	
	
	
	}
	
	$html .= "</table>";
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
	<hr>
	<ul>
		<li><a class="active" onclick='history.go(-1)' target="_self" onclick="submit()">Voltar</button></a></li>
		<li><a href="select-mkt-ofc-xls.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>
	 
	</body>
</html>