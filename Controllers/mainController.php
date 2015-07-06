<?php

    class mainController extends Controller
    {
        private $menu = array(
                            "home"=>"homeController",
                            "about"=>"aboutController",
                            "contact"=>"contactController",
                            "aside"=>"asideController");  
        // private $array; 
       // private $menu;
        
        public function __construct(){
            // get $menu from DB
            // $obj = new menuModel;
            // $this->array = $obj->get();
            
            // foreach($this->array as $menuitem){
            //     $this->menu[$menuitem] = $menuitem."Controller";
            // }
            
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }
            else $page = 'index.php';
            
            if(array_key_exists($page, $this->menu)){
                $object=new $this->menu[$page];
            } 
            else 
            	new headerController;
				new errorController;
				new footerController;
        } 
    }