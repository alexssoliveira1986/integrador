<?php
// Start the session
session_start();
?>
<?php
//http://apilayer.net/api/check?access_key=5616618af04e0ce349f5a8430e0e6a13&email=alexssoliveira@gmail.com&smtp=1&format=1
$email = $_POST['email'];
//$email = "oliveira_alex@msn.com";
$smtp = '1';
$format = '1';
//$email = $_POST['email'];
$access_key = '5616618af04e0ce349f5a8430e0e6a13';
$service_url = "http://apilayer.net/api/check?access_key=" . $access_key.'&email='.$email.'&smtp='.$smtp.'&format='.$format;
$response = file_get_contents($service_url);
$json = json_decode($response);

  echo '<strong>'."EMAIL: " .'</strong>'. $json->email.'<br>';
  echo '<strong>'."DOMINIO: ".'</strong>'. $json->domain.'<br>';
  if ($json->format_valid == 'true'){
  echo '<strong>'."VALIDO: ".'</strong>'. 'SIM' .'<br>';}else echo '<strong>'."VALIDO: ".'</strong>'. 'NÃO' .'<br>'; 
  if ($json->mx_found == 'true'){
  echo '<strong>'."MX CHECADO: ".'</strong>'. 'SIM' .'<br>';}else echo'<strong>'."MX CHECADO: ".'</strong>'. 'NÃO' .'<br>'; 
  if ($json->smtp_check == 'true'){
  echo '<strong>'."SMTP CHECADO: ".'</strong>'. 'SIM' .'<br>';}else echo'<strong>'."SMTP CHECADO: ".'</strong>'. 'NÃO' .'<br>'; 
  

//echo $response;
//echo $service_url;

/*http://apilayer.net/api/check

    ? access_key = 5616618af04e0ce349f5a8430e0e6a13
    & email = alexssoliveira@gmail.com
    & smtp = 1
    & format = 1
	
	{
  "email":"alexssoliveira@gmail.com",
  "did_you_mean":"",
  "user":"alexssoliveira",
  "domain":"gmail.com",
  "format_valid":true,
  "mx_found":true,
  "smtp_check":true,
  "catch_all":null,
  "role":false,
  "disposable":false,
  "free":true,
  "score":0.8
}*/
?>