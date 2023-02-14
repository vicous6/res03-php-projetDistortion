<?php
// require'controllers/AbstractController.php';
require 'managers/CategoriesManager.php';
class CategoriesController extends AbstractController {
    
    
  private CategoriesManager $manager;

 public function __construct()
    {
        $this->manager= new CategoriesManager("tonygohin_distorsion","3306","db.3wa.io","tonygohin","f80620de30f1b8d1caba3a7e4b950a9a")  ;
    
       
        
    }
}

?>