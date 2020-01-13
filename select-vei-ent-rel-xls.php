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
	
	$tipo = $_SESSION['tipo'];
	$date1n = $_SESSION['date1n'];
	$date2n = $_SESSION['date2n'];
	
	
	
	if ($tipo=='entrada'){
	require("bd-u1.php");
	
	//$html .=  '<hr>'.'Periodo ' . $date1 .' até ' . $date2 . ' - Entrada'.'<hr>' ;
	//require_once ("bd-u1.php");
	

	$cab='Estado - NF - Serie - Data - Chave de Acesso';
	$contador = 1;
	
	$aspas = "'";
	$seq = 'Seq';
	$emitente='Emitente';
	$notafiscal='NF';
	$serie='Serie';
	$datasel='Data';
	$nop='NOP';
	$origem='Origem';
	$estado='Estado';
	$baseicms='Base ICMS';
	$valoricms='Valor ICMS';
	$basest='Base ST';
	$valorst='Valor ST';
	$valortotal='Valor Total';
	$codigo='Codigo';
	$chaveacesso='Chave de Acesso';
	
	$arquivo = $date1n.'-'.$date2n.'-'.'entrada.xls';
	
	$html = '';
		
	//$html .=  date('d-m-Y',  strtotime($date1)).'<br>';
	//$html .=  date('d-m-Y',  strtotime($date2)).'<br>';
	
	$html .=  "<table>" . "<tr>";
	$html .=  "<th>" . $seq . "</th>";
	$html .=  "<th>" . $emitente  . "</th>";
	$html .=  "<th>" . $notafiscal . "</th>";
	$html .=  "<th>" . $serie . "</th>";
	$html .=  "<th>" . $datasel . "</th>";
	$html .=  "<th>" . $nop . "</th>";
	$html .=  "<th>" . $origem . "</th>";
	$html .=  "<th>" . $estado . "</th>";
	$html .=  "<th>" . $baseicms . "</th>";
	$html .=  "<th>" . $valoricms . "</th>";
	$html .=  "<th>" . $basest  . "</th>";
	$html .=  "<th>" . $valorst  . "</th>";
	$html .=  "<th>" . $valortotal  . "</th>";
	$html .=  "<th>" . $codigo  . "</th>";
	$html .=  "<th>" . $chaveacesso . "</th>";
	$html .=  "</tr>";

	function converte_data( $datacontrole ){
	if( preg_match('/([0-9]+)-([0-9]+)-([0-9]+)/', $datacontrole ) )
		return preg_replace( '/([0-9]+)-([0-9]+)-([0-9]+)/', '$3/$2/$1', $datacontrole );
	else
		return preg_replace( '/([0-9]+)\/([0-9]+)\/([0-9]+)/', '$3-$2-$1', $datacontrole );
	}
	
	$sql = ("SELECT DOCEMI, DOCNUM, DOCSER, DOCDTR, DOCNOP, DOCORI, DOCEST, DOCBIC, DOCVIC, DOCBST, DOCSBT, DOCVTN, DOCCOD, DOCCHA FROM TB_PCADOC WHERE DOCORI ='06' AND DOCCME ='110' AND DOCSTS <>'C' AND DOCDTR between '$date1n' and '$date2n' ORDER BY DOCNUM");
	foreach ($conn->query($sql) as $row) {
		
	$vinte = '20';
	$datacontrole = $row['DOCDTR'];
	$xcontador = ($contador ++);
	
    $html .=  "<tr>" ;
	$html .=  "<td>" . $xcontador . "</td>";
	$html .=  "<td>" . $row['DOCEMI'] . "</td>";
	$html .=  "<td>" . $row['DOCNUM'] . "</td>";
	$html .=  "<td>" . $row['DOCSER'] . "</td>";
	$html .=  "<td>" . $datacontrole. "</td>";
	$html .=  "<td>" . $row['DOCNOP'] . "</td>";
	$html .=  "<td>" . $row['DOCORI'] . "</td>";
	$html .=  "<td>" . $row['DOCEST'] . "</td>";
	if (isset ($row['DOCBIC'])){
	$html .=  "<td>" . number_format (str_replace(",",".",$row['DOCBIC']),"2",",","") . "</td>";
	}else $html .=  "<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCVIC'])){
	$html .=  "<td>" . number_format (str_replace(",",".",$row['DOCVIC']),"2",",","") . "</td>";
	}else $html .=  "<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCBST'])){
	$html .=  "<td>" . number_format (str_replace(",",".",$row['DOCBST']),"2",",","") . "</td>";
	}else $html .=  "<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCSBT'])){
	$html .=  "<td>" . number_format (str_replace(",",".",$row['DOCSBT']),"2",",","") . "</td>";
	}else $html .=  "<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCVTN'])){
	$html .=  "<td>" . number_format (str_replace(",",".",$row['DOCVTN']),"2",",",""). "</td>";
	}else $html .=  "<td>" .'0,00' . "</td>"; 
	$html .=  "<td>" . $row['DOCCOD'] . "</td>";
	if (isset ($row['DOCCHA'])){
	$html .=  "<td>" . $aspas.$row['DOCCHA'].$aspas . "</td>" . "</tr>";
	}else $html .=  "<td>" . $aspas.'Não Consta Chave de Acesso'.$aspas . "</td>"; 
	
	
	}
	
	$html .=  "</table>" ."</font>";
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
	
<font size="3" face="Calibri">
	<ul>
		<li><a href="select-vei-ent-relb.php" target="iframe_b" onclick="submit()">Visualizar</button></a></li>
		<li><a href="select-vei-ent-rel-xls.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>


<?php    

