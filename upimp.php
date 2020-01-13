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
  font-family: Calibri;
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
  font-family: Calibri;
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
   font-family: Calibri;
}

.dropdown-content a {
  color: white;
  padding: 4px 8px;
  text-decoration: none;
  display: block;
  text-align: left;
   font-family: Calibri;
}

.dropdown-content a:hover {background-color: #A9A9A9;}

.dropdown:hover .dropdown-content {
  display: block;
}
.footer {
    position:absolute;
    bottom:0;
    width:100%;
	 font-family: Calibri;
}
</style>
</head>
		<body>
	
		<nav>
		<font size="2" face="Calibri">
		</nav>	
	
		<hr>
		<strong>Campos Atualizados</strong>
	<?php
	
	$nota = $_SESSION["nota"];
	$serie = $_SESSION["serie"];
	$n10 = 'E';
	$n11 = '110';
	$n12 = '35';
 

	require("bd-u1.php");

	$sqldoc = ("SELECT * FROM TB_PCADOC WHERE DOCNUM = '$nota' AND DOCSER='$serie' AND DOCSES='$n10' AND DOCCME='$n11' AND DOCORI='$n12'");
	foreach ($conn->query($sqldoc) as $rowdoc) {
		
	$upnota1 = $rowdoc['DOCNUM'];
	$upnota2 = $rowdoc['DOCSER'];
	$upnota3 = $rowdoc['DOCSES'];
	$upnota4 = $rowdoc['DOCCME'];
	$upnota5 = $rowdoc['DOCORI'];
	
	$sqldoi = ("SELECT * FROM TB_PCADOI WHERE DOINUM = '$nota' AND DOISER='$serie' AND DOISES='$n10' AND DOICME='$n11' AND DOIORI='$n12'");
	foreach ($conn->query($sqldoi) as $rowdoi) {
	
	$upnota1i = $rowdoi['DOINUM'];
	$upnota2i = $rowdoi['DOISER'];
	$upnota3i = $rowdoi['DOISES'];
	$upnota4i = $rowdoi['DOICME'];
	$upnota5i = $rowdoi['DOIORI'];
	
	//Controle
	$n1 = '3102';
	$n2 = 'PE';

	$sqldoc=("UPDATE TB_PCADOC SET DOCEST =:n2 WHERE DOCNUM = :upnota1 AND DOCSER=:upnota2 AND DOCSES=:upnota3 AND DOCCME=:upnota4 AND DOCORI=:upnota5 ");
	  
		$sqldoc = $conn->prepare($sqldoc);
        $sqldoc->bindParam(1, $n2);
        $sqldoc->bindParam(2, $upnota1);
		$sqldoc->bindParam(3, $upnota2);
		$sqldoc->bindParam(4, $upnota3);
		$sqldoc->bindParam(5, $upnota4);
		$sqldoc->bindParam(6, $upnota5);
		   
        $sqldoc->execute();	
		
	$sqldoi=("UPDATE TB_PCADOI SET DOIEST =:n2 WHERE DOINUM = :upnota1i AND DOISER=:upnota2i AND DOISES=:upnota3i AND DOICME=:upnota4i AND DOIORI=:upnota5i ");
	  
		$sqldoi = $conn->prepare($sqldoi);
        $sqldoi->bindParam(1, $n2);
        $sqldoi->bindParam(2, $upnota1i);
		$sqldoi->bindParam(3, $upnota2i);
		$sqldoi->bindParam(4, $upnota3i);
		$sqldoi->bindParam(5, $upnota4i);
		$sqldoi->bindParam(6, $upnota5i);
		   
        $sqldoi->execute();	

	
	
	

	
	
	}

	}
	
	echo '<hr>' .'<h3 style="background-color:Yellow;">' . 'Nota Fiscal de Importação ' . '</h3>';
	echo '<strong>' . '<hr>' . 'Nota Fiscal de Importação: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . $serie . '<strong>' . ' Emitente: ' . '</strong>' . $rowdoc['DOCEMI'] . '<strong>' . ' Chave de Acesso: ' . '</strong>' . $rowdoc['DOCCHA'] . '<hr>' ;


	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . 'Emitente' . "</th>";
	echo "<th>" . 'Nota Fiscal' . "</th>";
	echo "<th>" . 'Serie' . "</th>";
	echo "<th>" . 'Data' . "</th>";
	echo "<th>" . 'Unidade' . "</th>";
	echo "<th>" . 'Valor Contabil' . "</th>";
	echo "<th>" . 'CME' . "</th>";
	echo "<th>" . 'NOP' . "</th>";
	echo "<th>" . 'UF' . "</th>";
	
	echo "<tr>";
	echo "<td>" . $rowdoc['DOCEMI'] . "</td>";
	echo "<td>" . $rowdoc['DOCNUM'] . "</td>";
	echo "<td>" . $rowdoc['DOCSER'] . "</td>";
	echo "<td>" . $rowdoc['DOCDTR'] . "</td>";
	echo "<td>" . $rowdoc['DOCEMP'] . "</td>";
	echo "<td>" . $rowdoc['DOCVTN'] . "</td>";
	echo "<td>" . $rowdoc['DOCCME'] . "</td>";
	echo "<td>" . $rowdoc['DOCNOP'] . "</td>";
	echo "<td>" . $rowdoc['DOCEST'] . "</td>";
	
	

	echo "</tr>";
	echo "</table>" . "<hr>";
	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . 'Seq' . "</th>";
	echo "<th>" . 'Descrição' . "</th>";
	echo "<th>" . 'Peça' . "</th>";
	echo "<th>" . 'Qtde' . "</th>";
	echo "<th>" . 'NCM' . "</th>";
	echo "<th>" . 'Valor Contabil' . "</th>";
	echo "<th>" . 'CME' . "</th>";
	echo "<th>" . 'NOP' . "</th>";
	echo "<th>" . 'UF' . "</th>";
	
	echo "<tr>";
	
	$sqldoi = ("select * from TB_PCADOI where DOINUM = '$nota' AND DOISER='$serie' AND DOISES='E' AND DOICME='110' AND DOIORI='35'");
	foreach ($conn->query($sqldoi) as $rowdoi) {
	
	echo "<td>" . $rowdoi['DOISEQ'] . "</td>";
	echo "<td>" . $rowdoi['DOIDES'] . "</td>";
	echo "<td>" . $rowdoi['DOIPRO'] . "</td>";
	echo "<td>" . $rowdoi['DOIQTD'] . "</td>";
	echo "<td>" . $rowdoi['DOINCM'] . "</td>";
	echo "<td>" . $rowdoi['DOIVTI'] . "</td>";
	echo "<td>" . $rowdoi['DOICME'] . "</td>";
	echo "<td>" . $rowdoi['DOINOP'] . "</td>";
	echo "<td>" . $rowdoi['DOIEST'] . "</td>";
	
	
	echo "</tr>";
	

	}

	echo "</table>" . "<hr>";
	

	?>

	

		 </ul>
	</body>
</html>