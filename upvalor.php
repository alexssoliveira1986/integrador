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
	
	

	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota' and NFHSNF= '$serie' and NFHEMI= '$unidade' ");
	foreach ($conn->query($sql) as $row) {
	$ncontrolenfh= $row['NFHNUM'];
	$sql1 = ("select * from tb_fatnfi where nfinum='$ncontrolenfh' ");
	foreach ($conn->query($sql1) as $row1) {
   
   $sql2 = ("select * from tb_fatnfc where nfcnum='$ncontrolenfh' ");
	foreach ($conn->query($sql2) as $row2) {
	
	
		
	
	//Peça
	
	$upvaloripiX = $_POST['upvaloripiX'];
	$upbaseicmsX = $_POST['upbaseicmsX'];
	$upvaloricmsX = $_POST['upvaloricmsX'];
	$upbasestX = $_POST['upbasestX'];
	$upvalorstX = $_POST['upvalorstX'];
	$upvalortpecaX = $_POST['upvalortpecaX'];
	$upvalorfpecaX = $_POST['upvalorfpecaX'];
	$upvalordpecaX = $_POST['upvalordpecaX'];
	$upseqipiX = $_POST['upseqipiX'];
	
	//Total
	
	$uptotalipiX = $_POST['uptotalipiX'];
	$uptotalbaseicmsX = $_POST['uptotalbaseicmsX'];
	$uptotalvaloricmsX = $_POST['uptotalvaloricmsX'];
	$uptotalbasestX = $_POST['uptotalbasestX'];
	$uptotalvalorstX = $_POST['uptotalvalorstX'];
	$uptotalfreteX = $_POST['uptotalfreteX'];
	$uptotaldescontoX = $_POST['uptotaldescontoX'];
	$upvalornfX = $_POST['upvalornfX'];
	
	//Controle
	
	$ncontrolenfi = $row1['NFIPRO'];
	$ncontrolenfi2 = $row1['NFINUM'];
	$ncontrolenfh3 = $row['NFHCLK'];
	

		
		//1 - VALOR IPI
	$sql1=("UPDATE TB_FATNFI SET NFIIPI =:upvaloripiX WHERE NFINUM = :ncontrolenfi2 AND NFIPRO=:ncontrolenfi AND NFISEQ=:upseqipiX");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $upvaloripiX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $ncontrolenfi);
        $sql1->bindParam(4, $upseqipiX);

        $sql1->execute();
		//2 - BASE ICMS
$sql1=("UPDATE TB_FATNFI SET NFIBIC =:upbaseicmsX WHERE NFINUM = :ncontrolenfi2 AND NFIPRO=:ncontrolenfi AND NFISEQ=:upseqipiX");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $upbaseicmsX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $ncontrolenfi);
        $sql1->bindParam(4, $upseqipiX);

        $sql1->execute();
		//3 - VALOR ICMS
$sql1=("UPDATE TB_FATNFI SET NFIVIC =:upvaloricmsX WHERE NFINUM = :ncontrolenfi2 AND NFIPRO=:ncontrolenfi AND NFISEQ=:upseqipiX");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $upvaloricmsX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $ncontrolenfi);
        $sql1->bindParam(4, $upseqipiX);

        $sql1->execute();
		//4 - BASE ST
$sql1=("UPDATE TB_FATNFI SET NFIBST_G =:upbasestX WHERE NFINUM = :ncontrolenfi2 AND NFIPRO=:ncontrolenfi AND NFISEQ=:upseqipiX");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $upbasestX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $ncontrolenfi);
        $sql1->bindParam(4, $upseqipiX);

        $sql1->execute();
		//5 - VALOR ST
$sql1=("UPDATE TB_FATNFI SET NFICST_CTB =:upvalorstX WHERE NFINUM = :ncontrolenfi2 AND NFIPRO=:ncontrolenfi AND NFISEQ=:upseqipiX");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $upvalorstX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $ncontrolenfi);
        $sql1->bindParam(4, $upseqipiX);

        $sql1->execute();
		//6 - TOTAL PECA
