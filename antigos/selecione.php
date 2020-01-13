<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Integrador</title>
		<meta charset="utf-8" />
		<meta name="description" content="Integrador" />
		</head>
<body>
	<h1>Integrador Geral</h1>
			<hr>
		<nav>
		Menu de Navegação
		</nav>	
		<hr>
		<p>	
	<?php 
	
	
	/*value="<?php echo date('d/m/Y');?>"*/
	//Fica armazenado arquivos XML
    $diretorio = "xmls/"; 
    $link = $diretorio . basename($_FILES["arquivo"]["name"]);
    $xml = simplexml_load_file($link);
	
	//Estado Selecionado
	$UFGO="GO";
	$CFOP6108="6108";
	
		//If com a informação do Estado
	if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO && $xml->NFe->infNFe->det->prod->CFOP == $CFOP6108):
			//XML Selecionado	
	foreach($xml->NFe as $registro):
			
			//Selecionado Estado do XML
			foreach($registro->infNFe->dest->enderDest as $enderDest):
			echo '<strong>Estado = </strong>';
			echo $enderDest->UF;
			echo '<hr>';
			endforeach;
			
			//Selecionar CFOP
			//elseif ($xml->NFe->infNFe->det->prod->CFOP == $CFOP6108):
			foreach($registro->infNFe->det->prod as $prod):
			echo '<strong>CFOP = </strong>';
			echo $prod->CFOP;
			echo '<hr>';
			endforeach;
			
			//Selecionado NF do XML
			foreach($registro->infNFe->ide as $ide):
			echo '<strong>Dados do Xml Referente NF - </strong>';
			echo '' . $ide->nNF . '<br>';
			echo '<hr>';
			endforeach;
			
			//Chave de Acesso XML
			
			$registro->infNFe[0];
			echo '<strong>Chave de Acesso: </strong>';
			echo '' . substr ($registro->infNFe[0]['Id'],-44) . '<br>';
			echo '<hr>';
			
			//Dados NF		
			
			foreach($registro->infNFe->ide as $ide):
			echo '<strong>NF: </strong>' . $ide->nNF . ' ';
			echo '<strong>Serie: </strong>' . $ide->serie . '<br>';	
			echo '<hr>';
			endforeach;
			
			//Data NF
			
			foreach($registro->infNFe->ide as $ide):
			echo '<strong>Data: </strong>' . substr($ide->dhEmi[0],0,10) . '<br>';
			echo '<hr>';
			endforeach;
			
			//Dados Empresa
			
			foreach($registro->infNFe->emit as $emit):
			echo '<strong>CNPJ: </strong>' . $emit->CNPJ . ' ';
			echo '<strong>Empresa: </strong>' . $emit->xFant . '<br>';
			echo '<hr>';
			endforeach;
			
			//Dados Clientes
			
			foreach($registro->infNFe->dest as $dest):
			echo '<strong>CPF: </strong>' . $dest->CPF . ' ';
			echo '<strong>Cliente: </strong>' . $dest->xNome . ' ';
			echo '<strong>Email: </strong>' . $dest->email . ' ';
			echo '<hr>';
			endforeach;
			
			//Dados Total + Calculo Difal
			
			foreach($registro->infNFe->total->ICMSTot as $ICMSTot):
			echo '<strong>Total: </strong>' . $ICMSTot->vNF;
			echo '<hr>';
			endforeach;
			
			//Calculo Difal
			foreach($registro->infNFe->det->imposto->ICMSUFDest as $ICMSUFDest):
			echo '<strong>Destino: </strong>' . substr($ICMSUFDest->pICMSUFDest ,0,-2);
			echo ' ' . '<strong>InterEstadual: </strong>' . $ICMSUFDest->pICMSInter;
			echo ' ' . '<strong>Resultado: </strong>'; 
			echo $ICMSUFDest->pICMSUFDest - $ICMSUFDest->pICMSInter;
			$c1 = $ICMSUFDest->pICMSUFDest - $ICMSUFDest->pICMSInter;
			foreach($registro->infNFe->det->imposto->ICMS->ICMS00 as $ICMS00):
			//Alterei para virgula echo ' ' . '<strong>Valor Base: </strong>' . str_replace(".",",","$ICMS00->vBC");
			//$c1 = interestadual menos o destino
			//$c2 = divisão por 100
			//$c3 = valor base do produto
			//$r1 = 10 dividido por 100
			echo ' ' . '<strong>Base: </strong>' . $ICMS00->vBC;
			$c2 = 100;
			$c3 = $ICMS00->vBC;
			$r1 = ($c1 /$c2);
			echo ' ' . '<strong>Difal: </strong>'; 
			//Trazer valor inteiro deixar dentro ( )
			echo round("$r1" * "$c3",2);
			endforeach;
			echo '<hr>';
			endforeach;
	
	endforeach;

	
	elseif ($xml->NFe->infNFe->dest->enderDest->UF <> $UFGO):
	
	foreach($xml->NFe as $registro):
			//Selecionado NF do XML
			foreach($registro->infNFe->dest->enderDest as $enderDest):
			echo "Estado = ";
			echo $enderDest->UF;
			echo "<strong> (Diferente do Selecionado)</strong>";
			echo '<hr>';
			endforeach;
			
