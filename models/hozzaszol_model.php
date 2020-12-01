<?php

class Hozzaszol_Model
{
	public function get_data($vars)
	{
		$retData['eredmeny'] = "";
		
		try {
			$connection = Database::getConnection();		
			$statement = $connection->prepare("insert into forum(userid, bejegyzes) values(?,?)");    
            if ($statement->execute(array($_SESSION['userid'],$vars['bejegyzes']))=== TRUE) {    
				$retData['eredmeny'] = "OK";         
                $retData['uzenet'] = "New message created successfully";           
				Menu::setMenu();
              } else {
                $retData['eredmeny'] = "ERROR";
                $retData['uzenet'] = $sql;
			  }      
			  print_r($retData);
		}
		catch (PDOException $e) {
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
	}
}

?>