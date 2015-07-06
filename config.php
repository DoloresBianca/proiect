<?php
    
    date_default_timezone_set('Europe/Bucharest');
	ini_set('display_errors',1);
    
    //$appPath = 'app/';
    $appPath='';
    define('MODELS',$appPath.'Models/');
    define('VIEWS',$appPath.'Views/');
    define('CONTROLLERS',$appPath.'Controllers/');
    
    function __autoload($className) {
		$classPath = '';
		$classType = strtolower($className);

		if(substr_count($classType,'model')){
			$classPath = MODELS;	
		}
		// if(substr_count($classType,'view')){
		// 	$classPath = VIEWS;	
		// }
		if(substr_count($classType,'controller')){
			$classPath = CONTROLLERS;	
		}
		if($classPath!==''){
			$classFile = $classPath . $className . '.php';
			if (file_exists($classFile)) {
				require_once $classFile;
			}
			else {
				echo 'File <b>'.$classFile.'</b> does not exist!';
				}
		}
		else echo "Invalid path!";
	}