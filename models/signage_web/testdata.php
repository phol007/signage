<?php
$date = date("Y-m-d");
$linkOld = "data.txt";
	$lopen = fopen($linkOld, 'r');     
    $linkO = fgets($lopen, 4096);    
    fclose($lopen); 
$linkO;
echo json_encode($arr);
?>