<?php
//walk through directory function
function getdir($dir_name) {
	$dir = scandir($dir_name);
	foreach($dir as $d) {
		if($d != '.' and $d != '..') {
			if(is_dir($dir_name.'/'.$d)) {
				echo '<li>'.$d.'<ul>';
				echo getdir($dir_name.'/'.$d);
				echo '</ul></li>';
			} else {
				echo '<li>'.$d.'</li>';
			}
		}
	}
}
//echo round(disk_free_space('f:/')/1000000000,2).'GB' ;
//echo round(disk_total_space('f:/')/1000000000,2).'GB' ;
for ($i = 0; $i < 10; $i++)
	if (file_exists("file{$i}.txt"))
		unlink("file{$i}.txt");
$text = '';
for ($i = 0; $i < 2; $i++)
	$text .= "Hello1\r\n";
for ($i = 0; $i < 10; $i++){
	$fp[$i] = fopen("file{$i}.txt", "w");
	fwrite($fp[$i], $text);
	echo $fp[$i].'<br>';
	fclose($fp[$i]);
}
//rewind($fp);
