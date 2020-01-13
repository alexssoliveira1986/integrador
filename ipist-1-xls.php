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
		<font face="Calibri"> 
		</nav>	
		<p>
		<br>
		<font size="2" face="Calibri">
		<table>
  
	<?php
	require_once ("bd-u1.php");
	

	$date1n = $_SESSION['date1n'];
	$date2n = $_SESSION['date2n'];
	
	$arquivo = $date1n.'-'.$date2n.'-'.'ipi-st.xls';
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

	
	$html = '';	
	$html .=  "<table>" . "<tr>";
	$html .=  "<table>" . "<tr>";
	$html .=  "<th>" . $seq . "</th>";
	$html .=  "<th>" . $emitente  . "</th>";
	$html .=  "<th>" . $notafiscal . "</th>";
	$html .=  "<th>" . $serie . "</th>";
	$html .=  "<th>" . $datasel . "</th>";
	$html .=  "<th>" . $nop . "</th>";
	$html .=  "<th>" . $cme . "</th>";
	$html .=  "<th>" . $ori . "</th>";
	$html .=  "<th>" . $emp . "</th>";
	$html .=  "<th>" . $linha  . "</th>";
	$html .=  "<th>" . $pro  . "</th>";
	$html .=  "<th>" . $bicms  . "</th>";
	$html .=  "<th>" . $ali  . "</th>";
	$html .=  "<th>" . $vicms . "</th>";
	$html .=  "<th>" . $bst . "</th>";
	$html .=  "<th>" . $vst . "</th>";
	$html .=  "<th>" . $vt . "</th>";
	$html .=  "<th>" . $ipi . "</th>";
	$html .=  "</tr>";

	function converte_data( $datacontrole ){
	if( preg_match('/([0-9]+)-([0-9]+)-([0-9]+)/', $datacontrole ) )
		return preg_replace( '/([0-9]+)-([0-9]+)-([0-9]+)/', '$3/$2/$1', $datacontrole );
	else
		return preg_replace( '/([0-9]+)\/([0-9]+)\/([0-9]+)/', '$3-$2-$1', $datacontrole );
	}
	
		
	$sql = ("SELECT DOIEMI, DOINUM, DOISER, DOIDTR, DOINOP, DOICME, DOIORI, DOITRD, DOILIN, DOIPRO, DOIBIC, DOIAIC, DOIVIC, DOIBST, DOICST_GER, DOIVTI, DOIIPI FROM TB_PCADOI WHERE DOILIN='PI' AND DOISTS <> 'C' AND DOIDTR between '$date1n' and '$date2n' ORDER BY DOIEMI");
	foreach ($conn->query($sql) as $row) {

	$xcontador = ($contador ++);
	
    $html .=  "<tr>" ;
	$html .=  "<td>" . $xcontador . "</td>";
	$html .=  "<td>" . $row['DOIEMI'] . "</td>";
	$html .=  "<td>" . $row['DOINUM'] . "</td>";
	$html .=  "<td>" . $row['DOISER'] . "</td>";
	$html .=  "<td>" . $row['DOIDTR'] . "</td>";
	$html .=  "<td>" . $row['DOINOP'] . "</td>";
	$html .=  "<td>" . $row['DOICME'] . "</td>";
	$html .=  "<td>" . $row['DOIORI'] . "</td>";
	$html .=  "<td>" . $row['DOITRD'] . "</td>";
	$html .=  "<td>" . $row['DOILIN'] . "</td>";
	$html .=  "<td>" . $row['DOIPRO'] . "</td>";
	$html .=  "<td>" . $row['DOIBIC'] . "</td>";
	$html .=  "<td>" . $row['DOIAIC'] . "</td>";
	$html .=  "<td>" . $row['DOIVIC'] . "</td>";
	$html .=  "<td>" . $row['DOIBST'] . "</td>";
	$html .=  "<td>" . $row['DOICST_GER'] . "</td>";
	$html .=  "<td>" . $row['DOIVTI'] . "</td>";
	$html .=  "<td>" . $row['DOIIPI'] . "</td>";
	}

	$html .=  "</table>" ."</font>";
	
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		echo $html;
		exit; 
	?>
<br>
	<ul>
		</ul>	 
	</body>
</html>