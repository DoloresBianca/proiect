<?php

    class contentController extends Controller
    {
        function __construct(){
	        // here we will get the data from the model
	        $obj = new contentModel;
	        $data = $obj->get();
	        
	       // $obj2 = new linkModel;
	       // $links = $obj2->get();
	        //$links = array("tpopa","obolojan");	// this should be replaced by a linkModel that gets blog names from DB
	       
	       	foreach($data as $post_content){
	        	echo $this->render(VIEWS."contentView.php",
	        						array('post_content'=>implode(' ',$post_content)));   
	        }
	        
	        foreach($links as $link){
	            echo $this->render(VIEWS."linkView.php",
	        						array('link'=>$link));   
	        }
        }
    }
  
    