<?php 
require'controllers/UsersController.php';
class Router {

    // private attribute
    private UserController $uc;
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
        
        if($route === "index"){
            $this->uc->index();
            // $this->pc->index();
            // $this->sc->index();
            // $this->cc->index();
        }else{
            
            
        }
        
        
        
    }

}
?>
 