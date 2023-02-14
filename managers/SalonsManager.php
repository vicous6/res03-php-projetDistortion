<?php 

class SalonsManager extends AbstractManager {


public function __construct(string $dbName,string $port,string $host,string $username ,string $password)
    {
        $this->dbName = $dbName;
        $this->port = $port;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->initDb();
        
    }


public function creatSalon(Salon $salon): Salon{
    
    $query = $db->prepare('INSERT INTO salons VALUES (null, :title)');

    	$parameters = [
	    "title"=>$salon->getTitle()
	];
$query->execute();
$thePost = $query->fetch(PDO::FETCH_ASSOC);
}
public function getSalonById(int $id): Post{
      
       $query = $this->db->prepare('SELECT * FROM salons WHERE id = :id');
	$parameters = [
	    "id"=>$id
	];
$query->execute();
$theSalon= $query->fetch(PDO::FETCH_ASSOC);
return $theSalon;
        }
        
public function addSalon(Salon $salon):array{
    
    // select * from post where id_salon = $this->id
}

public function getAllSalons(Salon $salon) : array
{
    
    $query = $this->db->prepare('SELECT * FROM salons');
    $query->execute();
    $allSalon= $query->fetchAll(PDO::FETCH_ASSOC);
    return $allSalon;
    
    $tab = [];
    
    foreach($allSalon as $salon)
    {
        $newSalon = new Salon($salon["content"], $salon["category_id"]);
        $newSalon->setID($salon["id"]);
        
        $tab[] = $newSalon;
        
        return $tab;
    }
}



}
 
 



?>