<?php
$var = 'HELLO';
$var_size = strlen($var);
$counter = 0;
while ($counter < $var_size ){
	echo $var[$counter].'<br>';
	$counter++;
}
