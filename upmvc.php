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
		<font size="2" face="Calibri">
		</nav>	
	
		<p>

		
		<font size="3" face="Calibri">
		<table>
		<hr>
		<strong>Campos Atualizados</strong> <hr>
	<?php
	
	
	$op = $_SESSION["op"];
	$num = $_SESSION['num'];
	$data = date('d-m-Y',strtotime($_SESSION["data"]));
	
	require("bd-u1.php");
	
	echo '<strong>' . 'OPERAÇÃO: ' . '</strong>' . $op . '<strong>' . ' NUMERAÇÃO: ' . '</strong>' . $num . '<strong>' . ' DATA: ' . '</strong>' . $data . '<strong>' . "<br>";
	echo '<hr>' . '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Campos Atualizados-> ' . '</h3>'.'</strong>' . '<hr>' . "<br>";  
	//Cabeçalho 
	
	$opera = 'OPERAÇÃO';
	$numeracao = 'NUMERAÇÃO';
	$data1 = 'DATA';
	$usue = 'USUARIO';
	//$seq = 'Seq';
	$zero = '';
	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . $usue . "</th>";
	//echo "<th>" . $seq . "</th>";
    echo "<th>" . $opera . "</th>";
	echo "<th>" . $numeracao . "</th>";
	echo "<th>" . $data1 . "</th>";
	echo "<th>" . 'STATUS' . "</th>";
	echo "<th>" . 'AJUSTADO' . "</th>";
	echo "<tr>";
	
	$sql = ("SELECT * FROM TB_CEBMOV where MVCOPR = '$op' AND MVCNTR = '$num' AND MVCDTP = '$data'");
	foreach ($conn->query($sql) as $row) {
		
		$opx = $row['MVCOPR'];
		$numx = $row['MVCNTR'];
		$datax = $row['MVCDTP'];
		
	$sql=("UPDATE TB_CEBMOV SET MVCATL =:zero where MVCOPR = :opx AND MVCNTR = :numx AND MVCDTP = :datax");
	  
		$sql = $conn->prepare($sql);
        $sql->bindParam(1, $zero);
        $sql->bindParam(2, $opx);
		$sql->bindParam(3, $numx);
		$sql->bindParam(4, $datax);
        
        $sql->execute();
	
		
	}
	$sql = ("SELECT * FROM TB_CEBMOV where MVCOPR = '$op' AND MVCNTR = '$num' AND MVCDTP = '$data'");
	foreach ($conn->query($sql) as $row) {
	
	echo "<td>" . '05642'. "</td>";
	//echo "<td>" . $row['MVCSEQ'] . "</td>";
	echo "<td>" . $row['MVCOPR'] . "</td>";
	echo "<td>" . $row['MVCNTR'] . "</td>";
	echo "<td>" . $row['MVCDTP'] . "</td>";
	echo "<td>" . $row['MVCATL']. "</td>";
	echo "<td>" . 'OK' . "</td>";
	
	echo "<tr>";
	
	}
	
	
	
	echo "</table>"."<br>"."<hr>" ;
	
	
	
	?>
	 
	</body>
</html>