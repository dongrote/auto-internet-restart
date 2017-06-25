<?php

function trim_and_dequote($x) {
  $x = trim($x);
  return substr($x, 1, strlen($x)-2);
}

$output = trim(shell_exec("wemo -v status"));
$csvData = substr($output, 1, strlen($output)-2);
$fields = array_map("trim_and_dequote", explode(",",$csvData));
$response = $fields[3];
header('Content-Type: text/plain');
header('Content-Length: ' . strlen($response));
echo $response;
?>
