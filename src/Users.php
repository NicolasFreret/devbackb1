<?php
  
  class User{

	
	
	/**
	 * Me ramène l'utilisateur correspondant à l'email && password demandandés
	 * 
	 * @param [array] $users tableau de tous les users
	 * 
	 * @return [array | false] tableau avec le bon utilisateur ou false si 		personne ne correspond
	 */
	public function loggin(array $users):array|bool{
		$res = array_filter($users, function($user){
			return $user['email'] == $_POST['email'] && $user['password'] == $_POST['password'];
		});


		if(count($res) > 0){
			$_SESSION['user'] = $res[0];
			return $res[0];
		}
		return false;

	}
	
	

	public function logout():void{
		if($this->is_user_logged_in()){
			unset($_SESSION['user']);
		}
	}

	public function is_user_logged_in():bool{
		return isset($_SESSION['user']);
	}



  }


