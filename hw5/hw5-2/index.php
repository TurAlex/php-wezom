<!doctype html>
<html lang="ru">
<head>
  <title>HW5-2</title>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  
</head>
<body>
<style>

</style>

<?php
define('PLATES', 8);
for ($i = PLATES, $j = 1; $i>=1; $i--, $j++){
	$tower[1][$j] = $i;
	$tower[2][$j] = 0;
	$tower[3][$j] = 0;
}

$tower[1]['height'] = PLATES;
$tower[2]['height'] = $tower [3]['height'] = 0;

$iterations = 1;

function print_hanoi(array $tower, $height, $from, $to){
	echo '<div class="block" style="width: 950px;box-sizing: border-box; margin: 0 auto; padding-top: 10px">';
	print "<div>Move plate from $from to $to</div> ";
	for ($j = 1; $j <= 3; $j++){
		
		echo '<div style="width: 300px; display: inline-block; margin: 0; box-sizing: border-box; border: 1px solid #e4b9b9; padding-top: 10px">';
		for($i = $height ; $i >= 1 ;$i--){
			if ($j == $to && $i == $tower[$j]['height'])
				echo '<div style="height: 10px; width: '. ($tower[$j][$i]  * 20) .'px; border: 1px solid #ccc; margin: 0 auto;background-color: #afd9ee"></div>';
			else
				echo '<div style="height: 10px; width: '. ($tower[$j][$i]  * 20) .'px; border: 1px solid #ccc; margin: 0 auto"></div>';
		}
		echo '<div style="text-align: center;border-top: 1px solid #dbdbdb; padding: 0">';
		if ($j == $from)
			echo 'from';
    elseif ($j == $to)
			echo 'to';
		else
			echo '-';
		echo '</div>';
		echo '</div>';
	}
	echo '</div>';
}

function move_plate(array $tower, $from, $to){
	global $tower;
	$tower[$to]['height']++;
	$tower[$to][$tower[$to]['height']] = $tower[$from][$tower[$from]['height']];
	$tower[$from][$tower[$from]['height']] = 0;
	$tower[$from]['height']--;
}


function hanoi($plates, $from, $to, array $tower, $print = 0) {
	global $tower;
	global $iterations;
	while($plates > 0) {
		$iterations++;
		$move_to_tower = 6 - ($from + $to);
		hanoi(--$plates, $from, $move_to_tower, $tower, $print);
		if ($print == 1){
		  move_plate( $tower ,$from, $to);
		  print_hanoi($tower, PLATES, $from, $to);
    }
		$from = $move_to_tower;
	}
}

hanoi(PLATES, 1, 3, $tower, 1);
print " Moves: $iterations";
?>

</body>
</html>
