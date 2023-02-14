<?php
require 'managers/SalonsManager.php';
class SalonsController extends AbstractController {
    
    
  private SalonsManager $manager;

 public function __construct()
    {
        $this->manager= new SalonsManager("tonygohin_distorsion","3306","db.3wa.io","tonygohin","f80620de30f1b8d1caba3a7e4b950a9a")  ;
    
    }
    
}

?>