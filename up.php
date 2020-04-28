<?php
//define('STDIN',fopen("php://stdin","r"));
//echo "Enter String ";
//$stdin = fopen('php://stdin', 'r');
// $name1=trim(fgets($stdin));
$input = "good MORNING";
// $input = rtrim(fgets(STDIN));
$name = strtolower($input) ^ strtoupper($input) ^ $input;
echo "Conversion is:\n" . $name;
?>