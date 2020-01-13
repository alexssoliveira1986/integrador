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
	
		<p>

		
		<font size="3" face="Calibri">
		<table>
	
	
		
		
	<?php
	
	$codigo = $_POST['codigo'];

	require("bd-u1.php");
	
	$sql1 = ("SELECT * FROM TB_VEICAD WHERE VEICOD = '$codigo' ");
	foreach ($conn->query($sql1) as $row1) {
	echo '<hr>' . '<strong>' .  'Codigo: ' . '</strong>'
	. $codigo . '<strong>' .  ' | Tipo: ' . '</strong>'. $row1['VEITPV'] . '<strong>' .  ' | Marca: ' . '</strong>'.$row1['VEIMRC']
	. '<strong>' .  ' | Modelo: ' . '</strong>'.$row1['VEIMOD'] . '<strong>' . ' | Chassi: ' . '</strong>'. $row1['VEICHS'] . '<strong>' 
	. ' | Placa: ' . '</strong>'. $row1['VEIPLC'] . '<strong>' . ' | Proposta: ' . '</strong>' . $row1['VEINPR'].'<hr>';
	}
	$sql = ("SELECT * FROM TB_VEILOG WHERE logcod = '$codigo' ");
	foreach ($conn->query($sql) as $row) {
	if (isset($codigo)){
	

	}else 'Codigo Não Encontrado';

	
		
	}
		//Cabeçalho 
	
	$ncodigo='Codigo';	
	$seq='Seq';	
	$notafiscal='Nota Fiscal';
	$serie='Serie';
	$data='Data';
	$status='Status';
	$nop='NOP';
	$cme='CME';
	$emi='Emitente';
	$dest='Destinatario';
	$valor='Valor';
	$ori='Origem';
	$local1='Local';
	$local2='Destino';
	$dono='Dono';

	
	
	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . $seq . "</th>";
	echo "<th>" . $status . "</th>";
	echo "<th>" . $notafiscal . "</th>";
    echo "<th>" . $serie . "</th>";
	echo "<th>" . $data . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $cme . "</th>";
	echo "<th>" . $emi . "</th>";
	echo "<th>" . $dest . "</th>";
	echo "<th>" . $valor . "</th>";
	echo "<th>" . $ori . "</th>";
	
	$sql = ("SELECT * FROM TB_VEILOG WHERE logcod = '$codigo' ORDER BY LOGSEQ");
	foreach ($conn->query($sql) as $row) {
	echo "<tr>";
	echo "<td>" . $row['LOGSEQ'] . "</td>";
	echo "<td>" . $row['LOGSTS'] . "</td>";
	echo "<td>" . $row['LOGNNF'] . "</td>";
	echo "<td>" . $row['LOGSNF'] . "</td>";
	echo "<td>" . $row['LOGDNF'] . "</td>";
	echo "<td>" . $row['LOGNOP'] . "</td>";
	echo "<td>" . $row['LOGCME'] . "</td>";
	echo "<td>" . $row['LOGEMI'] . "</td>";
	echo "<td>" . $row['LOGDST'] . "</td>";
	
	if (isset($row['LOGVTN'])){
	echo "<td>" . number_format (str_replace(",",".",$row['LOGVTN']),"2",",","") . "</td>";
	}
	echo "<td>" . $row['LOGORI'] . "</td>";
	}
	echo "</table>" ;
	
	echo '<strong>' . '<hr>' . 'Local -> ' . '</strong>'.'<hr>';
	
	$sql1 = ("SELECT * FROM TB_VEICAD WHERE VEICOD = '$codigo' ");
	foreach ($conn->query($sql1) as $row1) {
	if (isset($codigo)){
	
	
	?>
	<font size="2" face="Calibri">
	<?php
	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . $local1 . "</th>";
	echo "<th>" . $local2 . "</th>";
	echo "<th>" . $ncodigo . "</th>";
    echo "<th>" . $status . "</th>";
	echo "<th>" . $dono . "</th>";
	
	echo "<tr>";
	echo "<td>" . $row1['VEILOC'] . "</td>";
	echo "<td>" . $row1['VEILFA'] . "</td>";
	echo "<td>" . $row1['VEICOD'] . "</td>";
	echo "<td>" . $row1['VEISTS'] . "</td>";
	echo "<td>" . $row1['VEIDON'] . "</td>";

	}
	
	}
	
	echo "</table>" ;
	?>
	<font size="3" face="Calibri">
	<?php
	echo '<strong>' . '<hr>' . 'Demostração -> ' . '</strong>'.'<hr>';
	$sql1 = ("SELECT * FROM TB_VEICAD WHERE VEICOD = '$codigo' ");
	foreach ($conn->query($sql1) as $row1) {
	if (isset($codigo)){
	?>
	<font size="2" face="Calibri">
	<?php
		
	echo "<table>";
	echo "<tr>";
	echo "<th>" . $notafiscal . "</th>";
	echo "<th>" . $serie . "</th>";
	echo "<th>" . $data . "</th>";
	echo "<th>" . $ncodigo . "</th>";
    echo "<th>" . $valor . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $cme . "</th>";
	
	echo "<tr>";
	echo "<td>" . $row1['VEINNT'] . "</td>";
	echo "<td>" . $row1['VEISNT'] . "</td>";
	echo "<td>" . $row1['VEIDNT'] . "</td>";
	echo "<td>" . $row1['VEICOD'] . "</td>";
	if (isset($row1['VEIVNT'])){
	echo "<td>" . number_format (str_replace(",",".",$row1['VEIVNT']),"2",",","") . "</td>";
	}
	echo "<td>" . $row1['VEINOT'] . "</td>";
	echo "<td>" . $row1['VEICMT'] . "</td>";

	
	echo "</table>" ;
	}
	
	}

?>
	<font size="3" face="Calibri">
	<?php
	echo '<strong>' . '<hr>' . 'Proposta  -> ' . '</strong>'.'<hr>';
	$sql2 = ("SELECT * FROM TB_VEIPRP WHERE PRPVEC = '$codigo'");
	foreach ($conn->query($sql2) as $row2) {	

		if ($row1['VEICOD'] == $row2['PRPVEC']){
		if ($row2['PRPSTS'] == 'F'){
			?>
	<font size="2" face="Calibri">
	<?php
	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . 'Proposta' . "</th>";
	echo "<th>" . $status . "</th>";
	echo "<th>" . $data . "</th>";
	echo "<th>" . $ncodigo . "</th>";
	echo "<tr>";
	echo "<td>" . $row2['PRPNPR'] . "</td>";
	echo "<td>" . $row2['PRPSTS'] . "</td>";
	echo "<td>" . $row2['PRPDTR'] . "</td>";
	echo "<td>" . $row2['PRPVEC'] . "</td>";

	
	echo "</table>" ;
		}
		}
	}
		
				?>
	
	</body>
</html>