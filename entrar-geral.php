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
div.b {
	float: right;
	
}
</style>
	</head>
		<body>
		<nav>
		<font face="Calibri"> 
		</nav>	
		<?php
		//MASTER
		//if(isset($_POST["login"])){
		if($_POST["login"] == $master and $_POST["senha"] == $senha){
		?>
		<ul>
		<li class="dropdown">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">
    <i class="far fa-edit"></i>
  </a>
		<div class="dropdown-content">
			</div>
			</li>

	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Consultas</a>
			<div class="dropdown-content">
				<a href="s-nf-fr.php" target="iframe_a" onclick="submit()">Consulta NF</button></a>
				<a href="s-nf-p-fr.php" target="iframe_a" onclick="submit()">Consulta NF por Pedido</button></a>
				<?php	//<a href="s-nf-d-fr.php" target="iframe_a" onclick="submit()">Consulta NF por Data</button></a> ?>
				<?php	//<a href="s-nf-d-e-fr.php" target="iframe_a" onclick="submit()">Consulta NF por Data com Erro</button></a> ?>
			</div>
			</li>
		
	 <li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Relatórios</a>
			<div class="dropdown-content">
				<a href="select-difal.php" target="iframe_a" onclick="submit()">Relatório DIFAL</button></a>
				<a href="ipist.php" target="iframe_a" onclick="submit()">Relatório IPI/ST</button></a>
				<a href="select-vei-ent.php" target="iframe_a" onclick="submit()">Relatório Veiculos</button></a>
			<?php	//<a href="select-vei-sai.php" target="_self" onclick="submit()">Relatório Veiculo SAIDA</button></a> ?>
			<?php	//<a href="select-vei-90.php" target="_self" onclick="submit()">Relatório Veiculo 90 Dias</button></a> ?>
				<a href="select-mkt.php" target="iframe_a" onclick="submit()">Relatório MKT-Projeto</button></a>
			</div>
			</li>
	
		<li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Livro</a>
			<div class="dropdown-content">
				<a href="dare.php" target="iframe_a" onclick="submit()">Livro DARE</button></a>
				<a href="livro.php" target="iframe_a" onclick="submit()">Livro Saida-Projeto</button></a>
				<a href="#" target="_self" onclick="submit()">Livro Entrada-Projeto</button></a>
			</div>
	</li>

	 <li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Sped</a>
			<div class="dropdown-content">
				<a href="sped1.php" target="iframe_a" onclick="submit()">Sped Fiscal</button></a>
				<a href="#" target="_self" onclick="submit()">Sped Contrib-Projeto</button></a>	
			</div>
	</li>
		<li><a href="select-vei-consulta.php" target="iframe_a" onclick="submit()">Veiculos</button></a></li>
		<li><a href="mvc.php" target="iframe_a" onclick="submit()">Movimento</button></a></li>
		<li><a href="cep.php" target="iframe_a" onclick="submit()">CEP</button></a></li>
		<li><a href="cnpj.php" target="iframe_a" onclick="submit()">CNPJ</button></a></li>
		<li><a href="ws.php" target="iframe_b" onclick="submit()">WS</button></a></li>
		<li><a href="ws1.php" target="iframe_b" onclick="submit()">WS1</button></a></li>
		<li><a href="ws2.php" target="iframe_a" onclick="submit()">WS2</button></a></li>
		<li><a href="email.php" target="iframe_a" onclick="submit()">EMAIL</button></a></li>
		<li><a href="email2.php" target="iframe_a" onclick="submit()">EMAIL2</button></a></li>
			<div class="b">
<li><a >Usuario: <?php echo $master.' - MASTER | Data: '.date("d/m/Y "); ?> </button></a></li></div>
	</ul>
			
		<?php 
		   }elseif ($_POST["login"] == $ale and $_POST["senha"] == $senha1) {
		   // USER ALE
		   ?>
		<ul>
		<li class="dropdown">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">
    <i class="far fa-edit"></i>
  </a>
		<div class="dropdown-content">
			</div>
			</li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Consultas</a>
			<div class="dropdown-content">
				<a href="s-nf-fr.php" target="iframe_a" onclick="submit()">Consulta NF</button></a>
				<a href="s-nf-p-fr.php" target="iframe_a" onclick="submit()">Consulta NF por Pedido</button></a>
			</div>
			</li>
		
	 <li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Relatórios</a>
			<div class="dropdown-content">
				<a href="select-difal.php" target="iframe_a" onclick="submit()">Relatório DIFAL</button></a>
				<a href="ipist.php" target="iframe_a" onclick="submit()">Relatório IPI/ST</button></a>
				<a href="select-vei-ent.php" target="iframe_a" onclick="submit()">Relatório Veiculos</button></a>
				<?php //<a href="select-mkt.php" target="iframe_a" onclick="submit()">Relatório MKT-Projeto</button></a> ?>
			</div>
			</li>
	
		<li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Livro</a>
			<div class="dropdown-content">
				<a href="dare.php" target="iframe_a" onclick="submit()">Livro DARE</button></a>
				<a href="livro.php" target="iframe_a" onclick="submit()">Livro Saida-Projeto</button></a>
				<a href="#" target="_self" onclick="submit()">Livro Entrada-Projeto</button></a>
			</div>
	</li>

	 <li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Sped</a>
			<div class="dropdown-content">
				<a href="sped1.php" target="iframe_a" onclick="submit()">Sped Fiscal</button></a>
				<a href="#" target="_self" onclick="submit()">Sped Contrib-Projeto</button></a>	
			</div>
	</li>
	<li><a href="select-vei-consulta.php" target="iframe_a" onclick="submit()">Veiculos</button></a></li>
	<li><a href="cep.php" target="iframe_a" onclick="submit()">CEP</button></a></li>
	<li><a href="cnpj.php" target="iframe_a" onclick="submit()">CNPJ</button></a></li>
		<div class="b">
<li><a >Usuario: <?php echo $ale.' - Alexandre | Data: '.date("d/m/Y"); ?> </button></a></li></div>
	</ul>
	<?php 
		   }elseif ($_POST["login"] == $wesley and $_POST["senha"] == $senha1) {
		   // USER WESLEY
		   ?>
		<ul>
		<li class="dropdown">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">
    <i class="far fa-edit"></i>
  </a>
		<div class="dropdown-content">
			</div>
			</li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Consultas</a>
			<div class="dropdown-content">
				<a href="s-nf-fr.php" target="iframe_a" onclick="submit()">Consulta NF</button></a>
				<a href="s-nf-p-fr.php" target="iframe_a" onclick="submit()">Consulta NF por Pedido</button></a>
			</div>
			</li>
		
	 <li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Relatórios</a>
			<div class="dropdown-content">
				<a href="select-difal.php" target="iframe_a" onclick="submit()">Relatório DIFAL</button></a>
				<a href="ipist.php" target="iframe_a" onclick="submit()">Relatório IPI/ST</button></a>
				<a href="select-vei-ent.php" target="iframe_a" onclick="submit()">Relatório Veiculos</button></a>
				<?php //<a href="select-mkt.php" target="iframe_a" onclick="submit()">Relatório MKT-Projeto</button></a> ?>
			</div>
			</li>
	
		<li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Livro</a>
			<div class="dropdown-content">
				<a href="dare.php" target="iframe_a" onclick="submit()">Livro DARE</button></a>
				<a href="livro.php" target="iframe_a" onclick="submit()">Livro Saida-Projeto</button></a>
				<a href="#" target="_self" onclick="submit()">Livro Entrada-Projeto</button></a>
			</div>
	</li>

	 <li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Sped</a>
			<div class="dropdown-content">
				<a href="sped1.php" target="iframe_a" onclick="submit()">Sped Fiscal</button></a>
				<a href="#" target="_self" onclick="submit()">Sped Contrib-Projeto</button></a>	
			</div>
	</li>
	<li><a href="select-vei-consulta.php" target="iframe_a" onclick="submit()">Veiculos</button></a></li>
	<li><a href="cep.php" target="iframe_a" onclick="submit()">CEP</button></a></li>
	<li><a href="cnpj.php" target="iframe_a" onclick="submit()">CNPJ</button></a></li>
	<div class="b">
<li><a >Usuario: <?php echo $wesley.' - Wesley | Data: '.date("d/m/Y"); ?> </button></a></li></div>
	</ul>
		<?php 
		   }elseif ($_POST["login"] == $charles and $_POST["senha"] == $senha1) {
		   // USER CHARLES
		   ?>
		<ul>
		<li class="dropdown">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">
    <i class="far fa-edit"></i>
  </a>
		<div class="dropdown-content">
			</div>
			</li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Consultas</a>
			<div class="dropdown-content">
				<a href="s-nf-fr.php" target="iframe_a" onclick="submit()">Consulta NF</button></a>
				<a href="s-nf-p-fr.php" target="iframe_a" onclick="submit()">Consulta NF por Pedido</button></a>
			</div>
			</li>
		
	 <li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Relatórios</a>
			<div class="dropdown-content">
				<a href="select-difal.php" target="iframe_a" onclick="submit()">Relatório DIFAL</button></a>
				<a href="ipist.php" target="iframe_a" onclick="submit()">Relatório IPI/ST</button></a>
				<a href="select-vei-ent.php" target="iframe_a" onclick="submit()">Relatório Veiculos</button></a>
				<?php //<a href="select-mkt.php" target="iframe_a" onclick="submit()">Relatório MKT-Projeto</button></a> ?>
			</div>
			</li>
	
		<li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Livro</a>
			<div class="dropdown-content">
				<a href="dare.php" target="iframe_a" onclick="submit()">Livro DARE</button></a>
				<a href="livro.php" target="iframe_a" onclick="submit()">Livro Saida-Projeto</button></a>
				<a href="#" target="_self" onclick="submit()">Livro Entrada-Projeto</button></a>
			</div>
	</li>

	 <li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Sped</a>
			<div class="dropdown-content">
				<a href="sped1.php" target="iframe_a" onclick="submit()">Sped Fiscal</button></a>
				<a href="#" target="_self" onclick="submit()">Sped Contrib-Projeto</button></a>	
			</div>
	</li>
	<li><a href="select-vei-consulta.php" target="iframe_a" onclick="submit()">Veiculos</button></a></li>
	<li><a href="cep.php" target="iframe_a" onclick="submit()">CEP</button></a></li>
	<li><a href="cnpj.php" target="iframe_a" onclick="submit()">CNPJ</button></a></li>
	<div class="b">
<li><a >Usuario: <?php echo $charles.' - Charles | Data: '.date("d/m/Y"); ?> </button></a></li></div>
	</ul>
		<?php 
		   }elseif ($_POST["login"] == $sheila and $_POST["senha"] == $senha2) {
		   // USER SHEILA
		   ?>
		<ul>
		<li class="dropdown">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">
    <i class="far fa-edit"></i> 
  </a>
  		<div class="dropdown-content">
			</div>
			</li>
		 <li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Relatórios</a>
			<div class="dropdown-content">
			<a href="select-mkt.php" target="iframe_a" onclick="submit()">Relatório MKT-Projeto</button></a>
			</div>
			</li>
			<div class="b">
<li><a >Usuario: <?php echo $sheila.' - Sheila | Data: '.date("d/m/Y"); ?> </button></a></li></div>
	</ul>
	
	<?php 
		   }elseif ($_POST["login"] == $igor and $_POST["senha"] == $senha1) {
		   // USER IGOR
		   ?>
		<ul>
		<li class="dropdown">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">
    <i class="far fa-edit"></i> 
  </a>
  		<div class="dropdown-content">
			</div>
			</li>
		 <li class="dropdown">
		 <a href="javascript:void(0)" class="dropbtn">Contabil</a>
			<div class="dropdown-content">
			<a href="mvc.php" target="iframe_a" onclick="submit()">Movimento</button></a>
			</div>
			</li>
			<div class="b">
<li><a >Usuario: <?php echo $igor.' - Igor | Data: '.date("d/m/Y"); ?> </button></a></li></div>
	</ul>
	
		<?php 
	   }
	   
	   
	//}
		
    //if(isset($_POST["login"])){
      // if($_POST["login"] == $ale and $_POST["senha"] == $senha){
		
		//	<li><a href="ws.php" target="iframe_b" onclick="submit()">WS</button></a></li>
		//echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=/verificar.php?a=entrar-geral.php'>";
		/*
		$url = 'https://www.chevroletnova.com.br/';
		$dadosSite = file_get_contents($url);
		print $dadosSite;
		/*
		$url = 'https://nfe.fazenda.sp.gov.br/ConsultaNFe/consulta/publica/ConsultarNFe.aspx';


$dadosSite = file_get_contents($url);

$var1 = explode('<form id=',$dadosSite);
$var2 = explode("//]]>",$var1[1]);

print $var2[0];

<li><a href="estados.php" target="_self"  onclick="submit()">Gnre DIFAL</button></a></li>
*/
  

?>
		
<div class="a">
<iframe height="75" width="100%" style="border:none;" name="iframe_a"></iframe></div>
<iframe width="100%" style="height:77vh;border:none;" name="iframe_b"></iframe>





		</font>			
	</body>
</html>