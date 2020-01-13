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
		  padding: 1px;
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
		<strong><br>Relatório Difal: </strong>
		<table>
  
	<?php
	
	require_once ("bd-u1.php");
	$date1=date('d-m-Y',strtotime($_POST['date1']));
	$date2=date('d-m-Y',strtotime($_POST['date2']));
	
	$cab='Estado - NF - Serie - Data - Chave de Acesso';
	$csaida='C';
	$status='Sts';
	$estado='Estado';
	$emitente='Emitente';
	$notafiscal='NF';
	$serie='Serie';
	$datasel='Data';
	$cpfcnpj='CPF/CPNJ';
	$inscricao='Inscrição';
	$cliente='Cliente';
	$cidade='Cidade';
	$codcidade='Codigo Cidade';
	$chaveacesso='Chave de Acesso';
	
	echo 'Periodo ' . $date1 . ' ';
	echo 'entre ' . $date2 .'<br><br>';
	
	//echo date('d-m-Y',  strtotime($date1)).'<br>';
	//echo date('d-m-Y',  strtotime($date2)).'<br>';
	
	echo "<table>" . "<tr>" . "<th>" . $csaida  . "</th>";
	echo "<th>" . $status . "</th>";
	echo "<th>" . $estado . "</th>";
	echo "<th>" . $emitente . "</th>";
	echo "<th>" . $notafiscal . "</th>";
	echo "<th>" . $serie . "</th>";
	echo "<th>" . $datasel . "</th>";
	echo "<th>" . $cpfcnpj  . "</th>";
	echo "<th>" . $inscricao  . "</th>";
	echo "<th>" . $cliente  . "</th>";
	echo "<th>" . $cidade  . "</th>";
	echo "<th>" . $chaveacesso  . "</th>" . "</tr>";
	
		
	$sql = ("SELECT DOCTRD,DOCSES,DOCSTS,DOCEST,DOCEMI,DOCNUM,DOCSER,DOCDTR,DOCCGC_CLI,DOCINS_CLI,DOCNOM_CLI,DOCCID_CLI,DOCCHA FROM tb_pcadoc where docest <> 'SP' and docser='55' and docses='S' and docsts <> 'C' and docdtr between '$date1' and '$date2' order by docest, docdtr, docnum");
	foreach ($conn->query($sql) as $row) {
		
	$ncontrolecid_cli= $row['DOCTRD'];
		
	
	
    echo "<tr>" . "<td>" . $row['DOCSES'] . "</td>";
	echo "<td>" . $row['DOCSTS'] . "</td>";
	echo "<td>" . $row['DOCEST'] . "</td>";
	echo "<td>" . $row['DOCEMI'] . "</td>";
	echo "<td>" . $row['DOCNUM'] . "</td>";
	echo "<td>" . $row['DOCSER'] . "</td>";
	echo "<td>" . $row['DOCDTR'] . "</td>";
	echo "<td>" . $row['DOCCGC_CLI'] . "</td>";
	echo "<td>" . $row['DOCINS_CLI'] . "</td>";
	echo "<td>" . $row['DOCNOM_CLI'] . "</td>";
	echo "<td>" . $row['DOCCID_CLI'] . "</td>";
	echo "<td>" . $row['DOCCHA'] . "</td>" . "</tr>";
	}

	echo "</table>"
				?>
	<br>
		<td><a href="select-difal.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
		<br></font>
		
		</p>			
	</body>
</html>

