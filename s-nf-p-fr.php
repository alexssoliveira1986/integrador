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
		
	

		
		<form action="select-nf-pedido-1.php" id="unidade" target="iframe_b"  <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
		enctype="multipart/form-data" >
		
		<center> <i class='fas fa-copyright'></i> <strong> Consulta NF por Pedido<br> Cod Cliente:
		<input type="text" style="width:50px;font-size: 13px" maxlength="8" name="clicli" value="N08146" required >
		Tipo:
		<input type="text" style="width:20px;font-size: 13px" maxlength="1" name="tipo" value="P" required > 
		Pedido:
		<input type="number" style="width:50px;font-size: 13px" maxlength="8" name="pedido" value="50571" required >
		Origem:
		<input type="number" style="width:30px;font-size: 13px" maxlength="2" name="origem" value="96" required > 
		Unidade:</strong> 
		<select name="unidade" form="unidade">
		  <option value="U00001">U00001-MATRIZ</option>
		  <option value="U00002">U00002-ITAIM</option>
		  <option value="U00003">U00003-FIANDEIRAS</option>
		  <option value="U00004">U00004-JOAO DIAS</option>
		  <option value="U00008">U00008-BELEM</option>
		  <option value="U00009">U00009-CAMPINAS</option>
		  <option value="U00112">U00112-RIO PRETO</option>
		  <option value="U00222">U00222-RIBEIRAO</option>
		  <option value="U00224">U00224-TATUAPE</option>	  
		</select>
		<input type="submit" class="button" name="enviar" value="Consultar">
		</form>
	

	  <?php //echo "<meta HTTP-EQUIV='refresh' CONTENT='160;URL=bd-u1.php'>";?>
	</body>
</html>