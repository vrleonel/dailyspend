<?php
$newSpend = $_POST;

$nameFile = date("mY");

$newSpend[txtValor] = str_replace(',', '.', $_POST[txtValor]);
print_r($nameFile);

print_r($newSpend);
$delimeter = "|";

$fp = fopen("csv/{$nameFile}.csv", 'a+');
echo $fp;

#foreach ($newSpend as $value) {
    fputcsv($fp, $newSpend, $delimeter);
#}

fclose($fp);
?>

<a href="index.php">Voltar</a>
