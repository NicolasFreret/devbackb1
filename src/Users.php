<?php
  
  class User{
	

	private int $age;


	function __construct($age){
		$this->age = $age;
	}
	
	public function getAge():int{
		return $this->age;
	}

	public function setAge(int $newAge):void{
		$this->age = $newAge;
	}
	
	function loggin(){
		echo 'coucou';
	}

	function logout(){

	}



  }