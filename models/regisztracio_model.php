<?php

class Regisztracio_Model
{
	public function get_data($vars)
	{
		$retData['eredmeny'] = "";
		try {
            $connection = Database::getConnection();
           
			$sql = "select id from felhasznalok where bejelentkezes='".$vars['felhasznalonev']."' and jelszo='".sha1($vars['jelszo'])."'";
			$stmt = $connection->query($sql);
			$felhasznalo = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if(count($felhasznalo) == 0) {
            if($vars['jelszo'] == $vars['jelszo2']){    
			//$sql = "insert into felhasznalok(csaladi_nev, utonev, bejelentkezes, jelszo, jogosultsag) values('".$vars['csaladnev']."','".$vars['utonev']."','".$vars['felhasznalonev']."','".sha1($vars['jelszo'])."','_1_')";
			$statement = $connection->prepare("insert into felhasznalok(csaladi_nev, utonev, bejelentkezes, jelszo, jogosultsag) values(?,?,?,?,'_1_')");    
            if ($statement->execute(array($vars['csaladnev'],$vars['utonev'],$vars['felhasznalonev'],sha1($vars['jelszo'])))=== TRUE) {   		
				$retData['eredmeny'] = "OK";         
				$retData['uzenet'] = "New message created successfully";   
				Menu::setMenu();
              } else {
                $retData['eredmeny'] = "ERROR";
                $retData['uzenet'] = $sql;
              }
            }
        }
		}
		catch (PDOException $e) {
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
	}
}
?>