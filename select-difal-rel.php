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
	
	require_once ("bd-u1.php");
	
	$date1=date('d-m-Y',strtotime($_POST['date1']));
	$date2=date('d-m-Y',strtotime($_POST['date2']));

	$_SESSION["date1n"] = $date1;
	$_SESSION["date2n"] = $date2;
	

	$cab='Estado - NF - Serie - Data - Chave de Acesso';
	$contador = 1;
	
	$aspas = "'";
	$seq = 'Seq';
	$csaida='C';
	$status='Sts';
	$estado='Est';
	$emitente='Emi';
	$notafiscal='NF';
	$serie='Ser';
	$datasel='Data';
	$tipo='Tip';
	$cpfcnpj='CPF/CPNJ';
	$inscricao='Inscrição';
	$cliente='Cliente';
	$cidade='Cidade';
	$codcidade='Codigo Cidade';
	$chaveacesso='Chave de Acesso';
	
	echo '<hr>'.'Periodo ' . $date1 . ' ' . ' até ' . $date2 . ' - DIFAL' .'<hr>';
	
	//echo date('d-m-Y',  strtotime($date1)).'<br>';
	//echo date('d-m-Y',  strtotime($date2)).'<br>';
	
	/*echo "<table>" . "<tr>";
	echo "<th>" . $seq . "</th>";
	echo "<th>" . $csaida  . "</th>";
	echo "<th>" . $status . "</th>";
	echo "<th>" . $estado . "</th>";
	echo "<th>" . $emitente . "</th>";
	echo "<th>" . $notafiscal . "</th>";
	echo "<th>" . $serie . "</th>";
	echo "<th>" . $datasel . "</th>";
	echo "<th>" . $tipo . "</th>";
	echo "<th>" . $cpfcnpj  . "</th>";
	echo "<th>" . $inscricao  . "</th>";
	echo "<th>" . $cliente  . "</th>";
	echo "<th>" . $cidade  . "</th>";
	echo "<th>" . $chaveacesso . "</th>";
	echo "</tr>";

	function converte_data( $datacontrole ){
	if( preg_match('/([0-9]+)-([0-9]+)-([0-9]+)/', $datacontrole ) )
		return preg_replace( '/([0-9]+)-([0-9]+)-([0-9]+)/', '$3/$2/$1', $datacontrole );
	else
		return preg_replace( '/([0-9]+)\/([0-9]+)\/([0-9]+)/', '$3-$2-$1', $datacontrole );
	}
	
		
	$sql = ("SELECT DOCTRD,DOCSES,DOCSTS,DOCEST,DOCEMI,DOCNUM,DOCSER,DOCDTR,DOCTIP,DOCCGC_CLI,DOCINS_CLI,DOCNOM_CLI,DOCCID_CLI,DOCCHA FROM tb_pcadoc where docest <> 'SP' and docser='55' and docses='S' and docsts <> 'C' and docdtr between '$date1' and '$date2' order by docest, docdtr, docnum");
	foreach ($conn->query($sql) as $row) {
		
	$vinte = '20';
	$ncontrolecid_cli= $row['DOCTRD'];
	$datacontrole = $row['DOCDTR'];
	//$datacontrole = str_replace("/", "-", $row['DOCDTR']);
	$ncontrole_cli = $row['DOCCGC_CLI'];
	$xcontador = ($contador ++);
	//$datacontrole1 = str_replace("/", "-", $datacontrole);
	//$datacontrole2 = str_replace("-19", "-2019", $datacontrole1);
	


    echo "<tr>" ;
	echo "<td>" . $xcontador . "</td>";
	echo "<td>" . $row['DOCSES'] . "</td>";
	echo "<td>" . $row['DOCSTS'] . "</td>";
	echo "<td>" . $row['DOCEST'] . "</td>";
	echo "<td>" . $row['DOCEMI'] . "</td>";
	echo "<td>" . $row['DOCNUM'] . "</td>";
	echo "<td>" . $row['DOCSER'] . "</td>";
	echo "<td>" . $aspas.$vinte.converte_data($datacontrole).$aspas . "</td>";
	if ($row['DOCTIP'] == 'F'){
	echo "<td>" . $row['DOCTIP'] . "</td>";
	echo "<td>" . $aspas.str_pad($ncontrole_cli, 11, '0', STR_PAD_LEFT).$aspas . "</td>";
	}
	elseif ($row['DOCTIP'] <> 'F'){
	echo "<td>" . $row['DOCTIP'] . "</td>";
	echo "<td>" . $aspas.str_pad($ncontrole_cli, 14, '0', STR_PAD_LEFT).$aspas . "</td>";
	}
	if (isset($row['DOCINS_CLI'])){
	echo "<td>" . $aspas.$row['DOCINS_CLI'].$aspas . "</td>";
	}else echo "<td>" . $row['DOCINS_CLI'] . "</td>";
	echo "<td>" . $row['DOCNOM_CLI'] . "</td>";
	echo "<td>" . $row['DOCCID_CLI'] . "</td>";
	echo "<td>" . $aspas.$row['DOCCHA'].$aspas . "</td>" . "</tr>";
	}

	echo "</table>" ."</font>";
	
*/
          echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";
        
	?>

	<font size="3" face="Calibri">
	<ul>
		<li><a href="select-difal-relb.php" target="iframe_b" onclick="submit()">Visualizar</button></a></li>
		<li><a href="select-difal-rel-xls.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>
		
		
	 
	</body>
</html>
