<!DOCTYPE html>
<html>
<head>
<body>
<?php 
//Fica armazenado arquivos XML
	$diretorio = "xmls/"; 
    $link = $diretorio . basename($_FILES["arquivo"]["name"]);
    $xml = simplexml_load_file($link);
	//XML Selecionado	
	foreach($xml->NFe as $registro):
			//Dados do XML Referente NF
			foreach($registro->infNFe->ide as $ide):
			echo '<strong>Dados do Xml Referente NF - </strong>';
			echo '' . $ide->nNF . '<br>';
			echo '<hr>';
			echo $_POST['date'];
			endforeach;
			//Chave de Acesso XML
			$registro->infNFe[0];
			echo '<strong>Chave de Acesso: </strong>';
			echo '' . substr ($registro->infNFe[0]['Id'],-44) . '<br>';
			echo '<hr>';
			//Dados NF						
			foreach($registro->infNFe->ide as $ide):
			echo '<strong>NF: </strong>' . $ide->nNF . '<br>';
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
			echo '<strong>CNPJ: </strong>' . $emit->CNPJ . '<br>';
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
			echo '<strong>Total: </strong>' . $ICMSTot->vNF . '<br>';
			echo '<hr>';
			endforeach;
 	echo '<hr>';

endforeach;

?>
<br>
<td><a href="upload.php" target="_self"> <button type="button" onclick="submit()">Voltar</button></a></td>
</body>
</head>
</html>