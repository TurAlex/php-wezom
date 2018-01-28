<?php
function __autoload($name){
	include "$name.class.php";
}

$user1 = new User('Vasya Petrov', 'vasyap','12345');
$user2 = new User('Petya Ivanov', 'petyai','54876');
$user3 = new User('John Wick', 'johnw','77777');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();


$superuser = new SuperUser('Admin Adminivich', 'admin', 'sds548', 'admin');

hline();
print_r($superuser->getInfo());
hline();
echo 'Всего обычных пользователей : ' . User::$userCount . '<br>';
echo 'Всего супер-пользователей : ' . SuperUser::$superuserCount . '<br>';
hline();


function hline(){
	echo '<hr>';
}