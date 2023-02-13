<?php
require'controllers/AbstractController.php';
require 'managers/UsersManager.php';
class UsersController extends AbstractController {
    
    
  private UsersManager $manager;

 public function __construct()
    {
        $this->manager= new UsersManager("tonygohin_distorsion","3306","db.3wa.io","tonygohin","f80620de30f1b8d1caba3a7e4b950a9a")  ;
    
       
        
    }

// check en bdd si les input sont existe et sont valable
 private function loginUser (string $inputEmail , string $inputPass):bool {
 
 $bddUser = $this->manager->getUserByEmail($inputEmail);
 
 
 if($bddUser !== null && $inputPass === $bddUser->getPassword()){
     
    
     return true;
      
 }else{
     

     
    return false;
 }
}


//utilise login User juste au dessus 
public function login (){
    echo 'coucou';

if(isset($_POST["login"])&& !empty($_POST["login"])&&isset($_POST["password"])&& !empty($_POST["password"])){
    
    $loginState = $this->loginUser($_POST["login"],$_POST["password"]);
   
    echo($loginState);

            if($loginState===true ){
                 $_SESSION["start"]= true ;
                 $_SESSION["userName"] = $_POST["login"];
                $this->render( "homepage" , ["page de connexion"]);
            }else{
                  $_SESSION["start"]= false ;
                $this->render( "login" , ["page de connexion"]); 
                
            }


   
}else{
    
    $this->render( "login" , ["page de connexion"]); 
}
    
   
}


//  

public function registerUser(){

if(isset($_POST["registerUsername"])&& !empty($_POST["registerUsername"])&& 
   isset($_POST["registerEmail"])&& !empty($_POST["registerEmail"])&&
   isset($_POST["registerPassword"])&& !empty($_POST["registerPassword"])&&
   isset($_POST["registerConfirmPwd"])&& !empty($_POST["registerConfirmPwd"])
){
    // echo 'les champs sont remplis';
    if($_POST["registerPassword"] === $_POST["registerConfirmPwd"]){
        // echo 'les pass sont identiques';
        if($this->manager->getUserByEmail($_POST["registerEmail"]) ===null){
            // echo "email unique";
            $newUser= new User ($_POST["registerUsername"],$_POST["registerEmail"],$_POST["registerPassword"]);
            // var_dump($newUser);
            $this->manager->createUser($newUser);
            
             $this->render( "login" , ["page de connexion"]); 
        }
    }
    
    
   
}else{
    
    
$this->render( "register" , ["page d'inscription"]); 
}


// $this->manager->createUser();
 }   

}
?>