$sql1=("UPDATE TB_FATNFI SET NFIVLT =:upvalortpecaX WHERE NFINUM = :ncontrolenfi2 AND NFIPRO=:ncontrolenfi AND NFISEQ=:upseqipiX");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $upvalortpecaX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $ncontrolenfi);
        $sql1->bindParam(4, $upseqipiX);

        $sql1->execute();
		
		//7 - FRETE PECA
$sql1=("UPDATE TB_FATNFI SET NFIDAC =:upvalorfpecaX WHERE NFINUM = :ncontrolenfi2 AND NFIPRO=:ncontrolenfi AND NFISEQ=:upseqipiX");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $upvalorfpecaX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $ncontrolenfi);
        $sql1->bindParam(4, $upseqipiX);

        $sql1->execute();
		
		//8 - DESCONTO PECA
$sql1=("UPDATE TB_FATNFI SET NFIVLD =:upvalordpecaX WHERE NFINUM = :ncontrolenfi2 AND NFIPRO=:ncontrolenfi AND NFISEQ=:upseqipiX");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $upvalordpecaX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $ncontrolenfi);
        $sql1->bindParam(4, $upseqipiX);

        $sql1->execute();
		
		//1 - TOTAL IPI
$sql1=("UPDATE TB_FATNFH SET NFHIPI =:uptotalipiX WHERE NFHNUM = :ncontrolenfi2 AND NFHEMI= :unidade");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $uptotalipiX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $unidade);

        $sql1->execute();
		
		//2 - TOTAL BASE
$sql1=("UPDATE TB_FATNFH SET NFHBIC =:uptotalbaseicmsX WHERE NFHNUM = :ncontrolenfi2 AND NFHEMI= :unidade");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $uptotalbaseicmsX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $unidade);
      

        $sql1->execute();
		
		//3 - TOTAL BASE VALOR
$sql1=("UPDATE TB_FATNFH SET NFHVIC =:uptotalvaloricmsX WHERE NFHNUM = :ncontrolenfi2 AND NFHEMI= :unidade");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $uptotalvaloricmsX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $unidade);
        

        $sql1->execute();
	
	
		//4 - TOTAL BASE ST
$sql2=("UPDATE TB_FATNFC SET NFCBST =:uptotalbasestX WHERE NFCNUM = :ncontrolenfi2");
	  
		$sql2 = $conn->prepare($sql2);
        $sql2->bindParam(1, $uptotalbasestX);
        $sql2->bindParam(2, $ncontrolenfi2);
		

       

        $sql2->execute();
		
		//5 - TOTAL BASE VALOR ST
$sql1=("UPDATE TB_FATNFH SET NFHSBT =:uptotalvalorstX WHERE NFHNUM = :ncontrolenfi2 AND NFHEMI= :unidade");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $uptotalvalorstX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $unidade);


        $sql1->execute();
		
		//6 - TOTAL FRETE
$sql1=("UPDATE TB_FATNFH SET NFHDAC =:uptotalfreteX WHERE NFHNUM = :ncontrolenfi2 AND NFHEMI= :unidade");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $uptotalfreteX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $unidade);


        $sql1->execute();
		
		//7 - TOTAL DESCONTO
$sql1=("UPDATE TB_FATNFH SET NFHDSM =:uptotaldescontoX WHERE NFHNUM = :ncontrolenfi2 AND NFHEMI= :unidade");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $uptotaldescontoX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $unidade);


        $sql1->execute();
		
		//8 - TOTAL NF
		$sql1=("UPDATE TB_FATNFH SET NFHVTP =:upvalornfX WHERE NFHNUM = :ncontrolenfi2 AND NFHEMI= :unidade");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $upvalornfX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $unidade);


		$sql1->execute();
		
		$sql1=("UPDATE TB_FATNFH SET NFHVTN =:upvalornfX WHERE NFHNUM = :ncontrolenfi2 AND NFHEMI= :unidade");
	  
		$sql1 = $conn->prepare($sql1);
        $sql1->bindParam(1, $upvalornfX);
        $sql1->bindParam(2, $ncontrolenfi2);
        $sql1->bindParam(3, $unidade);


        $sql1->execute();


	
	}
	}
	}
	

	
