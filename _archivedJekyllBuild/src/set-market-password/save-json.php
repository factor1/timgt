<?php

$file = file_get_contents('../market-update-password.json');

$array = json_decode($file, true);

$array[0]['password']  = $_GET['password'];

$file = json_encode($array);

echo $file;

file_put_contents('../market-update-password.json', $file);

?>