endforeach;


		
			//Else com a informação que deu errado
	else: echo "Estado e/ou CFOP Incorretos";

	endif;
	
	

	
	//Fica armazenado arquivos XML
    $diretorio = "xmls/"; 
    $link = $diretorio . basename($_FILES["arquivo"]["name"]);
    $xml = simplexml_load_file($link);
	
	$extensao = ("txt");
	$novoNome = date('Y-m-d')."-". uniqid().".$extensao";	

	
	
	
	//Texto padrão Campos / Abertura / Encerramento
	$abertura = ('<?xml version="1.0" encoding="UTF-8"?><TLote_GNRE versao="1.00" xmlns="http://www.gnre.pe.gov.br"><guias>');
	$encerra = ('</guias></TLote_GNRE>');
	//echo $abertura;
	//echo $encerra.'<br>';
	
    /*<TDadosGNRE><c01_UfFavorecida>GO</c01_UfFavorecida><c02_receita></c02_receita><c27_tipoIdentificacaoEmitente>1</c27_tipoIdentificacaoEmitente><c03_idContribuinteEmitente><CNPJ></CNPJ></c03_idContribuinteEmitente><c28_tipoDocOrigem>10</c28_tipoDocOrigem><c04_docOrigem></c04_docOrigem><c06_valorPrincipal></c06_valorPrincipal><c14_dataVencimento></c14_dataVencimento><c15_convenio>87/2015</c15_convenio><c16_razaoSocialEmitente>NOVA DISTRIBUIDORA DE VEICULOS LTDA</c16_razaoSocialEmitente><c18_enderecoEmitente></c18_enderecoEmitente><c19_municipioEmitente></c19_municipioEmitente><c20_ufEnderecoEmitente>SP</c20_ufEnderecoEmitente><c21_cepEmitente></c21_cepEmitente><c22_telefoneEmitente>1130490500</c22_telefoneEmitente><c34_tipoIdentificacaoDestinatario>2</c34_tipoIdentificacaoDestinatario><c35_idContribuinteDestinatario><CPF></CPF></c35_idContribuinteDestinatario><c37_razaoSocialDestinatario></c37_razaoSocialDestinatario><c38_municipioDestinatario></c38_municipioDestinatario><c33_dataPagamento></c33_dataPagamento><c05_referencia><mes></mes><ano></ano></c05_referencia><c39_camposExtras><campoExtra><codigo>102</codigo><tipo>T</tipo><valor></valor></campoExtra></c39_camposExtras></TDadosGNRE>
	<?xml version="1.0" encoding="UTF-8"?><TLote_GNRE versao="1.00" xmlns="http://www.gnre.pe.gov.br"><guias>
	</guias></TLote_GNRE>*/
	
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
		
		//Pronto
	//<TDadosGNRE><c01_UfFavorecida>GO</c01_UfFavorecida><c02_receita></c02_receita><c27_tipoIdentificacaoEmitente>1</c27_tipoIdentificacaoEmitente><c03_idContribuinteEmitente><CNPJ></CNPJ></c03_idContribuinteEmitente><c28_tipoDocOrigem>10</c28_tipoDocOrigem><c04_docOrigem></c04_docOrigem><c06_valorPrincipal></c06_valorPrincipal><c14_dataVencimento></c14_dataVencimento><c15_convenio>87/2015</c15_convenio><c16_razaoSocialEmitente>NOVA DISTRIBUIDORA DE VEICULOS LTDA</c16_razaoSocialEmitente><c18_enderecoEmitente></c18_enderecoEmitente><c19_municipioEmitente></c19_municipioEmitente><c20_ufEnderecoEmitente>SP</c20_ufEnderecoEmitente><c21_cepEmitente></c21_cepEmitente><c22_telefoneEmitente>1130490500</c22_telefoneEmitente><c34_tipoIdentificacaoDestinatario>2</c34_tipoIdentificacaoDestinatario><c35_idContribuinteDestinatario><CPF></CPF></c35_idContribuinteDestinatario><c37_razaoSocialDestinatario></c37_razaoSocialDestinatario><c38_municipioDestinatario></c38_municipioDestinatario><c33_dataPagamento></c33_dataPagamento><c05_referencia><mes></mes><ano></ano></c05_referencia><c39_camposExtras><campoExtra><codigo>102</codigo><tipo>T</tipo><valor></valor></campoExtra></c39_camposExtras></TDadosGNRE>
		
	//Estado Selecionado
	$UFGO="GO"; $CFOP6108='6108';
	
	

		//If com a informação do Estado
	if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO && $xml->NFe->infNFe->det->prod->CFOP == $CFOP6108):
	

	
			//XML Selecionado	
	foreach($xml->NFe as $registro):
			//Selecionado Estado do XML
			
		foreach($xml->NFe as $registro):
	//Estrutura Parte 1
			foreach($registro->infNFe->emit as $emit):
			//echo $abertura. $t1 . $emit->CNPJ;
			endforeach;
	//Estrutura Parte 2
			foreach($registro->infNFe->ide as $ide):
			//echo $t2 . $ide->nNF;
			endforeach;
	//Estrutura Parte 3
			foreach($registro->infNFe->total->ICMSTot as $ICMSTot):
			//echo $t3 . $ICMSTot->vICMSUFDest;
			endforeach;
	//Estrutura Parte 4
			foreach($registro->infNFe->ide as $ide):
			//echo $t4 . substr($ide->dhEmi[0],0,10);
			endforeach;
	//Estrutura Parte 5
			foreach($registro->infNFe->emit->enderEmit as $enderEmit):
			//echo $t5 . $enderEmit->xLgr . ',' . ' ';
			//echo $enderEmit->nro;
			endforeach;
	//Estrutura Parte 6
			foreach($registro->infNFe->emit->enderEmit as $enderEmit):
			//echo $t6 . substr($enderEmit->cMun,-5);
			endforeach;
	//Estrutura Parte 7
			foreach($registro->infNFe->emit->enderEmit as $enderEmit):
			//echo $t7 . $enderEmit->CEP;
			endforeach;
	//Estrutura Parte 8
			foreach($registro->infNFe->dest as $dest):
			//echo $t8 . $dest->CPF;
			endforeach;
	//Estrutura Parte 9
			foreach($registro->infNFe->dest as $dest):
			//echo $t9 . $dest->xNome;
			endforeach;
	//Estrutura Parte 10
			foreach($registro->infNFe->dest->enderDest as $enderDest):
			//echo $t10 . substr($enderDest->cMun,-5);
			endforeach;
	//Estrutura Parte 11
			//echo $t11;
			//echo $_POST['date'];
	//Estrutura Parte 12
			foreach($registro->infNFe->ide as $ide):
			//echo $t12 . substr($ide->dhEmi[0],5,2);
			endforeach;
	//Estrutura Parte 13
			foreach($registro->infNFe->ide as $ide):
			//echo $t13 . substr($ide->dhEmi[0],0,4);
			endforeach;
	//Estrutura Parte 14
			$registro->infNFe[0];
			//echo $t14 . substr ($registro->infNFe[0]['Id'],-44);
	//Estrutura Parte 14
			//echo $t15;
			//echo $encerra;
	//Tratando informação do xml selecionado - Desktop
			$geratxt = fopen ("C:\Users\Administrador\Desktop/$novoNome", "w");
			$conteudo = ($abertura.$emit->CNPJ.$t2.$ide->nNF.$t3.$ICMSTot->vICMSUFDest.$t4.substr($ide->dhEmi[0],0,10).
			$t5.$enderEmit->xLgr.', '.$enderEmit->nro.$t6.substr($enderEmit->cMun,-5).$t7.$enderEmit->CEP.$t8.$dest->CPF.$t9.$dest->xNome.
			$t10.substr($enderDest->cMun,-5).$t11.$_POST['date'].$t12.substr($ide->dhEmi[0],5,2).$t13.substr($ide->dhEmi[0],0,4).
			$t14.substr($registro->infNFe[0]['Id'],-44).$t15.$encerra).round("$r1" * "$c3",2);
			fwrite($geratxt, $conteudo);	
			fclose($geratxt);
	//Tratando informação do xml selecionado - Pasta BKP
			$geratxt = fopen ("C:\\xampp\htdocs\xmls-bkps/$novoNome", "w");
			$conteudo = ($abertura.$emit->CNPJ.$t2.$ide->nNF.$t3.$ICMSTot->vICMSUFDest.$t4.substr($ide->dhEmi[0],0,10).
			$t5.$enderEmit->xLgr.', '.$enderEmit->nro.$t6.substr($enderEmit->cMun,-5).$t7.$enderEmit->CEP.$t8.$dest->CPF.$t9.$dest->xNome.
			$t10.substr($enderDest->cMun,-5).$t11.$_POST['date'].$t12.substr($ide->dhEmi[0],5,2).$t13.substr($ide->dhEmi[0],0,4).
			$t14.substr($registro->infNFe[0]['Id'],-44).$t15.$encerra).round("$r1" * "$c3",2);
			fwrite($geratxt, $conteudo);	
			fclose($geratxt);
			echo 'Arquivo Gerado: '. $novoNome;
			endforeach;
	endforeach;
	endif;

	
?>

<br><strong>Selecione novamente para Gerar o arquivo com a Data para Pagamento</strong></br><br>
	 
		
<td><a href="integrador.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
</body>
</head>
</html>

