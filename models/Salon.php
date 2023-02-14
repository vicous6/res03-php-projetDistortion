<?php

class Salon {
    
    //private attribute
    private ?int $id;
    private string $title;
    private int $category_id;
     private array $post;


    //public constructor
    
public function __construct(string $title, int $category_id)
{
    $this->id = null;
    $this->title = $title;
    $this->category_id = $category_id;
    $this->post = [ ];
}

    //public getter
    
    public function getId() : ?int
    {
        return $this->id;
    }
    
    public function getTitle() : string
    {
        return $this->Title;
    }
    
    public function getPost() : array
    {
        return $this->post;
    }
    
    public function getCategory_id() : int
    {
        return $this->category_id;
    }

    
    
    //public setter
    
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }
    
    public function setPost(array $post) : void
    {
        $this->post = $post;
    }
    
    public function setCategory_id(int $id) : void
    {
        $this->category_id = $category_id;
    }
    
    public function addPostInSalon(Post $post):void {
        
        
        
    }
}
?>