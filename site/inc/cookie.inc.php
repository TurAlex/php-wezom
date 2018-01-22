<?php

$_SESSION['test'] = 'se_text';
$_SESSION['test1'] = 'se_textsfsd';
$_SESSION['test2'] = 3;
$visitCounter = 0;
if (isset($_COOKIE['visitCounter'])){
		$visitCounter = $_COOKIE['visitCounter'];
		$visitCounter ++;
	}
$lastVisit ='';
if (isset($_COOKIE['lastVisit']))
	$lastVisit = date( 'H-i-s d/m/Y', $_COOKIE['lastVisit'] );

if (date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
	setcookie( 'visitCounter', "$visitCounter" );
	setcookie( 'lastVisit', time() );
}
