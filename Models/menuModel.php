<?php

    class menuModel extends DBModel
    {  
	    public function get(){

		$query = "SELECT menuItem FROM menu";
		$result = $this->db()->query($query);	
		
		foreach($result as $menuItem)
			foreach($menuItem as $val){
 			   $menu_array[] = $val;
		}

		return $menu_array;
	}

}