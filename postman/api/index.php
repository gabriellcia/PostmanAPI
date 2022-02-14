<?php
$data = file_get_contents('php://input');
$data_decode = json_decode($data, true);
echo $data_decode['dataku']['nim'];

if (substr($data_decode['dataku']['nim'], 2,2)=='N4') echo ' e-commerce';
//var_dump($data_decode);
$myfile = fopen("data.txt", "a") or die("Unable to open file!");
fwrite($myfile, $data . "\n");
fclose($myfile);
?>