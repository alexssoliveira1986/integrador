<?php 


//$conn = new PDO("oci:dbname=srcn1;charset=utf8", "sercon", "sercon");
$user = 'sercon';
$pass = 'sercon';

try {
  $conn = new PDO('oci:dbname=srcn1;charset=utf8', $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	/*$sql = ("SELECT DOCEST, DOCNUM, DOCSER, DOCDTR, DOCCHA FROM tb_pcadoc where docest <> 'SP' and docser='55' and docses='S' and docsts <> 'C' and docdtr between to_date('08-05-2019','dd-mm-yyyy') and to_date('09-05-2019','dd-mm-yyyy') order by docest, docdtr, docnum");
	foreach ($conn->query($sql) as $row) {
    print $row['DOCEST'] . "\t" ;
    print $row['DOCNUM'] . "\t";
    print $row['DOCSER'] . "\t" ;
	print $row['DOCDTR'] . "\t";
	print $row['DOCCHA'] . "<br>" ;
}*/
	} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
	/*$select = $conn->prepare("select DOCCHA from tb_pcadoc where docest <> 'SP' and docser='55' and docses='S' and docsts <> 'C' and docdtr between to_date('08-05-2019','dd-mm-yyyy') and to_date('09-05-2019','dd-mm-yyyy') order by docest, docdtr, docnum");
    $select->execute();
  
    while($result = $select->fetch()) {
        print_r($result) . '<br>' ;
    }
	


if ($conn=true) {
    echo('Ok');
} else echo 'Não';*/




?>