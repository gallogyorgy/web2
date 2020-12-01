<?php

class Regisztral_Controller
{
	public $baseName = 'regisztracio';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		
		$regisztralModel = new Regisztracio_Model;  //az osztályhoz tartozó modell
		$retData = $regisztralModel->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "belepes";
		//betöltjük a nézetet
		$view = new View_Loader($this->baseName.'_main');
		//átadjuk a lekérdezett adatokat a nézetnek
		foreach($retData as $name => $value)
			$view->assign($name, $value);

	//	$view = new View_Loader($this->baseName."_main");
	}
}

?>