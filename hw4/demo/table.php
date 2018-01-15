<?php
$cols = 25;
$rows = 25;
echo '<table cellspacing="0" cellpadding="5" border="1" style="text-align: center; margin: 50px auto">';
for ($i = 1; $i <= $rows; $i++){
	echo '<tr>';
	for ($j = 1; $j <= $cols; $j++){
		if ($i == 1 || $j == 1)
			echo '<th style="background-color: #00991a; color: white">' . $i * $j . '</th>';
		elseif ($i%2 ==  1 || $j%2 == 1)
			echo '<td style="background-color: #dbdbdb">' . $i * $j . '</td>';
		else
			echo '<td>'.$i * $j.'</td>';
	}
	echo '</tr>';
}
echo '</table>';
