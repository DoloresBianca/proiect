<?php

    class footerController extends Controller
    {
        function __construct(){
        
            // here we will get the data from the model
        
            // for now, we'll just use hard-coded data, an ordinary array
            
            $footer = array(
                            'name'=>'Bianca Dolores MEZE'
                        );
        
            echo $this->render(VIEWS."footerView.php",$footer);
            
        }

    }