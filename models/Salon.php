<?php

class Salon {
    
    //private attribute
    private int $id;
    private string $title;
    private array $post;
}

    //public constructor
    
public function __constructor(int $id, string $title, array $post)
{
    $this->id = null;
    $this->title = $title;
    $this->post = [ ];
}

    //public getter
    
    public function getId() : int
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

?>