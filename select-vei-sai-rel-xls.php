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
		<strong>Relatório Veiculos Entrada </strong><hr></font>
		<font size="2" face="Calibri">
		<table>
  
	<?php
	require_once ("bd-u1.php");
	
	
	
	$date1n = $_SESSION['date1n'];
	$date2n = $_SESSION['date2n'];

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
	
	$html .='<strong>'.'Periodo ' . $date1n . ' ' . ' até ' . $date2n .'</strong>'.'<br>'.'<br>';
	
	//$html .=date('d-m-Y',  strtotime($date1)).'<br>';
	//$html .=date('d-m-Y',  strtotime($date2)).'<br>';
	
	$html .="<table>" . "<tr>";
	$html .="<th>" . $seq . "</th>";
	$html .="<th>" . $emitente  . "</th>";
	$html .="<th>" . $notafiscal . "</th>";
	$html .="<th>" . $serie . "</th>";
	$html .="<th>" . $datasel . "</th>";
	$html .="<th>" . $nop . "</th>";
	$html .="<th>" . $origem . "</th>";
	$html .="<th>" . $estado . "</th>";
	$html .="<th>" . $baseicms . "</th>";
	$html .="<th>" . $valoricms . "</th>";
	$html .="<th>" . $valortotal  . "</th>";
	$html .="<th>" . $codigo  . "</th>";
	$html .="<th>" . $cliente  . "</th>";
	$html .="<th>" . $cpfcnpj  . "</th>";
	$html .="<th>" . $chaveacesso . "</th>";
	$html .="</tr>";

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
	
    $html .="<tr>" ;
	$html .="<td>" . $xcontador . "</td>";
	$html .="<td>" . $row['DOCEMI'] . "</td>";
	$html .="<td>" . $row['DOCNUM'] . "</td>";
	$html .="<td>" . $row['DOCSER'] . "</td>";
	$html .="<td>" . $datacontrole . "</td>";
	$html .="<td>" . $row['DOCNOP'] . "</td>";
	$html .="<td>" . $row['DOCORI'] . "</td>";
	$html .="<td>" . $row['DOCEST'] . "</td>";
	if (isset ($row['DOCBIC'])){
	$html .="<td>" . number_format (str_replace(",",".",$row['DOCBIC']),"2",",","") . "</td>";
	}else $html .="<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCVIC'])){
	$html .="<td>" . number_format (str_replace(",",".",$row['DOCVIC']),"2",",","") . "</td>";
	}else $html .="<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCVTN'])){
	$html .="<td>" . number_format (str_replace(",",".",$row['DOCVTN']),"2",",","") . "</td>";
	}else $html .="<td>" .'0,00' . "</td>"; 
	$html .="<td>" . $row['DOCCOD'] . "</td>";
	$html .="<td>" . $row['DOCNOM_CLI'] . "</td>";
	$html .="<td>" . $ncontrole_cli. "</td>";
	if (isset ($row['DOCCHA'])){
	$html .="<td>" . $aspas.$row['DOCCHA'].$aspas . "</td>" . "</tr>";
	}else $html .="<td>" . $aspas.'Não Consta Chave de Acesso'.$aspas . "</td>"; 
	
	
	}

	$html .= "</table>"."</font>";
	
	
	
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
		<td><a href="select-vei-sai.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
		<td><a href="select-vei-sai-rel-xls.php" target="_self"> <button type="button" onclick="submit()">Gerar XLS</button></a></td>
		<br></font>
		
		</p>			
	</body>
</html>