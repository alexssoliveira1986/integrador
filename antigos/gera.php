<!DOCTYPE html>
<html>
<head>
<body>
<?php 
	//Informar data
	//echo $_POST["date"];

    //Fica armazenado arquivos XML

   	$diretorio = "xmls/"; 
	$link = $diretorio . basename($_FILES["arquivo"]["name"]);
    $xml = simplexml_load_file($link);
	
	//Texto padrão Campos / Abertura / Encerramento
	
	$abertura = htmlspecialchars ('<?xml version="1.0" encoding="UTF-8"?><TLote_GNRE versao="1.00" xmlns="http://www.gnre.pe.gov.br"><guias>', ENT_QUOTES);
	$encerra = htmlspecialchars ('</guias></TLote_GNRE>', ENT_QUOTES);
	echo $abertura;
	//echo $encerra.'<br>';
	
    /*<TDadosGNRE><c01_UfFavorecida>GO</c01_UfFavorecida><c02_receita></c02_receita><c27_tipoIdentificacaoEmitente>1</c27_tipoIdentificacaoEmitente><c03_idContribuinteEmitente><CNPJ></CNPJ></c03_idContribuinteEmitente><c28_tipoDocOrigem>10</c28_tipoDocOrigem><c04_docOrigem></c04_docOrigem><c06_valorPrincipal></c06_valorPrincipal><c14_dataVencimento></c14_dataVencimento><c15_convenio>87/2015</c15_convenio><c16_razaoSocialEmitente>NOVA DISTRIBUIDORA DE VEICULOS LTDA</c16_razaoSocialEmitente><c18_enderecoEmitente></c18_enderecoEmitente><c19_municipioEmitente></c19_municipioEmitente><c20_ufEnderecoEmitente>SP</c20_ufEnderecoEmitente><c21_cepEmitente></c21_cepEmitente><c22_telefoneEmitente>1130490500</c22_telefoneEmitente><c34_tipoIdentificacaoDestinatario>2</c34_tipoIdentificacaoDestinatario><c35_idContribuinteDestinatario><CPF></CPF></c35_idContribuinteDestinatario><c37_razaoSocialDestinatario></c37_razaoSocialDestinatario><c38_municipioDestinatario></c38_municipioDestinatario><c33_dataPagamento></c33_dataPagamento><c05_referencia><mes></mes><ano></ano></c05_referencia><c39_camposExtras><campoExtra><codigo>102</codigo><tipo>T</tipo><valor></valor></campoExtra></c39_camposExtras></TDadosGNRE>
	<?xml version="1.0" encoding="UTF-8"?><TLote_GNRE versao="1.00" xmlns="http://www.gnre.pe.gov.br"><guias>
	</guias></TLote_GNRE>*/
	
	//Campos Travados
	
	$t1 = htmlspecialchars ('<TDadosGNRE><c01_UfFavorecida>GO</c01_UfFavorecida><c02_receita>100102</c02_receita><c27_tipoIdentificacaoEmitente>1</c27_tipoIdentificacaoEmitente><c03_idContribuinteEmitente><CNPJ>', ENT_QUOTES);
	$t2 = htmlspecialchars ('</CNPJ></c03_idContribuinteEmitente><c28_tipoDocOrigem>10</c28_tipoDocOrigem><c04_docOrigem>', ENT_QUOTES);
	$t3 = htmlspecialchars ('</c04_docOrigem><c06_valorPrincipal>', ENT_QUOTES);
	$t4 = htmlspecialchars ('</c06_valorPrincipal><c14_dataVencimento>', ENT_QUOTES);
	$t5 = htmlspecialchars ('</c14_dataVencimento><c15_convenio>87/2015</c15_convenio><c16_razaoSocialEmitente>NOVA DISTRIBUIDORA DE VEICULOS LTDA</c16_razaoSocialEmitente><c18_endereco	Emitente>', ENT_QUOTES);
	$t6 = htmlspecialchars ('</c18_enderecoEmitente><c19_municipioEmitente>', ENT_QUOTES);
	$t7 = htmlspecialchars ('</c19_municipioEmitente><c20_ufEnderecoEmitente>SP</c20_ufEnderecoEmitente><c21_cepEmitente>', ENT_QUOTES);
	$t8 = htmlspecialchars ('</c21_cepEmitente><c22_telefoneEmitente>1130490500</c22_telefoneEmitente><c34_tipoIdentificacaoDestinatario>2</c34_tipoIdentificacaoDestinatario><c35_idContribuinteDestinatario><CPF>', ENT_QUOTES);
	$t9 = htmlspecialchars ('</CPF></c35_idContribuinteDestinatario><c37_razaoSocialDestinatario>', ENT_QUOTES);
	$t10 = htmlspecialchars ('</c37_razaoSocialDestinatario><c38_municipioDestinatario>', ENT_QUOTES);
	$t11 = htmlspecialchars ('</c38_municipioDestinatario><c33_dataPagamento>', ENT_QUOTES);
	$t12 = htmlspecialchars ('</c33_dataPagamento><c05_referencia><mes>', ENT_QUOTES);
	$t13 = htmlspecialchars ('</mes><ano>', ENT_QUOTES);
	$t14 = htmlspecialchars ('</ano></c05_referencia><c39_camposExtras><campoExtra><codigo>102</codigo><tipo>T</tipo><valor>', ENT_QUOTES);
	$t15 = htmlspecialchars ('</valor></campoExtra></c39_camposExtras></TDadosGNRE>', ENT_QUOTES);
	
	//Pronto
	//<TDadosGNRE><c01_UfFavorecida>GO</c01_UfFavorecida><c02_receita></c02_receita><c27_tipoIdentificacaoEmitente>1</c27_tipoIdentificacaoEmitente><c03_idContribuinteEmitente><CNPJ></CNPJ></c03_idContribuinteEmitente><c28_tipoDocOrigem>10</c28_tipoDocOrigem><c04_docOrigem></c04_docOrigem><c06_valorPrincipal></c06_valorPrincipal><c14_dataVencimento></c14_dataVencimento><c15_convenio>87/2015</c15_convenio><c16_razaoSocialEmitente>NOVA DISTRIBUIDORA DE VEICULOS LTDA</c16_razaoSocialEmitente><c18_enderecoEmitente></c18_enderecoEmitente><c19_municipioEmitente></c19_municipioEmitente><c20_ufEnderecoEmitente>SP</c20_ufEnderecoEmitente><c21_cepEmitente></c21_cepEmitente><c22_telefoneEmitente>1130490500</c22_telefoneEmitente><c34_tipoIdentificacaoDestinatario>2</c34_tipoIdentificacaoDestinatario><c35_idContribuinteDestinatario><CPF></CPF></c35_idContribuinteDestinatario><c37_razaoSocialDestinatario></c37_razaoSocialDestinatario><c38_municipioDestinatario></c38_municipioDestinatario><c33_dataPagamento></c33_dataPagamento><c05_referencia><mes></mes><ano></ano></c05_referencia><c39_camposExtras><campoExtra><codigo>102</codigo><tipo>T</tipo><valor></valor></campoExtra></c39_camposExtras></TDadosGNRE>
	
	//XML Selecionado	
	
	foreach($xml->NFe as $registro):
	
	//Estrutura Parte 1
			foreach($registro->infNFe->emit as $emit):
			echo $t1 . $emit->CNPJ;
			endforeach;
	//Estrutura Parte 2
			foreach($registro->infNFe->ide as $ide):
			echo $t2 . $ide->nNF;
			endforeach;
	//Estrutura Parte 3
			foreach($registro->infNFe->total->ICMSTot as $ICMSTot):
			echo $t3 . $ICMSTot->vICMSUFDest;
			endforeach;
	//Estrutura Parte 4
			foreach($registro->infNFe->ide as $ide):
			echo $t4 . substr($ide->dhEmi[0],0,10);
			endforeach;
	//Estrutura Parte 5
			foreach($registro->infNFe->emit->enderEmit as $enderEmit):
			echo $t5 . $enderEmit->xLgr . ',' . ' ';
			echo $enderEmit->nro;
			endforeach;
	//Estrutura Parte 6
			foreach($registro->infNFe->emit->enderEmit as $enderEmit):
			echo $t6 . substr($enderEmit->cMun,-5);
			endforeach;
	//Estrutura Parte 7
			foreach($registro->infNFe->emit->enderEmit as $enderEmit):
			echo $t7 . $enderEmit->CEP;
			endforeach;
	//Estrutura Parte 8
			foreach($registro->infNFe->dest as $dest):
			echo $t8 . $dest->CPF;
			endforeach;
	//Estrutura Parte 9
			foreach($registro->infNFe->dest as $dest):
			echo $t9 . $dest->xNome;
			endforeach;
	//Estrutura Parte 10
			foreach($registro->infNFe->dest->enderDest as $enderDest):
			echo $t10 . substr($enderDest->cMun,-5);
			endforeach;
	//Estrutura Parte 11
			echo $t11;
			echo $_POST['date'];
	//Estrutura Parte 12
			foreach($registro->infNFe->ide as $ide):
			echo $t12 . substr($ide->dhEmi[0],5,2);
			endforeach;
	//Estrutura Parte 13
			foreach($registro->infNFe->ide as $ide):
			echo $t13 . substr($ide->dhEmi[0],0,4);
			endforeach;
	//Estrutura Parte 14
			$registro->infNFe[0];
			echo $t14 . substr ($registro->infNFe[0]['Id'],-44);
	//Estrutura Parte 14
			echo $t15;
			echo $encerra;

			echo '<hr>';
	
			//Dados do XML Referente NF
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
			echo '<strong>CPF: </strong>' . $dest->CPF . '<br>';
			echo '<strong>Nome Cliente: </strong>' . $dest->xNome . '<br>';
			echo '<strong>Email: </strong>' . $dest->email . '<br>';
			echo '<hr>';
			endforeach;
			
			//Dados Produtos
			
			foreach($registro->infNFe->det->prod as $prod):
			echo '<strong>Codigo Produto: </strong>' . $prod->cProd . '<br>';
			echo '<strong>Nome Produto: </strong>' . $prod->xProd . '<br>';
			echo '<strong>Valor Produto: </strong>' . $prod->vProd . '<br>';
			echo '<hr>';
			endforeach;
			
			//Dados Total
			
			foreach($registro->infNFe->total->ICMSTot as $ICMSTot):
			echo '<strong>Base Icms: </strong>' . $ICMSTot->vBC . '<br>';
			echo '<strong>Valor Icms: </strong>' . $ICMSTot->vICMS . '<br>';
			echo '<strong>Total: </strong>' . $ICMSTot->vNF;
			echo '<hr>';
			endforeach;
		

endforeach;

?>
<br>
<td><a href="upload.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
</body>
</head>
</html>