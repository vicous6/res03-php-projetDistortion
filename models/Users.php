<?php

Class Users {
    
    //private attribute
    private int $id;
    private string $username;
    private string $email;
    private string $password;
}


    //public constructor
public function __constructor(int $id, string $username, string $email, string $password)
{
    $this->id = null;
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
}

    //public getter
    
    public function getId() : int
    {
        return $this->id;
    }
    
    public function getUsername() : string
    {
        return $this->Username;
    }
    
    public function getEmail() : string
    {
        return $this->Email;
    }
    
    public function getPassword() : string
    {
        return $this->Password
    }
    
    
    //public setter
    
    public function setId(int $gitid) : void
    {
        $this->id = $id;
    }
    
    public function setUsername(string $username) : void
    {
        $this->username = $username;
    }
    
    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }
    
    public function setPassword(string $password) : void
    {
        $this->password = $password;
    }