<?php

   class homeController extends Controller
   {
        public function __construct(){
            new headerController;   // calls the controller that renders the blog title
            new menuController;
            new contentController;  // calls the controller that renders the content of page
            new footerController;   // calls the controller that renders the footer
        }
   }
