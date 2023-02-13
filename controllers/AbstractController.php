<?php

abstract class AbstractController{
 


public function render(string $view, array $values) : void{
    
    $template= $view;
    $data=$values;
    require 'template/layout.phtml';
}


}
?>