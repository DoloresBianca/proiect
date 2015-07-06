<?php
	class contentModel extends DBModel
	{
		public function get(){
			$query = "SELECT * FROM posts";
			$result = $this->db()->query($query);
			//var_dump($result);
			foreach($result as $post_content){
				$post_array[]=$post_content;
			}
			//echo "<pre>";
			//var_dump($stud_array);
			return $post_array;
		}
		
	//pentru pagina de contact
	    public function get(){
			$query = "SELECT * FROM contact";
			$result = $this->db()->query($query);
			//var_dump($result);
			foreach($result as $contact){
				$contact_array[]=$contact;
			}
			//echo "<pre>";
			//var_dump($stud_array);
			return $contact_array;
		}
	
	//returns an array with all links from classmates 
		public function showLinks(){
			$query="SELECT linkName FROM links ";
			$results=$this->db()->query($query);//var_dump($results);//object
			
			foreach($results as $link){
				$links_array[]=$link;
			}
			return $links_array;
		}
	}