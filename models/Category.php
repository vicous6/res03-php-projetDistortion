<?php
class Category {
    
    //private attribute
    private int $id;
    private string $title;
    private string $salon;



    //public constructor
public function __construct(string $title, array $salon)
{
    $this->id = null;
    $this->title = $title;
    $this->salon = [];
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
    
    public function getSalon() : string
    {
        return $this->salon;
    }

    
    
    //public setter
    
    public function setId(int $gitid) : void
    {
        $this->id = $id;
    }
    
    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }
    
    public function setSalon(array $salon) : void
    {
        $this->salon = $salon;
    }
}

?>