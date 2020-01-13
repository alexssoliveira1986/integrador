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
	<?php
	
	$op = $_POST['op'];
	$num = $_POST['num'];
	$data = date('d-m-Y',strtotime($_POST['data']));
	
	$_SESSION["op"] = $op;
	$_SESSION["num"] = $num;
	$_SESSION["data"] = $data;
	
	require("bd-u1.php");
	
	echo '<strong>' . 'OPERAÇÃO: ' . '</strong>' . $op . '<strong>' . ' NUMERAÇÃO: ' . '</strong>' . $num . '<strong>' . ' DATA: ' . '</strong>' . $data . '<strong>' . '<hr>'."<br>";
	
	//Cabeçalho 
	
	$opera = 'OPERAÇÃO';
	$numeracao = 'NUMERAÇÃO';
	$data1 = 'DATA';
	$usue = 'USUARIO';
	$seq = 'Seq';
	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . $usue . "</th>";
	//echo "<th>" . $seq . "</th>";
    echo "<th>" . $opera . "</th>";
	echo "<th>" . $numeracao . "</th>";
	echo "<th>" . $data1 . "</th>";
	echo "<th>" . 'STATUS' . "</th>";
	echo "<th>" . 'AJUSTE' . "</th>";
	echo "<tr>";
	
	
	$sql = ("SELECT MVCATL, MVCOPR, MVCNTR, MVCDTP FROM TB_CEBMOV where MVCOPR = '$op' AND MVCNTR = '$num' AND MVCDTP = '$data' GROUP BY MVCATL,MVCOPR, MVCNTR, MVCDTP ");
	foreach ($conn->query($sql) as $row) {
		
	if (isset($row['MVCOPR']) && ($row['MVCNTR'])){	
	
	$op1 = $row['MVCOPR'];
	$op2 = $row['MVCNTR'];
	$aj = $row['MVCATL'];
	$um = "' 1 '";
	$vazio = "' Vazio '";
	
	echo "<td>" . '05642'. "</td>";
	//echo "<td>" . $row['MVCSEQ'] . "</td>";
	echo "<td>" . $row['MVCOPR'] . "</td>";
	echo "<td>" . $row['MVCNTR'] . "</td>";
	echo "<td>" . $row['MVCDTP'] . "</td>";
	echo "<td>" . $aj. "</td>";
	if ($aj == '1'){
	if ($aj == ' '){
	echo "<td>" . 'Corrigir clique em Atualizar' . "</td>";
	}else echo "<td>" .'Somente Status ' . $um .' ou ' . $vazio .' deixa Atualizar' . "</td>";
	}else echo "<td>" .'Somente Status ' . $um .' ou ' . $vazio .' deixa Atualizar' . "</td>";
	
	echo "<tr>";
	
	
	}
	
	}
	
	echo "</table>"."<br>"."<hr>" ;
	
	
	if (isset($aj) && ($aj == '1') or ($aj == ' ')){

		
	echo '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Atualizar Dados-> ' . '</h3>' . '</strong>';

	echo '<form action="upmvc.php" id="upmvc" target="iframe_b" method="POST" enctype="multipart/form-data" >'.'<hr>'
	.' '.'<input type="submit" class="button" name="enviar" value="Atualizar">'
	.'</form>';
	}
	
	
				?>
	

	 
	</body>
</html>