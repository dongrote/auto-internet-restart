<?php

$output = trim(shell_exec("grep failed /home/pi/internet-check.log"));
header('Content-Type: text/plain');
header('Content-Length: ' . strlen($output));
echo $output
?>
