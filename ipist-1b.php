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
  
	<?php
	// SELECT DOIEMI, DOINUM, DOISER, DOIDTR, DOINOP, DOICME, DOIORI, DOITRD, DOILIN, DOIPRO, DOIBIC, DOIAIC, DOIVIC, DOIBST, DOICST_GER, DOIVTI, DOIIPI FROM TB_PCADOI WHERE DOILIN='PI' AND DOISTS <> 'C' AND DOIDTR >= to_date ('01.08.2019','DD.MM.YYYY') ORDER BY DOIEMI
	require_once ("bd-u1.php");
	
	
	$date1n = $_SESSION['date1n'];
	$date2n = $_SESSION['date2n'];
	
	$contador = 1;
	//DOIEMI, DOINUM, DOISER, DOIDTR, DOINOP, DOICME, DOIORI, DOITRD, DOILIN, DOIPRO, DOIBIC, DOIAIC, DOIVIC, DOIBST, DOICST_GER, DOIVTI, DOIIPI 
	$seq = 'SEQ';
	$emitente='EMITENTE';
	$notafiscal='NF';
	$serie='SERIE';
	$datasel='DATA';
	$nop='NOP';
	$cme='CME';
	$ori='ORIGEM';
	$emp='EMPRESA';
	$linha='LINHA';
	$pro='PRODUTO';
	$bicms='BASE ICMS';
	$ali='ALIQUOTA';
	$vicms='VALOR ICMS';
	$bst='BASE ST';
	$vst='VALOR ST';
	$vt='VALOR TOTAL';
	$ipi='IPI';
	
	echo '<hr>'.'Periodo ' . $date1n . ' ' . ' até ' . $date2n .'<hr>';
	
	echo "<table>" . "<tr>";
	echo "<th>" . $seq . "</th>";
	echo "<th>" . $emitente  . "</th>";
	echo "<th>" . $notafiscal . "</th>";
	echo "<th>" . $serie . "</th>";
	echo "<th>" . $datasel . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $cme . "</th>";
	echo "<th>" . $ori . "</th>";
	echo "<th>" . $emp . "</th>";
	echo "<th>" . $linha  . "</th>";
	echo "<th>" . $pro  . "</th>";
	echo "<th>" . $bicms  . "</th>";
	echo "<th>" . $ali  . "</th>";
	echo "<th>" . $vicms . "</th>";
	echo "<th>" . $bst . "</th>";
	echo "<th>" . $vst . "</th>";
	echo "<th>" . $vt . "</th>";
	echo "<th>" . $ipi . "</th>";
	echo "</tr>";

	function converte_data( $datacontrole ){
	if( preg_match('/([0-9]+)-([0-9]+)-([0-9]+)/', $datacontrole ) )
		return preg_replace( '/([0-9]+)-([0-9]+)-([0-9]+)/', '$3/$2/$1', $datacontrole );
	else
		return preg_replace( '/([0-9]+)\/([0-9]+)\/([0-9]+)/', '$3-$2-$1', $datacontrole );
	}
	
		
	$sql = ("SELECT DOIEMI, DOINUM, DOISER, DOIDTR, DOINOP, DOICME, DOIORI, DOITRD, DOILIN, DOIPRO, DOIBIC, DOIAIC, DOIVIC, DOIBST, DOICST_GER, DOIVTI, DOIIPI FROM TB_PCADOI WHERE DOILIN='PI' AND DOISTS <> 'C' AND DOIDTR between '$date1n' and '$date2n' ORDER BY DOIEMI");
	foreach ($conn->query($sql) as $row) {

	$xcontador = ($contador ++);
	
    echo "<tr>" ;
	echo "<td>" . $xcontador . "</td>";
	echo "<td>" . $row['DOIEMI'] . "</td>";
	echo "<td>" . $row['DOINUM'] . "</td>";
	echo "<td>" . $row['DOISER'] . "</td>";
	echo "<td>" . $row['DOIDTR'] . "</td>";
	echo "<td>" . $row['DOINOP'] . "</td>";
	echo "<td>" . $row['DOICME'] . "</td>";
	echo "<td>" . $row['DOIORI'] . "</td>";
	echo "<td>" . $row['DOITRD'] . "</td>";
	echo "<td>" . $row['DOILIN'] . "</td>";
	echo "<td>" . $row['DOIPRO'] . "</td>";
	echo "<td>" . $row['DOIBIC'] . "</td>";
	echo "<td>" . $row['DOIAIC'] . "</td>";
	echo "<td>" . $row['DOIVIC'] . "</td>";
	echo "<td>" . $row['DOIBST'] . "</td>";
	echo "<td>" . $row['DOICST_GER'] . "</td>";
	echo "<td>" . $row['DOIVTI'] . "</td>";
	echo "<td>" . $row['DOIIPI'] . "</td>";
	}

	echo "</table>" ."</font>";
	
       echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";
	?>		
	 <font size="3" face="Calibri">
	 <hr>
	<ul>
		<li><a href="ipist-1-xls.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>
	</body>
</html>