<?php
class User extends AUser {
	public $name;
	public $login;
	public $password;
	public static $userCount = 0;
	
	public function __construct($name, $login, $pass) {
		$this->name = $name;
		$this->login = $login;
		$this->password = $pass;
		++self::$userCount;
	}
	public function __destruct() {
		echo 'Пользователь '.$this->login.' destructed <br>';
	}
	
	public function showInfo(){
		echo '<hr>';
		echo 'Name: ' . $this->name . '<br>';
		echo 'Login: ' . $this->login . '<br>';
		echo 'Pass: ' . $this->password . '<br>';
	}
	
}
