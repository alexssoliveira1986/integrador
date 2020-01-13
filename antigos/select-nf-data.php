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
font-family: tahoma;
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
		  font-family: tahoma;
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
		<font face="tahoma"> 
		</nav>	
	
		<p>
		<ul>
		
		<li class="dropdown">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="entrar-geral.php">
    <i class="far fa-edit"></i>
  </a>
			<div class="dropdown-content">
			</div>
			</li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Consultas</a><a class="fas fa-chevron-right"></a><font color="white"> Consulta NF por Data</font>
			<div class="dropdown-content">
				<a href="select-nf.php" target="_self" onclick="submit()">Consulta NF</button></a>
				<a href="select-nf-pedido.php" target="_self" onclick="submit()">Consulta NF por Pedido</button></a>
				<a href="select-nf-data.php" target="_self" onclick="submit()">Consulta NF por Data</button></a>
				<a href="select-nf-data-erro.php" target="_self" onclick="submit()">Consulta NF por Data com Erro</button></a>
			</div>
			</li>
			</ul>
		<br>
		<form action="select-nf-data-rel.php" id="unidade" target="_self"  <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
		enctype="multipart/form-data" >
		Informar Periodo:<br>
		<input type="text" name="date1" value="<?php echo date('Y-m-d'); ?>" required > 
		<input type="text" name="date2" value="<?php echo date('Y-m-d'); ?>" required > <br><br>
		Informe Unidade:<br>
		<select name="unidade" form="unidade">
		  <option value="todas">TODAS</option>
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

	<div class="footer">
	<ul>
		<li><a class="active" onclick='history.go(-1)' target="_self" onclick="submit()">Voltar</button></a></li>
		</ul>
		
		
	 </div>		 
	</body>
</html>