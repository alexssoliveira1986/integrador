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
		<a href="javascript:void(0)" class="dropbtn">Consultas</a><a class="fas fa-chevron-right"></a><font color="white"> Consulta NF por Data com Erro</font>

			</li>
			</ul>
	
	<?php
	$contador = 1;
	$unidade = $_POST['unidade'];
	$date1=date('d-m-Y',strtotime($_POST['date1']));
	$date2=date('d-m-Y',strtotime($_POST['date2']));
	
	
	if ($unidade=='todas'){
	require("bd-todas.php");
	
	
	echo  '<hr>'.'<strong>'.'<h3 style="background-color:Tomato;">' . 'Nota Fiscal Não Validada na Receita ' .  '</h3>'.'</strong>' .'<hr>';
	echo '<strong>' . 'Periodo ' .'</strong>' . $date1 . ' ';
	echo '<strong>' .' até '.'</strong>'  . $date2 . '<hr>' ;//. "<script>alert('Reemita a NF caso queria efetuar o Download do XML Invalido');</script>";;
	
	$seq='Seq';
	$sst='Status';
	$datadata = 'Data';
	$unidadeunidade = 'Unidade';
	$notanota = 'Nota Fiscal';
	$serieserie = 'Serie';
	$chavechave = 'Chave de Acesso';
	$baixarnf = 'Download';
	
	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . $seq . "</th>"; 
	echo "<th>" . $sst . "</th>"; 
	echo "<th>" . $datadata . "</th>"; 
	echo "<th>" . $unidadeunidade . "</th>"; 
	echo "<th>" . $notanota . "</th>"; 
	echo "<th>" . $serieserie . "</th>"; 
	echo "<th>" . $chavechave . "</th>"; 
	//echo "<th>" . $baixarnf . "</th>"; 
	
	$sql3 = ("select * from TB_FATNFE_KEY where NFESTS_KEY = '1' AND NFEDTR_KEY between '$date1' and '$date2' order by NFEEMI_KEY");
	foreach ($conn->query($sql3) as $row3) {
	$xcontador = ($contador ++);
	
	echo "<tr>";
	echo "<td>" . $xcontador . "</td>";
	echo "<td>" . $sst1 = $row3['NFESTS_KEY'] . "</td>";
	echo "<td>" . $datanfekey = $row3['NFEDTR_KEY'] . "</td>";
	echo "<td>" . $nunidade = $row3['NFEEMI_KEY'] . "</td>";
	echo "<td>" . $nota = $row3['NFENUM_KEY'] . "</td>";
	echo "<td>" . $serie = $row3['NFESER_KEY'] . "</td>";
	echo "<td>" . $nchave = $row3['NFECHA_KEY'] . "</td>";
	
		
	}
	
	echo "</tr>";
	echo "</table>";
	
	 ?>
	 <hr>
	<ul>
		<li><a class="active" onclick='history.go(-1)' target="_self" onclick="submit()">Voltar</button></a></li>


		
		</ul>

		<?php
	

	exit;
	
	 
	
	}
	
	
	elseif ($unidade=='U00001'){
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

	
	
	echo  '<strong>'.'<h3 style="background-color:Tomato;">' . 'Nota Fiscal Não Validada na Receita ' .  '</h3>'.'</strong>' .'<hr>';
	echo '<strong>' . 'Periodo ' .'</strong>' . $date1 . ' ';
	echo '<strong>' .' até '.'</strong>'  . $date2 . '<hr>' ;
	
	
	$seq='Seq';
	$datadata = 'Data';
	$unidadeunidade = 'Unidade';
	$sst='Status';
	$notanota = 'Nota Fiscal';
	$serieserie = 'Serie';
	$origemorigem = 'Origem';
	$pedidopedido = 'Pedido';
	
	
	
	echo "<table>";
	echo "<tr>";
	echo "<th>" . $seq . "</th>"; 
	echo "<th>" . $datadata . "</th>"; 
	echo "<th>" . $unidadeunidade . "</th>"; 
	echo "<th>" . $sst . "</th>"; 
	echo "<th>" . $notanota . "</th>"; 
	echo "<th>" . $serieserie . "</th>"; 
	echo "<th>" . $origemorigem . "</th>"; 
	echo "<th>" . $pedidopedido . "</th>"; 
	
	
	$sql3 = ("select * from TB_FATNFH where NFHSTS = '1' AND NFHDNF between '$date1' and '$date2' order by NFHNNF");
	foreach ($conn->query($sql3) as $row3) {
	$xcontador = ($contador ++);
	
	echo "<tr>";
	echo "<td>" . $xcontador . "</td>";
	echo "<td>" . $datanfekey = $row3['NFHDNF'] . "</td>";
	echo "<td>" . $nunidade = $row3['NFHEMI'] . "</td>";
	echo "<td>" . $sst1 = $row3['NFHSTS'] . "</td>";
	echo "<td>" . $nota = $row3['NFHNNF'] . "</td>";
	echo "<td>" . $serie = $row3['NFHSNF'] . "</td>";
	echo "<td>" . $origem = $row3['NFHORI'] . "</td>";
	echo "<td>" . $pedido = $row3['NFHTIP'].$row3['NFHNUR'] . "</td>";
		
	
	



	}
	
	echo "</tr>";
	echo "</table>";
	
	echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";

				?>

<hr>
	<ul>
		<li><a class="active" onclick='history.go(-1)' target="_self" onclick="submit()">Voltar</button></a></li>


		
		</ul>	 
	</body>
</html>