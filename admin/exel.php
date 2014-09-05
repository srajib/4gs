<?php 
/*
$conn = new PDO("mysql:host=localhost; dbname=www4gsho_4gs", 'www4gsho_root', 'genius4321');
$sql = "SELECT product_name, price, quantity, model FROM product ORDER BY id DESC";
$results = $conn->query($sql);
 
 $filename='test'.'.xls';
 header("Content-Disposition: attachment; filename=\"$filename\"");
 header("Content-Type: application/vnd.ms-excel"); 
 
$handle = fopen($filename, 'w+');
 
fputcsv($handle, array('Product Name', 'Price', 'Quantity', 'Model'));
 
foreach($results as $row)
{
    fputcsv($handle, array($row['product_name'], $row['price'], $row['quantity'], $row['model']));
}
 
fclose($handle);
*/
?>


<?php function cleanData(&$str) { 
	$str = preg_replace("/\t/", "\\t", $str); 
	$str = preg_replace("/\r?\n/", "\\n", $str); 
	if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
	} 
	// filename for download 
	$filename = "website_data_" . date('Ymd') . ".xls"; 
	header("Content-Disposition: attachment; filename=\"$filename\""); 
	header("Content-Type: application/vnd.ms-excel"); 
	$flag = false; 

       $conn = new PDO("mysql:host=localhost; dbname=www4gsho_4gs", 'www4gsho_root', 'genius4321');	
	// $conn = new PDO("mysql:host=localhost; dbname=genius", 'root', '');
	$sql = "SELECT product_name, price, quantity, model FROM product ORDER BY id DESC";
	$data = $conn->query($sql);
	
	foreach($data as $row) {
		if(!$flag) { 	// display field/column names as first row 
			echo implode("\t", array_keys($row)) . "\r\n"; 
			$flag = true; 
		} 
		array_walk($row, 'cleanData'); 
		echo implode("\t", array_values($row)) . "\r\n"; 
	} 
	exit; 
?>