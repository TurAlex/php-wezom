<?php
class SuperUser extends User implements ISuperUser {
	public $role;
	static $superuserCount = 0;
	
	public function __construct( $name, $login, $pass, $role ) {
		parent::__construct( $name, $login, $pass );
		$this->role = $role;
		++self::$superuserCount;
		--User::$userCount;
		
	}
	public function showInfo() {
		parent::showInfo();
		echo 'Role: '.$this->role;
	}
	public function getInfo() {
		$property = [];
		$property['name'] = $this->name;
		$property['login'] = $this->login;
		$property['password'] = $this->password;
		$property['role'] = $this->role;
		return $property;
	}
}