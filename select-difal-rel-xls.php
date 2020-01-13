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
				<font face="Calibri">
				<hr>
			<nav>
			
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
	$csaida='C';
	$status='Sts';
	$estado='Estado';
	$emitente='Emitente';
	$notafiscal='NF';
	$serie='Serie';
	$datasel='Data';
	$tipo='Tip';
	$cpfcnpj='CPF/CPNJ';
	$inscricao='Inscrição';
	$cliente='Cliente';
	$cidade='Cidade';
	$codcidade='Codigo Cidade';
	$chaveacesso='Chave de Acesso';
	
	$arquivo = $date1n.'-'.$date2n.'-'.'difal.xls';
	
	$html = '';
	//$html .= 'Periodo ' . $date1n . ' ' . ' até ' . $date2n .'<br><br>';
	$html .= "<table>" . "<tr>";
	$html .= "<th>" . $seq . "</th>";
	$html .= "<th>" . $csaida  . "</th>";
	$html .= "<th>" . $status . "</th>";
	$html .= "<th>" . $estado . "</th>";
	$html .= "<th>" . $emitente . "</th>";
	$html .= "<th>" . $notafiscal . "</th>";
	$html .= "<th>" . $serie . "</th>";
	$html .= "<th>" . $datasel . "</th>";
	$html .= "<th>" . $tipo . "</th>";
	$html .= "<th>" . $cpfcnpj  . "</th>";
	$html .= "<th>" . $inscricao  . "</th>";
	$html .= "<th>" . $cliente  . "</th>";
	$html .= "<th>" . $cidade  . "</th>";
	$html .= "<th>" . $chaveacesso  . "</th>" . "</tr>";
	
	function converte_data( $datacontrole ){
	if( preg_match('/([0-9]+)-([0-9]+)-([0-9]+)/', $datacontrole ) )
		return preg_replace( '/([0-9]+)-([0-9]+)-([0-9]+)/', '$3/$2/$1', $datacontrole );
	else
		return preg_replace( '/([0-9]+)\/([0-9]+)\/([0-9]+)/', '$3-$2-$1', $datacontrole );
	}
	
	
	$sql = ("SELECT * FROM tb_pcadoc where docest <> 'SP' and docser='55' and docses='S' and docsts <> 'C' and docdtr between '$date1n' and '$date2n' order by docest, docdtr, docnum");
	foreach ($conn->query($sql) as $row) {

	$vinte = '20';
	$ncontrolecid_cli= $row['DOCTRD'];
	$datacontrole = $row['DOCDTR'];
	//$datacontrole = str_replace("/", "-", $row['DOCDTR']);
	$ncontrole_cli = $row['DOCCGC_CLI'];
	$xcontador = ($contador ++);
	$datacontrole1 = str_replace("/", "-", $datacontrole);
	//$datacontrole2 = str_replace("-19", "-2019", $datacontrole1);

	$html .= "<tr>" ;
	$html .= "<td>" . $xcontador . "</td>";
    $html .= "<td>" . $row['DOCSES'] . "</td>";
	$html .= "<td>" . $row['DOCSTS'] . "</td>";
	$html .= "<td>" . $row['DOCEST'] . "</td>";
	$html .= "<td>" . $row['DOCEMI'] . "</td>";
	$html .= "<td>" . $row['DOCNUM'] . "</td>";
	$html .= "<td>" . $row['DOCSER'] . "</td>";
	$html .= "<td>" . $aspas.$vinte.converte_data($datacontrole).$aspas . "</td>";
	if ($row['DOCTIP'] == 'F'){
	$html .= "<td>" . $row['DOCTIP'] . "</td>";
	$html .= "<td>" . $aspas.str_pad($ncontrole_cli, 11, '0', STR_PAD_LEFT).$aspas . "</td>";
	}
	elseif ($row['DOCTIP'] <> 'F'){
	$html .= "<td>" . $row['DOCTIP'] . "</td>";
	$html .= "<td>" . $aspas.str_pad($ncontrole_cli, 14, '0', STR_PAD_LEFT).$aspas . "</td>";
	}
	if (isset($row['DOCINS_CLI'])){
	$html .= "<td>" . $aspas.$row['DOCINS_CLI'].$aspas . "</td>";
	}else $html .=  "<td>" . $row['DOCINS_CLI'] . "</td>";
	$html .= "<td>" . $row['DOCNOM_CLI'] . "</td>";
	$html .= "<td>" . $row['DOCCID_CLI'] . "</td>";
	$html .= "<td>" . $aspas.$row['DOCCHA'].$aspas . "</td>" . "</tr>";
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

		<td><a href="select-difal-rel-xls.php" target="_self"> <button type="button" onclick="submit()">Gerar XLS</button></a></td>
		<br></font>
		
		</p>			
	</body>
</html>
