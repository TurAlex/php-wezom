<?php

function drawTable($cols, $rows, $color){
echo '<table cellspacing="0" cellpadding="5" border="1" style="text-align: center; margin: 50px auto">';
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
drawTable(15,8,'#def');
