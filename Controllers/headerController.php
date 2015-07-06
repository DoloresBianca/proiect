<?php

    class headerController extends Controller
    {
        function __construct(){
        
            // here we will get the data from the model
        
            // for now, we'll just use hard-coded data, an ordinary array
        
            echo $this->render(VIEWS."headerView.php",array('title'=>'Bianca`s Blog'));
            
        }

    }