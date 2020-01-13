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
		</head>
<body>
	<font face="tahoma"> <h1>Integrador - SPED</h1>
			<hr>
		<nav>
		<strong>Menu de Navegação</strong>
		</nav>	
		<hr>
	<strong>Sped</strong><hr></font>
	<font size="2" face="tahoma">
	
	
	<?php 
	
	
		
			$reg = $_POST['reg'];
			$_SESSION["reg"] = $reg;
			$diretorio = "C:\\xampp\htdocs\sped/";
			$link = $diretorio . basename($_FILES["arquivo"]["name"]);
			
			
			/*$arquivo = fopen ($link, 'r');
			while(!feof($arquivo)){
			$linha = fgets($arquivo, 4086);
			echo $linha.'<br/>';
			}
			fclose($arquivo);*/
		
	

		
			$contador = 1;
			$linhas = 0; // Número inicial de linhas contadas
			$linhas = count(file($link));
			
			echo '<br>' . 'Quantidade de Linhas = ' . number_format (str_replace(",",".",$linhas),"2",".","."). ' | Arquivo = ' . $link .'<br>' .'<br>';
			//echo number_format($linhas) . '<hr>';
			
			$xcontador = $contador;
			$conteudo = file ("$link");
			
			$tc100 = '|C1';
			$paic100 = '|C100|';
			$filho1c100c101 = '|C101|';
			$filho2c100c110 = '|C110|';
			$filho3c100c170 = '|C170|';
			$filho4c100c190 = '|C190|';
			$filho1c190c191 = '|C191|';
			
			
	
			
			
			
			if ($reg=='TODOS'){
			foreach ($conteudo as $linha)
			echo "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );}
			
			elseif ($reg=='T-C100'){
			foreach ($conteudo as $linha){
			//echo "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );	
			$rest = substr("$linha", 0, 3);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );
			
			//echo $rest2;
			
			if ($rest == $tc100){
				if ($rest1 == $paic100){
				$tpaic100 = $xcontador;
				echo  '<hr>' . 'Linha - ' . $xcontador . ' - ' . $paic100 . '<hr>';
				
				
			}			
			
			//$resultado = ($xcontador ++) . ($linha);
			
			//echo "<table>" . "<td>" . $resultado;
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			
			
			
			if ($rest1 == $filho1c100c101){
				
				
			
				echo ' - Linha Pai - ' . $tpaic100;
			}	
			
			if ($rest1 == $filho2c100c110){
				
		
				echo ' - Linha Pai - ' . $tpaic100;
				
				
					
				
					
				
				
				
					
				
				//echo ' - Linha Pai - ' . ($xcontador) . ' - ' . $paic100;
			}
			
			if ($rest1 == $filho3c100c170){
				
				echo ' - Linha Pai - ' . $tpaic100;
			}
			
			if ($rest1 == $filho4c100c190){
				$tpaic190 = ($xcontador);
				echo ' - Linha Pai - ' . $tpaic100;
			}
			
			if ($rest1 == $filho1c190c191){
				
				echo ' - Linha Pai - ' . $tpaic190;
			}
			
			
			echo "</td>" . "</table>";
			
			}
			
			}
			
			}
			
			
			
			
			elseif ($reg=='0000'){
			print_r ($conteudo[0]);}
			elseif ($reg=='0001'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0001|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='0005'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0005|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='0100'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0100|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='0150'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0150|'){
					echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
				}else{
					//echo "não tem".'<br>';
					//echo $rest.'<br>';
				}
				//echo file_get_contents($linha.'<br/>');
				
				
			}
			

			
			
			}
			elseif ($reg=='0175'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0175|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='0190'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0190|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='0200'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0200|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='0205'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0205|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='0220'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0220|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='0400'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0400|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='0450'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0450|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='0990'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0990|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='B001'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|B001|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='B990'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|B990|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='C001'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|C001|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='C100'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|C100|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='C101'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|C101|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='C110'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|C110|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='C113'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|C113|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='C140'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|C140|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='C141'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|C141|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='C170'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|C170|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='C175'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|C175|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='C176'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|C176|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='C190'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|C190|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='C191'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|C191|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='C990'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|C990|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='D001'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|D001|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='D100'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|D100|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='D190'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|D190|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='D990'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|D990|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E001'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E001|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E100'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E100|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E110'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E110|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E111'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E111|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E116'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E116|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E200'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E200|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E210'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E210|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E250'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E250|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E300'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E300|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E310'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E310|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E316'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E316|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E500'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E500|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E510'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E510|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E520'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E520|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E530'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E530|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='E990'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|E990|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='G001'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|G001|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='G990'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|G990|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='H001'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|H001|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='H005'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|H005|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='H010'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|H010|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='H990'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|H990|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='K001'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|K001|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='K990'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|K990|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='1001'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|1001|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='1010'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|1010|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='1600'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|1600|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='1990'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|1990|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='9001'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|9001|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='9900'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|9900|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='9990'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|9990|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			elseif ($reg=='9999'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|9999|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			
			
			
			
			
			
			
			//print_r ($conteudo[0]);
			//foreach ($conteudo as $linha)
			//echo ($linha.'<br/>');
			
			
			
			
			
		
		
	?>
	<hr>
		<td><a href="sped1.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
		<br></font>