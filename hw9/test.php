<?php
setcookie("testcookie3","value",time() + 60 * 60 * 24);
$user = [
	'name' => 'John',
	'login' => 'root',
	'pass' => '1234'
];
$str = serialize($user);
echo $str . '<br>';
var_dump(unserialize($str));


//setcookie('user', $str);