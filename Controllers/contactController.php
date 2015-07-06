<?php
   
    class aboutController extends Controller
    {
        public function __construct(){
                new headerController;
				new menuController;
				
            	 $obj = new contentModel;
	             $data = $obj->get();

	       	    foreach($data as $contact){
	        	echo $this->render(VIEWS."aboutView.php",
	        						array('contact'=>implode(' ',$contact)));   
	       	    }
	       	    
                new footerController;
        }
    }
  