<?php

	class asideController extends Controller
	{
		public function __construct(){
			
			new headerController;
			new menuController;
			
			$temp=new contentModel;
			$results=$temp->showLinks();
			
        echo"<div class='aside'>";
			foreach($results as $res){
				echo $this->render(VIEWS.'asideView.php',
									array('aside'=>implode(' ',$res))
									);
			}
		echo"</div>";	
			
			new footerController;
			
		}
	}