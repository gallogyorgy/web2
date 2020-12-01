<?php

class Hozzaszolasok_Model
{
	public function get_data($vars)
	{
		$retData['eredmeny'] = "";
		try {
         //   $retData[0]['eredmény'] = "OK"; 
			$connection = Database::getConnection();                  
            $sql = "select a.*,b.bejelentkezes as username from forum a, felhasznalok b where (a.userid = b.id) order by datum desc";
			$stmt = $connection->query($sql);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);           
            foreach($rows as $row) {               
                $retData[] = [
                    'user' => $row['username'],
                    'datum' => $row['datum'],
                    'bejegyzes' => $row['bejegyzes']          
                ];                
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