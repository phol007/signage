<?php

$linkOld = "data.txt";
	$lopen = fopen($linkOld, 'r');     
    $linkO = fgets($lopen, 8192);    
    fclose($lopen); 

//echo $linkO;

$json = json_encode($linkO);
$out_w = json_decode($json);

$result = array();
$cnt=0;
foreach ($out_w as $row) {
  $result[$row['type']]['type'] = $row['type'];
  $result[$row['type']]['id'] = $row['id'];
  $result[$row['type']]['name'] = $row['name'];
 
}
  $result = array_values($result);

      $P = array();
      foreach ($result as $k => $v) {
      $P['code'][$k] = $v['code'];
      $P['thaiName'][$k] = $v['thaiName'];
      
    }
    array_multisort($P['id'],SORT_ASC,$result);
    $cnt=count($result);

    echo $cnt;
?>