exit;
	}
	elseif  ($tipo=='saida'){
	require("bd-u1.php");
	
	//$html .=  '<hr>'.'Periodo ' . $date1 .' até ' . $date2 . ' - Saida'.'<hr>' ;
	
	$cab='Estado - NF - Serie - Data - Chave de Acesso';
	$contador = 1;
	
	$aspas = "'";
	$seq = 'Seq';
	$emitente='Emitente';
	$notafiscal='NF';
	$serie='Serie';
	$datasel='Data';
	$nop='NOP';
	$origem='Origem';
	$estado='Estado';
	$baseicms='Base ICMS';
	$valoricms='Valor ICMS';
	$valortotal='Valor Total';
	$codigo='Codigo';
	$cliente='Cliente';
	$cpfcnpj='CPF/CPNJ';
	$chaveacesso='Chave de Acesso';
	
	$arquivo = $date1n.'-'.$date2n.'-'.'saida.xls';
	
	$html = '';
	
	//$html .=  date('d-m-Y',  strtotime($date1)).'<br>';
	//$html .=  date('d-m-Y',  strtotime($date2)).'<br>';
	
	$html .=  "<table>" . "<tr>";
	$html .=  "<th>" . $seq . "</th>";
	$html .=  "<th>" . $emitente  . "</th>";
	$html .=  "<th>" . $notafiscal . "</th>";
	$html .=  "<th>" . $serie . "</th>";
	$html .=  "<th>" . $datasel . "</th>";
	$html .=  "<th>" . $nop . "</th>";
	$html .=  "<th>" . $origem . "</th>";
	$html .=  "<th>" . $estado . "</th>";
	$html .=  "<th>" . $baseicms . "</th>";
	$html .=  "<th>" . $valoricms . "</th>";
	$html .=  "<th>" . $valortotal  . "</th>";
	$html .=  "<th>" . $codigo  . "</th>";
	$html .=  "<th>" . $cliente  . "</th>";
	$html .=  "<th>" . $cpfcnpj  . "</th>";
	$html .=  "<th>" . $chaveacesso . "</th>";
	$html .=  "</tr>";

	function converte_data( $datacontrole ){
	if( preg_match('/([0-9]+)-([0-9]+)-([0-9]+)/', $datacontrole ) )
		return preg_replace( '/([0-9]+)-([0-9]+)-([0-9]+)/', '$3/$2/$1', $datacontrole );
	else
		return preg_replace( '/([0-9]+)\/([0-9]+)\/([0-9]+)/', '$3-$2-$1', $datacontrole );
	}
	
	$sql = ("SELECT * FROM TB_PCADOC WHERE DOCORI ='03' AND DOCCME ='210' AND DOCSTS <>'C' AND DOCSER ='55' AND DOCDTR between '$date1n' and '$date2n' ORDER BY DOCNUM");
	foreach ($conn->query($sql) as $row) {
		
	$vinte = '20';
	$datacontrole = $row['DOCDTR'];
	$ncontrole_cli = $row['DOCCGC_CLI'];
	$xcontador = ($contador ++);
	
    $html .=  "<tr>" ;
	$html .=  "<td>" . $xcontador . "</td>";
	$html .=  "<td>" . $row['DOCEMI'] . "</td>";
	$html .=  "<td>" . $row['DOCNUM'] . "</td>";
	$html .=  "<td>" . $row['DOCSER'] . "</td>";
	$html .=  "<td>" . $datacontrole . "</td>";
	$html .=  "<td>" . $row['DOCNOP'] . "</td>";
	$html .=  "<td>" . $row['DOCORI'] . "</td>";
	$html .=  "<td>" . $row['DOCEST'] . "</td>";
	if (isset ($row['DOCBIC'])){
	$html .=  "<td>" . number_format (str_replace(",",".",$row['DOCBIC']),"2",",",""). "</td>";
	}else $html .=  "<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCVIC'])){
	$html .=  "<td>" . number_format (str_replace(",",".",$row['DOCVIC']),"2",",","") . "</td>";
	}else $html .=  "<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCVTN'])){
	$html .=  "<td>" . number_format (str_replace(",",".",$row['DOCVTN']),"2",",","") . "</td>";
	}else $html .=  "<td>" .'0,00' . "</td>"; 
	$html .=  "<td>" . $row['DOCCOD'] . "</td>";
	$html .=  "<td>" . $row['DOCNOM_CLI'] . "</td>";
	$html .=  "<td>" . $ncontrole_cli. "</td>";
	if (isset ($row['DOCCHA'])){
	$html .=  "<td>" . $aspas.$row['DOCCHA'].$aspas . "</td>" . "</tr>";
	}else $html .=  "<td>" . $aspas.'Não Consta Chave de Acesso'.$aspas . "</td>"; 
	
	
	}
	
	$html .=  "</table>" ."</font>";
	
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

<font size="3" face="Calibri">
	<ul>
		<li><a href="select-vei-ent-relb.php" target="iframe_b" onclick="submit()">Visualizar</button></a></li>
		<li><a href="select-vei-ent-rel-xls.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>
<?php    

exit;
	}
	elseif  ($tipo=='90'){
	require("bd-u1.php");
	
	$html .=  '<hr>'.'Periodo ' . $date1n .' até ' . $date2n . ' - 90 Dias'.'<hr>'	;
	
	$html .=  'Não Gerado';
	}
	
	
	/*<font size="3" face="Calibri">
	<ul>
		<li><a href="select-vei-ent-relb.php" target="iframe_b" onclick="submit()">Visualizar</button></a></li>
		<li><a href="select-vei-ent-rel-xls.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>*/
    ?>	

		
		
	 
	</body>
</html>


