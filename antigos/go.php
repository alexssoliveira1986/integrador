<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Integrador</title>
		<meta charset="utf-8" />
		<meta name="description" content="Integrador" />
		</head>
<body>
	<font face="tahoma"> <h1>Integrador - GO</h1>
			<hr>
		<nav>
		<h3>Painel de Navegação</h3>
		</nav>	
		<hr>
	
	<?php 
	
	/*value="<?php echo date('d/m/Y');?>"
	Informar Data de Pagamento:
	<input type="date" name="date" required="required" value="<?php date('d/m/Y');?>" /><br><br>
	*/ 
	
	$UFGO="GO";
	$extensao = ("txt");
	$novoNome = $UFGO ."-" . date('Y-m-d')."-". uniqid().".$extensao";	

	
	//Texto padrão Campos / Abertura / Encerramento
	$abertura = ('<?xml version="1.0" encoding="UTF-8"?><TLote_GNRE versao="1.00" xmlns="http://www.gnre.pe.gov.br"><guias>');
	$encerra = ('</guias></TLote_GNRE>');
	
	
	$qarquivos = count($_FILES["arquivo"]["name"]);
	$contador = 0;
	

	while ($contador < $qarquivos):	
	
	//Fica armazenado arquivos XML
    //$diretorio = "xmls/"; 
	$diretorio = "C:\\xampp\htdocs\xmls/";
    $link = $diretorio . basename($_FILES["arquivo"]["name"][$contador]);
    $xml = simplexml_load_file($link);
		
	//Estado Selecionado
	$UFGO="GO";
	$CFOP6108="6108";
	$CFOP6656="6656";
	$xcontador = ($contador + 1);
	
	if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO):
	
	//Tratando informação do xml selecionado - Desktop	
	$geratxt = fopen ("C:\\xampp\htdocs\download-xml/$novoNome", "w+");
	//Tratando informação do xml selecionado - Pasta BKP	
	$geratxt1 = fopen ("C:\\xampp\htdocs\xmls-bkps/$novoNome", "w+");
	//Escreve dentro do arquivo gerado
	fwrite($geratxt, print_r($abertura, TRUE));
	fwrite($geratxt1, print_r($abertura, TRUE));
	
	
	
	
	
	
	//require_once ("bd.php");
	
	
	
	
	
	
	
	
elseif ($xml->NFe->infNFe->dest->enderDest->UF <> $UFGO):
	
	foreach($xml->NFe as $registro):
			//Selecionado NF do XML
			foreach($registro->infNFe->dest->enderDest as $enderDest):
			//echo "<strong>".$xcontador."º XML Invalido - Estado = </strong>(" . $enderDest->UF . ") (Diferente do Estado Selecionado)";
			//echo '<hr>';
			//echo '<br>' . '<a href="integrador-go.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a>';
			endforeach;
			
