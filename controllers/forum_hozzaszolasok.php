<?php

class Forum_Hozzaszolasok_Controller
{
	public $baseName = 'hozzaszolasok';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		$hozzaszolasokModel = new Hozzaszolasok_Model;  //az oszt�lyhoz tartoz� modell
		//a modellben bel�pteti a felhaszn�l�t
        $retData = $hozzaszolasokModel->get_data($vars);      
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "hozzaszolasok";
		//bet�ltj�k a n�zetet
        $view = new View_Loader($this->baseName.'_main');
		//�tadjuk a lek�rdezett adatokat a n�zetnek
        foreach($retData as $name => $value)
            $view->assign($name, $value);          
    }    
}

?>