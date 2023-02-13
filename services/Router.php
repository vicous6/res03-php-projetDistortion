<?php 
require'controllers/UsersController.php';
class Router {

    // private attribute
    private UsersController $uc;
    private PostsController $pc;
    // private SalonsController $sc;
    // private CategoriesController $cc;
  


    // public constructor
    public function __construct()
    {
        $this->uc = new UsersController();
        $this->pc = new PostsController();
        // $this->sc = new SalonsController();
        // $this->cc = new CategoriesController();
        
        
    }

    public function checkRoute(string $route){
        

        
        if($route === "login" || $route === ""){
            
         if(isset($_SESSION) && $_SESSION["start"]=== true ){
             
             
            //  $arrayPosts = $this->pc->getPosts();
            //  $arrayCategories == $this->cc->getCategories(); 
            //   $arraySalons == $this->cc->getSalon(); 
             
            //  $this->uc->homepage($arrayPosts,$arraySalons,$arrayCategories);
            
            $this->uc->homepage();
             
         }else{
             
             $this->uc->login();
         }
            
            
            // $this->pc->index();
            // $this->sc->index();
            // $this->cc->index();
        }else if($route === "register"){
            
             $this->uc->registerUser();
            
        }
        
        
        
    }

}
?>
 