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
	
	$tipo = $_POST['tipo'];
	
	$date1=date('d-m-Y',strtotime($_POST['date1']));
	$date2=date('d-m-Y',strtotime($_POST['date2']));
	
	$_SESSION["tipo"] = $tipo;
	$_SESSION["date1n"] = $date1;
	$_SESSION["date2n"] = $date2;
	

	
	if ($tipo=='entrada'){
	require("bd-u1.php");
	
	echo '<hr>'.'Periodo ' . $date1 .' até ' . $date2 . ' - ENTRADA'.'<hr>' ;
	//require_once ("bd-u1.php");
	/*

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
	
		
	//echo date('d-m-Y',  strtotime($date1)).'<br>';
	//echo date('d-m-Y',  strtotime($date2)).'<br>';
	
	echo "<table>" . "<tr>";
	echo "<th>" . $seq . "</th>";
	echo "<th>" . $emitente  . "</th>";
	echo "<th>" . $notafiscal . "</th>";
	echo "<th>" . $serie . "</th>";
	echo "<th>" . $datasel . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $origem . "</th>";
	echo "<th>" . $estado . "</th>";
	echo "<th>" . $baseicms . "</th>";
	echo "<th>" . $valoricms . "</th>";
	echo "<th>" . $basest  . "</th>";
	echo "<th>" . $valorst  . "</th>";
	echo "<th>" . $valortotal  . "</th>";
	echo "<th>" . $codigo  . "</th>";
	echo "<th>" . $chaveacesso . "</th>";
	echo "</tr>";

	function converte_data( $datacontrole ){
	if( preg_match('/([0-9]+)-([0-9]+)-([0-9]+)/', $datacontrole ) )
		return preg_replace( '/([0-9]+)-([0-9]+)-([0-9]+)/', '$3/$2/$1', $datacontrole );
	else
		return preg_replace( '/([0-9]+)\/([0-9]+)\/([0-9]+)/', '$3-$2-$1', $datacontrole );
	}
	
	$sql = ("SELECT DOCEMI, DOCNUM, DOCSER, DOCDTR, DOCNOP, DOCORI, DOCEST, DOCBIC, DOCVIC, DOCBST, DOCSBT, DOCVTN, DOCCOD, DOCCHA FROM TB_PCADOC WHERE DOCORI ='06' AND DOCCME ='110' AND DOCSTS <>'C' AND DOCDTR between '$date1' and '$date2' ORDER BY DOCNUM");
	foreach ($conn->query($sql) as $row) {
		
	$vinte = '20';
	$datacontrole = $row['DOCDTR'];
	$xcontador = ($contador ++);
	
    echo "<tr>" ;
	echo "<td>" . $xcontador . "</td>";
	echo "<td>" . $row['DOCEMI'] . "</td>";
	echo "<td>" . $row['DOCNUM'] . "</td>";
	echo "<td>" . $row['DOCSER'] . "</td>";
	echo "<td>" . $datacontrole. "</td>";
	echo "<td>" . $row['DOCNOP'] . "</td>";
	echo "<td>" . $row['DOCORI'] . "</td>";
	echo "<td>" . $row['DOCEST'] . "</td>";
	if (isset ($row['DOCBIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row['DOCBIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCVIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row['DOCVIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCBST'])){
	echo "<td>" . number_format (str_replace(",",".",$row['DOCBST']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCSBT'])){
	echo "<td>" . number_format (str_replace(",",".",$row['DOCSBT']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCVTN'])){
	echo "<td>" . number_format (str_replace(",",".",$row['DOCVTN']),"2",",",""). "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	echo "<td>" . $row['DOCCOD'] . "</td>";
	if (isset ($row['DOCCHA'])){
	echo "<td>" . $aspas.$row['DOCCHA'].$aspas . "</td>" . "</tr>";
	}else echo "<td>" . $aspas.'Não Consta Chave de Acesso'.$aspas . "</td>"; 
	
	
	}
	
	echo "</table>" ."</font>";
	*/
	echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";
	         
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
	
	echo '<hr>'.'Periodo ' . $date1 .' até ' . $date2 . ' - SAIDA'.'<hr>' ;
	/*
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
	
	
	
	//echo date('d-m-Y',  strtotime($date1)).'<br>';
	//echo date('d-m-Y',  strtotime($date2)).'<br>';
	
	echo "<table>" . "<tr>";
	echo "<th>" . $seq . "</th>";
	echo "<th>" . $emitente  . "</th>";
	echo "<th>" . $notafiscal . "</th>";
	echo "<th>" . $serie . "</th>";
	echo "<th>" . $datasel . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $origem . "</th>";
	echo "<th>" . $estado . "</th>";
	echo "<th>" . $baseicms . "</th>";
	echo "<th>" . $valoricms . "</th>";
	echo "<th>" . $valortotal  . "</th>";
	echo "<th>" . $codigo  . "</th>";
	echo "<th>" . $cliente  . "</th>";
	echo "<th>" . $cpfcnpj  . "</th>";
	echo "<th>" . $chaveacesso . "</th>";
	echo "</tr>";

	function converte_data( $datacontrole ){
	if( preg_match('/([0-9]+)-([0-9]+)-([0-9]+)/', $datacontrole ) )
		return preg_replace( '/([0-9]+)-([0-9]+)-([0-9]+)/', '$3/$2/$1', $datacontrole );
	else
		return preg_replace( '/([0-9]+)\/([0-9]+)\/([0-9]+)/', '$3-$2-$1', $datacontrole );
	}
	
	$sql = ("SELECT * FROM TB_PCADOC WHERE DOCORI ='03' AND DOCCME ='210' AND DOCSTS <>'C' AND DOCSER ='55' AND DOCDTR between '$date1' and '$date2' ORDER BY DOCNUM");
	foreach ($conn->query($sql) as $row) {
		
	$vinte = '20';
	$datacontrole = $row['DOCDTR'];
	$ncontrole_cli = $row['DOCCGC_CLI'];
	$xcontador = ($contador ++);
	
    echo "<tr>" ;
	echo "<td>" . $xcontador . "</td>";
	echo "<td>" . $row['DOCEMI'] . "</td>";
	echo "<td>" . $row['DOCNUM'] . "</td>";
	echo "<td>" . $row['DOCSER'] . "</td>";
	echo "<td>" . $datacontrole . "</td>";
	echo "<td>" . $row['DOCNOP'] . "</td>";
	echo "<td>" . $row['DOCORI'] . "</td>";
	echo "<td>" . $row['DOCEST'] . "</td>";
	if (isset ($row['DOCBIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row['DOCBIC']),"2",",",""). "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCVIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row['DOCVIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row['DOCVTN'])){
	echo "<td>" . number_format (str_replace(",",".",$row['DOCVTN']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	echo "<td>" . $row['DOCCOD'] . "</td>";
	echo "<td>" . $row['DOCNOM_CLI'] . "</td>";
	echo "<td>" . $ncontrole_cli. "</td>";
	if (isset ($row['DOCCHA'])){
	echo "<td>" . $aspas.$row['DOCCHA'].$aspas . "</td>" . "</tr>";
	}else echo "<td>" . $aspas.'Não Consta Chave de Acesso'.$aspas . "</td>"; 
	
	
	}
	
	echo "</table>" ."</font>";
	*/
	echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";
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
	
	echo '<hr>'.'Periodo ' . $date1 .' até ' . $date2 . ' - 90 DIAS'.'<hr>'	;
	
	echo 'Não Gerado' . '<hr>';
	}
	
	echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";
	/*<font size="3" face="Calibri">
	<ul>
		<li><a href="select-vei-ent-relb.php" target="iframe_b" onclick="submit()">Visualizar</button></a></li>
		<li><a href="select-vei-ent-rel-xls.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>*/
    ?>	

		
		
	 
	</body>
</html>