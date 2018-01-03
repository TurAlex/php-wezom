<?php
// footer copyright CONST
define('COPYRIGHT','Вебмастер');

setlocale(LC_TIME,'rus');

//Variables for the date in header
$day = strftime('%d');
$month = strftime('%B');
$year = strftime('%Y');

// Variables for welcome
$hour = (int) strftime('%H');
$welcome ='';

if ($hour >= 0 && $hour < 6)
	$welcome = 'Доброй ночи';
elseif ($hour >= 6 && $hour < 12)
	$welcome = 'Доброе утро';
elseif ($hour >= 12 && $hour < 18)
	$welcome = 'Добрый день';
elseif ($hour >= 18 && $hour < 23)
	$welcome = 'Добрый вечер';
else{
	$welcome = 'Доброй ночи';
}

// Upload files
$size = ini_get('post_max_size');
$size_letter = substr($size,-1);
$size = (float) $size;
switch ($size_letter){
	case 'G':
		$size*=1000;
	case 'M':
		$size*=1000;
	case 'K':
		$size*=1000;
}