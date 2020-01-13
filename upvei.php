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
	$unidade = $_SESSION['uni'];
	$nchave = $_SESSION["chave"];


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
	
	

	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota' AND NFHSNF='$serie' and NFHEMI= '$unidade' ");
	foreach ($conn->query($sql) as $row) {
	$ncontrolenfh= $row['NFHNUM'];
	$sql1 = ("select * from tb_fatnfi where nfinum='$ncontrolenfh' ");
	foreach ($conn->query($sql1) as $row1) {
   
	$sql2 = ("select * from tb_fatnfc where nfcnum='$ncontrolenfh' ");
	foreach ($conn->query($sql2) as $row2) {
		
	$sql4 = ("select * from tb_fatnfk where nfknum='$ncontrolenfh' ");
	foreach ($conn->query($sql4) as $row4) {
	
	
	//Controle
	$cancela = 'C';
	$ncontrolenfi = $row1['NFIPRO'];
	$ncontrolenfi2 = $row1['NFINUM'];
	
			//1 - MARCAR CANCELADA FATNFH
		$sql=("UPDATE TB_FATNFH SET NFHSTS =:cancela WHERE NFHNUM = :ncontrolenfh ");
	  
		$sql = $conn->prepare($sql);
        $sql->bindParam(1, $cancela);
        $sql->bindParam(2, $ncontrolenfh);
        
        $sql->execute();
		
			//2 - MARCAR CANCELADA FATNFK
		$sql4=("UPDATE TB_FATNFK SET NFKSTS =:cancela WHERE NFKNUM = :ncontrolenfh ");
	  
		$sql4 = $conn->prepare($sql4);
        $sql4->bindParam(1, $cancela);
        $sql4->bindParam(2, $ncontrolenfh);
        
        $sql4->execute();


	
	}
	}
	}
	}
	

	
