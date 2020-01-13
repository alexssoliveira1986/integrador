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
		<strong>Sped</strong><hr><br>
		<form action="sped2.php" target="_self" id="reg"  <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
		enctype="multipart/form-data" >
		<input type="file" name="arquivo" required>
		Informar Registro:
		<select name="reg" form="reg">
		  <option value="TODOS">TODOS</option>
		  <option value="T-0000">T-0000</option>
		  <option value="0000">0000</option>
		  <option value="0001">0001</option>
		  <option value="0005">0005</option>
		  <option value="0100">0100</option>
		  <option value="0150">0150</option> 
		  <option value="0175">0175</option>
		  <option value="0190">0190</option> 
		  <option value="0200">0200</option>
		  <option value="0205">0205</option>
		  <option value="0220">0220</option>
		  <option value="0400">0400</option>
		  <option value="0450">0450</option>		  
		  <option value="0990">0990</option> 
		  <option value="T-B001">T-B001</option>
		  <option value="B001">B001</option> 
		  <option value="B990">B990</option> 
		  <option value="T-C100">T-C100</option>
		  <option value="C001">C001</option> 
		  <option value="C100">C100</option> 
		  <option value="C101">C101</option> 
		  <option value="C110">C110</option> 
		  <option value="C113">C113</option> 
		  <option value="C140">C140</option> 
		  <option value="C141">C141</option> 
		  <option value="C170">C170</option> 
		  <option value="C175">C175</option> 
		  <option value="C176">C176</option> 
		  <option value="C190">C190</option> 
		  <option value="C191">C191</option> 
		  <option value="C990">C990</option>
		  <option value="T-D001">T-D001</option>		  
		  <option value="D001">D001</option> 
		  <option value="D100">D100</option> 
		  <option value="D190">D190</option> 
		  <option value="D990">D990</option>
		  <option value="T-E001">T-E001</option>		  
		  <option value="E001">E001</option> 
		  <option value="E100">E100</option> 
		  <option value="E110">E110</option> 
		  <option value="E111">E111</option> 
		  <option value="E116">E116</option> 
		  <option value="E200">E200</option> 
		  <option value="E210">E210</option> 
		  <option value="E250">E250</option> 
		  <option value="E300">E300</option> 
		  <option value="E310">E310</option> 
		  <option value="E316">E316</option> 
		  <option value="E500">E500</option> 
		  <option value="E510">E510</option> 
		  <option value="E520">E520</option> 
		  <option value="E530">E530</option> 
		  <option value="E990">E990</option>
		  <option value="T-G001">T-G001</option>		  
		  <option value="G001">G001</option> 
		  <option value="G990">G990</option>
		  <option value="T-H001">T-H001</option>		  
		  <option value="H001">H001</option> 
		  <option value="H005">H005</option> 
		  <option value="H010">H010</option> 
		  <option value="H990">H990</option>
		  <option value="T-K001">T-K001</option>		  
		  <option value="K001">K001</option> 
		  <option value="K990">K990</option> 
		  <option value="T-1001">T-1001</option>
		  <option value="1001">1001</option> 
		  <option value="1010">1010</option> 
		  <option value="1600">1600</option> 
		  <option value="1990">1990</option>
		  <option value="T-9001">T-9001</option>		  
		  <option value="9001">9001</option> 
		  <option value="9900">9900</option> 
		  <option value="9990">9990</option> 
		  <option value="9999">9999</option>	
		</select>
		<input type="submit" name="enviar" value="Consultar" ><br>
		</form>
		<br>
		<td><input type='button' value='Voltar' onclick='history.go(-1)' />
		<br></font>
		
		</p>			
	</body>
</html>