$sql = ("select * from tb_fatnfh where NFHNNF = '$nota' and NFHEMI= '$unidade' ");
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
		
	$status='Status';
	$uni='Unidade';
	$cliente='Codigo Cliente';
	$ncliente='Nome Cliente';
	$vend='Codigo Vendedor';
	$ori='Origem';
	$notafiscal='Nota Fiscal';
	$serie='Serie';
	$datasel='Data';
	$ncontrole='Nº Controle';
	$tservico='TS';
	$nfpag='Carteira';
	$seq='Seq';
	$cpeca='Codigo Peça';
	$cncmpeca='Codigo NCM';
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
	$frete='Frete';
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
	echo "<th>" . $serie . "</th>";
	echo "<th>" . $datasel . "</th>";
	echo "<th>" . $ncontrole . "</th>";
	echo "<th>" . $tservico . "</th>";
	echo "<th>" . $nfpag . "</th>";
	echo "<th>" . $nop . "</th>";
	echo "<th>" . $cme . "</th>";
	
	
	
	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota' and NFHEMI= '$unidade' ");
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

	
	
	
	
	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota' and NFHEMI= '$unidade' ");
	foreach ($conn->query($sql) as $row) {
	
	
	$ncontrolenfh= $row['NFHNUM'];
	
	
	$sql1 = ("select * from tb_fatnfi where nfinum='$ncontrolenfh' ");
	foreach ($conn->query($sql1) as $row1) {
	if ($row['NFHNUM']=($row1['NFINUM'])){
	
	
	$sql2 = ("select * from tb_fatnfc where nfcnum='$ncontrolenfh' ");
	foreach ($conn->query($sql2) as $row2) {
	if ($row['NFHNUM']=($row2['NFCNUM'])){
	
	

	
	echo "<td>" . $row1['NFISEQ'] . "</td>";
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
	
	//if (isset ($row['NFHVTN'])){
	//}else echo '<strong>' . 'Nota Fiscal: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . ' 55 ' . '<strong>' . 'Unidade: ' . '</strong>' . $unidade . '<strong>'. ' NÃO ENCONTRADA'.'</strong>' . '<hr>';
	
	echo "</tr>";
	echo "</table>" ;
	
		 $ale = "03376";
echo '<hr>' . '<strong>' . '<h3 style="background-color:LightGreen;">' . 'Campos Atualizados-> ' . '</h3>'.'</strong>' . '<hr>' ;    

	echo "<table>";
	echo "<tr>";
	echo "<th>" . $seq . "</th>";
	echo "<th>" . $valoripip . "</th>";
	echo "<th>" . $valorbi . "</th>";
	echo "<th>" . $valorvi . "</th>";
	echo "<th>" . $valorbst . "</th>";
	echo "<th>" . $valorvst . "</th>";
	echo "<th>" . $valortp . "</th>";
	echo "<th>" . $frete . "</th>";
	echo "<th>" . $desconto . "</th>";
	echo "</tr>";
	echo "<td>" . $upseqipiX . "</td>";
	echo "<td>" . $upvaloripiX . "</td>";
	echo "<td>" . $upbaseicmsX . "</td>";
	echo "<td>" . $upvaloricmsX . "</td>";
	echo "<td>" . $upbasestX . "</td>";
	echo "<td>" . $upvalorstX . "</td>";
	echo "<td>" . $upvalortpecaX . "</td>";
	echo "<td>" . $upvalorfpecaX . "</td>";
	echo "<td>" . $upvalordpecaX . "</td>";
	echo "</table>" ;
	
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
	echo "<td>" . $uptotalipiX . "</td>";
	echo "<td>" . $uptotalbaseicmsX . "</td>";
	echo "<td>" . $uptotalvaloricmsX . "</td>";
	echo "<td>" . $uptotalbasestX . "</td>";
	echo "<td>" . $uptotalvalorstX . "</td>";
	echo "<td>" . $uptotalfreteX . "</td>";
	echo "<td>" . $uptotaldescontoX . "</td>";
	echo "<td>" . $upvalornfX . "</td>";
	
	
	echo "</table>" ;
	
/*echo '<hr>'.'<strong>'.' Seq Peça: '. '</strong>'.$upseqipiX;	
echo '<strong>'.' | Vlr IPI Peça: '. '</strong>'.$upvaloripiX;
echo '<strong>'.' | BC ICMS Peça: '. '</strong>'.$upbaseicmsX;
echo '<strong>'.' | Vlr ICMS Peça: '. '</strong>'.$upvaloricmsX;
echo '<strong>'.' | BC-ST Peça: '. '</strong>'.$upbasestX;
echo '<strong>'.' | ICMS-ST Peça: '. '</strong>'.$upvalorstX;
echo '<strong>'.' | Vlr Total Peça: '. '</strong>'.$upvalortpecaX;
echo '<hr>'.'<strong>'.' Total Geral: '. '</strong>';	
echo '<strong>'.' | Total IPI: '. '</strong>'.$uptotalipiX;
echo '<strong>'.' | Total Base ICMS: '. '</strong>'.$uptotalbaseicmsX;
echo '<strong>'.' | Total ICMS: '. '</strong>'.$uptotalvaloricmsX;
echo '<strong>'.' | Total BC-ST: '. '</strong>'.$uptotalbasestX;
echo '<strong>'.' | Total ICMS-ST: '. '</strong>'.$uptotalvalorstX;
echo '<strong>'.' | Total Frete: '. '</strong>'.$uptotalfreteX;
echo '<strong>'.' | Total Desconto: '. '</strong>'.$uptotaldescontoX;
echo '<strong>'.' | Total NF: '. '</strong>'.$upvalornfX;*/


	
	/*if (isset ($row['NFHIPI'])){
	echo '<strong>'. "<table>" . "<tr>" . "<td>";
	echo 'Total IPI: ' . '</strong>' . number_format (str_replace(",",".",$row['NFHIPI']),"2",",","") ;
	echo '<br>';
	}else echo 'Total IPI: ' . '</strong>' .'0,00'.'<br>'; 
	
	
		
	
	if (isset ($row['NFHBIC'])){
	echo '<strong>' .'Total Base ICMS: ' . '</strong>' . number_format (str_replace(",",".",$row['NFHBIC']),"2",",","")  ;
	echo ' | ';
	}else echo 'Total Base ICMS: ' . '</strong>' .'0,00'.' | '; 
	
	
	
	if (isset ($row['NFHVIC'])){
	echo '<strong>' . 'Total ICMS: ' . '</strong>' . number_format (str_replace(",",".",$row['NFHVIC']),"2",",","") ;
	echo '<br>';
	}else echo 'Total ICMS: ' . '</strong>' .'0,00'.'<br>'; 
	
	
	if (isset ($row2['NFCBST'])){
	echo '<strong>' . 'Total BC-ST: ' . '</strong>' . number_format (str_replace(",",".",$row2['NFCBST']),"2",",","") ;
	echo ' | ';
	}else echo 'Total BC-ST: ' . '</strong>' .'0,00'.' | '; 
	
	
	if (isset ($row['NFHSBT'])){	
	echo '<strong>' . 'Total ICMS-ST: ' . '</strong>' . number_format (str_replace(",",".",$row['NFHSBT']),"2",",","") ;
	echo '<br>';
	}else echo 'Total ICMS-ST: ' . '</strong>' .'0,00'.'<br>'; 
	
	
	if (isset ($row['NFHVTN'])){
	echo '<strong>'. 'Total NF: ' . '</strong>' . number_format (str_replace(",",".",$row['NFHVTN']),"2",",","");
	echo '<br>' . "</td>" ."</tr>" . "</table>";}
	
	
	
	

	else echo '<strong>' . 'Nota Fiscal: ' . '</strong>' . $nota . '<strong>' . ' Serie: ' . '</strong>' . ' 55 ' . '<strong>' . 'Unidade: ' . '</strong>' . $unidade . '<strong>'. ' NÃO ENCONTRADA'.'</strong>' . '<hr>';
	
	*/

	/*$svt = number_format (str_replace(",",".",$row['NFHVTP']),"2",",","");
	$svp = number_format (str_replace(",",".",$row['NFHVTN']),"2",",","");
	
	if ($svt == $svp){
		
		//echo '<br>'.'Valores das Peças Igual ao Total da NF: '. $svt .'<br>';
		
	}else echo '<table>'.'<br>'.'Valores Diferentes - Erro '.'<br>'. '</table>';*/

	
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
	
	$sql = ("select * from tb_fatnfh where NFHNNF = '$nota' and NFHEMI= '$unidade' ");
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