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
		<font face="Calibri"> 
		</nav>	
	
		<hr>
		<strong>Campos Atualizados</strong> <br><hr>
	<?php
	

	$nota = $_SESSION["nota"];
	$unidade = $_SESSION['uni'];
	$ncontrolepeca = $_SESSION['ncontrolepeca'];
	


	if ($unidade=='U00001'){
	require("bd-u1.php");}
	elseif ($unidade=='U00002'){
	require("bd-u2.php");}
	elseif ($unidade=='U00003'){
	require("bd-u3.php");}
	elseif ($unidade=='U00004'){
	require("bd-u4.php");}
	elseif ($unidade=='U00008'){
	require("bd-u8.php");}
	elseif ($unidade=='U00009'){
	require("bd-u9.php");}
	elseif ($unidade=='U00112'){
	require("bd-u112.php");}
	elseif ($unidade=='U00222'){
	require("bd-u222.php");}
	elseif ($unidade=='U00224'){
	require("bd-u224.php");}
	
	

	$sql = ("SELECT * FROM TB_PCADOI WHERE DOINUM = '$nota' AND DOIEMI = '$unidade'");
	foreach ($conn->query($sql) as $row) {
	$oito = '8';
	$upemi1 = $row['DOIEMI'];
	$upnota1 = $row['DOINUM'];
	$upserie1 = $row['DOISER'];
	$updare = $_POST['updare'];
	

     
	//Peça
	
	//$upvaloripiX = $_POST['upvaloripiX'];

	
	//Total
	
	//$uptotalipiX = $_POST['uptotalipiX'];


	
		//1 - VALOR IPI
	$sql=("UPDATE TB_PCADOI SET DOIFDC =:oito WHERE DOIEMI = :upemi1 AND DOINUM = :upnota1 AND DOISER=:upserie1 AND DOISEQ=:updare ");
	  
		$sql = $conn->prepare($sql);
        $sql->bindParam(1, $oito);
        $sql->bindParam(2, $upemi1);
        $sql->bindParam(3, $upnota1);
        $sql->bindParam(4, $upserie1);
		$sql->bindParam(5, $updare);

        $sql->execute();


	}
	
	
//Cabeçalho 
		
	$seq='Seq';
	$uni='Unidade';
	$notafiscal='NF';
	$serie='Serie';
	$datasel='Data';
	$ncliente='Cod Cliente';
	$cliente='Cliente';
	$valort='Vlr Total';
	$nop='NOP';
	$cme='CME';
	$ipi='IPI';
	$valoripip='Vlr IPI Peça';
	$valorbi='BC ICMS Peça';
	$valorvi='Vlr ICMS Peça';
	$valorbst='BC-ST Peça';
	$valorvst='ICMS-ST Peça';
	$valorbit='BC ICMS Total';
	$valorvit='Vlr ICMS Total';
	$valorbstt='BC-ST Total';
	$valorvstt='ICMS-ST Total';
	
	$frete='Frete';
	$produto='Codigo Produto';
	$dproduto='Descrição Produto';
	$campodare='DARE';
	
	$sql1 = ("SELECT * FROM TB_PCADOC WHERE DOCNUM = '$nota' AND DOCEMI = '$unidade' ");
	foreach ($conn->query($sql1) as $row1) {
	$_SESSION["nota"] = $nota;
	$_SESSION["uni"] = $unidade;
	$nserieserie = $row1['DOCSER'];
	$nclicli = $row1['DOCCLI'];
	$_SESSION["serie"] = $nserieserie;
	$_SESSION["cliente"] = $nclicli;
	
	if (isset($row1['DOCNUM'])){
	echo "<table>";
	echo "<tr>";
    echo "<th>" . $uni . "</th>";
	echo "<th>" . $notafiscal . "</th>";
	echo "<th>" . $serie . "</th>";
	echo "<th>" . $datasel . "</th>";	
	echo "<th>" . $ncliente . "</th>";
	echo "<th>" . $cliente . "</th>";
	echo "<th>" . $ipi . "</th>";
	echo "<th>" . $valorbit . "</th>";
	echo "<th>" . $valorvit . "</th>";
	echo "<th>" . $valorbstt . "</th>";
	echo "<th>" . $valorvstt . "</th>";
	echo "<th>" . $frete . "</th>";
	echo "<th>" . $valort . "</th>";
	
	echo "<tr>";
	echo "<td>" . $row1['DOCEMI'] . "</td>";
	echo "<td>" . $row1['DOCNUM'] . "</td>";
	echo "<td>" . $row1['DOCSER'] . "</td>";
	echo "<td>" . $row1['DOCDTR'] . "</td>";
	echo "<td>" . $row1['DOCCLI'] . "</td>";
	echo "<td>" . $row1['DOCNOM_CLI'] . "</td>";
	echo "<td>" . $row1['DOCVIP'] . "</td>";
	echo "<td>" . $row1['DOCBIC'] . "</td>";
	echo "<td>" . $row1['DOCVIC'] . "</td>";
	echo "<td>" . $row1['DOCBST'] . "</td>";
	echo "<td>" . $row1['DOCSBT'] . "</td>";
	echo "<td>" . $row1['DOCDAC'] . "</td>";
	echo "<td>" . $row1['DOCVTN'] . "</td>";
	echo "</table>"."<hr>" ;
		
	}
	

	}

	echo "<table>";
	echo "<tr>";
	echo "<th>" . $seq . "</th>";
	echo "<th>" . $produto . "</th>";
	echo "<th>" . $dproduto . "</th>";
	echo "<th>" . $valoripip . "</th>";
	echo "<th>" . $valorbi . "</th>";
	echo "<th>" . $valorvi . "</th>";
	echo "<th>" . $valorbst . "</th>";
	echo "<th>" . $valorvst . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $cme . "</th>";
	echo "<th>" . $frete . "</th>";
	echo "<th>" . $campodare . "</th>";

	$sql = ("SELECT * FROM TB_PCADOI WHERE DOINUM = '$nota' AND DOIEMI = '$unidade' ");
	foreach ($conn->query($sql) as $row) {
	$ncontrolepeca = $row['DOISEQ'];
	$_SESSION["ncontrolepeca"] = $ncontrolepeca;
	

	echo "<tr>";
	echo "<td>" . $row['DOISEQ'] . "</td>";
	echo "<td>" . $row['DOIPRO'] . "</td>";
	echo "<td>" . $row['DOIDES'] . "</td>";
	echo "<td>" . $row['DOIIPI'] . "</td>";
	echo "<td>" . $row['DOIBIC'] . "</td>";
	echo "<td>" . $row['DOIVIC'] . "</td>";
	echo "<td>" . $row['DOIBST'] . "</td>";
	echo "<td>" . $row['DOICST'] . "</td>";
	echo "<td>" . $row['DOINOP'] . "</td>";
	echo "<td>" . $row['DOICME'] . "</td>";
	echo "<td>" . $row['DOIDAC'] . "</td>";
	echo "<td>" . $row['DOIFDC'] . "</td>";

	
	}
	
	echo "</table>" ;

	
	
				?>
				
	<hr>

	
		 
	</body>
</html>