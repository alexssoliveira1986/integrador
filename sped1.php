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

		<form action="sped2.php" target="iframe_b" id="reg"  <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
		enctype="multipart/form-data" > <center> <i class='fas fa-calculator'></i> <strong> Sped Fiscal</center>
		 <select style="width:50%;font-size: 10px" maxlength="500" name="reg" form="reg">
		  <option value="TODOS">-TODOS-</option>
		  <option value="0000">0000-Abertura do Arquivo Digital e Identificação da entidade</option>
		  <option value="0001">0001-Abertura do Bloco 0</option>
		  <option value="0005">0005-Dados Complementares da Entidade</option>
		  <option value="0015">0015-Dados do Contribuinte Substituto</option>
		  <option value="0100">0100-Dados do Contabilista</option>
		  <option value="0150">0150-Tabela de Cadastro do Participante</option> 
		  <option value="0175">0175-Alteração da Tabela de Cadastro de Participante</option>
		  <option value="0190">0190-Identificação das Unidades de Medida</option> 
		  <option value="0200">0200-Tabela de Identificação do Item (Produtos e Serviços)</option>
		  <option value="0205">0205-Alteração do Item</option>
		  <option value="0206">0206-Código de produto conforme Tabela ANP (Combustíveis)</option>
		  <option value="0210">0210-Consumo Específico Padronizado</option>
		  <option value="0220">0220-Fatores de Conversão de Unidades</option>
		  <option value="0300">0300-Cadastro de bens ou componentes do Ativo Imobilizado</option>
		  <option value="0305">0305-Informação sobre a Utilização do Bem</option>
		  <option value="0400">0400-Tabela de Natureza da Operação/ Prestação</option>
		  <option value="0450">0450-Tabela de Informação Complementar do documento fiscal</option>		  
		  <option value="0460">0460-Tabela de Observações do Lançamento Fiscal</option>		  
		  <option value="0500">0500-Plano de contas contábeis</option>		  
		  <option value="0600">0600-Centro de custos</option>		  
		  <option value="0990">0990-Encerramento do Bloco 0</option> 
		  <option value="B001">B001-Abertura do Bloco B</option> 
		  <option value="B020">B020-Nota Fiscal (código 01), Nota Fiscal de Serviços (código 03), Nota Fiscal de Serviços Avulsa (código 3B), Nota Fiscal de Produtor (código 04), Conhecimento de Transporte Rodoviário de Cargas (código 08), NF-e (código 55) e NFC-e (código 65)</option> 
		  <option value="B025">B025-Detalhamento por combinação de alíquota e item da lista de serviços da Lei Complementar nº 116/2003</option> 
		  <option value="B030">B030-Nota Fiscal de Serviços Simplificada (código 3A)</option> 
		  <option value="B035">B035-Detalhamento por combinação de alíquota e item da lista de serviços da Lei Complementar nº 116/2003</option> 
		  <option value="B350">B350-Serviços prestados por instituições financeiras</option> 
		  <option value="B420">B420-Totalização dos valores de serviços prestados por combinação de alíquota e item da lista de serviços da Lei Complementar nº 116/2003</option> 
		  <option value="B440">B440-Totalização dos valores retidos</option> 
		  <option value="B460">B460-Deduções do ISS</option> 
		  <option value="B470">B470-Apuração do ISS</option> 
		  <option value="B500">B500-Apuração do ISS sociedade uniprofissional</option> 
		  <option value="B510">B510-Uniprofissional – empregados e sócios</option> 
		  <option value="B990">B990-Encerramento do Bloco B</option> 
		  <option value="C001">C001-Abertura do Bloco C</option> 
		  <option value="C100">C100-Documento - Nota Fiscal (código 01), Nota Fiscal Avulsa (código 1B), Nota Fiscal de Produtor (código 04), Nota Fiscal Eletrônica (código 55) e Nota Fiscal Eletrônica para Consumidor Final (código 65)</option> 
		  <option value="C101">C101-Informação complementar dos documentos fiscais quando das operações interestaduais destinadas a consumidor final não contribuinte EC 87/15 (código 55)</option> 
		  <option value="C105">C105-Operações com ICMS ST recolhido para UF diversa do destinatário do documento fiscal (Código 55)</option> 
		  <option value="C110">C110-Complemento de Documento - Informação Complementar da Nota Fiscal (código 01, 1B, 55)</option> 
		  <option value="C111">C111-Complemento de Documento - Processo referenciado</option> 
		  <option value="C112">C112-Complemento de Documento - Documento de Arrecadação Referenciado</option> 
		  <option value="C113">C113-Complemento de Documento - Documento Fiscal Referenciado</option> 
		  <option value="C114">C114-Complemento de Documento - Cupom Fiscal Referenciado</option> 
		  <option value="C115">C115-Local de coleta e/ou entrega (CÓDIGOS 01, 1B e 04)</option> 
		  <option value="C116">C116-Cupom Fiscal Eletrônico - CF-e referenciado</option> 
		  <option value="C120">C120-Complemento de Documento - Operações de Importação (código 01 e 55)</option> 
		  <option value="C130">C130-Complemento de Documento - ISSQN, IRRF e Previdência Social</option> 
		  <option value="C140">C140-Complemento de Documento - Fatura (código 01)</option> 
		  <option value="C141">C141-Complemento de Documento - Vencimento da Fatura (código 01)</option>
		  <option value="C160">C160-Complemento de Documento - Volumes Transportados (código 01 e 04) Exceto Combustíveis</option> 		  
		  <option value="C165">C165-Complemento de Documento - Operações com combustíveis (código 01)</option> 		  
		  <option value="C170">C170-Complemento de Documento - Itens do Documento (código 01, 1B, 04 e 55)</option> 
		  <option value="C171">C171-Complemento de Item - Armazenamento de Combustíveis (código 01,55)</option>
		  <option value="C172">C172-Complemento de Item - Operações com ISSQN (código 01)</option>
		  <option value="C173">C173-Complemento de Item - Operações com Medicamentos (código 01,55)</option>
		  <option value="C174">C174-Complemento de Item - Operações com Armas de Fogo (código 01)</option>
		  <option value="C175">C175-Complemento de Item - Operações com Veículos Novos (código 01,55)</option>
		  <option value="C176">C176-Complemento de Item -Ressarcimento de ICMS em operações com Substituição Tributária (código 01,55)</option>
		  <option value="C177">C177-Complemento de Item – Outras informações (Cód. 01, 55) – (Válido a partir de 01/01/2019)</option>
		  <option value="C178">C178-Complemento de Item - Operações com Produtos Sujeitos a Tributação de IPI por Unidade ou Quantidade de produto</option>
		  <option value="C179">C179-Complemento de Item - Informações Complementares ST (código 01)</option>			  
		  <option value="C190">C190-Registro Analítico do Documento (código 01, 1B, 04, 55 e 65)</option> 
		  <option value="C191">C191-Informações do Fundo de Combate à Pobreza – FCP – na NF-e (Código 55)</option> 
		  <option value="C195">C195-Complemento do Registro Analítico - Observações do Lançamento Fiscal (código 01, 1B, 04 e 55)</option>
		  <option value="C197">C197-Outras Obrigações Tributárias, Ajustes e Informações provenientes de Documento Fiscal</option>
		  <option value="C300">C300-Documento - Resumo Diário das Notas Fiscais de Venda a Consumidor (código 02)</option>
		  <option value="C310">C310-Documentos Cancelados de Nota Fiscal de Venda a Consumidor (código 02)</option>
		  <option value="C320">C320-Registro Analítico das Notas Fiscais de Venda a Consumidor (código 02)</option>
		  <option value="C321">C321-Itens dos Resumos Diários dos Documentos (código 02)</option>
		  <option value="C350">C350-Nota Fiscal de venda a consumidor (código 02)</option>
		  <option value="C370">C370-Itens do documento (código 02)</option>
		  <option value="C390">C390-Registro Analítico das Notas Fiscais de Venda a Consumidor (código 02)</option>
		  <option value="C400">C400-Equipamento ECF (código 02, 2D e 60)</option>
		  <option value="C405">C405-Redução Z (código 02, 2D e 60)</option>
		  <option value="C410">C410-PIS e COFINS Totalizados no Dia (código 02 e 2D)</option>
		  <option value="C420">C420-Registro dos Totalizadores Parciais da Redução Z (código 02, 2D e 60)</option>
		  <option value="C425">C425-Resumo de itens do movimento diário (código 02 e 2D)</option>
		  <option value="C460">C460-Documento Fiscal Emitido por ECF (código 02, 2D e 60)</option>
		  <option value="C465">C465-Complemento do Cupom Fiscal Eletrônico Emitido por ECF - CF-e-ECF (código 60)</option>
		  <option value="C470">C470-Itens do Documento Fiscal Emitido por ECF (código 02 e 2D)</option>
		  <option value="C490">C490-Registro Analítico do movimento diário (código 02, 2D e 60)</option>
		  <option value="C495">C495-Resumo Mensal de Itens do ECF por Estabelecimento (código 02 e 2D e 2E)</option>
		  <option value="C500">C500-Nota Fiscal/Conta de Energia Elétrica (código 06), Nota Fiscal/Conta de fornecimento d'água canalizada (código 29) e Nota Fiscal/Consumo Fornecimento de Gás (Código 28)</option>
		  <option value="C510">C510-Itens do Documento - Nota Fiscal/Conta de Energia Elétrica (código 06), Nota Fiscal/Conta de fornecimento d'água canalizada (código 29) e Nota Fiscal/Conta Fornecimento de Gás (Código 28)</option>
		  <option value="C590">C590-Registro Analítico do Documento - Nota Fiscal/Conta de Energia Elétrica (código 06), Nota Fiscal/Conta de fornecimento d'água canalizada (código 29) e Nota Fiscal/Conta Fornecimento de Gás (Código 28)</option>
		  <option value="C600">C600-Consolidação Diária de Notas Fiscais/Contas de Energia Elétrica (Código 06), Nota Fiscal/Conta de Fornecimento d´água (código 29) e Nota Fiscal/Conta de Fornecimento de Gás (Código 28) - (Empresas não obrigadas ao Convênio ICMS 115/03)</option>
		  <option value="C601">C601-Documentos cancelados - Consolidação diária de notas fiscais/conta de energia elétrica (Código 06), nota fiscal/conta de fornecimento de água (código 29) e nota fiscal/conta de fornecimento de gás (código 28)</option>
		  <option value="C610">C610-Itens do Documento Consolidado - Notas Fiscais/Contas de Energia Elétrica (Código 06), Nota Fiscal/Conta de Fornecimento d´água (código 29) e Nota Fiscal/Conta de Fornecimento de Gás (Código 28) - (Empresas não obrigadas ao Convênio ICMS 115/03)	</option>
		  <option value="C690">C690-Registro Analítico dos Documentos - Notas Fiscais/Contas de Energia Elétrica (Código 06), Nota Fiscal/Conta de Fornecimento d´água (código 29) e Nota Fiscal/Conta de Fornecimento de Gás (Código 28)</option>
		  <option value="C700">C700-Consolidação dos Documentos Nota Fiscal/Conta Energia Elétrica (código 06) emitidas em via única - (Empresas obrigadas à entrega do arquivo previsto no Convênio ICMS 115/03) e Nota Fiscal/Conta de Fornecimento de Gás Canalizado (Código 28)</option>
		  <option value="C790">C790-Registro Analítico dos Documentos - Nota Fiscal/Conta Energia Elétrica (código 06) emitidas em via única</option>
		  <option value="C791">C791-Registro de Informações de ICMS ST por UF</option>
		  <option value="C800">C800-Registro Cupom Fiscal Eletrônico - CF-e (Código 59)</option>
		  <option value="C850">C850-Registro Analítico do CF-e (Código 59)</option>
		  <option value="C860">C860-Identificação do equipamento SAT-CF-e (Código 59)</option>
		  <option value="C890">C890-Resumo diário de CF-e (Código 59) por equipamento SAT-CF-e</option>
		  <option value="C990">C990-Encerramento do Bloco C</option>
		  <option value="D001">D001-Abertura do Bloco D</option> 
		  <option value="D100">D100-Nota Fiscal de Serviço de Transporte (código 07), Conhecimentos de Transporte Rodoviário De Cargas (código 08), Conhecimentos de Transporte de Cargas Avulso (código 8b)</option> 
		  <option value="D101">D101-Informação complementar dos documentos fiscais quando das prestações interestaduais destinadas a consumidor final não contribuinte EC 87/15 (código 57 e 67)</option> 
		  <option value="D110">D110-Itens do documento - Nota Fiscal de Serviços de Transporte (código 07)</option> 
		  <option value="D120">D120-Complemento da Nota Fiscal de Serviços de Transporte (código 07)</option> 
		  <option value="D130">D130-Complemento do Conhecimento Rodoviário de Cargas (código 08) e Conhecimento de Transporte de Cargas Avulso (Código 8B)</option> 
		  <option value="D140">D140-Complemento do Conhecimento Aquaviário de Cargas (código 09)</option> 
		  <option value="D150">D150-Complemento do Conhecimento Aéreo de Cargas (código 10)</option> 
		  <option value="D160">D160-Carga Transportada (CÓDIGO 08, 8B, 09, 10, 11, 26 E 27)</option> 
		  <option value="D161">D161-Local de Coleta e Entrega (códigos 08, 8B, 09, 10, 11 e 26)</option> 
		  <option value="D162">D162-Local de Coleta e Entrega (códigos 08, 8B, 09, 10, 11 e 26)</option> 
		  <option value="D170">D170-Complemento do Conhecimento Multimodal de Cargas (código 26)</option> 
		  <option value="D180">D180-Modais (código 26)</option> 
		  <option value="D190">D190-Registro Analítico dos Documentos (CÓDIGO 07, 08, 8B, 09, 10, 11, 26, 27, 57 e 67)</option>
		  <option value="D195">D195-Observações do lançamento (CÓDIGO 07, 08, 8B, 09, 10, 11, 26, 27, 57 e 67)</option> 		  
		  <option value="D197">D197-Outras obrigações tributárias, ajustes e informações de valores provenientes do documento fiscal.</option> 
		  <option value="D300">D300-Registro Analítico dos bilhetes consolidados de Passagem Rodoviário (código 13), de Passagem Aquaviário (código 14), de Passagem e Nota de Bagagem (código 15) e de Passagem Ferroviário (código 16)</option> 
		  <option value="D301">D301-Documentos cancelados dos Bilhetes de Passagem Rodoviário (código 13), de Passagem Aquaviário (código 14), de Passagem e Nota de Bagagem (código 15) e de Passagem Ferroviário (código 16)</option> 
		  <option value="D310">D310-Complemento dos Bilhetes (código 13, código 14, código 15 e código 16)</option> 
		  <option value="D350">D350-Equipamento ECF (Códigos 2E, 13, 14, 15 e 16)</option> 
		  <option value="D355">D355-Redução Z (Códigos 2E, 13, 14, 15 e 16)</option> 
		  <option value="D360">D360-PIS E COFINS totalizados no dia (Códigos 2E, 13, 14, 15 e 16)</option> 
		  <option value="D365">D365-Registro dos Totalizadores Parciais da Redução Z (Códigos 2E, 13, 14, 15 e 16)</option> 
		  <option value="D370">D370-Complemento dos documentos informados (Códigos 13, 14, 15, 16 E 2E)</option> 
		  <option value="D390">D390-Registro analítico do movimento diário (Códigos 13, 14, 15, 16 E 2E)</option> 
		  <option value="D400">D400-Resumo do Movimento Diário (código 18)</option> 
		  <option value="D410">D410-Documentos Informados (Códigos 13, 14, 15 e 16)</option> 
		  <option value="D411">D411-Documentos Cancelados dos Documentos Informados (Códigos 13, 14, 15 e 16)</option> 
		  <option value="D420">D420-Complemento dos Documentos Informados (Códigos 13, 14, 15 e 16)</option> 
		  <option value="D500">D500-Nota Fiscal de Serviço de Comunicação (código 21) e Serviço de Telecomunicação (código 22)</option> 
		  <option value="D510">D510-Itens do Documento - Nota Fiscal de Serviço de Comunicação (código 21) e Serviço de Telecomunicação (código 22)</option> 
		  <option value="D530">D530-Terminal Faturado</option> 
		  <option value="D590">D590-Registro Analítico do Documento (códigos 21 e 22)</option> 
		  <option value="D600">D600-Consolidação da Prestação de Serviços - Notas de Serviço de Comunicação (código 21) e de Serviço de Telecomunicação (código 22)</option> 
		  <option value="D610">D610-Itens do Documento Consolidado (códigos 21 e 22)</option> 
		  <option value="D690">D690-Registro Analítico dos Documentos (códigos 21 e 22)</option> 
		  <option value="D695">D695-Consolidação da Prestação de Serviços - Notas de Serviço de Comunicação (código 21) e de Serviço de Telecomunicação (código 22)</option> 
		  <option value="D696">D696-Registro Analítico dos Documentos (códigos 21 e 22)</option> 
		  <option value="D697">D697-Registro de informações de outras UFs, relativamente aos serviços “não-medidos” de televisão por assinatura via satélite</option> 
		  <option value="D990">D990-Encerramento do Bloco D</option>  
		  <option value="E001">E001-Abertura do Bloco E</option> 
		  <option value="E100">E100-Período de Apuração do ICMS</option> 
		  <option value="E110">E110-Apuração do ICMS - Operações Próprias</option> 
		  <option value="E111">E111-Ajuste/Benefício/Incentivo da Apuração do ICMS</option> 
		  <option value="E112">E112-Informações Adicionais dos Ajustes da Apuração do ICMS</option>
		  <option value="E113">E113-Informações Adicionais dos Ajustes da Apuração do ICMS - Identificação dos documentos fiscais</option>
		  <option value="E115">E115-Informações Adicionais da Apuração do ICMS - Valores Declaratórios</option>
		  <option value="E116">E116-Obrigações do ICMS Recolhido ou a Recolher - Obrigações Próprias</option> 
		  <option value="E200">E200-Período de Apuração do ICMS - Substituição Tributária</option> 
		  <option value="E210">E210-Apuração do ICMS - Substituição Tributária</option> 
		  <option value="E220">E220-Ajuste/Benefício/Incentivo da Apuração do ICMS - Substituição Tributária</option>
		  <option value="E230">E230-Informações Adicionais dos Ajustes da Apuração do ICMS Substituição Tributária</option>
		  <option value="E240">E240-Informações Adicionais dos Ajustes da Apuração do ICMS Substituição Tributária - Identificação dos documentos fiscais</option>
		  <option value="E250">E250-Obrigações do ICMS a Recolher - Substituição Tributária</option> 
		  <option value="E300">E300-Período de Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15</option> 
		  <option value="E310">E310-Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15</option> 
		  <option value="E311">E311-Ajuste/Benefício/Incentivo da Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15</option> 
		  <option value="E312">E312-Informações Adicionais dos Ajustes da Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15</option> 
		  <option value="E313">E313-Informações Adicionais da Apuração do ICMS Diferencial de Alíquota – UF Origem/Destino EC 87/15 Identificação dos Documentos Fiscais</option> 
		  <option value="E316">E316-Obrigações do ICMS recolhido ou a recolher – Diferencial de Alíquota – UF Origem/Destino EC 87/15</option> 
		  <option value="E500">E500-Período de Apuração do IPI</option> 
		  <option value="E510">E510-Consolidação dos Valores de IPI</option> 
		  <option value="E520">E520-Apuração do IPI</option> 
		  <option value="E530">E530-Ajustes da Apuração do IPI</option> 
		  <option value="E531">E531-Informações Adicionais dos Ajustes da Apuração do IPI – Identificação dos Documentos Fiscais (01 e 55)</option>	
		  <option value="E990">E990-Encerramento do Bloco E</option>	  
		  <option value="G001">G001-Abertura do Bloco G</option> 
		  <option value="G110">G110-ICMS – Ativo Permanente – CIAP</option> 
		  <option value="G125">G125-Movimentação de Bem do Ativo Imobilizado</option> 
		  <option value="G126">G126-Outros créditos CIAP</option> 
		  <option value="G130">G130-Identificação do documento fiscal</option> 
		  <option value="G140">G140-Identificação do item do documento fiscal</option> 
		  <option value="G990">G990-Encerramento do Bloco G</option>	  
		  <option value="H001">H001-Abertura do Bloco H</option> 
		  <option value="H005">H005-Totais do Inventário</option> 
		  <option value="H010">H010-Inventário</option> 
		  <option value="H020">H020-Informação complementar do Inventário</option> 
		  <option value="H990">H990-Encerramento do Bloco H</option>	  
		  <option value="K001">K001-Abertura do Bloco K</option> 
		  <option value="K100">K100-Período de Apuração do ICMS/IPI</option>
		  <option value="K200">K200-Estoque Escriturado</option>
		  <option value="K210">K210-Desmontagem de mercadorias – Item de Origem</option>
		  <option value="K215">K215-Desmontagem de mercadorias – Item de Destino</option>
		  <option value="K220">K220-Outras Movimentações Internas entre Mercadorias</option>
		  <option value="K230">K230-Itens Produzidos</option>
		  <option value="K235">K235-Insumos Consumidos</option>
		  <option value="K250">K250-Industrialização Efetuada por Terceiros – Itens Produzidos</option>
		  <option value="K255">K255-Industrialização em Terceiros – Insumos Consumidos</option>
		  <option value="K260">K260-Reprocessamento/Reparo de Produto/Insumo</option>
		  <option value="K265">K265-Reprocessamento/Reparo – Mercadorias Consumidas e/ou Retornadas</option>
		  <option value="K270">K270-Correção de Apontamento dos Registros K210, K220, K230, K250 e K260</option>
		  <option value="K275">K275-Correção de Apontamento e Retorno de Insumos dos Registros K215, K220, K235, K255 e K265</option>
		  <option value="K280">K280-Correção de Apontamento – Estoque Escriturado</option>
		  <option value="K290">K290-Produção Conjunta – Ordem de Produção</option>
		  <option value="K291">K291-Produção Conjunta – Itens Produzidos</option>
		  <option value="K292">K292-Produção Conjunta – Insumos Consumidos</option>
		  <option value="K300">K300-Produção Conjunta – Industrialização Efetuada por Terceiros</option>
		  <option value="K301">K301-Produção Conjunta – Industrialização Efetuada por Terceiros – Itens Produzidos</option>
		  <option value="K302">K302-Produção Conjunta – Industrialização Efetuada por Terceiros – Insumos Consumidos</option>		  
		  <option value="K990">K990-Encerramento do Bloco K</option> 
		  <option value="1001">1001-Abertura do Bloco 1</option> 
		  <option value="1010">1010-Obrigatoriedade de registros do Bloco 1</option> 
		  <option value="1100">1100-Registro de Informações sobre Exportação</option> 
		  <option value="1105">1105-Documentos Fiscais de Exportação</option> 
		  <option value="1110">1110-Operações de Exportação Indireta - Mercadorias de terceiros</option> 
		  <option value="1200">1200-Controle de Créditos Fiscais - ICMS</option> 
		  <option value="1210">1210-Utilização de Créditos Fiscais - ICMS</option> 
		  <option value="1300">1300-Movimentação diária de combustíveis</option> 
		  <option value="1310">1310-Movimentação diária de combustíveis por tanque</option> 
		  <option value="1320">1320-Volume de vendas</option> 
		  <option value="1350">1350-Bombas</option> 
		  <option value="1360">1360-Lacres das bombas</option> 
		  <option value="1370">1370-Bicos da bomba</option> 
		  <option value="1390">1390-Controle de produção de Usina</option> 
		  <option value="1391">1391-Produção diária da usina</option> 
		  <option value="1400">1400-Informação sobre Valor Agregado</option> 
		  <option value="1500">1500-Nota fiscal/Conta de energia elétrica (código 06) - Operações Interestaduais</option> 
		  <option value="1510">1510-Itens do documento Nota fiscal/Conta de energia elétrica (código 06)</option> 
		  <option value="1600">1600-Total das operações com cartão de crédito e/ou débito</option>
		  <option value="1700">1700-Documentos fiscais utilizados</option>
		  <option value="1710">1710-Documentos fiscais cancelados/inutilizados</option> 
		  <option value="1800">1800-DCTA - Demonstrativo de crédito do ICMS sobre transporte aéreo</option> 
		  <option value="1900">1900-Indicador de sub-apuração do ICMS</option> 
		  <option value="1910">1910-Período da sub-apuração do ICMS</option> 
		  <option value="1920">1920-Sub-apuração do ICMS</option> 
		  <option value="1921">1921-Ajuste/benefício/incentivo da sub-apuração do ICMS</option> 
		  <option value="1922">1922-Informações adicionais dos ajustes da sub-apuração do ICMS</option> 
		  <option value="1923">1923-Informações adicionais dos ajustes da sub-apuração do ICMS - Identificação dos documentos fiscais</option> 
		  <option value="1925">1925-Informações adicionais da sub-apuração do ICMS - Valores declaratórios</option> 
		  <option value="1926">1926-Obrigações do ICMS a recolher - Operações referentes à sub-apuração do ICMS</option> 
		  <option value="1960">1960-GIAF 1 - Guia de informação e apuração de incentivos fiscais e financeiros: indústria (crédito presumido)</option> 
		  <option value="1970">1970-GIAF 3 - Guia de informação e apuração de incentivos fiscais e financeiros: importação (diferimento na entrada e crédito presumido na saída subsequente)</option> 
		  <option value="1975">1975-GIAF 3 - Guia de informação e apuração de incentivos fiscais e financeiros: importação (saídas internas por faixa de alíquota)</option> 
		  <option value="1980">1980-GIAF 4 - Guia de informação e apuração de incentivos fiscais e financeiros: central de distribuição (entradas/saídas)</option>	  
		  <option value="1990">1990-Encerramento do Bloco 1</option>	  
		  <option value="9001">9001-Abertura do Bloco 9</option> 
		  <option value="9900">9900-Registros do Arquivo</option> 
		  <option value="9990">9990-Encerramento do Bloco 9</option> 
		  <option value="9999">9999-Encerramento do Arquivo Digital</option>	
		</select>
	<input type="file" style="width:40%;font-size: 10px"  name="arquivo" required > <input type="submit" class="button" name="enviar" value="Consultar"> 
		<?php //echo "<meta HTTP-EQUIV='refresh' CONTENT='160;URL=bd-u1.php'>";?>
		</form>

 
	</body>
</html>