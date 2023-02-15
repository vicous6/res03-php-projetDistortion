<?php 
require 'controllers/UsersController.php';
require 'controllers/PostsController.php';
require 'controllers/SalonsController.php';
require 'controllers/CategoriesController.php';
class Router {

    // private attribute
    private UsersController $uc;
    private PostsController $pc;
    private SalonsController $sc;
    private CategoriesController $cc;
  


    // public constructor
    public function __construct()
    {
        $this->uc = new UsersController();
        $this->pc = new PostsController();
        $this->sc = new SalonsController();
        $this->cc = new CategoriesController();
        
        
    }

    public function checkRoute(string $route){
        
if(isset($_GET["salon"])){
    
      $this->uc->homepage();
    
}else
           
        if($route === "login" || $route === ""){
            
         if(isset($_SESSION) && $_SESSION["start"]=== true ){
             
             
            $allPosts = $this->pc->getAllPosts();

      
             
            //  $this->uc->homepage($arrayPosts,$arraySalons,$arrayCategories);
            
            $this->uc->homepage();
             
         }else{
             
             $this->uc->login();
         }
            
        }else if($route === "register"){
            
             $this->uc->registerUser();
            
        }
        
        
        
    }

}
?>
 