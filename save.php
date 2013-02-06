<?php
$newSpend = $_POST;

print_r($newSpend);
$delimeter = "|";

$fp = fopen('file.csv', 'w+');
echo $fp;

foreach ($newSpend as $value) {
    fputcsv($fp, $value, $delimeter);
}

fclose($fp);
?>
