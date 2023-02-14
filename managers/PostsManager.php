<?php 

class PostsManager extends AbstractManager {


public function __construct(string $dbName,string $port,string $host,string $username ,string $password)
    {
        $this->dbName = $dbName;
        $this->port = $port;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->initDb();
        
    }


public function createPost(Post $post): Post{
    
    $query = $db->prepare('INSERT INTO posts VALUES (null, :content)');

    	$parameters = [
	    "content"=>$post->getContent()
	];
$query->execute();
$thePost = $query->fetch(PDO::FETCH_ASSOC);
}

public function getPostById(int $id): Post{
      
       $query = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
	$parameters = [
	    "id"=>$id
	];
$query->execute();
$thePost = $query->fetch(PDO::FETCH_ASSOC);
return $thePost;
        }
       
      
public function getAllPosts(): array{
          
           $query = $db->prepare('SELECT * FROM posts');

    	$parameters = [
	   
	];
$query->execute();
$thePosts = $query->fetchAll(PDO::FETCH_ASSOC);


$tab = [];

foreach($thePosts as $post){
    
    
    $newPost = new Post ($post["content"],$post["user_id"],$post["salon_id"]);
    $newPost -> setId($post["id"]);
    array_push($tab,$newPost);
}
return $tab;
}




    
}




 



?>