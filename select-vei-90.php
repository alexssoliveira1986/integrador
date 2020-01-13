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
		<font face="Calibri"> 
		</nav>	
	
		<p>
		<ul>
		
		<li class="dropdown">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
    <i class="far fa-edit"></i>
  </a>
			<div class="dropdown-content">
			</div>
			</li>
	 <li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Relatórios</a><a class="fas fa-chevron-right"></a><font color="white"> Relatório Veiculo 90 Dias</font>
		
			</li>
			</ul>
		<br>
		<font size="2" face="Calibri">
		<table>
  
	<?php
	//<div style="float:left;">ESQUERDA</div>
	//<div style="float:left;">DIREITA</div>
	require_once ("bd-u1.php");

	$contador = 1;
	$contador2 = 1;
	
	$reg='Registros';
	$sts='Status';
	$familia='Familia';
	$codmodfab='Codigo Modelo Fabrica';
	$descmodelo='Descrição Modelo';
	$quant='Quantidade em Estoque';
	$ven90='Vendidos em 90 Dias';
	$dif='Diferença';

	$dataatual = date('d-m-Y');
	$data90 = date('d-m-Y', strtotime('-3 month'));
	$data902 = "to_date ('23.04.2019','DD.MM.YYYY')";
	
	echo '<strong>'.'Periodo de 90 Dias - Data Inicial '. $data90 .' até '. $dataatual ."<br>"."<br>";

	echo "<table>" . "<tr>";
	echo "<th>" . $reg . "</th>";
	//echo "<th>" . $sts . "</th>";
	echo "<th>" . $codmodfab . "</th>";
	//echo "<th>" . $familia . "</th>";
	echo "<th>" . $descmodelo . "</th>";
	//echo "<th>" . $quant . "</th>";
	echo "<th>" . $ven90 . "</th>";
	//echo "<th>" . $dif . "</th>";
	echo "</tr>" ;

	$sql = ("SELECT VEIDFA, VEICFB,  COUNT( * ) VEICFB1 FROM TB_VEICAD WHERE VEIST1 = 'F' AND VEITPV ='N' AND VEITVD = ' ' AND VEIDTV between '$data90' and '$dataatual' GROUP BY VEICFB, VEIDFA ORDER BY VEIDFA");
	foreach ($conn->query($sql) as $row) {
	
	echo "<td>" . $contador ++  . "</td>";
	//echo "<td>" . $row['VEIST1'] . "</td>";
	echo "<td>" . $row['VEICFB'] . "</td>";	
	echo "<td>" . $row['VEIDFA'] . "</td>";
	//echo "<td>" . $row['VEIMOD'] . "</td>";
	echo "<td>" . $row['VEICFB1'] . "</td>";
	echo "</tr>" ;
	
	}
	
	//echo "</table>" . '<br>' ; 
	
	//echo 'Estoque Geral Novos ' ."<br>"."<br>";

	//echo "<table>" . "<tr>";
	echo "<th>" . $reg . "</th>";
	//echo "<th>" . $sts . "</th>";
	echo "<th>" . $codmodfab . "</th>";
	//echo "<th>" . $familia . "</th>";
	echo "<th>" . $descmodelo . "</th>";
	echo "<th>" . $quant . "</th>";
	echo "</tr>" ;

	$sql1 = ("SELECT VEIDFA, VEICFB, COUNT( * ) VEICFB2 FROM TB_VEICAD WHERE VEITVD = ' ' AND VEIST1 <> 'F' AND VEIUEX = ' ' AND VEITPV ='N' AND VEISVE <> 'P'  GROUP BY VEICFB, VEIDFA ORDER BY VEIDFA");
	foreach ($conn->query($sql1) as $row1) {
	
	echo "<td>" . $contador2 ++  . "</td>";
	//echo "<td>" . $row1['VEIST1'] . "</td>";
	echo "<td>" . $row1['VEICFB'] . "</td>";	
	echo "<td>" . $row1['VEIDFA'] . "</td>";
	//echo "<td>" . $row1['VEIMOD'] . "</td>";
	echo "<td>" . $row1['VEICFB2'] . "</td>";
	echo "</tr>" ;
	
	}
	
	echo "</table>" ."</font>"; 

	
	?>
	
	<br>
	<ul>
		<li><a class="active" onclick='history.go(-1)' target="_self" onclick="submit()">Voltar</button></a></li>
		<li><a href="select-vei-90-xls.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>

	 
	</body>
</html>