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

function drawTable($cols, $rows, $color){
	echo '<table cellspacing="0" cellpadding="5" border="1" style="text-align: center; margin: 50px auto;" >';
	for ($i = 1; $i <= $rows; $i++){
		echo '<tr>';
		for ($j = 1; $j <= $cols; $j++){
			if ($i == 1 || $j == 1)
				echo '<th style="background-color: '.$color.'">' . $i * $j . '</th>';
			else
				echo '<td>'.$i * $j.'</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
}

//TITLES & HEADERS & INCLUDE
$title = 'Сайт салона красоты Relish';
$header = "$welcome, Гость";

$id = strtolower(strip_tags(trim($_GET['id'])));
switch ($id){
	case 'pricing-tables':
		$title = 'Цены на услуги';
		$header = 'Цены на услуги';
		$content_include = 'inc/'.$id.'.inc.php';
		break;
	case 'reservation':
		$title = 'Бронирование';
		$header = 'Бронирование';
		$content_include = 'inc/'.$id.'.inc.php';
		break;
	case 'services':
		$title = 'Наши услуги';
		$header = 'Наши услуги';
		$content_include = 'inc/'.$id.'.inc.php';
		break;
	case 'contact':
		$title = 'Страница контактов';
		$header = 'Контакты';
		$content_include = 'inc/'.$id.'.inc.php';
		break;
	case 'forms':
		$title = 'Формы';
		$header = 'Талица и калькулятор';
		$content_include = 'inc/'.$id.'.inc.php';
		break;
}

//VISIT
$visit = ($visitCounter == 0) ? 'Спасибо что зашли на огонек' :"Вы заходили к нам $visitCounter раз<br> Последнее посещение $lastVisit";

