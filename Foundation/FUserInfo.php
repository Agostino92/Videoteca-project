<?php

/**
 * La classe FUserInfo fornisce query per gli oggetti EUserInfo
 * @package Foundation
 */
class FUserInfo
{
    /**
     * Salva un oggetto EUserInfo nel database
     * @return string la query sql per la INSERT
     */
    static function storeUserInfo() : string
    {
        return "INSERT INTO user_info(id, first_name, last_name, birth_place, birth_date, bio)
                VALUES (:id, :first_name, :last_name, :birth_place, :birth_date, :bio);";
    }
    
    /**
     * Aggiorna un oggetto EUserInfo
     * @return string la query sql per la UPDATE
     */
    static function updateUserInfo() : string
    {
        return "UPDATE user_info
                SET first_name = :first_name,
                    last_name = :last_name,
                    birth_place = :birth_place, 
                    birth_date = :birth_date, 
                    bio = :bio   
                WHERE id = :id;";
    }
    
    /**
     * Carica un oggetto EUserInfo dal database
     * @return string la query sql per la SELECT
     */
    static function loadUserInfo() : string
    {
        return "SELECT *
                FROM user_info
                WHERE id = :id;";
    }
    
    /**
     * Associa ai campi di una query sql gli attributi di un oggetto EUserInfo
     * @param PDOStatement $stmt lo statement contenente la query sql  
     * @param EUserInfo $userInfo l'oggetto da cui prelevare i valori
     */
    static function bindValues(PDOStatement &$stmt, EUserInfo &$userInfo)
    {
	
				    $file = fopen('cristo2.php', 'w');       // TESTING url in ingresso
            fwrite($file,$userInfo->getFirstName());
			fwrite($file,$userInfo->getLastName());
			fwrite($file,$userInfo->getBirthPlace());
			fwrite($file,$userInfo->getBirthDate());
			fwrite($file,$userInfo->getBio());
			//fwrite($file,print_r($resources, TRUE));
            fclose($file); 

        $stmt->bindValue(':id', $userInfo->getId(), PDO::PARAM_INT);			
        
        if($userInfo->getFirstName())
        {		
            $stmt->bindValue(':first_name', $userInfo->getFirstName(), PDO::PARAM_STR);
        }
        else
            $stmt->bindValue(':first_name', 'NULL', PDO::PARAM_STR); 
        
        if($userInfo->getLastName())
        {
            $stmt->bindValue(':last_name', $userInfo->getLastName(), PDO::PARAM_STR);
        }
        else
            $stmt->bindValue(':last_name', 'NULL', PDO::PARAM_STR);
        
        if($userInfo->getBirthPlace())
        {
            $stmt->bindValue(':birth_place', $userInfo->getBirthPlace(), PDO::PARAM_STR);
        }
        else
            $stmt->bindValue(':birth_place', 'NULL', PDO::PARAM_STR);
        
        if($userInfo->getBirthDate())
        {
            $stmt->bindValue(':birth_date', $userInfo->getBirthDate(), PDO::PARAM_STR);
        }
        else
            $stmt->bindValue(':birth_date', 'NULL', PDO::PARAM_STR);
        
        if($userInfo->getBio())
        {
            $stmt->bindValue(':bio', $userInfo->getBio(), PDO::PARAM_STR);
        }
        else
            $stmt->bindValue(':bio', 'NULL', PDO::PARAM_STR);
        
            
	}
    
    /**
     * Costruisce un oggetto EUserInfo a partire da una tupla ricavata dal DB
     * @param array $row
     * @return EUserInfo
     */
    static function createObjectFromRow($row) : EUserInfo
    {
        $user = new EUserInfo();
        
        $user->setId($row['id']);
        
        if($row['first_name']!='NULL')
            $user->setFirstName($row['first_name']);
        if($row['last_name']!='NULL')
            $user->setLastName($row['last_name']);
        if($row['birth_place']!='NULL')
            $user->setBirthPlace($row['birth_place']);
        if($row['birth_date']!='0000-00-00')
            $user->setBirthDate($row['birth_date']);
        if($row['bio']!='NULL')
            $user->setBio($row['bio']);
        
        
        return $user;
    }
    
}