$sql = ("select * from tb_fatnfh where NFHNNF = '$nota'  AND NFHSNF='$serie' and NFHEMI= '$unidade' ");
	foreach ($conn->query($sql) as $row) {
	
	if ($row['NFHSTS'] == 'G'){
		
		
	
	echo '<hr>' . '<h3 style="background-color:DodgerBlue;">' . 'Nota Fiscal Validada na Receita ' . '</h3>';} else echo '<hr>' . '<h3 style="background-color:Tomato;">' . 'Nota Fiscal Não Validada na Receita ' . '</h3>';
	echo '<strong>' . '<hr>' . 'Nota Fiscal: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . ' 55 ' . '<strong>' . 'Unidade: ' . '</strong>' . $unidade . '<strong>' . ' Chave de Acesso: ' . '</strong>' . $nchave . '<hr>' ;
	
	};
	

	if (empty ($row)){echo '<hr>'.'<strong>' . 'Nota Fiscal: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . ' 55 ' . '<strong>' . 'Unidade: ' . '</strong>' . $unidade . '<strong>' .' NÃO ENCONTRADA'.'</strong>' . '<hr>';
	if (isset($nchave)){ 
	echo '<strong>' .' Chave de Acesso: ' . '</strong>'. $nchave . '<strong>'.'<hr>';} else echo '<strong>' .' Chave de Acesso: ' . '</strong>'.'<strong>' .' NÃO ENCONTRADA'.'</strong>'.'<hr>';
	
	?>

	<?php
	echo exit;
	}else 
	

	//Cabeçalho 
		
	$status='St';
	$uni='Unidade';
	$cliente='Codigo';
	$ncliente='Nome';
	$ccpfcnpj='CPF/CNPJ';
	$cie='IE';
	$cend='End';
	$cbai='Bairro';
	$cmun='Mun';
	$cest='Est';
	$cemail='Email';
	$vend='Vendedor';
	$ori='Ori';
	$tip='Tipo';
	$notafiscal='NF';
	$serie1='Serie';
	$datasel='Data';
	$ncontrole='Nº Controle';
	$tservico='TS';
	$nfpag='Cart';
	$seq='Seq';
	$cpeca='Peça';
	$cservico='Serv';
	$dveiculo='Desc Vei';
	$tveiculo='Texto';
	$cncmpeca='NCM';
	$qpeca='Qtde';
	$valoripip='Vlr IPI Peça';
	$valorbi='BC ICMS Peça';
	$valorvi='Vlr ICMS Peça';
	$valorbst='BC-ST Peça';
	$valorvst='ICMS-ST Peça';
	$valortp='Vlr Total Peça';
	$nop='NOP';
	$cme='CME';
	$if='IF';
	$st='ST';
	$frete='Fr';
	$desconto='Desc';

	echo "<table>";
	echo "<tr>";
	echo "<th>" . $status . "</th>";
    echo "<th>" . $uni . "</th>";
	echo "<th>" . $cliente . "</th>";
	echo "<th>" . $ncliente . "</th>";
	echo "<th>" . $vend . "</th>";
	echo "<th>" . $ori . "</th>";
	echo "<th>" . $notafiscal . "</th>";
	echo "<th>" . $serie1 . "</th>";
	echo "<th>" . $datasel . "</th>";
	echo "<th>" . $ncontrole . "</th>";
	echo "<th>" . $tservico . "</th>";
	echo "<th>" . $nfpag . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $cme . "</th>";
	
	
	
	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota'  AND NFHSNF='$serie' and NFHEMI= '$unidade' ");
	foreach ($conn->query($sql) as $row) {
	$ncontrolenfh= $row['NFHNUM'];
	$ncontrolenfh2= $row['NFHNNF'];
	$_SESSION["ncontrolenfh"] = $ncontrolenfh;
	$sql1 = ("select * from tb_fatnfi where nfinum='$ncontrolenfh' ");
	foreach ($conn->query($sql1) as $row1) {
	if ($row['NFHNUM']=($row1['NFINUM'])){
	
	$ncontrolenfi= $row1['NFIPRO'];
	$ncontrolenfi2= $row1['NFINUM'];
	$ncontrolenfi3= $row1['NFISEQ'];
	}
	
	}
	
	}
	

		
	echo "<tr>";
	echo "<td>" . $row['NFHSTS'] . "</td>";
	echo "<td>" . $row['NFHEMI'] . "</td>";
	echo "<td>" . $row['NFHCLI'] . "</td>";
	echo "<td>" . $row['NFHCLK'] . "</td>";
	echo "<td>" . $row['NFHVEN'] . "</td>";
	echo "<td>" . $row['NFHORI'] . "</td>";
	echo "<td>" . $row['NFHNNF'] . "</td>";
	echo "<td>" . $row['NFHSNF'] . "</td>";
	echo "<td>" . $row['NFHDNF'] . "</td>";
	echo "<td>" . $row['NFHNUM'] . "</td>";
	echo "<td>" . $row['NFHTOS'] . "</td>";
	echo "<td>" . $row['NFHSND'] . "</td>";
	echo "<td>" . $row['NFHNOP'] . "</td>";
	echo "<td>" . $row['NFHCME'] . "</td>";
	echo "</table>";
	echo '<br>';
	
	
	
	

	echo "<table>";
	echo "<tr>";
	echo "<th>" . $seq . "</th>";
	if ($row['NFHTIP'] == 'V'){
	echo "<th>" . $dveiculo . "</th>";
	}elseif ($row['NFHSNF'] <> '55'){
	echo "<th>" . $cservico . "</th>";
	}else
	echo "<th>" . $cpeca . "</th>";
	echo "<th>" . $qpeca . "</th>";
	echo "<th>" . $valoripip . "</th>";
	echo "<th>" . $valorbi . "</th>";
	echo "<th>" . $valorvi . "</th>";
	echo "<th>" . $valorbst . "</th>";
	echo "<th>" . $valorvst . "</th>";
	echo "<th>" . $valortp . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $cme . "</th>";
	echo "<th>" . $if . "</th>";
	echo "<th>" . $st . "</th>";
	echo "<th>" . $frete . "</th>";
	echo "<th>" . $desconto . "</th>";
	echo "</tr>";

	
	
	
	
	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota'  AND NFHSNF='$serie' and NFHEMI= '$unidade' ");
	foreach ($conn->query($sql) as $row) {
	
	
	$ncontrolenfh= $row['NFHNUM'];
	
	
	$sql1 = ("select * from tb_fatnfi where nfinum='$ncontrolenfh' ");
	foreach ($conn->query($sql1) as $row1) {
	if ($row['NFHNUM']=($row1['NFINUM'])){
	
	
	$sql2 = ("select * from tb_fatnfc where nfcnum='$ncontrolenfh' ");
	foreach ($conn->query($sql2) as $row2) {
	if ($row['NFHNUM']=($row2['NFCNUM'])){
	
	

	
	echo "<td>" . $row1['NFISEQ'] . "</td>";
	if ($row['NFHTIP'] == 'V'){
	echo "<td>" . $row1['NFIDSC'] . "</td>";
	}elseif ($row['NFHSNF'] <> '55'){
	echo "<td>" . $row1['NFIDSC'] . "</td>";
	}else
	echo "<td>" . $row1['NFIPRO'] . "</td>";
	echo "<td>" . $row1['NFIQTD'] . "</td>";
	if (isset ($row1['NFIIPI'])){
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIIPI']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row1['NFIBIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIBIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row1['NFIVIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIVIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row1['NFIBST_G'])){
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIBST_G']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row1['NFICST_CTB'])){
	echo "<td>" . number_format (str_replace(",",".",$row1['NFICST_CTB']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	if (isset ($row1['NFIVLT'])){
	echo "<td>" . number_format (str_replace(",",".",$row1['NFIVLT']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	echo "<td>" . $row1['NFINOP'] . "</td>";
	echo "<td>" . $row1['NFICME'] . "</td>";
	echo "<td>" . $row1['NFICT1'] . "</td>";
	echo "<td>" . $row1['NFIALR'] . "</td>";
	echo "<td>" . $row1['NFIDAC'] . "</td>";
	echo "<td>" . $row1['NFIVLD'] . "</td>";
	
	echo "</tr>";
	

	
	}
	
	}
	
	}
	
	}
	

	}
	

	echo "</table>" ;
	



	echo '<hr>' . '<strong>' . 'Total Geral-> ' . '</strong>' . '<hr>' ; 
	
		echo "<table>";
	echo "<tr>";
	echo "<th>" . 'Total IPI' . '</strong>' . "</th>";
	echo "<th>" . 'Total Base ICMS' . '</strong>' . "</th>";
	echo "<th>" . 'Total ICMS' . '</strong>' . "</th>";
	echo "<th>" . 'Total BC-ST' . '</strong>' . "</th>";
	echo "<th>" . 'Total ICMS-ST' . '</strong>' . "</th>";
	echo "<th>" . 'Total Frete' . '</strong>' . "</th>";
	echo "<th>" . 'Total Desconto' . '</strong>' . "</th>";
	echo "<th>" . 'Total NF' . '</strong>' . "</th>";
	echo "</tr>";
	if (isset ($row['NFHIPI'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHIPI']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row['NFHBIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHBIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row['NFHVIC'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHVIC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row2['NFCBST'])){
	echo "<td>" . number_format (str_replace(",",".",$row2['NFCBST']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row['NFHSBT'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHSBT']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row['NFHDAC'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHDAC']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row['NFHDSM'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHDSM']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	
	if (isset ($row['NFHVTN'])){
	echo "<td>" . number_format (str_replace(",",".",$row['NFHVTN']),"2",",","") . "</td>";
	}else echo "<td>" .'0,00' . "</td>"; 
	

	echo "</tr>";
	echo "</table>" ;
	

	echo '<hr>' . '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Campos Atualizados-> ' . '</h3>'.'</strong>' . '<hr>' ;    

	echo "<table>";
	echo "<tr>";
	echo "<th>" . $uni . "</th>";
	echo "<th>" . $cliente . "</th>";
	echo "<th>" . $notafiscal . "</th>";
	echo "<th>" . $serie1 . "</th>";
	echo "<th>" . 'Marcado como Cancelado Liberado para Inutilizar a NF' . "</th>";
	echo "</tr>";
	echo "<td>" . $row['NFHEMI'] . "</td>";
	echo "<td>" . $row['NFHCLI'] . "</td>";
	echo "<td>" . $row['NFHNNF'] . "</td>";
	echo "<td>" . $row['NFHSNF'] . "</td>";
	echo "<td>" . $row['NFHSTS'] . "</td>";
	echo "</table>" ;
	
			?>
				

	
	
	<hr>
	
	<ul>
		
		<font size="3" face="Calibri">
		
		<?php
	
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
	
	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota'  AND NFHSNF='$serie' and NFHEMI= '$unidade' ");
	foreach ($conn->query($sql) as $row) {
	
	$ncontrolenfh = $row['NFHNUM'];	

	if ($row['NFHSTS'] == 'G'){		
	echo '<li><a href="baixa-1xml.php?file='.$nchave.'" <button class="active" target="_self" onclick="submit()">Baixar XML</button></a></li>'.' ';	
	echo '<li><a href="http://www.nfe.fazenda.gov.br/portal/consultaRecaptcha.aspx?tipoConsulta=completa&tipoConteudo=XbSeqxE8pl8=" <button class="active" target="_self" onclick="submit()">Consultar XML Receita</button></a></li>';	

	}else echo '<li><a href="baixa-2xml.php?file='.$nchave.'" <button class="active" target="_self" onclick="submit()">Baixar XML Invalido</button></a></li>' . "<script>alert('Reemita a NF caso queria efetuar o Download do XML Invalido');</script>";
	
}

	


		?>		

		 </ul>
	</body>
</html>