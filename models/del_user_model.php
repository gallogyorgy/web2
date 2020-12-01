<?php
class Del_User_Model
{
	public function get_data($vars)
	{		
		$retData['eredmeny'] = "";
		try {
			$connection = Database::getConnection();	
			$sql = "select * from felhasznalok order by id";
			$stmt = $connection->query($sql);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);           
            foreach($rows as $row) {               
                $retData[] = [
                    'csaladi' => $row['csaladi_nev'],
                    'uto' => $row['utonev'],
                    'login' => $row['bejelentkezes']          
                ];                
            }     			
		if($vars['action'] == "del"){

            $req = $connection->prepare("DELETE FROM felhasznalok WHERE login = ?");
            $req->bindParam(1,$vars['action']);
            
            if ($req->execute() === TRUE){			
					$retData['eredmeny'] = "OK";
					$retData['uzenet'] = "Felhasználó törölve!";	
					$sql = "select * from felhasznalok order by id";
			$stmt = $connection->query($sql);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);           
            foreach($rows as $row) {               
                $retData[] = [
                    'csaladi' => $row['csaladi_nev'],
                    'uto' => $row['utonev'],
                    'login' => $row['bejelentkezes']          
                ];                
            }    
            }else{
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "fff";
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