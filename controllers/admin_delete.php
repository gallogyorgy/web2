<?php

class Admin_Delete_Controller
{
	public $baseName = 'admin_delete';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{			
		$delModel = new Del_User_Model;  //az oszt�lyhoz tartoz� modell
		//a modellben bel�pteti a felhaszn�l�t
		$retData = $delModel->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "users";
		
		//bet�ltj�k a n�zetet		
		$view = new View_Loader($this->baseName.'_main');
		//�tadjuk a lek�rdezett adatokat a n�zetnek	
		foreach($retData as $name => $value)
			$view->assign($name, $value);
/*
	$temp = array();
	foreach($retData as $row) {
		$temp[] = $row; 
	}	
	echo json_encode(array('temp' => $temp));
*/	

	}			
}
?>