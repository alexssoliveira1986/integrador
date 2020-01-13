<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<html lang='pt-br'>
	<head>
		<title>Integrador</title><link rel='shortcut icon' href='i5.ico' type='image/x-icon' />
		<meta charset='utf-8' />
		<meta name='description' content='Integrador' />
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
		<font size='2' face='Calibri'>
		</nav>	
	
		
	<?php
	
//	$veiculos = $_POST['03'];
	$date1=date('d-m-Y',strtotime($_POST['date1']));
	$date2=date('d-m-Y',strtotime($_POST['date2']));
	
	$_SESSION["date1n"] = $date1;
	$_SESSION["date2n"] = $date2;
	
	
	require('bd-u1.php');
	
	$emailerrado = '/(@chevroletnova.com.br|naopossui@|@naotem|@ntem|nao@tem|contato@contato|naotem@|@mail.mercadolivre.com|@ct.vtex.com.br|nf@|sem@email|@naotememail|@nova)/';
	
	$contador = 1;
	$seq = 'SEQ';
	$cod = 'CODIGO';
	$tipo = 'TIPO';
	$nome = 'NOME';
	$mail = 'EMAIL';
	$ori = 'ORIGEM';
	$cme = 'CME';
	
	$valido = 'VALIDO';
	$venda = 'VENDA';
	
	echo '<table>';
	echo '<tr>';
	echo '<th>' . $seq . '</th>';
	echo '<th>' . $cod . '</th>'; 
	echo '<th>' . $tipo . '</th>'; 
	echo '<th>' . $nome . '</th>'; 
	echo '<th>' . $mail . '</th>'; 
	echo '<th>' . $ori . '</th>'; 
	echo '<th>' . $cme . '</th>'; 
	echo '<th>' . $venda . '</th>'; 
	echo '<th>' . $valido . '</th>';
	
	
	
	$sql = (" SELECT TB_TRACAD.TRACOD, TB_TRACAD.TRANOM, TB_TRACAD.TRAEMA, TB_TRACAD.TRADTI, TB_TRACAD.TRACEP, TB_TRACAD.TRAMUN, TB_TRACAD.TRADAT, TB_TRACAD.TRATPS, TB_PCADOC.DOCORI, TB_PCADOC.DOCCME, TB_TABORI.ORINOM, TB_TRACAD.TRACP1, TB_PCADOC.DOCNUM, TB_PCADOC.DOCEMI, TB_TRACAD.TRACGC, TB_TRACAD.TRADTA, TB_PCADOC.DOCSTS, TB_PCADOC.DOCSES, TB_PCADOC.DOCDTR, TB_PCADOC.DOCVTN
 FROM   (SERCON.TB_TRACAD TB_TRACAD INNER JOIN SERCON.TB_PCADOC TB_PCADOC ON TB_TRACAD.TRACOD=TB_PCADOC.DOCCLI) INNER JOIN SERCON.TB_TABORI TB_TABORI ON TB_PCADOC.DOCORI=TB_TABORI.ORICOD
 WHERE  TB_PCADOC.DOCSES='S' AND TB_PCADOC.DOCSTS <> 'C' AND TB_PCADOC.DOCCME = '210' AND (TB_PCADOC.DOCORI = '03' OR TB_PCADOC.DOCORI ='04') AND (TB_PCADOC.DOCDTR between '$date1' and '$date2')
 ORDER BY TB_PCADOC.DOCORI, TB_PCADOC.DOCEMI, TB_TRACAD.TRATPS,  TB_TRACAD.TRACOD");
	foreach ($conn->query($sql) as $row) {
		
	$email = $row['TRAEMA'];
	if (!preg_match($emailerrado, $email)){
	if (isset($email)){
	echo '<tr>';
	echo '<td>' . $contador ++ . '</td>';
	echo '<td>' . $row['TRACOD'] . '</td>';
	echo '<td>' . $row['TRATPS'] . '</td>';
	echo '<td>' . $row['TRANOM'] . '</td>';
	echo '<td>' . $email . '</td>';
	echo '<td>' . $row['DOCORI'] . '</td>';
	echo '<td>' . $row['DOCCME'] . '</td>';
	echo '<td>' . $row['ORINOM'] . '</td>';
	echo '<td>'. 'A VERIFICAR' .'</td>';}
	
	/*$smtp = '1';
	$format = '1';
	//$access_key = '5616618af04e0ce349f5a8430e0e6a13'; alexssoliveira@gmail.com senha: padrão
	$access_key = '4fc29aed583efc71c596923d00ae6fd9'; rennorally@gmail.com senha: nova@nova
	$service_url = "http://apilayer.net/api/check?access_key=" . $access_key.'&email='.$email.'&smtp='.$smtp.'&format='.$format;
	$response = file_get_contents($service_url);
	$json = json_decode($response);
	if ($json->smtp_check == 'true'){
	echo '<td>'. 'SIM' .'</td>';}else echo '<td>'. 'NÃO' .'</td>'};
	//echo '<td>' . 'NÃO' . '</td>';
	*/
		
	}	
	}
	echo '</tr>';
	echo '</table>' . '<br>';
	?>
	<font size="3" face="Calibri">
	<ul>
		<li><a href="email4.php" target="_self" onclick="submit()">Gerar XLS</button></a></li>
		</ul>
		
		
	 
	</body>
</html>