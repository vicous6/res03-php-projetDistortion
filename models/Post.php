<?php  

class Post {
    private ?int $id ;
    private string $content;
   private ?int $user_id;
   private ?int $salon_id;
    
public function __construct(string $content ){
    $this->id = null;
    $this->content = $content;
    $this->user_id = null;
    $this->salon_id = null;
 

}
  public function getId() : ?int
    {
        return $this->id;
    }
    public function getContent() : string
    {
        return $this->content;
    }
     public function getUser_id() : ?int
    {
        return $this->user_id;
    }
     public function getSalon_id() :? int
    {
        return $this->salon_id;
    }
    
    
    
    
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    public function SetEmail(string $content) : void
    {
        $this->content= $content;
    }
      public function SetUserId(int $user_id) : void
    {
        $this->user_id= $user_id ;
    }
      public function SetSalonId(int $salon_id) : void
    {
        $this->salon_id= $salon_id;
    }
}

?>

