<?php
$ITEM ="item";
$QUANTITY ="quantity";
$AMOUNT = "amount";

$data =[
['ITEM', 'QUANTITY', 'AMOUNT'],
[$ITEM, $QUANTITY, $AMOUNT],
];

$file_name="recods.csv";

//open the file for writting
$f=fopen($file_name,'w');
if($f===false){
	die("error opening ".$file_name);
}
//writting each row at a time
foreach($data as $row){
	fputcsv($f,$row);
}

?>