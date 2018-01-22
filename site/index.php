<?php
include ('inc/cookie.inc.php');
include( 'inc/functions.inc.php' );

include( 'inc/header.inc.php');

if ($id)
	include ("$content_include");
else
	include ('inc/index.inc.php');

include( 'inc/footer.inc.php' );