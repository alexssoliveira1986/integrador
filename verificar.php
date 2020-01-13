<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Integrador</title><link rel="shortcut icon" href="i5.ico" type="image/x-icon" />
		<meta charset="utf-8" />
		<meta name="description" content="Integrador" />
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<?php // <script>alert('Nova Versão Integrador 2.1');</script>?>
<style>
body { 
  background-image: url('images/nova.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: 99% 99%; 
  background-size: 3%;
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

div.a {
	text-align: center;
	
}
</style>
</head>
		<body>
			<font face="Calibri">
		   <?php
    
    $master = "MASTER";
	$ale = "03376";
	$wesley = "04845";
	$charles = "02750";
	$sheila = "02066";
	$igor = "05642";
	
	$senha = "414141";
	$senha1 = "123456";
	$senha2 = "112233";
	

	$entrar = $_GET['a'];
    if(isset($_POST["login"]))
	{
       if($_POST["login"] == $master and $_POST["senha"] == $senha) 
	   { 
		require $entrar;
        }
		elseif ($_POST["login"] == $ale and $_POST["senha"] == $senha1) 
		{ 
		require $entrar;
		}
		elseif ($_POST["login"] == $wesley and $_POST["senha"] == $senha1) 
		{ 
		require $entrar;
		}
		elseif ($_POST["login"] == $charles and $_POST["senha"] == $senha1) 
		{ 
		require $entrar;
		}
		elseif ($_POST["login"] == $sheila and $_POST["senha"] == $senha2) 
		{ 
		require $entrar;
		}	
		elseif ($_POST["login"] == $igor and $_POST["senha"] == $senha1) 
		{ 
		require $entrar;
		}		
		else
		{
			?>
			<ul>
		<li class="dropdown">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">
    <i class="far fa-edit"></i>
	
  </a>
  </li>
  </nav>
  <li><a href="index.php" target="_self" onclick="submit()">Sair</button></a></li>
  </ul>
            
			<?php
			echo '<br>' . "Usuario ou Senha Inválido";
			
			
        }
    }
 //<div class="footer">
 //<ul>
 //	<li><a class="active" href="index.php" target="_self" onclick="submit()">Sair</button></a></li>
 //</ul>
 //</div>	
    ?>
	
	</body>
</html>

