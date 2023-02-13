<?php 

class CategoriesManager extends AbstractManager {


public function __construct(string $dbName,string $port,string $host,string $username ,string $password)
    {
        $this->dbName = $dbName;
        $this->port = $port;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->initDb();
        
    }


public function createCategory(Category $category): Category{
    
    $query = $db->prepare('INSERT INTO categories VALUES (null, :title)');

    	$parameters = [
	    "title"=>$category->getTitle()
	];
$query->execute();
$thePost = $query->fetch(PDO::FETCH_ASSOC);
}
public function getCategoryById(int $id): Category{
      
       $query = $this->db->prepare('SELECT * FROM categories WHERE id = :id');
	$parameters = [
	    "id"=>$id
	];
$query->execute();
$thePost = $query->fetch(PDO::FETCH_ASSOC);
return $thePost;
        }
public function addSalons (Salon $salon){
    
    // select * from salons where Id_categories = this->id 
    
    
}
       }
 
 



?>