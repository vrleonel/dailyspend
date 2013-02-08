<? //functions

function readCSV($m, $y){

	$row = 1;
  if (($handle = fopen("csv/${m}${y}.csv", "r")) !== FALSE) {

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      $num = count($data);
      $row++;
      
      $arrGastos[] = explode("|",$data[0]);
      

      // for ($c=0; $c < $num; $c++) {
      //   echo $data[$c] . "<br />\n";
      // }


    
    }
    fclose($handle);
  }
  return $arrGastos;

}

function pre($data){
  echo "<pre>";
  print_r($data);
  echo "</pre>";
}

?>