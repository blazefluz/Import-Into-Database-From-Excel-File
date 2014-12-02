<?php 
   if (isset($_FILES['file'])) {
   
    $name    = $_FILES['file']['name'];
	$tmp_loc = $_FILES['file']['tmp_name'];
	
	 $extension = pathinfo($name, PATHINFO_EXTENSION);
     $new =  'file'. '.' .$extension;
     $pathAndName = "uploaded_files/" . $new;
     $moveResult = move_uploaded_file($tmp_loc, $pathAndName);
	
    if ($extension !='xlsx') {
   header ('Location: index.php?id=1');
  }

	require_once ('db_config.php');
	$lot_details_id = 0 ;
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
	$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

    set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
	include 'PHPExcel/IOFactory.php';

	// This is the file path to be uploaded.
	$inputFileName = $pathAndName;

	try {
		$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
	} catch(Exception $e) {
		die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
   }


   $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
   $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet


for($i=3; $i<=3; $i++){

 $value1 = trim($allDataInSheet[$i]["A"]);
 $value2 = trim($allDataInSheet[$i]["B"]); 
 $value3 = trim($allDataInSheet[$i]["C"]);
 $value4 = trim($allDataInSheet[$i]["D"]);
 $value5 = trim($allDataInSheet[$i]["E"]);
 $value6 = trim($allDataInSheet[$i]["F"]);
 $value7 = trim($allDataInSheet[$i]["G"]);
 $value8 = trim($allDataInSheet[$i]["H"]);
 $value9 = trim($allDataInSheet[$i]["I"]);
 $value10 = trim($allDataInSheet[$i]["J"]);
 $value11 = trim($allDataInSheet[$i]["K"]);
 $value12 = trim($allDataInSheet[$i]["L"]);
 $value13 = date('Y-m-d H:i:s');
 $SQL = "INSERT INTO lot_summary VALUES( '','$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10','$value11','$value12','$value13')"; 
 $query = mysql_query ($SQL);
 $lot_summary_id = mysql_insert_id(); 
 
 }

 for($i=10; $i<=$arrayCount; $i++){
 $value0 = $lot_summary_id;
 $value1 = trim($allDataInSheet[$i]["A"]);
 $value2 = trim($allDataInSheet[$i]["B"]); 
 $value3 = trim($allDataInSheet[$i]["C"]);
 $value4 = trim($allDataInSheet[$i]["D"]);
 $value5 = trim($allDataInSheet[$i]["E"]);
 $value6 = trim($allDataInSheet[$i]["F"]);
 $value7 = trim($allDataInSheet[$i]["G"]);
 $value8 = trim($allDataInSheet[$i]["H"]);
 $value9 = trim($allDataInSheet[$i]["I"]);
 $value10 = trim($allDataInSheet[$i]["J"]);
 $value11 = trim($allDataInSheet[$i]["K"]);
 $value12 = trim($allDataInSheet[$i]["L"]);
 $value13 = trim($allDataInSheet[$i]["M"]);
 $value14 = trim($allDataInSheet[$i]["N"]);
 $value15 = trim($allDataInSheet[$i]["O"]);
 $value16 = trim($allDataInSheet[$i]["P"]);
 $value17 = date('Y-m-d H:i:s');
  $SQL = "INSERT INTO lot_details VALUES('', '$value0','$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10','$value11','$value12','$value13' ,'$value14','$value15','$value16','$value17')"; 
 $query = mysql_query ($SQL);
 $lot_details_id = mysql_insert_id(); 
 
  }
 
}
 if ( $lot_details_id == 0 ){
  
 
   header ('Location: index.php?id=2');
  }
  
 
  else {
 header ('Location: index.php?id=5');
 
 }
 
 

?>
