<?php
  
  class User{
	

	


	function __construct(){
		
	}
	
	
	
	protected function loggin():void{
		echo 'protected';
	}

	private function logout():void{
		echo 'private';

	}



  }

  class Child extends User{
	


  }