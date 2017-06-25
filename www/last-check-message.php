<?php
  $filehandle = fopen("/home/pi/internet-check.log","r");
  while (($line = fgets($filehandle)) !== False) {
    $lastline = trim($line);
  }
  fclose($filehandle);
  header('Content-Type: text/plain');
  header('Content-Length: ' . strlen($lastline));
  echo $lastline;
?>
