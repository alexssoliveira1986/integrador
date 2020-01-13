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
 input, label {
   display: block;
  }

  input[type=file]::-webkit-file-upload-button {
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
  }
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
		  padding: 1px;
		  font-size: 12px;
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
	
	
				<table>
	
	<?php 
	

			$reg = $_POST['reg'];
			$_SESSION["reg"] = $reg;
			$diretorio = "C:\\xampp\htdocs\sped/";
			$_SESSION["diretorio"] = $diretorio;
			$link2 = basename($_FILES["arquivo"]["name"]);
			$link = $diretorio . basename($_FILES["arquivo"]["name"]);
			$_SESSION["link"] = $link;
			$_SESSION["link2"] = $link2;
			
			/*$arquivo = fopen ($link, 'r');
			while(!feof($arquivo)){
			$linha = fgets($arquivo, 4086);
			echo $linha.'<br/>';
			}
			fclose($arquivo);*/
		

			$contador = 0;
			$contadora = 0;
			$contadorb = 1;
			$linhas = 0; // Número inicial de linhas contadas
			$linhas = count(file($link));
			$aspas = "'";
			
			
			
			echo '<hr>' . 'GERADO | Arquivo = ' . basename($_FILES["arquivo"]["name"]) .'<hr>';
			echo 'Quantidade de Linhas = ' . number_format (str_replace(",",".",$linhas),"2",".",".").'<hr>';
			
			/*
			$xcontador = $contador;
			$xcontadora = $contadora;
			$xcontadorb = $contadorb;
			$conteudo = file ("$link");
					
		
			$t0 = '|0';
			$p0000 = '|0000|';
			$p0001 = '|0001|';
			$p0005 = '|0005|';
			$p0015 = '|0015|';
			$p0100 = '|0100|';
			$p0150 = '|0150|';
			$p0175 = '|0175|';
			$p0190 = '|0190|';
			$p0200 = '|0200|';
			$p0205 = '|0205|';
			$p0206 = '|0206|';
			$p0210 = '|0210|';
			$p0220 = '|0220|';
			$p0300 = '|0300|';
			$p0305 = '|0305|';
			$p0400 = '|0400|';
			$p0450 = '|0450|';
			$p0460 = '|0460|';
			$p0500 = '|0500|';
			$p0600 = '|0600|';
			$p0990 = '|0990|';

			$tb = '|B';
			$pb001 = '|B001|';
			$pb020 = '|B020|';
			$pb025 = '|B025|';
			$pb030 = '|B030|';
			$pb035 = '|B035|';
			$pb350 = '|B350|';
			$pb420 = '|B420|';
			$pb440 = '|B440|';
			$pb460 = '|B460|';
			$pb470 = '|B470|';
			$pb500 = '|B500|';
			$pb510 = '|B510|';
			$pb990 = '|B990|';
			
			
			$tc = '|C';
			$pc001 = '|C001|';
			$pc100 = '|C100|';
			$pc101 = '|C101|';
			$pc105 = '|C105|';
			$pc110 = '|C110|';
			$pc111 = '|C111|';
			$pc112 = '|C112|';
			$pc113 = '|C113|';
			$pc114 = '|C114|';
			$pc115 = '|C115|';
			$pc116 = '|C116|';
			$pc120 = '|C120|';
			$pc130 = '|C130|';
			$pc140 = '|C140|';
			$pc141 = '|C141|';
			$pc160 = '|C160|';
			$pc165 = '|C165|';
			$pc170 = '|C170|';
			$pc171 = '|C171|';
			$pc172 = '|C172|';
			$pc173 = '|C173|';
			$pc174 = '|C174|';
			$pc175 = '|C175|';
			$pc176 = '|C176|';
			$pc177 = '|C177|';
			$pc178 = '|C178|';
			$pc179 = '|C179|';
			$pc190 = '|C190|';
			$pc191 = '|C191|';
			$pc195 = '|C195|';
			$pc197 = '|C197|';
			$pc300 = '|C300|';
			$pc310 = '|C310|';
			$pc320 = '|C320|';
			$pc321 = '|C321|';
			$pc350 = '|C350|';
			$pc370 = '|C370|';
			$pc390 = '|C390|';
			$pc400 = '|C400|';
			$pc405 = '|C405|';
			$pc410 = '|C410|';
			$pc420 = '|C420|';
			$pc425 = '|C425|';
			$pc460 = '|C460|';
			$pc465 = '|C465|';
			$pc470 = '|C470|';
			$pc490 = '|C490|';
			$pc495 = '|C495|';
			$pc500 = '|C500|';
			$pc510 = '|C510|';
			$pc590 = '|C590|';
			$pc600 = '|C600|';
			$pc601 = '|C601|';
			$pc610 = '|C610|';
			$pc690 = '|C690|';
			$pc700 = '|C700|';
			$pc790 = '|C790|';
			$pc791 = '|C791|';
			$pc800 = '|C800|';
			$pc850 = '|C850|';
			$pc860 = '|C860|';			
			$pc890 = '|C890|';
			$pc990 = '|C990|';
						
			$td = '|D';
			$pd001 = '|D001|';
			$pd100 = '|D100|';
			$pd101 = '|D101|';
			$pd110 = '|D110|';
			$pd120 = '|D120|';
			$pd130 = '|D130|';
			$pd140 = '|D140|';
			$pd150 = '|D150|';
			$pd160 = '|D160|';
			$pd161 = '|D161|';
			$pd162 = '|D162|';
			$pd170 = '|D170|';
			$pd180 = '|D180|';
			$pd190 = '|D190|';
			$pd195 = '|D195|';
			$pd197 = '|D197|';
			$pd300 = '|D300|';
			$pd301 = '|D301|';
			$pd310 = '|D310|';
			$pd350 = '|D350|';
			$pd355 = '|D355|';
			$pd360 = '|D360|';
			$pd365 = '|D365|';
			$pd370 = '|D370|';
			$pd390 = '|D390|';
			$pd400 = '|D400|';
			$pd410 = '|D410|';
			$pd411 = '|D411|';
			$pd420 = '|D420|';
			$pd500 = '|D500|';
			$pd510 = '|D510|';
			$pd530 = '|D530|';
			$pd590 = '|D590|';
			$pd600 = '|D600|';
			$pd610 = '|D610|';
			$pd690 = '|D690|';
			$pd695 = '|D695|';
			$pd696 = '|D696|';
			$pd697 = '|D697|';
			$pd990 = '|D990|';

  
			$te = '|E';
			$pe001 = '|E001|';
			$pe100 = '|E100|';
			$pe110 = '|E110|';
			$pe111 = '|E111|';
			$pe112 = '|E112|';
			$pe113 = '|E113|';
			$pe115 = '|E115|';
			$pe116 = '|E116|';
			$pe200 = '|E200|';
			$pe210 = '|E210|';
			$pe220 = '|E220|';
			$pe230 = '|E230|';
			$pe240 = '|E240|';
			$pe250 = '|E250|';
			$pe300 = '|E300|';
			$pe310 = '|E310|';
			$pe311 = '|E311|';
			$pe312 = '|E312|';
			$pe313 = '|E313|';
			$pe316 = '|E316|';
			$pe500 = '|E500|';
			$pe510 = '|E510|';
			$pe520 = '|E520|';
			$pe530 = '|E530|';
			$pe531 = '|E531|';
			$pe990 = '|E990|';
			
			$tg = '|G';
			$pg001 = '|G001|';
			$pg110 = '|G110|';
			$pg125 = '|G125|';
			$pg126 = '|G126|';
			$pg130 = '|G130|';
			$pg140 = '|G140|';
			$pg990 = '|G990|';
			
			$th = '|H';
			$ph001 = '|H001|';
			$ph005 = '|H005|';
			$ph010 = '|H010|';
			$ph020 = '|H020|';
			$ph990 = '|H990|';
		
			$tk = '|K';
			$pk001 = '|K001|';
			$pk100 = '|K100|';
			$pk200 = '|K200|';
			$pk210 = '|K210|';
			$pk215 = '|K215|';
			$pk220 = '|K220|';
			$pk230 = '|K230|';
			$pk235 = '|K235|';
			$pk250 = '|K250|';
			$pk255 = '|K255|';
			$pk260 = '|K260|';
			$pk265 = '|K265|';
			$pk270 = '|K270|';
			$pk275 = '|K275|';
			$pk280 = '|K280|';
			$pk290 = '|K290|';
			$pk291 = '|K291|';
			$pk292 = '|K292|';
			$pk300 = '|K300|';
			$pk301 = '|K301|';
			$pk302 = '|K302|';
			$pk990 = '|K990|';

			$t1 = '|1';
			$p1001 = '|1001|';
			$p1010 = '|1010|';
			$p1100 = '|1100|';
			$p1105 = '|1105|';
			$p1110 = '|1110|';
			$p1200 = '|1200|';
			$p1210 = '|1210|';
			$p1300 = '|1300|';
			$p1310 = '|1310|';
			$p1320 = '|1320|';
			$p1350 = '|1350|';
			$p1360 = '|1360|';
			$p1370 = '|1370|';
			$p1390 = '|1390|';
			$p1391 = '|1391|';
			$p1400 = '|1400|';
			$p1500 = '|1500|';
			$p1510 = '|1510|';
			$p1600 = '|1600|';
			$p1700 = '|1700|';
			$p1710 = '|1710|';
			$p1800 = '|1800|';
			$p1900 = '|1900|';
			$p1910 = '|1910|';
			$p1920 = '|1920|';
			$p1921 = '|1921|';
			$p1922 = '|1922|';
			$p1923 = '|1923|';
			$p1925 = '|1925|';
			$p1926 = '|1926|';
			$p1960 = '|1960|';
			$p1970 = '|1970|';
			$p1975 = '|1975|';
			$p1980 = '|1980|';
			$p1990 = '|1990|';
			
			$t9 = '|9';	
			$p9001 = '|9001|';
			$p9900 = '|9900|';
			$p9990 = '|9990|';
			$p9999 = '|9999|';
			
			$seq = 'LINHA';
			$conteudolinha = 'CONTEUDO';// . basename($_FILES["arquivo"]["name"]);
			$nivel = 'LINHA PAI';
			$notafiscal = 'NOTA FISCAL';
			$serie = 'SERIE';
			
			//C
			$xreg = 'REG';
			
			//C001
			$xind_mov = 'IND_MOV';
			
			//C100
			$xind_oper = 'IND_OPER';
			$xind_emit = 'IND_EMIT';
			$xcod_part = 'COD_PART';
			$xcod_mod = 'COD_MOD';
			$xcod_sit = 'COD_SIT';
			$xser = 'SER';
			$xnum_doc = 'NUM_DOC';
			$xchv_nfe = 'CHV_NFE';
			$xdt_doc = 'DT_DOC';
			$xdt_e_s = 'DT_E_S';
			$xvl_doc = 'VL_DOC';
			$xind_pgto = 'IND_PGTO';
			$xvl_desc = 'VL_DESC';
			$xvl_abat_nt = 'VL_ABAT_NT';
			$xvl_merc = 'VL_MERC';
			$xind_frt = 'IND_FRT';
			$xvl_frt = 'VL_FRT';
			$xvl_seg = 'VL_SEG';
			$xvl_out_da = 'VL_OUT_DA';
			$xvl_bc_icms = 'VL_BC_ICMS';
			$xvl_icms = 'VL_ICMS';
			$xvl_bc_icms_st = 'VL_BC_ICMS_ST';
			$xvl_icms_st = 'VL_ICMS_ST';
			$xvl_ipi = 'VL_IPI';
			$xvl_pis = 'VL_PIS';
			$xvl_cofins = 'VL_COFINS';
			$xvl_pis_st = 'VL_PIS_ST';
			$xvl_cofins_st = 'VL_COFINS_ST';
			
			//C101
			$xvl_fcp_uf_dest = 'VL_FCP_UF_DEST';
			$xvl_icms_uf_dest = 'VL_ICMS_UF_DEST';
			$xvl_icms_uf_rem = 'VL_ICMS_UF_REM';
			
			//C110
			$xcod_inf = 'COD_INF';
			$xtxt_compl = 'TXT_COMPL';
			
			//C170
			$xnum_item = 'NUM_ITEM';
			$xcod_item = 'COD_ITEM';
			$xdescr_compl = 'DESCR_COMPL';			
			$xqtd = 'QTD';
			$xunid = 'UNID';
			$xvl_item = 'VL_ITEM';
			$xvl_desc = 'VL_DESC';
			$xind_mov = 'IND_MOV';
			$xcst_icms = 'CST_ICMS';
			$xcfop = 'CFOP';
			$xcod_nat = 'COD_NAT';
			$xvl_bc_icms = 'VL_BC_ICMS';
			$xaliq_icms = 'ALIQ_ICMS';
			$xvl_icms = 'VL_ICMS';
			$xvl_bc_icms_st = 'VL_BC_ICMS_ST';
			$xaliq_st = 'ALIQ_ST';
			$xvl_icms_st = 'VL_ICMS_ST';
			$xind_apur = 'IND_APUR';
			$xcst_ipi = 'CST_IPI';
			$xcod_enq = 'COD_ENQ';
			$xvl_bc_ipi = 'VL_BC_IPI';
			$xaliq_ipi = 'ALIQ_IPI';
			$xvl_ipi = 'VL_IPI';
			$xcst_pis = 'CST_PIS';
			$xvl_bc_pis = 'VL_BC_PIS';
			$xaliq_pisp = 'ALIQ_PISP';							
			$xquant_bc_pis = 'QUANT_BC_PIS';
			$xaliq_pisr = 'ALIQ_PISR';
			$xvl_pis = 'VL_PIS';
			$xcst_cofins = 'CST_COFINS';
			$xvl_bc_cofins = 'VL_BC_COFINS';
			$xaliq_cofinsp = 'ALIQ_COFINSP';
			$xquant_bc_cofins = 'QUANT_BC_COFINS';
			$xaliq_confinsr = 'ALIQ_COFINSR';
			$xvl_cofins = 'VL_COFINS';
			$xcod_cta = 'COD_CTA';
			$xvl_abat_nt = 'VL_ABAT_NT';
			
			//C190
			$xcst_icms = 'CST_ICMS';
			$xcfop = 'CFOP';
			$xaliq_icms = 'ALIQ_ICMS';
			$xvl_opr = 'VL_OPR';
			$xvl_bc_icms = 'VL_BC_ICMS';
			$xvl_icms = 'VL_ICMS';
			$xvl_bc_icms_st = 'VL_BC_ICMS_ST';
			$xvl_icms_st = 'VL_ICMS_ST';
			$xvl_red_bc = 'VL_RED_BC';
			$xvl_ipi = 'VL_IPI';
			$xcod_obs = 'COD_OBS';

			
			//C191
			$xvl_fcp_op = 'VL_FCP_OP';
			$xvl_fcp_st = 'VL_FCP_ST';
			$xvl_fcp_ret = 'VL_FCP_RET';
			
			//C990
			$xqtd_lin_c = 'QTD_LIN_C';
			
			if ($reg=='TODOS'){
				
			echo '-TODOS-'.'<br>';	
			
			echo "<table>" . "<tr>";
			
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
			echo "</tr>" . "<td>" . ($xcontadorb ++)."</td>" . "<td>" . ($linha). "</td>";
			
			//0000	Abertura do Arquivo Digital e Identificação da entidade	0	OK

			if ($rest == $t0){
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;	
				echo "<td>" . '<strong>'. ($tpaip0000 -1). '</strong>'. "</td>";
			}					
			}
			//0001	Abertura do Bloco 0	1	OK

			if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;	
				echo "<td>" . $tpaip0000 . "</td>";
			}					
			}
			//0005	Dados Complementares da Entidade	2	OK

			if ($rest == $t0){
				if ($rest1 == $p0005){
				$tpaip0005 = $xcontador;	
				echo "<td>" . $tpaip0001 . "</td>";
			}					
			}
			//0015	Dados do Contribuinte Substituto	2	OK

			if ($rest == $t0){
				if ($rest1 == $p0015){
				$tpaip0015 = $xcontador;	
				echo "<td>" . $tpaip0001 . "</td>";
			}					
			}
			//0100	Dados do Contabilista	2	OK

			if ($rest == $t0){
				if ($rest1 == $p0100){
				$tpaip0100 = $xcontador;	
				echo "<td>" . $tpaip0001 . "</td>";
			}					
			}
			//0150	Tabela de Cadastro do Participante	2	

				if ($rest == $t0){
				if ($rest1 == $p0150){
				$tpaip0150 = $xcontador;	
				echo "<td>" . $tpaip0001 . "</td>";
			}					
			}
			// 0175	Alteração da Tabela de Cadastro de Participante	3	

				if ($rest == $t0){
				if ($rest1 == $p0175){
				$tpaip0175 = $xcontador;	
				echo "<td>" . $tpaip0150 . "</td>";
			}					
			}
			// 0190	Identificação das Unidades de Medida	2	

				if ($rest == $t0){
				if ($rest1 == $p0190){
				$tpaip0190 = $xcontador;	
				echo "<td>" . $tpaip0001 . "</td>";
			}					
			}
			// 0200	Tabela de Identificação do Item (Produtos e Serviços)	2	

				if ($rest == $t0){
				if ($rest1 == $p0200){
				$tpaip0200 = $xcontador;	
				echo "<td>" . $tpaip0001 . "</td>";
			}					
			}
			// 0205	Alteração do Item	3	

				if ($rest == $t0){
				if ($rest1 == $p0205){
				$tpaip0205 = $xcontador;	
				echo "<td>" . $tpaip0200 . "</td>";
			}					
			}
			// 0206	Código de produto conforme Tabela ANP (Combustíveis)	3	

				if ($rest == $t0){
				if ($rest1 == $p0206){
				$tpaip0206 = $xcontador;	
				echo "<td>" . $tpaip0200 . "</td>";
			}					
			}
			// 0210	Consumo Específico Padronizado	3	

				if ($rest == $t0){
				if ($rest1 == $p0210){
				$tpaip0210 = $xcontador;	
				echo "<td>" . $tpaip0200 . "</td>";
			}					
			}
			// 0220	Fatores de Conversão de Unidades	3	

				if ($rest == $t0){
				if ($rest1 == $p0220){
				$tpaip0220 = $xcontador;	
				echo "<td>" . $tpaip0200 . "</td>";
			}					
			}
			// 0300	Cadastro de bens ou componentes do Ativo Imobilizado	2	

				if ($rest == $t0){
				if ($rest1 == $p0300){
				$tpaip0300 = $xcontador;	
				echo "<td>" . $tpaip0001 . "</td>";
			}					
			}
			// 0305	Informação sobre a Utilização do Bem	3	

				if ($rest == $t0){
				if ($rest1 == $p0305){
				$tpaip0305 = $xcontador;	
				echo "<td>" . $tpaip0300 . "</td>";
			}					
			}
			// 0400	Tabela de Natureza da Operação/ Prestação	2	

				if ($rest == $t0){
				if ($rest1 == $p0400){
				$tpaip0400 = $xcontador;	
				echo "<td>" . $tpaip0001 . "</td>";
			}					
			}
			// 0450	Tabela de Informação Complementar do documento fiscal	2	

				if ($rest == $t0){
				if ($rest1 == $p0450){
				$tpaip0450 = $xcontador;	
				echo "<td>" . $tpaip0001 . "</td>";
			}					
			}
			// 0460	Tabela de Observações do Lançamento Fiscal	2	

				if ($rest == $t0){
				if ($rest1 == $p0460){
				$tpaip0460 = $xcontador;	
				echo "<td>" . $tpaip0001 . "</td>";
			}					
			}
			// 0500	Plano de contas contábeis	2	

				if ($rest == $t0){
				if ($rest1 == $p0500){
				$tpaip0500 = $xcontador;	
				echo "<td>" . $tpaip0001 . "</td>";
			}					
			}
			// 0600	Centro de custos	2	

				if ($rest == $t0){
				if ($rest1 == $p0600){
				$tpaip0600 = $xcontador;	
				echo "<td>" . $tpaip0001 . "</td>";
			}					
			}
			// 0990	Encerramento do Bloco 0	1	

				if ($rest == $t0){
				if ($rest1 == $p0990){
				$tpaip0990 = $xcontador;	
				echo "<td>" .  $tpaip0000 . "</td>";
			}					
			}
			// B001	Abertura do Bloco B	1	

				if ($rest == $tb){
				if ($rest1 == $pb001){
				$tpaipb001 = $xcontador;	
				echo "<td>" . '<strong>'. $tpaip0000 . '</strong>'. "</td>";
			}					
			}
			// B020	Nota Fiscal (código 01), Nota Fiscal de Serviços (código 03), Nota Fiscal de Serviços Avulsa (código 3B), Nota Fiscal de Produtor (código 04), Conhecimento de Transporte Rodoviário de Cargas (código 08), NF-e (código 55) e NFC-e (código 65)	2	

				if ($rest == $tb){
				if ($rest1 == $pb020){
				$tpaipb020 = $xcontador;	
				echo "<td>" . $tpaipb001 . "</td>";
			}					
			}
			// B025	Detalhamento por combinação de alíquota e item da lista de serviços da Lei Complementar nº 116/2003	3	

				if ($rest == $tb){
				if ($rest1 == $pb025){
				$tpaipb025 = $xcontador;	
				echo "<td>" . $tpaipb020 . "</td>";
			}					
			}
			// B030	Nota Fiscal de Serviços Simplificada (código 3A)	2	

				if ($rest == $tb){
				if ($rest1 == $pb030){
				$tpaipb030 = $xcontador;	
				echo "<td>" . $tpaipb001 . "</td>";
			}					
			}
			// B035	Detalhamento por combinação de alíquota e item da lista de serviços da Lei Complementar nº 116/2003	3	

				if ($rest == $tb){
				if ($rest1 == $pb035){
				$tpaipb035 = $xcontador;	
				echo "<td>" . $tpaipb030 . "</td>";
			}					
			}
			//B350	Serviços prestados por instituições financeiras	2	

				if ($rest == $tb){
				if ($rest1 == $pb350){
				$tpaipb350 = $xcontador;	
				echo "<td>" . $tpaipb001 . "</td>";
			}					
			}
			//B420	Totalização dos valores de serviços prestados por combinação de alíquota e item da lista de serviços da Lei Complementar nº 116/2003	2	

				if ($rest == $tb){
				if ($rest1 == $pb420){
				$tpaipb420 = $xcontador;	
				echo "<td>" . $tpaipb001 . "</td>";
			}					
			}
			//B440	Totalização dos valores retidos	2	

				if ($rest == $tb){
				if ($rest1 == $pb440){
				$tpaipb440 = $xcontador;	
				echo "<td>" . $tpaipb001 . "</td>";
			}					
			}
			//B460	Deduções do ISS	2	

				if ($rest == $tb){
				if ($rest1 == $pb460){
				$tpaipb460 = $xcontador;	
				echo "<td>" . $tpaipb001 . "</td>";
			}					
			}
			//B470	Apuração do ISS	2	

				if ($rest == $tb){
				if ($rest1 == $pb470){
				$tpaipb470 = $xcontador;	
				echo "<td>" . $tpaipb001 . "</td>";
			}					
			}
			//B500	Apuração do ISS sociedade uniprofissional	2	

				if ($rest == $tb){
				if ($rest1 == $pb500){
				$tpaipb500 = $xcontador;	
				echo "<td>" . $tpaipb001 . "</td>";
			}					
			}
			//B510	Uniprofissional – empregados e sócios	3	

				if ($rest == $tb){
				if ($rest1 == $pb510){
				$tpaipb510 = $xcontador;	
				echo "<td>" . $tpaipb500 . "</td>";
			}					
			}
			//B990	Encerramento do Bloco B	1	

				if ($rest == $tb){
				if ($rest1 == $pb990){
				$tpaipb990 = $xcontador;	
				echo "<td>" . $tpaip0000 . "</td>";
			}					
			}
			//C001	Abertura do Bloco C	1	

				if ($rest == $tc){
				if ($rest1 == $pc001){
				$tpaipc001 = $xcontador;	
				echo "<td>" . '<strong>'.$tpaip0000 .'</strong>'. "</td>";
			}					
			}
			//C100	Documento - Nota Fiscal (código 01), Nota Fiscal Avulsa (código 1B), Nota Fiscal de Produtor (código 04), Nota Fiscal Eletrônica (código 55) e Nota Fiscal Eletrônica para Consumidor Final (código 65)	2	

				if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaipc100 = $xcontador;	
				echo "<td>" . $tpaipc001 . "</td>";
			}					
			}
			//C101	Informação complementar dos documentos fiscais quando das operações interestaduais destinadas a consumidor final não contribuinte EC 87/15 (código 55)	3	

				if ($rest == $tc){
				if ($rest1 == $pc101){
				$tpaipc101 = $xcontador;	
				echo "<td>" . $tpaipc100 . "</td>";
			}					
			}
			//C105	Operações com ICMS ST recolhido para UF diversa do destinatário do documento fiscal (Código 55)	3	

				if ($rest == $tc){
				if ($rest1 == $pc105){
				$tpaipc105 = $xcontador;	
				echo "<td>" . $tpaipc100 . "</td>";
			}					
			}
			//C110	Complemento de Documento - Informação Complementar da Nota Fiscal (código 01, 1B, 55)	3	

				if ($rest == $tc){
				if ($rest1 == $pc110){
				$tpaipc110 = $xcontador;	
				echo "<td>" . $tpaipc100 . "</td>";
			}					
			}
			//C111	Complemento de Documento - Processo referenciado	4	

				if ($rest == $tc){
				if ($rest1 == $pc111){
				$tpaipc111 = $xcontador;	
				echo "<td>" . $tpaipc110 . "</td>";
			}					
			}
			//C112	Complemento de Documento - Documento de Arrecadação Referenciado	4	

				if ($rest == $tc){
				if ($rest1 == $pc112){
				$tpaipc112 = $xcontador;	
				echo "<td>" . $tpaipc110 . "</td>";
			}					
			}
			//C113	Complemento de Documento - Documento Fiscal Referenciado	4	

				if ($rest == $tc){
				if ($rest1 == $pc113){
				$tpaipc113 = $xcontador;	
				echo "<td>" . $tpaipc110 . "</td>";
			}					
			}
			//C114	Complemento de Documento - Cupom Fiscal Referenciado	4	
	
				if ($rest == $tc){
				if ($rest1 == $pc114){
				$tpaipc114 = $xcontador;	
				echo "<td>" . $tpaipc110 . "</td>";
			}					
			}
			//C115	Local de coleta e/ou entrega (CÓDIGOS 01, 1B e 04)	4	

				if ($rest == $tc){
				if ($rest1 == $pc115){
				$tpaipc115 = $xcontador;	
				echo "<td>" . $tpaipc110 . "</td>";
			}					
			}
			//C116	Cupom Fiscal Eletrônico - CF-e referenciado	4	

				if ($rest == $tc){
				if ($rest1 == $pc116){
				$tpaipc116 = $xcontador;	
				echo "<td>" . $tpaipc110 . "</td>";
			}					
			}
			//C120	Complemento de Documento - Operações de Importação (código 01 e 55)	3	

				if ($rest == $tc){
				if ($rest1 == $pc120){
				$tpaipc120 = $xcontador;	
				echo "<td>" . $tpaipc100 . "</td>";
			}					
			}
			//C130	Complemento de Documento - ISSQN, IRRF e Previdência Social	3	

				if ($rest == $tc){
				if ($rest1 == $pc130){
				$tpaipc130 = $xcontador;	
				echo "<td>" . $tpaipc100 . "</td>";
			}					
			}
			//C140	Complemento de Documento - Fatura (código 01)	3	

				if ($rest == $tc){
				if ($rest1 == $pc140){
				$tpaipc140 = $xcontador;	
				echo "<td>" . $tpaipc100 . "</td>";
			}					
			}
			//C141	Complemento de Documento - Vencimento da Fatura (código 01)	4	

				if ($rest == $tc){
				if ($rest1 == $pc141){
				$tpaipc141 = $xcontador;	
				echo "<td>" . $tpaipc140 . "</td>";
			}					
			}
			//C160	Complemento de Documento - Volumes Transportados (código 01 e 04) Exceto Combustíveis	3	

				if ($rest == $tc){
				if ($rest1 == $pc160){
				$tpaipc160 = $xcontador;	
				echo "<td>" . $tpaipc100 . "</td>";
			}					
			}
			//C165	Complemento de Documento - Operações com combustíveis (código 01)	3	


				if ($rest == $tc){
				if ($rest1 == $pc165){
				$tpaipc165 = $xcontador;	
				echo "<td>" . $tpaipc100 . "</td>";
			}					
			}
			//C170	Complemento de Documento - Itens do Documento (código 01, 1B, 04 e 55)	3	

				if ($rest == $tc){
				if ($rest1 == $pc170){
				$tpaipc170 = $xcontador;	
				echo "<td>" . $tpaipc100 . "</td>";
			}					
			}
			//C171	Complemento de Item - Armazenamento de Combustíveis (código 01,55)	4	

				if ($rest == $tc){
				if ($rest1 == $pc171){
				$tpaipc171 = $xcontador;	
				echo "<td>" . $tpaipc170 . "</td>";
			}					
			}
			//C172	Complemento de Item - Operações com ISSQN (código 01)	4	

				if ($rest == $tc){
				if ($rest1 == $pc172){
				$tpaipc172 = $xcontador;	
				echo "<td>" . $tpaipc170 . "</td>";
			}					
			}
			//C173	Complemento de Item - Operações com Medicamentos (código 01,55)	4	

				if ($rest == $tc){
				if ($rest1 == $pc173){
				$tpaipc173 = $xcontador;	
				echo "<td>" . $tpaipc170 . "</td>";
			}					
			}
			//C174	Complemento de Item - Operações com Armas de Fogo (código 01)	4	

				if ($rest == $tc){
				if ($rest1 == $pc174){
				$tpaipc174 = $xcontador;	
				echo "<td>" . $tpaipc170 . "</td>";
			}					
			}
			//C175	Complemento de Item - Operações com Veículos Novos (código 01,55)	4	

				if ($rest == $tc){
				if ($rest1 == $pc175){
				$tpaipc175 = $xcontador;	
				echo "<td>" . $tpaipc170 . "</td>";
			}					
			}
			//C176	Complemento de Item -Ressarcimento de ICMS em operações com Substituição Tributária (código 01,55)	4	

				if ($rest == $tc){
				if ($rest1 == $pc176){
				$tpaipc176 = $xcontador;	
				echo "<td>" . $tpaipc170 . "</td>";
			}					
			}
			//C177	Complemento de Item – Outras informações (Cód. 01, 55) – (Válido a partir de 01/01/2019)	4	

				if ($rest == $tc){
				if ($rest1 == $pc177){
				$tpaipc177 = $xcontador;	
				echo "<td>" . $tpaipc170 . "</td>";
			}					
			}
			//C178	Complemento de Item - Operações com Produtos Sujeitos a Tributação de IPI por Unidade ou Quantidade de produto	4	

				if ($rest == $tc){
				if ($rest1 == $pc178){
				$tpaipc178 = $xcontador;	
				echo "<td>" . $tpaipc170 . "</td>";
			}					
			}
			//C179	Complemento de Item - Informações Complementares ST (código 01)	4	

				if ($rest == $tc){
				if ($rest1 == $pc179){
				$tpaipc179 = $xcontador;	
				echo "<td>" . $tpaipc170 . "</td>";
			}					
			}
			//C190	Registro Analítico do Documento (código 01, 1B, 04, 55 e 65)	3	

				if ($rest == $tc){
				if ($rest1 == $pc190){
				$tpaipc190 = $xcontador;	
				echo "<td>" . $tpaipc100 . "</td>";
			}					
			}
			//C191	Informações do Fundo de Combate à Pobreza – FCP – na NF-e (Código 55)	4	

				if ($rest == $tc){
				if ($rest1 == $pc191){
				$tpaipc191 = $xcontador;	
				echo "<td>" . $tpaipc190 . "</td>";
			}					
			}
			//C195	Complemento do Registro Analítico - Observações do Lançamento Fiscal (código 01, 1B, 04 e 55)	3	

				if ($rest == $tc){
				if ($rest1 == $pc195){
				$tpaipc195 = $xcontador;	
				echo "<td>" . $tpaipc100 . "</td>";
			}					
			}
			//C197	Outras Obrigações Tributárias, Ajustes e Informações provenientes de Documento Fiscal	4	

				if ($rest == $tc){
				if ($rest1 == $pc197){
				$tpaipc197 = $xcontador;	
				echo "<td>" . $tpaipc195 . "</td>";
			}					
			}
			//C300	Documento - Resumo Diário das Notas Fiscais de Venda a Consumidor (código 02)	2	

				if ($rest == $tc){
				if ($rest1 == $pc300){
				$tpaipc300 = $xcontador;	
				echo "<td>" . $tpaipc001 . "</td>";
			}					
			}
			//C310	Documentos Cancelados de Nota Fiscal de Venda a Consumidor (código 02)	3	

				if ($rest == $tc){
				if ($rest1 == $pc310){
				$tpaipc310 = $xcontador;	
				echo "<td>" . $tpaipc300 . "</td>";
			}					
			}
			//C320	Registro Analítico das Notas Fiscais de Venda a Consumidor (código 02)	3	

				if ($rest == $tc){
				if ($rest1 == $pc320){
				$tpaipc320 = $xcontador;	
				echo "<td>" . $tpaipc300 . "</td>";
			}					
			}
			//C321	Itens dos Resumos Diários dos Documentos (código 02)	4	

				if ($rest == $tc){
				if ($rest1 == $pc321){
				$tpaipc321 = $xcontador;	
				echo "<td>" . $tpaipc320 . "</td>";
			}					
			}
			//C350	Nota Fiscal de venda a consumidor (código 02)	2	

				if ($rest == $tc){
				if ($rest1 == $pc350){
				$tpaipc350 = $xcontador;	
				echo "<td>" . $tpaipc001 . "</td>";
			}					
			}
			//C370	Itens do documento (código 02)	3	

				if ($rest == $tc){
				if ($rest1 == $pc370){
				$tpaipc370 = $xcontador;	
				echo "<td>" . $tpaipc350 . "</td>";
			}					
			}
			//C390	Registro Analítico das Notas Fiscais de Venda a Consumidor (código 02)	3	

				if ($rest == $tc){
				if ($rest1 == $pc390){
				$tpaipc390 = $xcontador;	
				echo "<td>" . $tpaipc350 . "</td>";
			}					
			}
			//C400	Equipamento ECF (código 02, 2D e 60)	2	

				if ($rest == $tc){
				if ($rest1 == $pc400){
				$tpaipc400 = $xcontador;	
				echo "<td>" . $tpaipc001 . "</td>";
			}					
			}
			//C405	Redução Z (código 02, 2D e 60)	3	

				if ($rest == $tc){
				if ($rest1 == $pc405){
				$tpaipc405 = $xcontador;	
				echo "<td>" . $tpaipc400 . "</td>";
			}					
			}
			//C410	PIS e COFINS Totalizados no Dia (código 02 e 2D)	4	

				if ($rest == $tc){
				if ($rest1 == $pc410){
				$tpaipc410 = $xcontador;	
				echo "<td>" . $tpaipc405 . "</td>";
			}					
			}
			//C420	Registro dos Totalizadores Parciais da Redução Z (código 02, 2D e 60)	4	

				if ($rest == $tc){
				if ($rest1 == $pc420){
				$tpaipc420 = $xcontador;	
				echo "<td>" . $tpaipc405 . "</td>";
			}					
			}
			//C425	Resumo de itens do movimento diário (código 02 e 2D)	5	

				if ($rest == $tc){
				if ($rest1 == $pc425){
				$tpaipc425 = $xcontador;	
				echo "<td>" . $tpaipc420 . "</td>";
			}					
			}
			//C460	Documento Fiscal Emitido por ECF (código 02, 2D e 60)	4	

				if ($rest == $tc){
				if ($rest1 == $pc460){
				$tpaipc460 = $xcontador;	
				echo "<td>" . $tpaipc405 . "</td>";
			}					
			}
			//C465	Complemento do Cupom Fiscal Eletrônico Emitido por ECF - CF-e-ECF (código 60)	5	

				if ($rest == $tc){
				if ($rest1 == $pc465){
				$tpaipc465 = $xcontador;	
				echo "<td>" . $tpaipc460 . "</td>";
			}					
			}
			//C470	Itens do Documento Fiscal Emitido por ECF (código 02 e 2D)	5	

				if ($rest == $tc){
				if ($rest1 == $pc470){
				$tpaipc470 = $xcontador;	
				echo "<td>" . $tpaipc460 . "</td>";
			}					
			}
			//C490	Registro Analítico do movimento diário (código 02, 2D e 60)	4	

				if ($rest == $tc){
				if ($rest1 == $pc490){
				$tpaipc490 = $xcontador;	
				echo "<td>" . $tpaipc405 . "</td>";
			}					
			}
			//C495	Resumo Mensal de Itens do ECF por Estabelecimento (código 02 e 2D e 2E)	2	

				if ($rest == $tc){
				if ($rest1 == $pc495){
				$tpaipc495 = $xcontador;	
				echo "<td>" . $tpaipc001 . "</td>";
			}					
			}
			//C500	Nota Fiscal/Conta de Energia Elétrica (código 06), Nota Fiscal/Conta de fornecimento d'água canalizada (código 29) e Nota Fiscal/Consumo Fornecimento de Gás (Código 28)	2	

				if ($rest == $tc){
				if ($rest1 == $pc500){
				$tpaipc500 = $xcontador;	
				echo "<td>" . $tpaipc001 . "</td>";
			}					
			}
			//C510	Itens do Documento - Nota Fiscal/Conta de Energia Elétrica (código 06), Nota Fiscal/Conta de fornecimento d'água canalizada (código 29) e Nota Fiscal/Conta Fornecimento de Gás (Código 28)	3	

				if ($rest == $tc){
				if ($rest1 == $pc510){
				$tpaipc510 = $xcontador;	
				echo "<td>" . $tpaipc500 . "</td>";
			}					
			}
			//C590	Registro Analítico do Documento - Nota Fiscal/Conta de Energia Elétrica (código 06), Nota Fiscal/Conta de fornecimento d'água canalizada (código 29) e Nota Fiscal/Conta Fornecimento de Gás (Código 28)	3	

				if ($rest == $tc){
				if ($rest1 == $pc590){
				$tpaipc590 = $xcontador;	
				echo "<td>" . $tpaipc500 . "</td>";
			}					
			}
			//C600	Consolidação Diária de Notas Fiscais/Contas de Energia Elétrica (Código 06), Nota Fiscal/Conta de Fornecimento d´água (código 29) e Nota Fiscal/Conta de Fornecimento de Gás (Código 28) - (Empresas não obrigadas ao Convênio ICMS 115/03)	2	

				if ($rest == $tc){
				if ($rest1 == $pc600){
				$tpaipc600 = $xcontador;	
				echo "<td>" . $tpaipc001 . "</td>";
			}					
			}
			//C601	Documentos cancelados - Consolidação diária de notas fiscais/conta de energia elétrica (Código 06), nota fiscal/conta de fornecimento de água (código 29) e nota fiscal/conta de fornecimento de gás (código 28)	3	

				if ($rest == $tc){
				if ($rest1 == $pc601){
				$tpaipc601 = $xcontador;	
				echo "<td>" . $tpaipc600 . "</td>";
			}					
			}
			//C610	Itens do Documento Consolidado - Notas Fiscais/Contas de Energia Elétrica (Código 06), Nota Fiscal/Conta de Fornecimento d´água (código 29) e Nota Fiscal/Conta de Fornecimento de Gás (Código 28) - (Empresas não obrigadas ao Convênio ICMS 115/03)	3	

				if ($rest == $tc){
				if ($rest1 == $pc610){
				$tpaipc610 = $xcontador;	
				echo "<td>" . $tpaipc600 . "</td>";
			}					
			}
			//C690	Registro Analítico dos Documentos - Notas Fiscais/Contas de Energia Elétrica (Código 06), Nota Fiscal/Conta de Fornecimento d´água (código 29) e Nota Fiscal/Conta de Fornecimento de Gás (Código 28)	3	

				if ($rest == $tc){
				if ($rest1 == $pc690){
				$tpaipc690 = $xcontador;	
				echo "<td>" . $tpaipc600 . "</td>";
			}					
			}
			//C700	Consolidação dos Documentos Nota Fiscal/Conta Energia Elétrica (código 06) emitidas em via única - (Empresas obrigadas à entrega do arquivo previsto no Convênio ICMS 115/03) e Nota Fiscal/Conta de Fornecimento de Gás Canalizado (Código 28)	2	

				if ($rest == $tc){
				if ($rest1 == $pc700){
				$tpaipc700 = $xcontador;	
				echo "<td>" . $tpaipc001 . "</td>";
			}					
			}
			//C790	Registro Analítico dos Documentos - Nota Fiscal/Conta Energia Elétrica (código 06) emitidas em via única	3	

				if ($rest == $tc){
				if ($rest1 == $pc790){
				$tpaipc790 = $xcontador;	
				echo "<td>" . $tpaipc700 . "</td>";
			}					
			}
			//C791	Registro de Informações de ICMS ST por UF	4	
				
				if ($rest == $tc){
				if ($rest1 == $pc791){
				$tpaipc791 = $xcontador;	
				echo "<td>" . $tpaipc790 . "</td>";
			}					
			}
			//C800	Registro Cupom Fiscal Eletrônico - CF-e (Código 59)	2	

				if ($rest == $tc){
				if ($rest1 == $pc800){
				$tpaipc800 = $xcontador;	
				echo "<td>" . $tpaipc001 . "</td>";
			}					
			}
			//C850	Registro Analítico do CF-e (Código 59)	3	

				if ($rest == $tc){
				if ($rest1 == $pc850){
				$tpaipc850 = $xcontador;	
				echo "<td>" . $tpaipc800 . "</td>";
			}					
			}
			//C860	Identificação do equipamento SAT-CF-e (Código 59)	2	

				if ($rest == $tc){
				if ($rest1 == $pc860){
				$tpaipc860 = $xcontador;	
				echo "<td>" . $tpaipc001 . "</td>";
			}					
			}
			//C890	Resumo diário de CF-e (Código 59) por equipamento SAT-CF-e	3	

				if ($rest == $tc){
				if ($rest1 == $pc890){
				$tpaipc890 = $xcontador;	
				echo "<td>" . $tpaipc860 . "</td>";
			}					
			}
			//C990	Encerramento do Bloco C	1	

				if ($rest == $tc){
				if ($rest1 == $pc990){
				$tpaipc990 = $xcontador;	
				echo "<td>" . $tpaip0000 . "</td>";
			}					
			}
			//D001	Abertura do Bloco D	1		
				if ($rest == $td){
				if ($rest1 == $pd001){
				$tpaipd001 = $xcontador;	
				echo "<td>" . '<strong>' . $tpaip0000 . '</strong>' . "</td>";
			}					
			}
			//D100	Nota Fiscal de Serviço de Transporte (código 07), Conhecimentos de Transporte Rodoviário De Cargas (código 08), Conhecimentos de Transporte de Cargas Avulso (código 8b), Aquaviário de Cargas (código 09), Aéreo (código 10), Ferroviário de Cargas (código 11), Multimodal de Cargas (código 26), Nota Fiscal de Transporte Ferroviário de Carga (código 27), Conhecimento de Transporte Eletrônico – CT-e (código 57), Conhecimento de Transporte Eletrônico para Outros Serviços - CT-e OS (código 67) e Bilhete de Passagem Eletrônico (código 63)	2	

				if ($rest == $td){
				if ($rest1 == $pd100){
				$tpaipd100 = $xcontador;	
				echo "<td>" . $tpaipd001 . "</td>";
			}					
			}
			//D101	Informação complementar dos documentos fiscais quando das prestações interestaduais destinadas a consumidor final não contribuinte EC 87/15 (código 57 e 67)	3	

				if ($rest == $td){
				if ($rest1 == $pd101){
				$tpaipd101 = $xcontador;	
				echo "<td>" . $tpaipd100 . "</td>";
			}					
			}
			//D110	Itens do documento - Nota Fiscal de Serviços de Transporte (código 07)	3	

				if ($rest == $td){
				if ($rest1 == $pd110){
				$tpaipd110 = $xcontador;	
				echo "<td>" . $tpaipd100 . "</td>";
			}					
			}
			//D120	Complemento da Nota Fiscal de Serviços de Transporte (código 07)	4	

				if ($rest == $td){
				if ($rest1 == $pd120){
				$tpaipd120 = $xcontador;	
				echo "<td>" . $tpaipd110 . "</td>";
			}					
			}
			//D130	Complemento do Conhecimento Rodoviário de Cargas (código 08) e Conhecimento de Transporte de Cargas Avulso (Código 8B)	3	

				if ($rest == $td){
				if ($rest1 == $pd130){
				$tpaipd130 = $xcontador;	
				echo "<td>" . $tpaipd100 . "</td>";
			}					
			}
			//D140	Complemento do Conhecimento Aquaviário de Cargas (código 09)	3	

				if ($rest == $td){
				if ($rest1 == $pd140){
				$tpaipd140 = $xcontador;	
				echo "<td>" . $tpaipd100 . "</td>";
			}					
			}
			//D150	Complemento do Conhecimento Aéreo de Cargas (código 10)	3	

				if ($rest == $td){
				if ($rest1 == $pd150){
				$tpaipd150 = $xcontador;	
				echo "<td>" . $tpaipd100 . "</td>";
			}					
			}
			//D160	Carga Transportada (CÓDIGO 08, 8B, 09, 10, 11, 26 E 27)	3	

				if ($rest == $td){
				if ($rest1 == $pd160){
				$tpaipd160 = $xcontador;	
				echo "<td>" . $tpaipd100 . "</td>";
			}					
			}
			//D161	Local de Coleta e Entrega (códigos 08, 8B, 09, 10, 11 e 26)	4	

				if ($rest == $td){
				if ($rest1 == $pd161){
				$tpaipd161 = $xcontador;	
				echo "<td>" . $tpaipd160 . "</td>";
			}					
			}
			//D162	Local de Coleta e Entrega (códigos 08, 8B, 09, 10, 11 e 26)	4	

				if ($rest == $td){
				if ($rest1 == $pd162){
				$tpaipd162 = $xcontador;	
				echo "<td>" . $tpaipd160 . "</td>";
			}					
			}
			//D170	Complemento do Conhecimento Multimodal de Cargas (código 26)	3	

				if ($rest == $td){
				if ($rest1 == $pd170){
				$tpaipd170 = $xcontador;	
				echo "<td>" . $tpaipd100 . "</td>";
			}					
			}
			//D180	Modais (código 26)	3	

				if ($rest == $td){
				if ($rest1 == $pd180){
				$tpaipd180 = $xcontador;	
				echo "<td>" . $tpaipd100 . "</td>";
			}					
			}
			//D190	Registro Analítico dos Documentos (CÓDIGO 07, 08, 8B, 09, 10, 11, 26, 27, 57 e 67)	3	

				if ($rest == $td){
				if ($rest1 == $pd190){
				$tpaipd190 = $xcontador;	
				echo "<td>" . $tpaipd100 . "</td>";
			}					
			}
			//D195	Observações do lançamento (CÓDIGO 07, 08, 8B, 09, 10, 11, 26, 27, 57 e 67)	3	

				if ($rest == $td){
				if ($rest1 == $pd195){
				$tpaipd195 = $xcontador;	
				echo "<td>" . $tpaipd100 . "</td>";
			}					
			}
			//D197	Outras obrigações tributárias, ajustes e informações de valores provenientes do documento fiscal.	4	
	
				if ($rest == $td){
				if ($rest1 == $pd197){
				$tpaipd197 = $xcontador;	
				echo "<td>" . $tpaipd195 . "</td>";
			}					
			}
			//D300	Registro Analítico dos bilhetes consolidados de Passagem Rodoviário (código 13), de Passagem Aquaviário (código 14), de Passagem e Nota de Bagagem (código 15) e de Passagem Ferroviário (código 16)	2	

				if ($rest == $td){
				if ($rest1 == $pd300){
				$tpaipd300 = $xcontador;	
				echo "<td>" . $tpaipd001 . "</td>";
			}					
			}
			//D301	Documentos cancelados dos Bilhetes de Passagem Rodoviário (código 13), de Passagem Aquaviário (código 14), de Passagem e Nota de Bagagem (código 15) e de Passagem Ferroviário (código 16)	3	

				if ($rest == $td){
				if ($rest1 == $pd301){
				$tpaipd301 = $xcontador;	
				echo "<td>" . $tpaipd300 . "</td>";
			}					
			}
			//D310	Complemento dos Bilhetes (código 13, código 14, código 15 e código 16)	3	

				if ($rest == $td){
				if ($rest1 == $pd310){
				$tpaipd310 = $xcontador;	
				echo "<td>" . $tpaipd300 . "</td>";
			}					
			}
			//D350	Equipamento ECF (Códigos 2E, 13, 14, 15 e 16)	2	

				if ($rest == $td){
				if ($rest1 == $pd350){
				$tpaipd350 = $xcontador;	
				echo "<td>" . $tpaipd001 . "</td>";
			}					
			}
			//D355	Redução Z (Códigos 2E, 13, 14, 15 e 16)	3	

				if ($rest == $td){
				if ($rest1 == $pd355){
				$tpaipd355 = $xcontador;	
				echo "<td>" . $tpaipd350 . "</td>";
			}					
			}
			//D360	PIS E COFINS totalizados no dia (Códigos 2E, 13, 14, 15 e 16)	4	

				if ($rest == $td){
				if ($rest1 == $pd360){
				$tpaipd360 = $xcontador;	
				echo "<td>" . $tpaipd355 . "</td>";
			}					
			}
			//D365	Registro dos Totalizadores Parciais da Redução Z (Códigos 2E, 13, 14, 15 e 16)	4	

				if ($rest == $td){
				if ($rest1 == $pd365){
				$tpaipd365 = $xcontador;	
				echo "<td>" . $tpaipd355 . "</td>";
			}					
			}
			//D370	Complemento dos documentos informados (Códigos 13, 14, 15, 16 E 2E)	5	

				if ($rest == $td){
				if ($rest1 == $pd370){
				$tpaipd370 = $xcontador;	
				echo "<td>" . $tpaipd365 . "</td>";
			}					
			}
			//D390	Registro analítico do movimento diário (Códigos 13, 14, 15, 16 E 2E)	4	

				if ($rest == $td){
				if ($rest1 == $pd390){
				$tpaipd390 = $xcontador;	
				echo "<td>" . $tpaipd355 . "</td>";
			}					
			}
			//D400	Resumo do Movimento Diário (código 18)	2	

				if ($rest == $td){
				if ($rest1 == $pd400){
				$tpaipd400 = $xcontador;	
				echo "<td>" . $tpaipd001 . "</td>";
			}					
			}
			//D410	Documentos Informados (Códigos 13, 14, 15 e 16)	3	

				if ($rest == $td){
				if ($rest1 == $pd410){
				$tpaipd410 = $xcontador;	
				echo "<td>" . $tpaipd400 . "</td>";
			}					
			}
			
			//D411	Documentos Cancelados dos Documentos Informados (Códigos 13, 14, 15 e 16)	4	
				if ($rest == $td){
				if ($rest1 == $pd411){
				$tpaipd411 = $xcontador;	
				echo "<td>" . $tpaipd410 . "</td>";
			}					
			}
			//D420	Complemento dos Documentos Informados (Códigos 13, 14, 15 e 16)	3	

				if ($rest == $td){
				if ($rest1 == $pd420){
				$tpaipd420 = $xcontador;	
				echo "<td>" . $tpaipd400 . "</td>";
			}					
			}
			//D500	Nota Fiscal de Serviço de Comunicação (código 21) e Serviço de Telecomunicação (código 22)	2	

				if ($rest == $td){
				if ($rest1 == $pd500){
				$tpaipd500 = $xcontador;	
				echo "<td>" . $tpaipd001 . "</td>";
			}					
			}
			//D510	Itens do Documento - Nota Fiscal de Serviço de Comunicação (código 21) e Serviço de Telecomunicação (código 22)	3	

				if ($rest == $td){
				if ($rest1 == $pd510){
				$tpaipd510 = $xcontador;	
				echo "<td>" . $tpaipd500 . "</td>";
			}					
			}
			//D530	Terminal Faturado	3	

				if ($rest == $td){
				if ($rest1 == $pd530){
				$tpaipd530 = $xcontador;	
				echo "<td>" . $tpaipd500 . "</td>";
			}					
			}
			//D590	Registro Analítico do Documento (códigos 21 e 22)	3	

				if ($rest == $td){
				if ($rest1 == $pd590){
				$tpaipd590 = $xcontador;	
				echo "<td>" . $tpaipd500 . "</td>";
			}					
			}
			
			
			//D600	Consolidação da Prestação de Serviços - Notas de Serviço de Comunicação (código 21) e de Serviço de Telecomunicação (código 22)	2	
				if ($rest == $td){
				if ($rest1 == $pd600){
				$tpaipd600 = $xcontador;	
				echo "<td>" . $tpaipd001 . "</td>";
			}					
			}
			//D610	Itens do Documento Consolidado (códigos 21 e 22)	3	

				if ($rest == $td){
				if ($rest1 == $pd610){
				$tpaipd610 = $xcontador;	
				echo "<td>" . $tpaipd600 . "</td>";
			}					
			}
			//D690	Registro Analítico dos Documentos (códigos 21 e 22)	3	

				if ($rest == $td){
				if ($rest1 == $pd690){
				$tpaipd690 = $xcontador;	
				echo "<td>" . $tpaipd600 . "</td>";
			}					
			}
			//D695	Consolidação da Prestação de Serviços - Notas de Serviço de Comunicação (código 21) e de Serviço de Telecomunicação (código 22)	2	

				if ($rest == $td){
				if ($rest1 == $pd695){
				$tpaipd695 = $xcontador;	
				echo "<td>" . $tpaipd001 . "</td>";
			}					
			}
			//D696	Registro Analítico dos Documentos (códigos 21 e 22)	3	

				if ($rest == $td){
				if ($rest1 == $pd696){
				$tpaipd696 = $xcontador;	
				echo "<td>" . $tpaipd695 . "</td>";
			}					
			}
			//D697	Registro de informações de outras UFs, relativamente aos serviços “não-medidos” de televisão por assinatura via satélite	4	

				if ($rest == $td){
				if ($rest1 == $pd697){
				$tpaipd697 = $xcontador;	
				echo "<td>" . $tpaipd696 . "</td>";
			}					
			}
			//D990	Encerramento do Bloco D	1	

				if ($rest == $td){
				if ($rest1 == $pd990){
				$tpaipd990 = $xcontador;	
				echo "<td>" . $tpaip0000 . "</td>";
			}					
			}
			
			
			//E001	Abertura do Bloco E	1	

				if ($rest == $te){
				if ($rest1 == $pe001){
				$tpaipe001 = $xcontador;	
				echo "<td>" . '<strong>' . $tpaip0000 . '</strong>' . "</td>";
			}					
			}
			//E100	Período de Apuração do ICMS	2	

				if ($rest == $te){
				if ($rest1 == $pe100){
				$tpaipe100 = $xcontador;	
				echo "<td>" . $tpaipe001  . "</td>";
			}					
			}
			//E110	Apuração do ICMS - Operações Próprias	3	

				if ($rest == $te){
				if ($rest1 == $pe110){
				$tpaipe110 = $xcontador;	
				echo "<td>"  . $tpaipe100 .  "</td>";
			}					
			}
			//E111	Ajuste/Benefício/Incentivo da Apuração do ICMS	4	

				if ($rest == $te){
				if ($rest1 == $pe111){
				$tpaipe111 = $xcontador;	
				echo "<td>"  . $tpaipe110 . "</td>";
			}					
			}
			//E112	Informações Adicionais dos Ajustes da Apuração do ICMS	5	

				if ($rest == $te){
				if ($rest1 == $pe112){
				$tpaipe112 = $xcontador;	
				echo "<td>"  . $tpaipe111 . "</td>";
			}					
			}
			//E113	Informações Adicionais dos Ajustes da Apuração do ICMS - Identificação dos documentos fiscais	5	

				if ($rest == $te){
				if ($rest1 == $pe113){
				$tpaipe113 = $xcontador;	
				echo "<td>"  . $tpaipe111 . "</td>";
			}					
			}
			//E115	Informações Adicionais da Apuração do ICMS - Valores Declaratórios	4	

				if ($rest == $te){
				if ($rest1 == $pe115){
				$tpaipe115 = $xcontador;	
				echo "<td>"  . $tpaipe110 .  "</td>";
			}					
			}
			//E116	Obrigações do ICMS Recolhido ou a Recolher - Obrigações Próprias	4	

				if ($rest == $te){
				if ($rest1 == $pe116){
				$tpaipe116 = $xcontador;	
				echo "<td>"  . $tpaipe110 .  "</td>";
			}					
			}
			//E200	Período de Apuração do ICMS - Substituição Tributária	2	

				if ($rest == $te){
				if ($rest1 == $pe200){
				$tpaipe200 = $xcontador;	
				echo "<td>"  . $tpaipe001 .  "</td>";
			}					
			}
			//E210	Apuração do ICMS - Substituição Tributária	3	

				if ($rest == $te){
				if ($rest1 == $pe210){
				$tpaipe210 = $xcontador;	
				echo "<td>"  . $tpaipe200 . "</td>";
			}					
			}
			//E220	Ajuste/Benefício/Incentivo da Apuração do ICMS - Substituição Tributária	4	

				if ($rest == $te){
				if ($rest1 == $pe220){
				$tpaipe220 = $xcontador;	
				echo "<td>"  . $tpaipe210 . "</td>";
			}					
			}
			//E230	Informações Adicionais dos Ajustes da Apuração do ICMS Substituição Tributária	5	

				if ($rest == $te){
				if ($rest1 == $pe230){
				$tpaipe230 = $xcontador;	
				echo "<td>"  . $tpaipe220 . "</td>";
			}					
			}
			//E240	Informações Adicionais dos Ajustes da Apuração do ICMS Substituição Tributária - Identificação dos documentos fiscais	5	

				if ($rest == $te){
				if ($rest1 == $pe240){
				$tpaipe240 = $xcontador;	
				echo "<td>"  . $tpaipe220 . "</td>";
			}					
			}
			//E250	Obrigações do ICMS a Recolher - Substituição Tributária	4	

				if ($rest == $te){
				if ($rest1 == $pe250){
				$tpaipe250 = $xcontador;	
				echo "<td>"  . $tpaipe210 . "</td>";
			}					
			}
			//E300	Período de Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15	2	

				if ($rest == $te){
				if ($rest1 == $pe300){
				$tpaipe300 = $xcontador;	
				echo "<td>"  . $tpaipe001 .  "</td>";
			}					
			}
			//E310	Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15	3	
	
				if ($rest == $te){
				if ($rest1 == $pe310){
				$tpaipe310 = $xcontador;	
				echo "<td>"  . $tpaipe300 .  "</td>";
			}					
			}
			//E311	Ajuste/Benefício/Incentivo da Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15	4	

				if ($rest == $te){
				if ($rest1 == $pe311){
				$tpaipe311 = $xcontador;	
				echo "<td>"  . $tpaipe310 .  "</td>";
			}					
			}
			//E312	Informações Adicionais dos Ajustes da Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15	5	

				if ($rest == $te){
				if ($rest1 == $pe312){
				$tpaipe312 = $xcontador;	
				echo "<td>"  . $tpaipe311 .  "</td>";
			}					
			}
			//E313	Informações Adicionais da Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15 Identificação dos Documentos Fiscais	5	

				if ($rest == $te){
				if ($rest1 == $pe313){
				$tpaipe313 = $xcontador;	
				echo "<td>"  . $tpaipe311 .  "</td>";
			}					
			}
			//E316	Obrigações do ICMS recolhido ou a recolher – Diferencial de Alíquota – UF Origem/Destino EC 87/15	4	

				if ($rest == $te){
				if ($rest1 == $pe316){
				$tpaipe316 = $xcontador;	
				echo "<td>"  . $tpaipe310 .  "</td>";
			}					
			}
			//E500	Período de Apuração do IPI	2	

				if ($rest == $te){
				if ($rest1 == $pe500){
				$tpaipe500 = $xcontador;	
				echo "<td>"  . $tpaipe001 .  "</td>";
			}					
			}
			//E510	Consolidação dos Valores de IPI	3	

				if ($rest == $te){
				if ($rest1 == $pe510){
				$tpaipe510 = $xcontador;	
				echo "<td>"  . $tpaipe500 .  "</td>";
			}					
			}
			//E520	Apuração do IPI	3	

				if ($rest == $te){
				if ($rest1 == $pe520){
				$tpaipe520 = $xcontador;	
				echo "<td>"  . $tpaipe500 .  "</td>";
			}					
			}
			//E530	Ajustes da Apuração do IPI	4	

				if ($rest == $te){
				if ($rest1 == $pe530){
				$tpaipe530 = $xcontador;	
				echo "<td>"  . $tpaipe520 .  "</td>";
			}					
			}
			//E531	Informações Adicionais dos Ajustes da Apuração do IPI – Identificação dos Documentos Fiscais (01 e 55)	5	

				if ($rest == $te){
				if ($rest1 == $pe531){
				$tpaipe531 = $xcontador;	
				echo "<td>"  . $tpaipe530 .  "</td>";
			}					
			}
			//E990	Encerramento do Bloco E	1	

				if ($rest == $te){
				if ($rest1 == $pe990){
				$tpaipe990 = $xcontador;	
				echo "<td>" . $tpaip0000 . "</td>";
			}					
			}
			//G001	Abertura do Bloco G	1	

				if ($rest == $tg){
				if ($rest1 == $pg001){
				$tpaipg001 = $xcontador;	
				echo "<td>" . '<strong>' . $tpaip0000 . '</strong>' . "</td>";
			}					
			}
			//G110	ICMS – Ativo Permanente – CIAP	2	

				if ($rest == $tg){
				if ($rest1 == $pg110){
				$tpaipg110 = $xcontador;	
				echo "<td>" . $tpaipg001 . "</td>";
			}					
			}
			//G125	Movimentação de Bem do Ativo Imobilizado	3	

				if ($rest == $tg){
				if ($rest1 == $pg125){
				$tpaipg125 = $xcontador;	
				echo "<td>" . $tpaipg110 . "</td>";
			}					
			}
			//G126	Outros créditos CIAP	4	

				if ($rest == $tg){
				if ($rest1 == $pg126){
				$tpaipg126 = $xcontador;	
				echo "<td>" . $tpaipg125 . "</td>";
			}					
			}
			//G130	Identificação do documento fiscal	4	

				if ($rest == $tg){
				if ($rest1 == $pg130){
				$tpaipg130 = $xcontador;	
				echo "<td>" . $tpaipg125 . "</td>";
			}					
			}
			//G140	Identificação do item do documento fiscal	5	

				if ($rest == $tg){
				if ($rest1 == $pg140){
				$tpaipg140 = $xcontador;	
				echo "<td>" . $tpaipg130 . "</td>";
			}					
			}
			//G990	Encerramento do Bloco G	1	

				if ($rest == $tg){
				if ($rest1 == $pg990){
				$tpaipg990 = $xcontador;	
				echo "<td>" . $tpaip0000 . "</td>";
			}					
			}
			
			//H001	Abertura do Bloco H	1	

				if ($rest == $th){
				if ($rest1 == $ph001){
				$tpaiph001 = $xcontador;	
				echo "<td>" . '<strong>' . $tpaip0000 . '</strong>' . "</td>";
			}					
			}
			//H005	Totais do Inventário	2	

				if ($rest == $th){
				if ($rest1 == $ph005){
				$tpaiph005 = $xcontador;	
				echo "<td>" . $tpaiph001 . "</td>";
			}					
			}
			//H010	Inventário	3	

				if ($rest == $th){
				if ($rest1 == $ph010){
				$tpaiph010 = $xcontador;	
				echo "<td>" . $tpaiph005 . "</td>";
			}					
			}
			//H020	Informação complementar do Inventário	4	

				if ($rest == $th){
				if ($rest1 == $ph020){
				$tpaiph020 = $xcontador;	
				echo "<td>" . $tpaiph010 . "</td>";
			}					
			}
			//H990	Encerramento do Bloco H	1	

				if ($rest == $th){
				if ($rest1 == $ph990){
				$tpaiph990 = $xcontador;	
				echo "<td>" . $tpaip0000 . "</td>";
			}					
			}
			
			//K001	Abertura do Bloco K	1	
	
				if ($rest == $tk){
				if ($rest1 == $pk001){
				$tpaipk001 = $xcontador;	
				echo "<td>" . '<strong>' . $tpaip0000 . '</strong>' . "</td>";
			}					
			}
			//K100	Período de Apuração do ICMS/IPI	2	

				if ($rest == $tk){
				if ($rest1 == $pk100){
				$tpaipk100 = $xcontador;	
				echo "<td>" . $tpaipk001 . "</td>";
			}					
			}
			//K200	Estoque Escriturado	3	

				if ($rest == $tk){
				if ($rest1 == $pk200){
				$tpaipk200 = $xcontador;	
				echo "<td>" . $tpaipk100 . "</td>";
			}					
			}
			//K210	Desmontagem de mercadorias – Item de Origem	3	

				if ($rest == $tk){
				if ($rest1 == $pk210){
				$tpaipk210 = $xcontador;	
				echo "<td>" . $tpaipk100 . "</td>";
			}					
			}
			//K215	Desmontagem de mercadorias – Item de Destino	4	

				if ($rest == $tk){
				if ($rest1 == $pk215){
				$tpaipk215 = $xcontador;	
				echo "<td>" . $tpaipk210 . "</td>";
			}					
			}
			//K220	Outras Movimentações Internas entre Mercadorias	3	

				if ($rest == $tk){
				if ($rest1 == $pk220){
				$tpaipk220 = $xcontador;	
				echo "<td>" . $tpaipk100 . "</td>";
			}					
			}
			//K230	Itens Produzidos	3	

				if ($rest == $tk){
				if ($rest1 == $pk230){
				$tpaipk230 = $xcontador;	
				echo "<td>" . $tpaipk100 . "</td>";
			}					
			}
			//K235	Insumos Consumidos	4	

				if ($rest == $tk){
				if ($rest1 == $pk235){
				$tpaipk235 = $xcontador;	
				echo "<td>" . $tpaipk230 . "</td>";
			}					
			}
			//K250	Industrialização Efetuada por Terceiros – Itens Produzidos	3	

				if ($rest == $tk){
				if ($rest1 == $pk250){
				$tpaipk250 = $xcontador;	
				echo "<td>" . $tpaipk100 . "</td>";
			}					
			}
			//K255	Industrialização em Terceiros – Insumos Consumidos	4	

				if ($rest == $tk){
				if ($rest1 == $pk255){
				$tpaipk255 = $xcontador;	
				echo "<td>" . $tpaipk250 . "</td>";
			}					
			}
			//K260	Reprocessamento/Reparo de Produto/Insumo	3	

				if ($rest == $tk){
				if ($rest1 == $pk260){
				$tpaipk260 = $xcontador;	
				echo "<td>" . $tpaipk100 . "</td>";
			}					
			}
			//K265	Reprocessamento/Reparo – Mercadorias Consumidas e/ou Retornadas	4	

				if ($rest == $tk){
				if ($rest1 == $pk265){
				$tpaipk265 = $xcontador;	
				echo "<td>" . $tpaipk260 . "</td>";
			}					
			}
			//K270	Correção de Apontamento dos Registros K210, K220, K230, K250 e K260	3	

				if ($rest == $tk){
				if ($rest1 == $pk270){
				$tpaipk270 = $xcontador;	
				echo "<td>" . $tpaipk100 . "</td>";
			}					
			}
			//K275	Correção de Apontamento e Retorno de Insumos dos Registros K215, K220, K235, K255 e K265	4	

				if ($rest == $tk){
				if ($rest1 == $pk275){
				$tpaipk275 = $xcontador;	
				echo "<td>" . $tpaipk270 . "</td>";
			}					
			}
			//K280	Correção de Apontamento – Estoque Escriturado	3	

				if ($rest == $tk){
				if ($rest1 == $pk280){
				$tpaipk280 = $xcontador;	
				echo "<td>" . $tpaipk100 . "</td>";
			}					
			}
			//K290	Produção Conjunta – Ordem de Produção	3	

				if ($rest == $tk){
				if ($rest1 == $pk290){
				$tpaipk290 = $xcontador;	
				echo "<td>" . $tpaipk100 . "</td>";
			}					
			}
			//K291	Produção Conjunta – Itens Produzidos	4	

				if ($rest == $tk){
				if ($rest1 == $pk291){
				$tpaipk291 = $xcontador;	
				echo "<td>" . $tpaipk290 . "</td>";
			}					
			}
			//K292	Produção Conjunta – Insumos Consumidos	4	

				if ($rest == $tk){
				if ($rest1 == $pk292){
				$tpaipk292 = $xcontador;	
				echo "<td>" . $tpaipk290 . "</td>";
			}					
			}
			//K300	Produção Conjunta – Industrialização Efetuada por Terceiros	3	

				if ($rest == $tk){
				if ($rest1 == $pk300){
				$tpaipk300 = $xcontador;	
				echo "<td>" . $tpaipk100 . "</td>";
			}					
			}
			//K301	Produção Conjunta – Industrialização Efetuada por Terceiros – Itens Produzidos	4	

				if ($rest == $tk){
				if ($rest1 == $pk301){
				$tpaipk301 = $xcontador;	
				echo "<td>" . $tpaipk300 . "</td>";
			}					
			}
			//K302	Produção Conjunta – Industrialização Efetuada por Terceiros – Insumos Consumidos	4	

				if ($rest == $tk){
				if ($rest1 == $pk302){
				$tpaipk302 = $xcontador;	
				echo "<td>" . $tpaipk300 . "</td>";
			}					
			}
			//K990	Encerramento do Bloco K	1	

				if ($rest == $tk){
				if ($rest1 == $pk990){
				$tpaipk990 = $xcontador;	
				echo "<td>" . $tpaip0000 . "</td>";
			}					
			}
			
			// 1001	Abertura do Bloco 1	1	

				if ($rest == $t1){
				if ($rest1 == $p1001){
				$tpaip1001 = $xcontador;	
				echo "<td>" . '<strong>' . $tpaip0000 . '</strong>' . "</td>";
			}					
			}
			//1010	Obrigatoriedade de registros do Bloco 1	2	

				if ($rest == $t1){
				if ($rest1 == $p1010){
				$tpaip1010 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1100	Registro de Informações sobre Exportação	2	

				if ($rest == $t1){
				if ($rest1 == $p1100){
				$tpaip1100 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1105	Documentos Fiscais de Exportação	3	

				if ($rest == $t1){
				if ($rest1 == $p1105){
				$tpaip1105 = $xcontador;	
				echo "<td>" . $tpaip1100 . "</td>";
			}					
			}
			//1110	Operações de Exportação Indireta - Mercadorias de terceiros	4	

				if ($rest == $t1){
				if ($rest1 == $p1110){
				$tpaip1110 = $xcontador;	
				echo "<td>" . $tpaip1105 . "</td>";
			}					
			}
			//1200	Controle de Créditos Fiscais - ICMS	2	

				if ($rest == $t1){
				if ($rest1 == $p1200){
				$tpaip1200 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1210	Utilização de Créditos Fiscais - ICMS	3	
			
				if ($rest == $t1){
				if ($rest1 == $p1210){
				$tpaip1210 = $xcontador;	
				echo "<td>" . $tpaip1200 . "</td>";
			}					
			}
			//1300	Movimentação diária de combustíveis	2	

				if ($rest == $t1){
				if ($rest1 == $p1300){
				$tpaip1300 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1310	Movimentação diária de combustíveis por tanque	3	

				if ($rest == $t1){
				if ($rest1 == $p1310){
				$tpaip1310 = $xcontador;	
				echo "<td>" . $tpaip1300 . "</td>";
			}					
			}
			//1320	Volume de vendas	4	

				if ($rest == $t1){
				if ($rest1 == $p1320){
				$tpaip1320 = $xcontador;	
				echo "<td>" . $tpaip1310 . "</td>";
			}					
			}
			//1350	Bombas	2	

				if ($rest == $t1){
				if ($rest1 == $p1350){
				$tpaip1350 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1360	Lacres das bombas	3	

				if ($rest == $t1){
				if ($rest1 == $p1360){
				$tpaip1360 = $xcontador;	
				echo "<td>" . $tpaip1350 . "</td>";
			}					
			}
			//1370	Bicos da bomba	3	

				if ($rest == $t1){
				if ($rest1 == $p1370){
				$tpaip1370 = $xcontador;	
				echo "<td>" . $tpaip1350 . "</td>";
			}					
			}
			//1390	Controle de produção de Usina	2	

				if ($rest == $t1){
				if ($rest1 == $p1390){
				$tpaip1390 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1391	Produção diária da usina	3	

				if ($rest == $t1){
				if ($rest1 == $p1391){
				$tpaip1391 = $xcontador;	
				echo "<td>" . $tpaip1390 . "</td>";
			}					
			}
			//1400	Informação sobre Valor Agregado	2	

				if ($rest == $t1){
				if ($rest1 == $p1400){
				$tpaip1400 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1500	Nota fiscal/Conta de energia elétrica (código 06) - Operações Interestaduais	2	

				if ($rest == $t1){
				if ($rest1 == $p1500){
				$tpaip1500 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1510	Itens do documento Nota fiscal/Conta de energia elétrica (código 06)	3	

				if ($rest == $t1){
				if ($rest1 == $p1510){
				$tpaip1510 = $xcontador;	
				echo "<td>" . $tpaip1500 . "</td>";
			}					
			}
			//1600	Total das operações com cartão de crédito e/ou débito	2	

				if ($rest == $t1){
				if ($rest1 == $p1600){
				$tpaip1600 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1700	Documentos fiscais utilizados	2	

				if ($rest == $t1){
				if ($rest1 == $p1700){
				$tpaip1700 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1710	Documentos fiscais cancelados/inutilizados	3	

				if ($rest == $t1){
				if ($rest1 == $p1710){
				$tpaip1710 = $xcontador;	
				echo "<td>" . $tpaip1700 . "</td>";
			}					
			}
			//1800	DCTA - Demonstrativo de crédito do ICMS sobre transporte aéreo	2	

				if ($rest == $t1){
				if ($rest1 == $p1800){
				$tpaip1800 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1900	Indicador de sub-apuração do ICMS	2	

				if ($rest == $t1){
				if ($rest1 == $p1900){
				$tpaip1900 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1910	Período da sub-apuração do ICMS	3	

				if ($rest == $t1){
				if ($rest1 == $p1910){
				$tpaip1910 = $xcontador;	
				echo "<td>" . $tpaip1900 . "</td>";
			}					
			}
			//1920	Sub-apuração do ICMS	4	

				if ($rest == $t1){
				if ($rest1 == $p1920){
				$tpaip1920 = $xcontador;	
				echo "<td>" . $tpaip1910 . "</td>";
			}					
			}
			//1921	Ajuste/benefício/incentivo da sub-apuração do ICMS	5	

				if ($rest == $t1){
				if ($rest1 == $p1921){
				$tpaip1921 = $xcontador;	
				echo "<td>" . $tpaip1920 . "</td>";
			}					
			}
			//1922	Informações adicionais dos ajustes da sub-apuração do ICMS	6	

				if ($rest == $t1){
				if ($rest1 == $p1922){
				$tpaip1922 = $xcontador;	
				echo "<td>" . $tpaip1921 . "</td>";
			}					
			}
			//1923	Informações adicionais dos ajustes da sub-apuração do ICMS - Identificação dos documentos fiscais	6	

				if ($rest == $t1){
				if ($rest1 == $p1923){
				$tpaip1923 = $xcontador;	
				echo "<td>" . $tpaip1921 . "</td>";
			}					
			}
			//1925	Informações adicionais da sub-apuração do ICMS - Valores declaratórios	5	

				if ($rest == $t1){
				if ($rest1 == $p1925){
				$tpaip1925 = $xcontador;	
				echo "<td>" . $tpaip1920 . "</td>";
			}					
			}
			//1926	Obrigações do ICMS a recolher - Operações referentes à sub-apuração do ICMS	5	

				if ($rest == $t1){
				if ($rest1 == $p1926){
				$tpaip1926 = $xcontador;	
				echo "<td>" . $tpaip1920 . "</td>";
			}					
			}
			//1960	GIAF 1 - Guia de informação e apuração de incentivos fiscais e financeiros: indústria (crédito presumido)	2	

				if ($rest == $t1){
				if ($rest1 == $p1960){
				$tpaip1960 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1970	GIAF 3 - Guia de informação e apuração de incentivos fiscais e financeiros: importação (diferimento na entrada e crédito presumido na saída subsequente)	2	

				if ($rest == $t1){
				if ($rest1 == $p1970){
				$tpaip1970 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1975	GIAF 3 - Guia de informação e apuração de incentivos fiscais e financeiros: importação (saídas internas por faixa de alíquota)	3	

				if ($rest == $t1){
				if ($rest1 == $p1975){
				$tpaip1975 = $xcontador;	
				echo "<td>" . $tpaip1970 . "</td>";
			}					
			}
			//1980	GIAF 4 - Guia de informação e apuração de incentivos fiscais e financeiros: central de distribuição (entradas/saídas)	2	

				if ($rest == $t1){
				if ($rest1 == $p1980){
				$tpaip1980 = $xcontador;	
				echo "<td>" . $tpaip1001 . "</td>";
			}					
			}
			//1990	Encerramento do Bloco 1	1	

				if ($rest == $t1){
				if ($rest1 == $p1990){
				$tpaip1990 = $xcontador;	
				echo "<td>" . $tpaip0000 . "</td>";
			}					
			}
			
			// 9001	Abertura do Bloco 9	1	
				if ($rest == $t9){
				if ($rest1 == $p9001){
				$tpaip9001 = $xcontador;	
				echo "<td>" . '<strong>' . $tpaip0000 . '</strong>' . "</td>";
			}					
			}
			//9900	Registros do Arquivo	2	

				if ($rest == $t9){
				if ($rest1 == $p9900){
				$tpaip9900 = $xcontador;	
				echo "<td>" . $tpaip9001 . "</td>";
			}					
			}
			//9990	Encerramento do Bloco 9	1	

				if ($rest == $t9){
				if ($rest1 == $p9990){
				$tpaip9990 = $xcontador;	
				echo "<td>" . $tpaip0000 . "</td>";
			}					
			}
			//9999	Encerramento do Arquivo Digital	0	
		
				if ($rest == $t9){
				if ($rest1 == $p9999){
				$tpaip9999 = $xcontador;	
				echo "<td>" . $tpaip9999 . "</td>";
			}					
			}
			
			
			/*if ($rest == $tc){
				if ($rest1 == $pc001){
				$tpaic001 = $xcontador;	
				echo "<td>" . '<strong>'.$tpaic001 .'</strong>'. "</td>";
			}						
			if ($rest1 == $pc100){
				
				echo "<td>" . $tpaic001 . "</td>";

			}	
			
			}
			

				if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;	
				$pipe = '|';
				$array = explode('|', $linha);
			}
			
			if ($rest1 == $pc101){
				//echo  $array[8] . ' - ' .$array[7] ;
				echo "<td>" . $tpaic100  . "</td>";;

			}	
			
			}
			
				if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;	
				
			}						
			if ($rest1 == $pc110){
				//echo  $array[8] . ' - ' .$array[7] ;
				echo "<td>" . $tpaic100 . "</td>";

			}	
			
			}

				if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;	
				
			}						
			if ($rest1 == $pc170){
				//echo  $array[8] . ' - ' .$array[7] ;
				echo "<td>"  . $tpaic100  . "</td>";

			}	
			
			}
			
				if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;	
				
			}						
			if ($rest1 == $pc190){
				//echo  $array[8] . ' - ' .$array[7] ;
				echo "<td>" . $tpaic100 . "</td>";

			}	
			
			}
			
				if ($rest == $tc){
				if ($rest1 == $pc190){
				$tpaic190 = $xcontador;	
				
			}						
			if ($rest1 == $pc191){
				echo "<td>" . $tpaic190 . "</td>";

			}	
			
			}
			
			
			}
			
			echo "</tr>" . "</table>";
			}
			
			/*if ($reg=='TODOS'){
			foreach ($conteudo as $linha)
			echo "<table>" . "<td>" . ($xcontadorb ++) . ' - '  . ($linha . "</td>" . "</table>" );}
			
			elseif ($reg=='T-C100'){
			foreach ($conteudo as $linha){
			//echo "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );	
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );
			
			//echo $rest2;
			
			if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;
				echo  '<hr>' . 'Linha - ' . $xcontador . ' - ' . $pc100 . '<hr>';
				
				
			}			
			
			//$resultado = ($xcontador ++) . ($linha);
			
			//echo "<table>" . "<td>" . $resultado;
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			
			
			
			if ($rest1 == $pc101){

				echo ' - Linha Pai - ' . $tpaic100;
			}	
			
			if ($rest1 == $pc110){
				
		
				echo ' - Linha Pai - ' . $tpaic100;
				

				
				//echo ' - Linha Pai - ' . ($xcontador) . ' - ' . $pc100;
			}
			
			if ($rest1 == $pc170){
				
				echo ' - Linha Pai - ' . $tpaic100;
			}
			
			if ($rest1 == $pc190){
				$tpaic190 = ($xcontador);
				echo ' - Linha Pai - ' . $tpaic100;
			}
			
			if ($rest1 == $pc191){
				
				echo ' - Linha Pai - ' . $tpaic190;
			}
			
			
			echo "</td>" . "</table>";
			
			}
			
			}
			
			}
			
			
			
			
			//elseif ($reg=='0000'){
			//print_r ($conteudo[0]);}
			
			// 0000	Abertura do Arquivo Digital e Identificação da entidade	0	
			elseif ($reg=='0000'){
			echo "<table>" . "<tr>";	
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
			//echo "</tr>" . "<td>" . ($xcontadorb ++)."</td>" . "<td>" . ($linha). "</td>";
			    if ($rest == $t0){
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";				
				echo "<td>" . '<strong>'. ($tpaip0000 -1). '</strong>'. "</td>";
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			
			/*elseif ($reg=='0001'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0001|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			
			// 0001	Abertura do Bloco 0	1	
			elseif ($reg=='0001'){
			echo "<table>" . "<tr>";
			
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;	
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";				
				echo "<td>" . $tpaip0000 . "</td>";
			}					
			}
			}
			}
			echo "</tr>" . "</table>";
			}
			/*elseif ($reg=='0005'){
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 6);
				if ($rest == '|0005|'){
				echo "<table>" . "<td>" . ($xcontador ++). ' - '  . ($linha . "</td>" . "</table>" );;
			}
			}
			}
			//0005	Dados Complementares da Entidade	2	
			elseif ($reg=='0005'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0005){
				$tpaip0005 = $xcontador;	
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";				
				echo "<td>" . $tpaip0001 . "</td>";
			}					
			}
			}
			}
			echo "</tr>" . "</table>";
			}
			//0015	Dados do Contribuinte Substituto	2	
			elseif ($reg=='0015'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0015){
				$tpaip0015 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";								
				echo "<td>" . $tpaip0001 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			
			//0100	Dados do Contabilista	2	
			elseif ($reg=='0100'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0100){
				$tpaip0100 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0001 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			
			//0150	Tabela de Cadastro do Participante	2	

			elseif ($reg=='0150'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0150){
				$tpaip0150 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0001 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0175	Alteração da Tabela de Cadastro de Participante	3	

			elseif ($reg=='0175'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0150){
				$tpaip0150 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0175){
				$tpaip0175 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0150 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0190	Identificação das Unidades de Medida	2	
			elseif ($reg=='0190'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0190){
				$tpaip0190 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0001 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0200	Tabela de Identificação do Item (Produtos e Serviços)	2	
			elseif ($reg=='0200'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0200){
				$tpaip0200 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0001 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0205	Alteração do Item	3	
			elseif ($reg=='0205'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0200){
				$tpaip0200 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0205){
				$tpaip0205 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0200 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0206	Código de produto conforme Tabela ANP (Combustíveis)	3	
			elseif ($reg=='0206'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0200){
				$tpaip0200 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0206){
				$tpaip0206 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0200 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0210	Consumo Específico Padronizado	3	
			elseif ($reg=='0210'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0200){
				$tpaip0200 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0210){
				$tpaip0210 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0200 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0220	Fatores de Conversão de Unidades	3	
			elseif ($reg=='0220'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0200){
				$tpaip0200 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0220){
				$tpaip0220 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0200 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0300	Cadastro de bens ou componentes do Ativo Imobilizado	2	
			elseif ($reg=='0300'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0300){
				$tpaip0300 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0001 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0305	Informação sobre a Utilização do Bem	3	
			elseif ($reg=='0305'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0300){
				$tpaip0300 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0305){
				$tpaip0305 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0300 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0400	Tabela de Natureza da Operação/ Prestação	2	
			elseif ($reg=='0400'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0400){
				$tpaip0400 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0001 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0450	Tabela de Informação Complementar do documento fiscal	2	
			elseif ($reg=='0450'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0450){
				$tpaip0450 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0001 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0460	Tabela de Observações do Lançamento Fiscal	2	
			elseif ($reg=='0460'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0460){
				$tpaip0460 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0001 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0500	Plano de contas contábeis	2	
			elseif ($reg=='0500'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0500){
				$tpaip0500 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0001 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0600	Centro de custos	2	
			elseif ($reg=='0600'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0001){
				$tpaip0001 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0600){
				$tpaip0600 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0001 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//0990	Encerramento do Bloco 0	1	
			elseif ($reg=='0990'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest == $t0){
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $t0){
				if ($rest1 == $p0990){
				$tpaip0990 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			}
			echo "</tr>" . "</table>";
			}
			//B001	Abertura do Bloco B	1	
			elseif ($reg=='B001'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $tb){
				if ($rest1 == $pb001){
				$tpaipb001 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//B020	Nota Fiscal (código 01), Nota Fiscal de Serviços (código 03), Nota Fiscal de Serviços Avulsa (código 3B), Nota Fiscal de Produtor (código 04), Conhecimento de Transporte Rodoviário de Cargas (código 08), NF-e (código 55) e NFC-e (código 65)	2	
			elseif ($reg=='B020'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pb001){
				$tpaipb001 = $xcontador;
			}
				if ($rest == $tb){
				if ($rest1 == $pb020){
				$tpaipb020 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipb001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//B025	Detalhamento por combinação de alíquota e item da lista de serviços da Lei Complementar nº 116/2003	3	
			elseif ($reg=='B025'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pb020){
				$tpaipb020 = $xcontador;
			}
				if ($rest == $tb){
				if ($rest1 == $pb025){
				$tpaipb025 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipb020 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//B030	Nota Fiscal de Serviços Simplificada (código 3A)	2	
			elseif ($reg=='B030'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pb001){
				$tpaipb001 = $xcontador;
			}
				if ($rest == $tb){
				if ($rest1 == $pb030){
				$tpaipb030 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipb001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//B035	Detalhamento por combinação de alíquota e item da lista de serviços da Lei Complementar nº 116/2003	3	
			elseif ($reg=='B035'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pb030){
				$tpaipb030 = $xcontador;
			}
				if ($rest == $tb){
				if ($rest1 == $pb035){
				$tpaipb035 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipb030 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//B350	Serviços prestados por instituições financeiras	2	
			elseif ($reg=='B350'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pb001){
				$tpaipb001 = $xcontador;
			}
				if ($rest == $tb){
				if ($rest1 == $pb350){
				$tpaipb350 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipb001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//B420	Totalização dos valores de serviços prestados por combinação de alíquota e item da lista de serviços da Lei Complementar nº 116/2003	2	
			elseif ($reg=='B420'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pb001){
				$tpaipb001 = $xcontador;
			}
				if ($rest == $tb){
				if ($rest1 == $pb420){
				$tpaipb420 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipb001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//B440	Totalização dos valores retidos	2	
			elseif ($reg=='B440'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pb001){
				$tpaipb001 = $xcontador;
			}
				if ($rest == $tb){
				if ($rest1 == $pb440){
				$tpaipb440 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipb001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//B460	Deduções do ISS	2	
			elseif ($reg=='B460'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pb001){
				$tpaipb001 = $xcontador;
			}
				if ($rest == $tb){
				if ($rest1 == $pb460){
				$tpaipb460 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipb001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//B470	Apuração do ISS	2	
			elseif ($reg=='B470'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pb001){
				$tpaipb001 = $xcontador;
			}
				if ($rest == $tb){
				if ($rest1 == $pb470){
				$tpaipb470 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipb001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//B500	Apuração do ISS sociedade uniprofissional	2	
			elseif ($reg=='B500'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pb001){
				$tpaipb001 = $xcontador;
			}
				if ($rest == $tb){
				if ($rest1 == $pb500){
				$tpaipb500 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipb001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//B510	Uniprofissional – empregados e sócios	3	
			elseif ($reg=='B510'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pb500){
				$tpaipb500 = $xcontador;
			}
				if ($rest == $tb){
				if ($rest1 == $pb510){
				$tpaipb510 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipb500 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//B990	Encerramento do Bloco B	1	
			elseif ($reg=='B990'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $tb){
				if ($rest1 == $pb990){
				$tpaipb990 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C001	Abertura do Bloco C	1	
			elseif ($reg=='C001'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $xreg . "</th>";
			echo "<th>" . $xind_mov . "</th>";			
			//echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc001){
				$array = explode('|', $linha);
				$tpaipc001 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>";
				echo "<td>" . $array[1] . "</td>";
				echo "<td>" . $array[2] . "</td>";				
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C100	Documento - Nota Fiscal (código 01), Nota Fiscal Avulsa (código 1B), Nota Fiscal de Produtor (código 04), Nota Fiscal Eletrônica (código 55) e Nota Fiscal Eletrônica para Consumidor Final (código 65)	2	
			elseif ($reg=='C100'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $xreg . "</th>";
			echo "<th>" . $xind_oper . "</th>" . "<th>" . $xind_emit . "</th>". "<th>" . $xcod_part . "</th>". "<th>" . $xcod_mod . "</th>";
			echo "<th>" . $xcod_sit . "</th>" . "<th>" . $xser . "</th>". "<th>" . $xnum_doc . "</th>". "<th>" . $xchv_nfe . "</th>";
			echo "<th>" . $xdt_doc . "</th>" . "<th>" . $xdt_e_s . "</th>". "<th>" . $xvl_doc . "</th>". "<th>" . $xind_pgto . "</th>";
			echo "<th>" . $xvl_desc . "</th>" . "<th>" . $xvl_abat_nt . "</th>". "<th>" . $xvl_merc . "</th>". "<th>" . $xind_frt . "</th>";
			echo "<th>" . $xvl_frt . "</th>"."<th>" . $xvl_seg . "</th>" . "<th>" . $xvl_out_da . "</th>". "<th>" . $xvl_bc_icms . "</th>". "<th>" . $xvl_icms . "</th>";
			echo "<th>" . $xvl_bc_icms_st . "</th>" . "<th>" . $xvl_icms_st . "</th>". "<th>" . $xvl_ipi . "</th>". "<th>" . $xvl_pis . "</th>";
			echo "<th>" . $xvl_cofins . "</th>" . "<th>" . $xvl_pis_st . "</th>". "<th>" . $xvl_cofins_st . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc001){
				$tpaipc001 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc100){
				$array = explode('|', $linha);
				$tpaipc100 = $xcontador;
				
				echo "</tr>" . "<td>" . ($xcontador)."</td>";	
				echo "<td>" . $array[1] . "</td>"."<td>" . $array[2] . "</td>"."<td>" . $array[3] . "</td>"."<td>" . $array[4] . "</td>";
				echo "<td>" . $array[5] . "</td>"."<td>" . $array[6] . "</td>"."<td>" . $array[7] . "</td>"."<td>" . $array[8] . "</td>";
				echo "<td>" .$aspas.$array[9].$aspas. "</td>"."<td>" . $array[10] . "</td>"."<td>" . $array[11] . "</td>"."<td>" . $array[12] . "</td>";
				echo "<td>" . $array[13] . "</td>"."<td>" . $array[14] . "</td>"."<td>" . $array[15] . "</td>"."<td>" . $array[16] . "</td>";
				echo "<td>" . $array[17] . "</td>"."<td>" . $array[18] . "</td>"."<td>" . $array[19] . "</td>"."<td>" . $array[20] . "</td>";
				echo "<td>" . $array[21] . "</td>"."<td>" . $array[22] . "</td>"."<td>" . $array[23] . "</td>"."<td>" . $array[24] . "</td>";
				echo "<td>" . $array[25] . "</td>"."<td>" . $array[26] . "</td>"."<td>" . $array[27] . "</td>"."<td>" . $array[28] . "</td>";
				echo "<td>" . $array[29] . "</td>";	
				echo "<td>" . $tpaipc001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C101	Informação complementar dos documentos fiscais quando das operações interestaduais destinadas a consumidor final não contribuinte EC 87/15 (código 55)	3	
			elseif ($reg=='C101'){
			echo '<strong>'.'C101	Informação complementar dos documentos fiscais quando das operações interestaduais destinadas a consumidor final não contribuinte EC 87/15 (código 55)'.'</strong>'.'<br>';
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $xreg . "</th>";
			echo "<th>" . $xvl_fcp_uf_dest . "</th>" . "<th>" . $xvl_icms_uf_dest . "</th>". "<th>" . $xvl_icms_uf_rem . "</th>";
			echo "<th>" . $nivel . "</th>"."<th>" . $notafiscal . "</th>"."<th>" . $serie . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc100){
				$array1 = explode('|', $linha);
				$tpaipc100 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc101){
				$array = explode('|', $linha);
				$tpaipc101 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>";												
				echo "<td>" . $array[1] . "</td>"."<td>" . $array[2] . "</td>"."<td>" . $array[3] . "</td>"."<td>" . $array[4] . "</td>";
				echo "<td>" . $tpaipc100 . "</td>"."<td>" . $array1[8] . "</td>"."<td>" . $array1[7] . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C105	Operações com ICMS ST recolhido para UF diversa do destinatário do documento fiscal (Código 55)	3	
			elseif ($reg=='C105'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "<th>" . $notafiscal . "</th>";
			echo "<th>" . $serie . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc100){
				$array = explode('|', $linha);
				$tpaipc100 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc105){
				$tpaipc105 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc100 . "</td>";
				echo "<td>" . $array[8] . "</td>";
				echo "<td>" . $array[7] . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C110	Complemento de Documento - Informação Complementar da Nota Fiscal (código 01, 1B, 55)	3	
			elseif ($reg=='C110'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $xreg . "</th>";
			echo "<th>" . $xcod_inf . "</th>";
			echo "<th>" . $xtxt_compl . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc100){
				$array = explode('|', $linha);
				$tpaipc100 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc110){
				$array = explode('|', $linha);
				$tpaipc110 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>";	
				echo "<td>" . $array[1] . "</td>"."<td>" . $array[2] . "</td>"."<td>" . $array[3] . "</td>";
				echo "<td>" . $tpaipc100 . "</td>";
				
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C111	Complemento de Documento - Processo referenciado	4	
			elseif ($reg=='C111'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc110){
				$tpaipc110 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc111){
				$tpaipc111 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc110 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C112	Complemento de Documento - Documento de Arrecadação Referenciado	4	
			elseif ($reg=='C112'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc110){
				$tpaipc110 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc112){
				$tpaipc112 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc110 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C113	Complemento de Documento - Documento Fiscal Referenciado	4	
			elseif ($reg=='C113'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc110){
				$tpaipc110 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc113){
				$tpaipc113 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc110 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C114	Complemento de Documento - Cupom Fiscal Referenciado	4	
			elseif ($reg=='C114'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc110){
				$tpaipc110 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc114){
				$tpaipc114 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc110 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C115	Local de coleta e/ou entrega (CÓDIGOS 01, 1B e 04)	4	
			elseif ($reg=='C115'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc110){
				$tpaipc110 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc115){
				$tpaipc115 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc110 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C116	Cupom Fiscal Eletrônico - CF-e referenciado	4	
			elseif ($reg=='C116'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc110){
				$tpaipc110 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc116){
				$tpaipc116 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc110 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C120	Complemento de Documento - Operações de Importação (código 01 e 55)	3	
			elseif ($reg=='C120'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc100){
				$tpaipc100 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc120){
				$tpaipc120 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C130	Complemento de Documento - ISSQN, IRRF e Previdência Social	3	
			elseif ($reg=='C130'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc100){
				$tpaipc100 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc130){
				$tpaipc130 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C140	Complemento de Documento - Fatura (código 01)	3	
			elseif ($reg=='C140'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc100){
				$tpaipc100 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc140){
				$tpaipc140 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C141	Complemento de Documento - Vencimento da Fatura (código 01)	4	
			elseif ($reg=='C141'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc140){
				$tpaipc140 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc141){
				$tpaipc141 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc140 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C160	Complemento de Documento - Volumes Transportados (código 01 e 04) Exceto Combustíveis	3	
			elseif ($reg=='C160'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc100){
				$tpaipc100 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc160){
				$tpaipc160 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C165	Complemento de Documento - Operações com combustíveis (código 01)	3	
			elseif ($reg=='C165'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc100){
				$tpaipc100 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc165){
				$tpaipc165 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C170	Complemento de Documento - Itens do Documento (código 01, 1B, 04 e 55)	3	
			elseif ($reg=='C170'){
			echo '<strong>'.'C170	Complemento de Documento - Itens do Documento (código 01, 1B, 04 e 55)'.'</strong>'.'<br>';
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $xreg . "</th>";
			echo "<th>" . $xnum_item . "</th>" . "<th>" . $xcod_item . "</th>". "<th>" . $xdescr_compl . "</th>". "<th>" . $xqtd . "</th>";
			echo "<th>" . $xunid . "</th>" . "<th>" . $xvl_item . "</th>". "<th>" . $xvl_desc . "</th>". "<th>" . $xind_mov . "</th>";
			echo "<th>" . $xcst_icms . "</th>" . "<th>" . $xcfop . "</th>". "<th>" . $xcod_nat . "</th>". "<th>" . $xvl_bc_icms . "</th>";
			echo "<th>" . $xaliq_icms . "</th>" . "<th>" . $xvl_icms . "</th>". "<th>" . $xvl_bc_icms_st . "</th>". "<th>" . $xaliq_st . "</th>";
			echo "<th>" . $xvl_icms_st . "</th>"."<th>" . $xind_apur . "</th>" . "<th>" . $xcst_ipi . "</th>". "<th>" . $xcod_enq . "</th>". "<th>" . $xvl_bc_ipi . "</th>";
			echo "<th>" . $xaliq_ipi . "</th>" . "<th>" . $xvl_ipi . "</th>". "<th>" . $xcst_pis . "</th>". "<th>" . $xvl_bc_pis . "</th>";
			echo "<th>" . $xaliq_pisp . "</th>" . "<th>" . $xquant_bc_pis . "</th>". "<th>" . $xaliq_pisr . "</th>";
			echo "<th>" . $xvl_pis . "</th>" . "<th>" . $xcst_cofins . "</th>". "<th>" . $xvl_bc_cofins . "</th>";
			echo "<th>" . $xaliq_cofinsp . "</th>" . "<th>" . $xquant_bc_cofins . "</th>". "<th>" . $xaliq_confinsr . "</th>";
			echo "<th>" . $xvl_cofins . "</th>" . "<th>" . $xcod_cta . "</th>". "<th>" . $xvl_abat_nt . "</th>";
			echo "<th>" . $nivel . "</th>"."<th>" . $notafiscal . "</th>"."<th>" . $serie . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc100){
				$array1 = explode('|', $linha);
				$tpaipc100 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc170){
				$array = explode('|', $linha);
				$tpaipc170 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>";	
				echo "<td>" . $array[1] . "</td>"."<td>" . $array[2] . "</td>"."<td>" . $array[3] . "</td>"."<td>" . $array[4] . "</td>";
				echo "<td>" . $array[5] . "</td>"."<td>" . $array[6] . "</td>"."<td>" . $array[7] . "</td>"."<td>" . $array[8] . "</td>";
				echo "<td>" . $array[9] . "</td>"."<td>" . $array[10] . "</td>"."<td>" . $array[11] . "</td>"."<td>" . $array[12] . "</td>";
				echo "<td>" . $array[13] . "</td>"."<td>" . $array[14] . "</td>"."<td>" . $array[15] . "</td>"."<td>" . $array[16] . "</td>";
				echo "<td>" . $array[17] . "</td>"."<td>" . $array[18] . "</td>"."<td>" . $array[19] . "</td>"."<td>" . $array[20] . "</td>";
				echo "<td>" . $array[21] . "</td>"."<td>" . $array[22] . "</td>"."<td>" . $array[23] . "</td>"."<td>" . $array[24] . "</td>";
				echo "<td>" . $array[25] . "</td>"."<td>" . $array[26] . "</td>"."<td>" . $array[27] . "</td>"."<td>" . $array[28] . "</td>";
				echo "<td>" . $array[29] . "</td>"."<td>" . $array[30] . "</td>"."<td>" . $array[31] . "</td>"."<td>" . $array[32] . "</td>";					
				echo "<td>" . $array[33] . "</td>"."<td>" . $array[34] . "</td>"."<td>" . $array[35] . "</td>"."<td>" . $array[36] . "</td>";					
				echo "<td>" . $array[37] . "</td>"."<td>" . $array[38];					
				echo "<td>" . $tpaipc100 . "</td>"."<td>" . $array1[8] . "</td>"."<td>" . $array1[7] . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C171	Complemento de Item - Armazenamento de Combustíveis (código 01,55)	4	
			elseif ($reg=='C171'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc170){
				$tpaipc170 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc171){
				$tpaipc171 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc170 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C172	Complemento de Item - Operações com ISSQN (código 01)	4	
			elseif ($reg=='C172'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc170){
				$tpaipc170 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc172){
				$tpaipc172 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc170 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C173	Complemento de Item - Operações com Medicamentos (código 01,55)	4	
			elseif ($reg=='C173'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc170){
				$tpaipc170 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc173){
				$tpaipc173 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc170 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C174	Complemento de Item - Operações com Armas de Fogo (código 01)	4	
			elseif ($reg=='C174'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc170){
				$tpaipc170 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc174){
				$tpaipc174 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc170 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C175	Complemento de Item - Operações com Veículos Novos (código 01,55)	4	
			elseif ($reg=='C175'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc170){
				$tpaipc170 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc175){
				$tpaipc175 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc170 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C176	Complemento de Item -Ressarcimento de ICMS em operações com Substituição Tributária (código 01,55)	4	
			elseif ($reg=='C176'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc170){
				$tpaipc170 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc176){
				$tpaipc176 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc170 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C177	Complemento de Item – Outras informações (Cód. 01, 55) – (Válido a partir de 01/01/2019)	4	
			elseif ($reg=='C177'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc170){
				$tpaipc170 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc177){
				$tpaipc177 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc170 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C178	Complemento de Item - Operações com Produtos Sujeitos a Tributação de IPI por Unidade ou Quantidade de produto	4	
			elseif ($reg=='C178'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc170){
				$tpaipc170 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc178){
				$tpaipc178 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc170 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C179	Complemento de Item - Informações Complementares ST (código 01)	4	
			elseif ($reg=='C179'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc170){
				$tpaipc170 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc179){
				$tpaipc179 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc170 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C190	Registro Analítico do Documento (código 01, 1B, 04, 55 e 65)	3	
			elseif ($reg=='C190'){
			echo '<strong>'.'C190	Registro Analítico do Documento (código 01, 1B, 04, 55 e 65)'.'</strong>'.'<br>';
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $xreg . "</th>"."<th>" . $xcst_icms . "</th>"."<th>" . $xcfop . "</th>";
			echo "<th>" . $xaliq_icms . "</th>"."<th>" . $xvl_opr . "</th>"."<th>" . $xvl_bc_icms . "</th>";
			echo "<th>" . $xvl_icms . "</th>"."<th>" . $xvl_bc_icms_st . "</th>"."<th>" . $xvl_icms_st . "</th>";
			echo "<th>" . $xvl_red_bc . "</th>"."<th>" . $xvl_ipi . "</th>"."<th>" . $xcod_obs . "</th>";
			echo "<th>" . $nivel . "</th>"."<th>" . $notafiscal . "</th>"."<th>" . $serie . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc100){
				$array1 = explode('|', $linha);
				$tpaipc100 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc190){
				$array = explode('|', $linha);
				$tpaipc190 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>";	
				echo "<td>" . $array[1] . "</td>"."<td>" . $array[2] . "</td>"."<td>" . $array[3] . "</td>"."<td>" . $array[4] . "</td>";
				echo "<td>" . $array[5] . "</td>"."<td>" . $array[6] . "</td>"."<td>" . $array[7] . "</td>"."<td>" . $array[8] . "</td>";
				echo "<td>" . $array[9] . "</td>"."<td>" . $array[10] . "</td>"."<td>" . $array[11] . "</td>"."<td>" . $array[12] . "</td>";											
				echo "<td>" . $tpaipc100 . "</td>"."<td>" . $array1[8] . "</td>"."<td>" . $array1[7] . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C191	Informações do Fundo de Combate à Pobreza – FCP – na NF-e (Código 55)	4	
			elseif ($reg=='C191'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $xreg . "</th>"."<th>" . $xvl_fcp_op . "</th>"."<th>" . $xvl_fcp_st . "</th>"."<th>" . $xvl_fcp_ret . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc190){
				$tpaipc190 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc191){
				$array = explode('|', $linha);
				$tpaipc191 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>";	
				echo "<td>" . $array[1] . "</td>"."<td>" . $array[2] . "</td>"."<td>" . $array[3] . "</td>"."<td>" . $array[4] . "</td>";											
				echo "<td>" . $tpaipc190 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C195	Complemento do Registro Analítico - Observações do Lançamento Fiscal (código 01, 1B, 04 e 55)	3	
			elseif ($reg=='C195'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc100){
				$tpaipc100 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc195){
				$tpaipc195 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C197	Outras Obrigações Tributárias, Ajustes e Informações provenientes de Documento Fiscal	4	
			elseif ($reg=='C197'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc195){
				$tpaipc195 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc197){
				$tpaipc197 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc195 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C300	Documento - Resumo Diário das Notas Fiscais de Venda a Consumidor (código 02)	2	
			elseif ($reg=='C300'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc001){
				$tpaipc001 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc300){
				$tpaipc300 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C310	Documentos Cancelados de Nota Fiscal de Venda a Consumidor (código 02)	3	
			elseif ($reg=='C310'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc300){
				$tpaipc300 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc310){
				$tpaipc310 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc300 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C320	Registro Analítico das Notas Fiscais de Venda a Consumidor (código 02)	3	
			elseif ($reg=='C320'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc300){
				$tpaipc300 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc320){
				$tpaipc320 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc300 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C321	Itens dos Resumos Diários dos Documentos (código 02)	4	
			elseif ($reg=='C321'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc320){
				$tpaipc320 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc321){
				$tpaipc321 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc320 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C350	Nota Fiscal de venda a consumidor (código 02)	2	
			elseif ($reg=='C350'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc001){
				$tpaipc001 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc350){
				$tpaipc350 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C370	Itens do documento (código 02)	3	
			elseif ($reg=='C370'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc350){
				$tpaipc350 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc370){
				$tpaipc370 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc350 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C390	Registro Analítico das Notas Fiscais de Venda a Consumidor (código 02)	3	
			elseif ($reg=='C390'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc350){
				$tpaipc350 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc390){
				$tpaipc390 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc350 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C400	Equipamento ECF (código 02, 2D e 60)	2	
			elseif ($reg=='C400'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc001){
				$tpaipc001 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc400){
				$tpaipc400 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C405	Redução Z (código 02, 2D e 60)	3	
			elseif ($reg=='C405'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc400){
				$tpaipc400 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc405){
				$tpaipc405 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc400 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C410	PIS e COFINS Totalizados no Dia (código 02 e 2D)	4	
			elseif ($reg=='C410'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc405){
				$tpaipc405 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc410){
				$tpaipc410 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc405 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C420	Registro dos Totalizadores Parciais da Redução Z (código 02, 2D e 60)	4	
			elseif ($reg=='C420'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc405){
				$tpaipc405 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc420){
				$tpaipc420 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc405 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C425	Resumo de itens do movimento diário (código 02 e 2D)	5	
			elseif ($reg=='C425'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc420){
				$tpaipc420 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc425){
				$tpaipc425 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc420 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C460	Documento Fiscal Emitido por ECF (código 02, 2D e 60)	4	
			elseif ($reg=='C460'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc405){
				$tpaipc405 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc460){
				$tpaipc460 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc405 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C465	Complemento do Cupom Fiscal Eletrônico Emitido por ECF - CF-e-ECF (código 60)	5	
			elseif ($reg=='C465'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc460){
				$tpaipc460 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc465){
				$tpaipc465 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc460 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C470	Itens do Documento Fiscal Emitido por ECF (código 02 e 2D)	5	
			elseif ($reg=='C470'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc460){
				$tpaipc460 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc470){
				$tpaipc470 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc460 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C490	Registro Analítico do movimento diário (código 02, 2D e 60)	4	
			elseif ($reg=='C490'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc405){
				$tpaipc405 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc490){
				$tpaipc490 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc405 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C495	Resumo Mensal de Itens do ECF por Estabelecimento (código 02 e 2D e 2E)	2	
			elseif ($reg=='C495'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc001){
				$tpaipc001 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc495){
				$tpaipc495 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C500	Nota Fiscal/Conta de Energia Elétrica (código 06), Nota Fiscal/Conta de fornecimento d'água canalizada (código 29) e Nota Fiscal/Consumo Fornecimento de Gás (Código 28)	2	
			elseif ($reg=='C500'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc001){
				$tpaipc001 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc500){
				$tpaipc500 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C510	Itens do Documento - Nota Fiscal/Conta de Energia Elétrica (código 06), Nota Fiscal/Conta de fornecimento d'água canalizada (código 29) e Nota Fiscal/Conta Fornecimento de Gás (Código 28)	3	
			elseif ($reg=='C510'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc500){
				$tpaipc500 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc510){
				$tpaipc510 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc500 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C590	Registro Analítico do Documento - Nota Fiscal/Conta de Energia Elétrica (código 06), Nota Fiscal/Conta de fornecimento d'água canalizada (código 29) e Nota Fiscal/Conta Fornecimento de Gás (Código 28)	3	
			elseif ($reg=='C590'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc500){
				$tpaipc500 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc590){
				$tpaipc590 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc500 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C600	Consolidação Diária de Notas Fiscais/Contas de Energia Elétrica (Código 06), Nota Fiscal/Conta de Fornecimento d´água (código 29) e Nota Fiscal/Conta de Fornecimento de Gás (Código 28) - (Empresas não obrigadas ao Convênio ICMS 115/03)	2	
			elseif ($reg=='C600'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc001){
				$tpaipc001 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc600){
				$tpaipc600 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C601	Documentos cancelados - Consolidação diária de notas fiscais/conta de energia elétrica (Código 06), nota fiscal/conta de fornecimento de água (código 29) e nota fiscal/conta de fornecimento de gás (código 28)	3	
			elseif ($reg=='C601'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc600){
				$tpaipc600 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc601){
				$tpaipc601 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc600 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C610	Itens do Documento Consolidado - Notas Fiscais/Contas de Energia Elétrica (Código 06), Nota Fiscal/Conta de Fornecimento d´água (código 29) e Nota Fiscal/Conta de Fornecimento de Gás (Código 28) - (Empresas não obrigadas ao Convênio ICMS 115/03)	3	
			elseif ($reg=='C610'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc600){
				$tpaipc600 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc610){
				$tpaipc610 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc600 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C690	Registro Analítico dos Documentos - Notas Fiscais/Contas de Energia Elétrica (Código 06), Nota Fiscal/Conta de Fornecimento d´água (código 29) e Nota Fiscal/Conta de Fornecimento de Gás (Código 28)	3	
			elseif ($reg=='C690'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc600){
				$tpaipc600 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc690){
				$tpaipc690 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc600 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C700	Consolidação dos Documentos Nota Fiscal/Conta Energia Elétrica (código 06) emitidas em via única - (Empresas obrigadas à entrega do arquivo previsto no Convênio ICMS 115/03) e Nota Fiscal/Conta de Fornecimento de Gás Canalizado (Código 28)	2	
			elseif ($reg=='C700'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc001){
				$tpaipc001 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc700){
				$tpaipc700 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C790	Registro Analítico dos Documentos - Nota Fiscal/Conta Energia Elétrica (código 06) emitidas em via única	3	
			elseif ($reg=='C790'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc700){
				$tpaipc700 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc790){
				$tpaipc790 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc700 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C791	Registro de Informações de ICMS ST por UF	4	
			elseif ($reg=='C791'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc790){
				$tpaipc790 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc791){
				$tpaipc791 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc790 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C800	Registro Cupom Fiscal Eletrônico - CF-e (Código 59)	2	
			elseif ($reg=='C800'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc001){
				$tpaipc001 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc800){
				$tpaipc800 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C850	Registro Analítico do CF-e (Código 59)	3	
			elseif ($reg=='C850'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc800){
				$tpaipc800 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc850){
				$tpaipc850 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc800 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C860	Identificação do equipamento SAT-CF-e (Código 59)	2	
			elseif ($reg=='C860'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc001){
				$tpaipc001 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc860){
				$tpaipc860 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C890	Resumo diário de CF-e (Código 59) por equipamento SAT-CF-e	3	
			elseif ($reg=='C890'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pc860){
				$tpaipc860 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc890){
				$tpaipc890 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipc860 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//C990	Encerramento do Bloco C	1	
			elseif ($reg=='C990'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $xreg . "</th>"."<th>" . $xqtd_lin_c . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $tc){
				if ($rest1 == $pc990){
				$array = explode('|', $linha);
				$tpaipc990 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>";	
				echo "<td>" . $array[1] . "</td>"."<td>" . $array[2] . "</td>";											
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D001	Abertura do Bloco D	1	
			elseif ($reg=='D001'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd001){
				$tpaid001 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D100	Nota Fiscal de Serviço de Transporte (código 07), Conhecimentos de Transporte Rodoviário De Cargas (código 08), Conhecimentos de Transporte de Cargas Avulso (código 8b), Aquaviário de Cargas (código 09), Aéreo (código 10), Ferroviário de Cargas (código 11), Multimodal de Cargas (código 26), Nota Fiscal de Transporte Ferroviário de Carga (código 27), Conhecimento de Transporte Eletrônico – CT-e (código 57), Conhecimento de Transporte Eletrônico para Outros Serviços - CT-e OS (código 67) e Bilhete de Passagem Eletrônico (código 63)	2	
			elseif ($reg=='D100'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd001){
				$tpaipd001 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd100){
				$tpaid100 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D101	Informação complementar dos documentos fiscais quando das prestações interestaduais destinadas a consumidor final não contribuinte EC 87/15 (código 57 e 67)	3	
			elseif ($reg=='D101'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd100){
				$tpaipd100 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd101){
				$tpaid101 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D110	Itens do documento - Nota Fiscal de Serviços de Transporte (código 07)	3	
			elseif ($reg=='D110'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd100){
				$tpaipd100 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd110){
				$tpaid110 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D120	Complemento da Nota Fiscal de Serviços de Transporte (código 07)	4	
			elseif ($reg=='D120'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd110){
				$tpaipd110 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd120){
				$tpaid120 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd110 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D130	Complemento do Conhecimento Rodoviário de Cargas (código 08) e Conhecimento de Transporte de Cargas Avulso (Código 8B)	3	
			elseif ($reg=='D130'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd100){
				$tpaipd100 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd130){
				$tpaid130 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D140	Complemento do Conhecimento Aquaviário de Cargas (código 09)	3	
			elseif ($reg=='D140'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd100){
				$tpaipd100 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd140){
				$tpaid140 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D150	Complemento do Conhecimento Aéreo de Cargas (código 10)	3	
			elseif ($reg=='D150'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd100){
				$tpaipd100 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd150){
				$tpaid150 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D160	Carga Transportada (CÓDIGO 08, 8B, 09, 10, 11, 26 E 27)	3	
			elseif ($reg=='D160'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd100){
				$tpaipd100 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd160){
				$tpaid160 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D161	Local de Coleta e Entrega (códigos 08, 8B, 09, 10, 11 e 26)	4	
			elseif ($reg=='D161'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd160){
				$tpaipd160 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd161){
				$tpaid161 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd160 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D162	Local de Coleta e Entrega (códigos 08, 8B, 09, 10, 11 e 26)	4	
			elseif ($reg=='D162'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd160){
				$tpaipd160 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd162){
				$tpaid162 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd160 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D170	Complemento do Conhecimento Multimodal de Cargas (código 26)	3	
			elseif ($reg=='D170'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd100){
				$tpaipd100 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd170){
				$tpaid170 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D180	Modais (código 26)	3	
			elseif ($reg=='D180'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd100){
				$tpaipd100 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd180){
				$tpaid180 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D190	Registro Analítico dos Documentos (CÓDIGO 07, 08, 8B, 09, 10, 11, 26, 27, 57 e 67)	3	
			elseif ($reg=='D190'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd100){
				$tpaipd100 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd190){
				$tpaid190 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D195	Observações do lançamento (CÓDIGO 07, 08, 8B, 09, 10, 11, 26, 27, 57 e 67)	3	
			elseif ($reg=='D195'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd100){
				$tpaipd100 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd195){
				$tpaid195 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D197	Outras obrigações tributárias, ajustes e informações de valores provenientes do documento fiscal.	4	
			elseif ($reg=='D197'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd195){
				$tpaipd195 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd197){
				$tpaid197 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd195 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D300	Registro Analítico dos bilhetes consolidados de Passagem Rodoviário (código 13), de Passagem Aquaviário (código 14), de Passagem e Nota de Bagagem (código 15) e de Passagem Ferroviário (código 16)	2	
			elseif ($reg=='D300'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd001){
				$tpaipd001 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd300){
				$tpaid300 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}			
			//D301	Documentos cancelados dos Bilhetes de Passagem Rodoviário (código 13), de Passagem Aquaviário (código 14), de Passagem e Nota de Bagagem (código 15) e de Passagem Ferroviário (código 16)	3	
			elseif ($reg=='D301'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd300){
				$tpaipd300 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd301){
				$tpaid301 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd300 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}	
			//D310	Complemento dos Bilhetes (código 13, código 14, código 15 e código 16)	3	
			elseif ($reg=='D310'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd300){
				$tpaipd300 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd310){
				$tpaid310 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd300 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}	
			//D350	Equipamento ECF (Códigos 2E, 13, 14, 15 e 16)	2	
			elseif ($reg=='D350'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd001){
				$tpaipd001 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd350){
				$tpaid350 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D355	Redução Z (Códigos 2E, 13, 14, 15 e 16)	3	
			elseif ($reg=='D355'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd350){
				$tpaipd350 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd355){
				$tpaid355 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd350 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D360	PIS E COFINS totalizados no dia (Códigos 2E, 13, 14, 15 e 16)	4	
			elseif ($reg=='D360'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd355){
				$tpaipd355 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd360){
				$tpaid360 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd355 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D365	Registro dos Totalizadores Parciais da Redução Z (Códigos 2E, 13, 14, 15 e 16)	4	
			elseif ($reg=='D365'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd355){
				$tpaipd355 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd365){
				$tpaid365 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd355 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D370	Complemento dos documentos informados (Códigos 13, 14, 15, 16 E 2E)	5	
			elseif ($reg=='D370'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd365){
				$tpaipd365 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd370){
				$tpaid370 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd365 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D390	Registro analítico do movimento diário (Códigos 13, 14, 15, 16 E 2E)	4	
			elseif ($reg=='D390'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd355){
				$tpaipd355 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd390){
				$tpaid390 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd355 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D400	Resumo do Movimento Diário (código 18)	2	
			elseif ($reg=='D400'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd001){
				$tpaipd001 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd400){
				$tpaid400 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D410	Documentos Informados (Códigos 13, 14, 15 e 16)	3	
			elseif ($reg=='D410'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd400){
				$tpaipd400 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd410){
				$tpaid410 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd400 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D411	Documentos Cancelados dos Documentos Informados (Códigos 13, 14, 15 e 16)	4	
			elseif ($reg=='D411'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd410){
				$tpaipd410 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd411){
				$tpaid411 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd410 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D420	Complemento dos Documentos Informados (Códigos 13, 14, 15 e 16)	3	
			elseif ($reg=='D420'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd400){
				$tpaipd400 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd420){
				$tpaid420 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd400 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D500	Nota Fiscal de Serviço de Comunicação (código 21) e Serviço de Telecomunicação (código 22)	2	
			elseif ($reg=='D500'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd001){
				$tpaipd001 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd500){
				$tpaid500 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D510	Itens do Documento - Nota Fiscal de Serviço de Comunicação (código 21) e Serviço de Telecomunicação (código 22)	3	
			elseif ($reg=='D510'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd500){
				$tpaipd500 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd510){
				$tpaid510 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd500 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D530	Terminal Faturado	3	
			elseif ($reg=='D530'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd500){
				$tpaipd500 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd530){
				$tpaid530 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd500 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D590	Registro Analítico do Documento (códigos 21 e 22)	3	
			elseif ($reg=='D590'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd500){
				$tpaipd500 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd590){
				$tpaid590 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd500 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D600	Consolidação da Prestação de Serviços - Notas de Serviço de Comunicação (código 21) e de Serviço de Telecomunicação (código 22)	2	
			elseif ($reg=='D600'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd001){
				$tpaipd001 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd600){
				$tpaid600 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D610	Itens do Documento Consolidado (códigos 21 e 22)	3	
			elseif ($reg=='D610'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd600){
				$tpaipd600 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd610){
				$tpaid610 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd600 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D690	Registro Analítico dos Documentos (códigos 21 e 22)	3	
			elseif ($reg=='D690'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd600){
				$tpaipd600 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd690){
				$tpaid690 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd600 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D695	Consolidação da Prestação de Serviços - Notas de Serviço de Comunicação (código 21) e de Serviço de Telecomunicação (código 22)	2	
			elseif ($reg=='D695'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd001){
				$tpaipd001 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd695){
				$tpaid695 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			////D696	Registro Analítico dos Documentos (códigos 21 e 22)	3	
			elseif ($reg=='D696'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd695){
				$tpaipd695 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd696){
				$tpaid696 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd695 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D697	Registro de informações de outras UFs, relativamente aos serviços “não-medidos” de televisão por assinatura via satélite	4	
			elseif ($reg=='D697'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pd696){
				$tpaipd696 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd697){
				$tpaid697 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipd696 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//D990	Encerramento do Bloco D	1	
			elseif ($reg=='D990'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $td){
				if ($rest1 == $pd990){
				$tpaid990 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E001	Abertura do Bloco E	1	
			elseif ($reg=='E001'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe001){
				$tpaie001 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E100	Período de Apuração do ICMS	2	
			elseif ($reg=='E100'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe001){
				$tpaipe001 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe100){
				$tpaie100 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E110	Apuração do ICMS - Operações Próprias	3	
			elseif ($reg=='E110'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe100){
				$tpaipe100 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe110){
				$tpaie110 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E111	Ajuste/Benefício/Incentivo da Apuração do ICMS	4	
			elseif ($reg=='E111'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe110){
				$tpaipe110 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe111){
				$tpaie111 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe110 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E112	Informações Adicionais dos Ajustes da Apuração do ICMS	5	
			elseif ($reg=='E112'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe111){
				$tpaipe111 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe112){
				$tpaie112 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe111 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E113	Informações Adicionais dos Ajustes da Apuração do ICMS - Identificação dos documentos fiscais	5	
			elseif ($reg=='E113'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe111){
				$tpaipe111 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe113){
				$tpaie113 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe111 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E115	Informações Adicionais da Apuração do ICMS - Valores Declaratórios	4	
			elseif ($reg=='E115'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe110){
				$tpaipe110 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe115){
				$tpaie115 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe110 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E116	Obrigações do ICMS Recolhido ou a Recolher - Obrigações Próprias	4	
			elseif ($reg=='E116'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe110){
				$tpaipe110 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe116){
				$tpaie116 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe110 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E200	Período de Apuração do ICMS - Substituição Tributária	2	
			elseif ($reg=='E200'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe001){
				$tpaipe001 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe200){
				$tpaie200 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E210	Apuração do ICMS - Substituição Tributária	3	
			elseif ($reg=='E210'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe200){
				$tpaipe200 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe210){
				$tpaie210 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe200 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E220	Ajuste/Benefício/Incentivo da Apuração do ICMS - Substituição Tributária	4	
			elseif ($reg=='E220'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe210){
				$tpaipe210 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe220){
				$tpaie220 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe210 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E230	Informações Adicionais dos Ajustes da Apuração do ICMS Substituição Tributária	5	
			elseif ($reg=='E230'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe220){
				$tpaipe220 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe230){
				$tpaie230 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe220 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E240	Informações Adicionais dos Ajustes da Apuração do ICMS Substituição Tributária - Identificação dos documentos fiscais	5	
			elseif ($reg=='E240'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe220){
				$tpaipe220 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe240){
				$tpaie240 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe220 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E250	Obrigações do ICMS a Recolher - Substituição Tributária	4	
			elseif ($reg=='E250'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe210){
				$tpaipe210 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe250){
				$tpaie250 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe210 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E300	Período de Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15	2	
			elseif ($reg=='E300'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe001){
				$tpaipe001 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe300){
				$tpaie300 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E310	Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15	3	
			elseif ($reg=='E310'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe300){
				$tpaipe300 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe310){
				$tpaie310 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe300 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E311	Ajuste/Benefício/Incentivo da Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15	4	
			elseif ($reg=='E311'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe310){
				$tpaie310 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe311){
				$tpaie311 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaie310 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E312	Informações Adicionais dos Ajustes da Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15	5	
			elseif ($reg=='E312'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe311){
				$tpaie311 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe312){
				$tpaie312 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaie311 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E313	Informações Adicionais da Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15 Identificação dos Documentos Fiscais	5	
			elseif ($reg=='E313'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe311){
				$tpaie311 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe313){
				$tpaie313 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaie311 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E316	Obrigações do ICMS recolhido ou a recolher – Diferencial de Alíquota – UF Origem/Destino EC 87/15	4	
			elseif ($reg=='E316'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe310){
				$tpaie310 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe316){
				$tpaie316 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaie310 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E500	Período de Apuração do IPI	2	
			elseif ($reg=='E500'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe001){
				$tpaipe001 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe500){
				$tpaie500 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaipe001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E510	Consolidação dos Valores de IPI	3	
			elseif ($reg=='E510'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe500){
				$tpaie500 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe510){
				$tpaie510 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaie500 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E520	Apuração do IPI	3	
			elseif ($reg=='E520'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe500){
				$tpaie500 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe520){
				$tpaie520 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaie500 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E530	Ajustes da Apuração do IPI	4	
			elseif ($reg=='E530'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe520){
				$tpaie520 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe530){
				$tpaie530 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaie520 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E531	Informações Adicionais dos Ajustes da Apuração do IPI – Identificação dos Documentos Fiscais (01 e 55)	5	
			elseif ($reg=='E531'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pe530){
				$tpaie530 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe531){
				$tpaie531 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaie530 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//E990	Encerramento do Bloco E	1	
			elseif ($reg=='E990'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $te){
				if ($rest1 == $pe990){
				$tpaie990 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//G001	Abertura do Bloco G	1	
			elseif ($reg=='G001'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $tg){
				if ($rest1 == $pg001){
				$tpaig001 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//G110	ICMS – Ativo Permanente – CIAP	2	
			elseif ($reg=='G110'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pg001){
				$tpaig001 = $xcontador;
			}
				if ($rest == $tg){
				if ($rest1 == $pg110){
				$tpaig110 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaig001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//G125	Movimentação de Bem do Ativo Imobilizado	3	
			elseif ($reg=='G125'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pg110){
				$tpaig110 = $xcontador;
			}
				if ($rest == $tg){
				if ($rest1 == $pg125){
				$tpaig125 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaig110 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//G126	Outros créditos CIAP	4	
			elseif ($reg=='G126'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pg125){
				$tpaig125 = $xcontador;
			}
				if ($rest == $tg){
				if ($rest1 == $pg126){
				$tpaig126 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaig125 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//G130	Identificação do documento fiscal	4	
			elseif ($reg=='G130'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pg125){
				$tpaig125 = $xcontador;
			}
				if ($rest == $tg){
				if ($rest1 == $pg130){
				$tpaig130 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaig125 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//G140	Identificação do item do documento fiscal	5	
			elseif ($reg=='G140'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pg130){
				$tpaig130 = $xcontador;
			}
				if ($rest == $tg){
				if ($rest1 == $pg140){
				$tpaig140 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaig130 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//G990	Encerramento do Bloco G	1	
			elseif ($reg=='G990'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $tg){
				if ($rest1 == $pg990){
				$tpaig990 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//H001	Abertura do Bloco H	1	
			elseif ($reg=='H001'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $th){
				if ($rest1 == $ph001){
				$tpaih001 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//H005	Totais do Inventário	2	
			elseif ($reg=='H005'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $ph001){
				$tpaih001 = $xcontador;
			}
				if ($rest == $th){
				if ($rest1 == $ph005){
				$tpaih005 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaih001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//H010	Inventário	3	
			elseif ($reg=='H010'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $ph005){
				$tpaih005 = $xcontador;
			}
				if ($rest == $th){
				if ($rest1 == $ph010){
				$tpaih010 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaih005 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//H020	Informação complementar do Inventário	4	
			elseif ($reg=='H020'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $ph010){
				$tpaih010 = $xcontador;
			}
				if ($rest == $th){
				if ($rest1 == $ph020){
				$tpaih020 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaih010 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//H990	Encerramento do Bloco H	1	
			elseif ($reg=='H990'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $th){
				if ($rest1 == $ph990){
				$tpaih990 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K001	Abertura do Bloco K	1	
			elseif ($reg=='K001'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk001){
				$tpaik001 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			} 
			//K100	Período de Apuração do ICMS/IPI	2	
			elseif ($reg=='K100'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk001){
				$tpaik001 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk100){
				$tpaik100 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K200	Estoque Escriturado	3	
			elseif ($reg=='K200'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk100){
				$tpaik100 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk200){
				$tpaik200 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K210	Desmontagem de mercadorias – Item de Origem	3	
			elseif ($reg=='K210'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk100){
				$tpaik100 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk210){
				$tpaik210 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K215	Desmontagem de mercadorias – Item de Destino	4	
			elseif ($reg=='K215'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk210){
				$tpaik210 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk215){
				$tpaik215 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik210 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K220	Outras Movimentações Internas entre Mercadorias	3	
			elseif ($reg=='K220'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk100){
				$tpaik100 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk220){
				$tpaik220 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K230	Itens Produzidos	3	
			elseif ($reg=='K230'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk100){
				$tpaik100 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk230){
				$tpaik230 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K235	Insumos Consumidos	4	
			elseif ($reg=='K235'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk230){
				$tpaik230 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk235){
				$tpaik235 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik230 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K250	Industrialização Efetuada por Terceiros – Itens Produzidos	3	
			elseif ($reg=='K250'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk100){
				$tpaik100 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk250){
				$tpaik250 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K255	Industrialização em Terceiros – Insumos Consumidos	4	
			elseif ($reg=='K255'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk250){
				$tpaik250 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk255){
				$tpaik255 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik250 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K260	Reprocessamento/Reparo de Produto/Insumo	3	
			elseif ($reg=='K260'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk100){
				$tpaik100 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk260){
				$tpaik260 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K265	Reprocessamento/Reparo – Mercadorias Consumidas e/ou Retornadas	4	
			elseif ($reg=='K265'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk260){
				$tpaik260 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk265){
				$tpaik265 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik260 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K270	Correção de Apontamento dos Registros K210, K220, K230, K250 e K260	3	
			elseif ($reg=='K270'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk100){
				$tpaik100 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk270){
				$tpaik270 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K275	Correção de Apontamento e Retorno de Insumos dos Registros K215, K220, K235, K255 e K265	4	
			elseif ($reg=='K275'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk270){
				$tpaik270 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk275){
				$tpaik275 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik270 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K280	Correção de Apontamento – Estoque Escriturado	3	
			elseif ($reg=='K280'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk100){
				$tpaik100 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk280){
				$tpaik280 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K290	Produção Conjunta – Ordem de Produção	3	
			elseif ($reg=='K290'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk100){
				$tpaik100 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk290){
				$tpaik290 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K291	Produção Conjunta – Itens Produzidos	4	
			elseif ($reg=='K291'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk290){
				$tpaik290 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk291){
				$tpaik291 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik290 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K292	Produção Conjunta – Insumos Consumidos	4	
			elseif ($reg=='K292'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk290){
				$tpaik290 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk292){
				$tpaik292 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik290 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K300	Produção Conjunta – Industrialização Efetuada por Terceiros	3	
			elseif ($reg=='K300'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk100){
				$tpaik100 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk300){
				$tpaik300 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K301	Produção Conjunta – Industrialização Efetuada por Terceiros – Itens Produzidos	4	
			elseif ($reg=='K301'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk300){
				$tpaik300 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk301){
				$tpaik301 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik300 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K302	Produção Conjunta – Industrialização Efetuada por Terceiros – Insumos Consumidos	4	
			elseif ($reg=='K302'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $pk300){
				$tpaik300 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk302){
				$tpaik302 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaik300 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//K990	Encerramento do Bloco K	1	
			elseif ($reg=='K990'){
			echo "<table>" . "<tr>";
			echo "<th>" . $seq . "</th>";
			echo "<th>" . $conteudolinha . "</th>";
			echo "<th>" . $nivel . "</th>";
			echo "</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $tk){
				if ($rest1 == $pk990){
				$tpaik990 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//1001	Abertura do Bloco 1	1	
			elseif ($reg=='1001'){
			echo "<table>" . "<tr>"."<th>" . $seq . "</th>"."<th>" . $conteudolinha . "</th>"."<th>" . $nivel . "</th>"."</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p0000){
				$tpaip0000 = $xcontador;
			}
				if ($rest == $t1){
				if ($rest1 == $p1001){
				$tpai1001 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpaip0000 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//1010	Obrigatoriedade de registros do Bloco 1	2	
			elseif ($reg=='1010'){
			echo "<table>" . "<tr>"."<th>" . $seq . "</th>"."<th>" . $conteudolinha . "</th>"."<th>" . $nivel . "</th>"."</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p1001){
				$tpai1001 = $xcontador;
			}
				if ($rest == $t1){
				if ($rest1 == $p1010){
				$tpai1010 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpai1001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//1100	Registro de Informações sobre Exportação	2	
			elseif ($reg=='1100'){
			echo "<table>" . "<tr>"."<th>" . $seq . "</th>"."<th>" . $conteudolinha . "</th>"."<th>" . $nivel . "</th>"."</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p1001){
				$tpai1001 = $xcontador;
			}
				if ($rest == $t1){
				if ($rest1 == $p1100){
				$tpai1100 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpai1001 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//1105	Documentos Fiscais de Exportação	3	
			elseif ($reg=='1105'){
			echo "<table>" . "<tr>"."<th>" . $seq . "</th>"."<th>" . $conteudolinha . "</th>"."<th>" . $nivel . "</th>"."</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p1100){
				$tpai1100 = $xcontador;
			}
				if ($rest == $t1){
				if ($rest1 == $p1105){
				$tpai1105 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpai1100 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//1110	Operações de Exportação Indireta - Mercadorias de terceiros	4	
			elseif ($reg=='1110'){
			echo "<table>" . "<tr>"."<th>" . $seq . "</th>"."<th>" . $conteudolinha . "</th>"."<th>" . $nivel . "</th>"."</tr>";
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<tr>" . "<td>" . ($xcontador ++). "</td>" . "<td>" . ($linha). "</td>" ;
				if ($rest1 == $p1105){
				$tpai1105 = $xcontador;
			}
				if ($rest == $t1){
				if ($rest1 == $p1110){
				$tpai1110 = $xcontador;
				echo "</tr>" . "<td>" . ($xcontador)."</td>" . "<td>" . ($linha). "</td>";												
				echo "<td>" . $tpai1105 . "</td>";
			}							
			}					
			}
			echo "</tr>" . "</table>";
			}
			//1200	Controle de Créditos Fiscais - ICMS	2	

			






			$novoNome = uniqid().' - '.date('Y-m-d')." - ".basename($_FILES["arquivo"]["name"]);
			$geratxt = fopen ("C:\\xampp\htdocs\spedbkp/$novoNome", "w+");
			fwrite($geratxt, print_r($conteudo, TRUE));
			fclose($geratxt);

			/*elseif ($reg=='C001'){
			echo '-C001-'.'<br>';	
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );

			
			if ($rest == $tc){
				if ($rest1 == $pc001){
				$tpaic001 = $xcontador;
				echo  '<hr>';
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			}	
			
			if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;
				//echo  '<hr>';
	
			}			

			//echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			
			if ($rest1 == $pc100){
				//echo ' - Linha Pai - ' . $tpaic001;
			}	
			if ($rest1 == $pc101){
				//echo ' - Linha Pai - ' . $tpaic100;
			}	
			if ($rest1 == $pc110){
				//echo ' - Linha Pai - ' . $tpaic100;	
			}
			if ($rest1 == $pc170){
				//echo ' - Linha Pai - ' . $tpaic100;
			}
			if ($rest1 == $pc190){
				$tpaic190 = ($xcontador);
				//echo ' - Linha Pai - ' . $tpaic100;
			}
			if ($rest1 == $pc191){
				//echo ' - Linha Pai - ' . $tpaic190;
			}
			echo "</td>" . "</table>";
			
			}
			
			}
			
			}
			
			}
			
			elseif ($reg=='C100'){
			echo '-C100-'.'<br>';	
			echo '|Linha|'.'|Reg|'.'Seq'.'<br>';	
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );
			
			if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;
				echo  '<hr>';
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			}	
			
			if ($rest == $tc){
				if ($rest1 == $pc001){
				$tpaic001 = $xcontador;	
			}						
			if ($rest1 == $pc100){
				echo ' - Linha Pai - ' . $tpaic001;
			}	
			echo "</td>" . "</table>";
			
			}
			
			}
			
			}
			
			}
			
			
			
			elseif ($reg=='C101'){
			echo '-C101-'.'<br>';	
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );
			
			if ($rest == $tc){
				if ($rest1 == $pc101){
				$tpaic101 = $xcontador;
				echo  '<hr>';
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			}	
			
			if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;	
				$array = explode('|', $linha);
			}						
			if ($rest1 == $pc101){
				echo ' - Linha Pai - ' . $tpaic100 . ' - Nota Fiscal: ' . $array[8] . ' Serie: ' . $array[7];
			}	
			echo "</td>" . "</table>";
			
			}
			
			}
			
			}
			
			}
			
			
			/*elseif ($reg=='C100'){
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
			echo '-C110-'.'<br>';	
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );
			
			if ($rest == $tc){
				if ($rest1 == $pc110){
				$tpaic110 = $xcontador;
				echo  '<hr>';
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			}	
			
			if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;	
				$array = explode('|', $linha);
			}						
			if ($rest1 == $pc110){
				echo ' - Linha Pai - ' . $tpaic100 . ' - Nota Fiscal: ' . $array[8] . ' Serie: ' . $array[7];
			}	
			echo "</td>" . "</table>";
			
			}
			
			}
			
			}
			
			}
			elseif ($reg=='C113'){
			echo '-C113-'.'<br>';	
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );
			
			if ($rest == $tc){
				if ($rest1 == $pc113){
				$tpaic113 = $xcontador;
				echo  '<hr>';
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			}	
			
			if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;	
			}						
			if ($rest1 == $pc113){
				echo ' - Linha Pai - ' . $tpaic100;
			}	
			echo "</td>" . "</table>";
			
			}
			
			}
			
			}
			
			}
			elseif ($reg=='C140'){
			echo '-C140-'.'<br>';	
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );
			
			if ($rest == $tc){
				if ($rest1 == $pc140){
				$tpaic140 = $xcontador;
				echo  '<hr>';
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			}
			
			if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;	
			}						
			if ($rest1 == $pc140){
				echo ' - Linha Pai - ' . $tpaic100;
			}	
			echo "</td>" . "</table>";
			
			}
			
			}
			
			}
			
			}	
			elseif ($reg=='C141'){
			echo '-C141-'.'<br>';	
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );
			
			if ($rest == $tc){
				if ($rest1 == $pc141){
				$tpaic141 = $xcontador;
				echo  '<hr>';
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			}
			
			if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;	
			}						
			if ($rest1 == $pc141){
				echo ' - Linha Pai - ' . $tpaic100;
			}	
			echo "</td>" . "</table>";
			
			}
			
			}
			
			}
			
			}	
			elseif ($reg=='C170'){
			echo '-C170-'.'<br>';	
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );
			
			if ($rest == $tc){
				if ($rest1 == $pc170){
				$tpaic170 = $xcontador;
				echo  '<hr>';
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			}	
			
			if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;	
				$array = explode('|', $linha);
			}						
			if ($rest1 == $pc170){
				echo ' - Linha Pai - ' . $tpaic100 . ' - Nota Fiscal: ' . $array[8] . ' Serie: ' . $array[7];
			}	
			echo "</td>" . "</table>";
			
			}
			
			}
			
			}
			
			}
			elseif ($reg=='C175'){
			echo '-C175-'.'<br>';	
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );
			
			if ($rest == $tc){
				if ($rest1 == $pc175){
				$tpaic175 = $xcontador;
				echo  '<hr>';
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			}	
			
			if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;	
			}						
			if ($rest1 == $pc175){
				echo ' - Linha Pai - ' . $tpaic100;
			}	
			echo "</td>" . "</table>";
			
			}
			
			}
			
			}
			
			}
			elseif ($reg=='C176'){
			echo '-C176-'.'<br>';	
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );
			
			if ($rest == $tc){
				if ($rest1 == $pc176){
				$tpaic176 = $xcontador;
				echo  '<hr>';
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			}	
			
			if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;	
			}						
			if ($rest1 == $pc176){
				echo ' - Linha Pai - ' . $tpaic100;
			}	
			echo "</td>" . "</table>";
			
			}
			
			}
			
			}
			
			}
			elseif ($reg=='C190'){
			echo '-C190-'.'<br>';	
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );
			
			if ($rest == $tc){
				if ($rest1 == $pc190){
				$tpaic190 = $xcontador;
				echo  '<hr>';
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			}	
			
			if ($rest == $tc){
				if ($rest1 == $pc100){
				$tpaic100 = $xcontador;	
				$array = explode('|', $linha);
			}						
			if ($rest1 == $pc190){
				echo ' - Linha Pai - ' . $tpaic100 . ' - Nota Fiscal: ' . $array[8] . ' Serie: ' . $array[7];
			}	
			echo "</td>" . "</table>";
			
			}
			
			}
			
			}
			
			}
			elseif ($reg=='C191'){
			echo '-C191-'.'<br>';	
			foreach ($conteudo as $linha){
			$rest = substr("$linha", 0, 2);
			$rest1 = substr("$linha", 0, 6);
			$rest2 = "<table>" . "<td>" . ($xcontador ++) . ' - '  . ($linha . "</td>" . "</table>" );
			
			if ($rest == $tc){
				if ($rest1 == $pc191){
				$tpaic191 = $xcontador;
				echo  '<hr>';
			echo "<table>" . "<td>" . ($xcontador) . ' - '  . ($linha);
			}	
			
			if ($rest == $tc){
				if ($rest1 == $pc190){
				$tpaic190 = $xcontador;	
			}						
			if ($rest1 == $pc191){
				echo ' - Linha Pai - ' . $tpaic190;
			}	
			echo "</td>" . "</table>";
			
			}
			
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
			
			
			
			
			
			*/
			
			//print_r ($conteudo[0]);
			//foreach ($conteudo as $linha)
			//echo ($linha.'<br/>');
			
			
			
			
			
		
		echo "<meta HTTP-EQUIV='refresh' CONTENT='120;URL=bd-u1.php'>";
	?>
	</table>

		
		<ul>
		<li><a href="sped2b.php" target="iframe_b" onclick="submit()">Visualizar</button></a></li>
		<li><a href="sped3-xls.php" target="_self" name="enviar" onclick="this.disabled=true">Gerar XLS</button></a></li>
		
		</ul>
	 	 
	</body>
</html>