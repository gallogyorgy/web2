<h2>Felhasználók</h2>
<?php
$temp = array();
	foreach($viewData as $row) {
		$temp[] = $row; 
	}	
   echo json_encode(array('temp' => $temp));
?>