<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://signage.nopadol.com/content");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);

if($response){
	echo "ok";
}else{
	echo "false";
}

?>