endforeach;

			//Else com a informação que deu errado
	else: echo "<strong>".$xcontador."º XML Invalido - Estado e/ou CFOP Incorretos</strong>" . '<br>' . '<a href="integrador-go.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a>';
	echo '<hr>';
	echo '<br>' . '<a href="integrador-go.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a>';	
	endif;
		
	
	$contador ++;
	
	endwhile;

	
	
	
	
	$qarquivos = count($_FILES["arquivo"]["name"]);
	$contador = 0;
	
	while ($contador < $qarquivos):	
	
	//Fica armazenado arquivos XML
    //$diretorio = "xmls/"; 
	$diretorio = "C:\\xampp\htdocs\xmls/";
    $link = $diretorio . basename($_FILES["arquivo"]["name"][$contador]);
    $xml = simplexml_load_file($link);
		
	//Estado Selecionado
	$UFGO="GO";
	$CFOP6108="6108";
	$CFOP6656="6656";
	$xcontador = ($contador + 1);
		
		//If com a informação do Estado
	
	if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO):	
		
			//XML Selecionado	
	foreach($xml->NFe as $registro):
			
			//Selecionado Estado do XML
			foreach($registro->infNFe->dest->enderDest as $enderDest):
			echo '<strong>' . $xcontador . 'º XML Gerado - Estado = </strong>' . $enderDest->UF;
			endforeach;

			if (isset($registro->infNFe->det[0]['nItem'])):
			if ($registro->infNFe->det[0]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[0]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[0]['nItem'])):
			elseif ($registro->infNFe->det[0]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[1]['nItem'])):
			if ($registro->infNFe->det[1]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[1]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[1]['nItem'])):
			elseif ($registro->infNFe->det[1]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[2]['nItem'])):
			if ($registro->infNFe->det[2]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[2]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[2]['nItem'])):
			elseif ($registro->infNFe->det[2]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[3]['nItem'])):
			if ($registro->infNFe->det[3]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[3]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[3]['nItem'])):
			elseif ($registro->infNFe->det[3]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[4]['nItem'])):
			if ($registro->infNFe->det[4]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[4]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[4]['nItem'])):
			elseif ($registro->infNFe->det[4]->prod->CFOP == $CFOP6656):
			endif;
			endif;
		
			if (isset($registro->infNFe->det[5]['nItem'])):
			if ($registro->infNFe->det[5]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[5]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[5]['nItem'])):
			elseif ($registro->infNFe->det[5]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[6]['nItem'])):
			if ($registro->infNFe->det[6]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[6]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[6]['nItem'])):
			elseif ($registro->infNFe->det[6]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[7]['nItem'])):
			if ($registro->infNFe->det[7]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[7]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[7]['nItem'])):
			elseif ($registro->infNFe->det[7]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[8]['nItem'])):
			if ($registro->infNFe->det[8]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[8]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[8]['nItem'])):
			elseif ($registro->infNFe->det[8]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[9]['nItem'])):
			if ($registro->infNFe->det[9]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[9]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[9]['nItem'])):
			elseif ($registro->infNFe->det[9]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[10]['nItem'])):
			if ($registro->infNFe->det[10]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[10]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[10]['nItem'])):
			elseif ($registro->infNFe->det[10]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			
			
			
			
			
			//require_once ("select.php");
			
			
			
			
			
			
			//Selecionado NF do XML
			echo '<hr>';
			foreach($registro->infNFe->ide as $ide):
			echo '<strong>Dados do Xml Referente NF: </strong>' . '' . $ide->nNF . ' ';
			endforeach;
			
			//Chave de Acesso XML
			$registro->infNFe[0];
			$cha = substr ($registro->infNFe[0]['Id'],-44);
			echo '<strong>Chave de Acesso: </strong>' . '' . substr ($registro->infNFe[0]['Id'],-44) . '<br>' . '<hr>';
			
			//Dados NF			
			foreach($registro->infNFe->ide as $ide):
			echo '<strong>NF: </strong>' . $ide->nNF . ' ' . '<strong>Serie: </strong>' . $ide->serie . ' ';
			$num = $registro->infNFe->ide->nNF;
			$ser = $registro->infNFe->ide->serie;
			endforeach;
			
			//Data NF		
			foreach($registro->infNFe->ide as $ide):
			echo '<strong>Data: </strong>' . substr($ide->dhEmi[0],0,10) . ' ';
			endforeach;
			
			//Dados Empresa	
			foreach($registro->infNFe->emit as $emit):
			echo '<strong>CNPJ: </strong>' . $emit->CNPJ . ' ' . '<strong>Empresa: </strong>' . $emit->xFant . '<br>' . '<hr>';
			endforeach;
			
			//Dados Clientes	
			foreach($registro->infNFe->dest as $dest):
			echo '<strong>CPF: </strong>' . $dest->CPF . ' ';
			echo '<strong>Cliente: </strong>' . $dest->xNome . ' ';
			echo '<strong>Email: </strong>' . $dest->email . ' ';
			echo '<hr>';
			endforeach;
			
			//Dados Total	
			foreach($registro->infNFe->total->ICMSTot as $ICMSTot):
			echo '<strong>Total NF: </strong>' . $ICMSTot->vNF . ' ';
			endforeach;
			
			
			
			

			//require_once ("insert.php");
			








			
			require_once ("pecas.php");

			
			
			
			
			
			
			
//Condição se existe a peça no XML
					if (!isset($tp1)){
				$tp1 = 0;
					}
					if (!isset($tp2)){
				$tp2 = 0;
					}
					if (!isset($tp3)){
				$tp3 = 0;
					}
					if (!isset($tp4)){
				$tp4 = 0;
					}
					if (!isset($tp5)){
				$tp5 = 0;
					}
					if (!isset($tp6)){
				$tp6 = 0;
					}
					if (!isset($tp7)){
				$tp7 = 0;
					}
					if (!isset($tp8)){
				$tp8 = 0;
					}
					if (!isset($tp9)){
				$tp9 = 0;
					}
					if (!isset($tp10)){
				$tp10 = 0;
					}
					if (!isset($tp11)){
				$tp11 = 0;
					}


		// Total da Soma das peças que existem
				
		$totaldifal = number_format("$tp1" + "$tp2" + "$tp3" + "$tp4" + "$tp5" + "$tp6" + "$tp7" + "$tp8" + "$tp9" + "$tp10" + "$tp11", 2, '.', '');
		echo '<strong>Total Difal: </strong>'. $totaldifal . ' ' . '<strong>Data Pagamento: </strong>' . $_POST ['date'] /*$dataAtual*/;
	
			echo '<hr>';



	
	endforeach;	

	elseif ($xml->NFe->infNFe->dest->enderDest->UF <> $UFGO):
	
	foreach($xml->NFe as $registro):
			//Selecionado NF do XML
			foreach($registro->infNFe->dest->enderDest as $enderDest):
			echo "<strong>".$xcontador."º XML Invalido - Estado = </strong>(" . $enderDest->UF . ") (Diferente do Estado Selecionado)";
			echo '<hr>';
			endforeach;
			
endforeach;

			//Else com a informação que deu errado
	else: "<strong>".$xcontador."º XML Invalido - Estado e/ou CFOP Incorretos</strong>";
	echo '<hr>';

	endif;
	
	//Fica armazenado arquivos XML
	//$diretorio = "xmls/"; 
    $diretorio = "C:\\xampp\htdocs\xmls/";
    $link = $diretorio . basename($_FILES["arquivo"]["name"][$contador]);
    $xml = simplexml_load_file($link);
	
	//Campos Travados
	$t1 = ('<TDadosGNRE><c01_UfFavorecida>GO</c01_UfFavorecida><c02_receita>100102</c02_receita><c27_tipoIdentificacaoEmitente>1</c27_tipoIdentificacaoEmitente><c03_idContribuinteEmitente><CNPJ>');
	$t2 = ('</CNPJ></c03_idContribuinteEmitente><c28_tipoDocOrigem>10</c28_tipoDocOrigem><c04_docOrigem>');
	$t3 = ('</c04_docOrigem><c06_valorPrincipal>');
	$t4 = ('</c06_valorPrincipal><c14_dataVencimento>');
	$t5 = ('</c14_dataVencimento><c15_convenio>87/2015</c15_convenio><c16_razaoSocialEmitente>NOVA DISTRIBUIDORA DE VEICULOS LTDA</c16_razaoSocialEmitente><c18_enderecoEmitente>');
	$t6 = ('</c18_enderecoEmitente><c19_municipioEmitente>');
	$t7 = ('</c19_municipioEmitente><c20_ufEnderecoEmitente>SP</c20_ufEnderecoEmitente><c21_cepEmitente>');
	$t8 = ('</c21_cepEmitente><c22_telefoneEmitente>1130490500</c22_telefoneEmitente><c34_tipoIdentificacaoDestinatario>2</c34_tipoIdentificacaoDestinatario><c35_idContribuinteDestinatario><CPF>');
	$t9 = ('</CPF></c35_idContribuinteDestinatario><c37_razaoSocialDestinatario>');
	$t10 = ('</c37_razaoSocialDestinatario><c38_municipioDestinatario>');
	$t11 = ('</c38_municipioDestinatario><c33_dataPagamento>');
	$t12 = ('</c33_dataPagamento><c05_referencia><mes>');
	$t13 = ('</mes><ano>');
	$t14 = ('</ano></c05_referencia><c39_camposExtras><campoExtra><codigo>102</codigo><tipo>T</tipo><valor>');
	$t15 = ('</valor></campoExtra></c39_camposExtras></TDadosGNRE>');

	
			if (isset($registro->infNFe->det[0]['nItem'])):
			if ($registro->infNFe->det[0]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[0]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[0]['nItem'])):
			elseif ($registro->infNFe->det[0]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[1]['nItem'])):
			if ($registro->infNFe->det[1]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[1]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[1]['nItem'])):
			elseif ($registro->infNFe->det[1]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[2]['nItem'])):
			if ($registro->infNFe->det[2]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[2]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[2]['nItem'])):
			elseif ($registro->infNFe->det[2]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[3]['nItem'])):
			if ($registro->infNFe->det[3]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[3]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[3]['nItem'])):
			elseif ($registro->infNFe->det[3]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[4]['nItem'])):
			if ($registro->infNFe->det[4]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[4]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[4]['nItem'])):
			elseif ($registro->infNFe->det[4]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[5]['nItem'])):
			if ($registro->infNFe->det[5]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[5]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[5]['nItem'])):
			elseif ($registro->infNFe->det[5]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[6]['nItem'])):
			if ($registro->infNFe->det[6]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[6]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[6]['nItem'])):
			elseif ($registro->infNFe->det[6]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[7]['nItem'])):
			if ($registro->infNFe->det[7]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[7]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[7]['nItem'])):
			elseif ($registro->infNFe->det[7]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[8]['nItem'])):
			if ($registro->infNFe->det[8]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[8]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[8]['nItem'])):
			elseif ($registro->infNFe->det[8]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[9]['nItem'])):
			if ($registro->infNFe->det[9]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[9]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[9]['nItem'])):
			elseif ($registro->infNFe->det[9]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			if (isset($registro->infNFe->det[10]['nItem'])):
			if ($registro->infNFe->det[10]->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det[10]->prod as $prod):
			endforeach;
			elseif (isset($registro->infNFe->det[10]['nItem'])):
			elseif ($registro->infNFe->det[10]->prod->CFOP == $CFOP6656):
			endif;
			endif;

		//If com a informação do Estado
	if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO):
	
			//XML Selecionado	
	foreach($xml->NFe as $registro):
			//Selecionado Estado do XML
			
		foreach($xml->NFe as $registro):
	//Estrutura Parte 1
			foreach($registro->infNFe->emit as $emit):
			endforeach;
	//Estrutura Parte 2
			foreach($registro->infNFe->ide as $ide):
			endforeach;
	//Estrutura Parte 3
			foreach($registro->infNFe->total->ICMSTot as $ICMSTot):
			endforeach;
	//Estrutura Parte 4
			foreach($registro->infNFe->ide as $ide):
			endforeach;
	//Estrutura Parte 5
			foreach($registro->infNFe->emit->enderEmit as $enderEmit):
			endforeach;
	//Estrutura Parte 6
			foreach($registro->infNFe->emit->enderEmit as $enderEmit):
			endforeach;
	//Estrutura Parte 7
			foreach($registro->infNFe->emit->enderEmit as $enderEmit):
			endforeach;
	//Estrutura Parte 8
			foreach($registro->infNFe->dest as $dest):
			endforeach;
	//Estrutura Parte 9
			foreach($registro->infNFe->dest as $dest):
			endforeach;
	//Estrutura Parte 10
			foreach($registro->infNFe->dest->enderDest as $enderDest):
			endforeach;
	//Estrutura Parte 11
			//echo $t11;
			//echo $_POST['date'];
	//Estrutura Parte 12
			foreach($registro->infNFe->ide as $ide):
			endforeach;
	//Estrutura Parte 13
			foreach($registro->infNFe->ide as $ide):
			endforeach;
	//Estrutura Parte 14
			$registro->infNFe[0];
		
			$conteudo = ($t1.$emit->CNPJ.$t2.$ide->nNF.$t3.$totaldifal.$t4.substr($ide->dhEmi[0],0,10).
			$t5.$enderEmit->xLgr.', '.$enderEmit->nro.$t6.substr($enderEmit->cMun,-5).$t7.$enderEmit->CEP.$t8.$dest->CPF.$t9.$dest->xNome.
			$t10.substr($enderDest->cMun,-5).$t11.$_POST['date']/*$dataAtual*/.$t12.substr($ide->dhEmi[0],5,2).$t13.substr($ide->dhEmi[0],0,4).
			$t14.substr($registro->infNFe[0]['Id'],-44).$t15);
					
	endforeach;
	endforeach;
	
	endif;
	
			if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO):
			fwrite($geratxt, print_r($conteudo, TRUE));
			fwrite($geratxt1, print_r($conteudo, TRUE));
			endif;
			
	$contador++;
	endwhile;
				
     		if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO):	
			fwrite($geratxt, print_r($encerra, TRUE));
			fwrite($geratxt1, print_r($encerra, TRUE));			
			fclose($geratxt);
			fclose($geratxt1);
			endif;
			
			if ($geratxt = TRUE):
			//Informa na tela arquivo com extensão gerado
			echo  ('<strong>Arquivo Gerado: </strong>'. $novoNome . '<br>' . '<hr>');
			endif;
			


			foreach (glob("C:\\xampp\htdocs\download-xml/*.*") as $ver){
				$name = basename($ver);
				//echo '<li><a href="baixa.php?file='.$name.'">'.$name.' <button type="button" onclick="submit()">Baixar</button></a></li>';
				
			}
		


?>

<td><a href="integrador-go.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
<?php
if ($geratxt = TRUE){
echo '<a href="baixa.php?file='.$name.'"><button type="button" onclick="this.disabled=true">Baixar</button></a>';
}else exit;
	?>
</font>
</body>
</head>
</html>