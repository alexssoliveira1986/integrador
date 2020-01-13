// Atribui o conteúdo XML para variável
$string = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<clientes xmlns:p="http://example.org/ns" xmlns:t="http://example.org/test">
    <p:cliente id="1">João</p:cliente>
    <p:cliente id="2">Pedro</p:cliente>
</clientes>
XML;
 
// Instância o objeto SimpleXMLElement passando como parâmetro o XML
$xml = new SimpleXMLElement($string);
 
// Retorna os Namespaces existentes no XML
$ns = $xml->getNamespaces(true);
 
// Retorna todos os elementos filhos com Namespace 'p'
$child = $xml->children($ns['p']);
 
// Percorre os elementos filhos
foreach ($child->cliente as $elemento):
    echo $elemento . '<br>';
endforeach;