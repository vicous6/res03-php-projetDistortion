<?php
require'controllers/AbstractController.php';
require 'managers/PostsManager.php';
class PostsController extends AbstractController {
    
    
  private PostsManager $manager;

 public function __construct()
    {
        $this->manager= new PostsManager("tonygohin_distorsion","3306","db.3wa.io","tonygohin","f80620de30f1b8d1caba3a7e4b950a9a")  ;
    
       
        
    }
    
    
 
    
}
    ?>