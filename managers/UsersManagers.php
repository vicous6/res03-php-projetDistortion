<?php

class UsersManager extends AbstractManager {


public function __construct(string $dbName,string $port,string $host,string $username ,string $password)
    {
        $this->dbName = $dbName;
        $this->port = $port;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->initDb();
        
    }
    
    public function createUser(User $user): User{
    
    $query = $db->prepare('INSERT INTO users VALUES (null, :username,:email,:password)');

    	$parameters = [
	    "username"=>$user->getUsername(),
	    "email"=>$user->getEmail(),
	    "password"=>$user->getPassword()
	];
$query->execute();
$thePost = $query->fetch(PDO::FETCH_ASSOC);
}
public function getUserById(int $id): User{
      
       $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
	$parameters = [
	    "id"=>$id
	];
$query->execute();
$thePost = $query->fetch(PDO::FETCH_ASSOC);
$newPost = new Post (null, $thePost["username"],$thePost["email"],$thePost["password"]);
$newPost->setId($id);
return $newPost;
        }
    
}
    ?>