<!doctype html>
<html lang="ru">
<head>
	<title>HW7-1</title>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">


</head>
<body>
<style>
	body{
		background-color: #f0fffc;
	}
	input{
		width: 50px;
		text-align: right;
	}
	sub{
		font-size: smaller;
	}
</style>


<div class="container" style="width:auto; margin: 0 auto; text-align: center">
<?php	$size = $_POST['size'];?>
<h1>Задача 7-1</h1>
  <p>Написать функцию которая вычисляет матрицу методом Крамера, все данные должны быть отправлены из html-формы методом POST. </p>
<form action="index.php" method="post" style="display: inline-block">
	<label><span>Введите количество переменных (x)</span>
	<input type="number" class="input-md mb-20" value="<?= $size; ?>" name="size" >
	</label>
	<?php //ADD value to submit for step input?>
	<button type="submit" name="pre_calc" value="1">GO</button>
</form>


<?php
if ($_POST['pre_calc'] == 1){
	
	$matrixA = [];
	$matrixB = [];
		//FILLING two arrays (1 - before equal sign | 2 - after equal sign)
	if ($_POST['calc'] == 1 ) {
		for ( $i = 0; $i < $size; $i++ ) {
			for ( $j = 0; $j < $size; $j++ )
				$matrixA[ $i ][ $j ] = (int) $_POST[ 'table-' . $i . '-' . $j ];
			$matrixB[ $i ][ 0 ] = (int) $_POST[ 'table-' . $i . '-' . $j ];
		}
	}
		// INPUT FORM
		echo '<form class="form" action="index.php" method="post">';
		echo '<table style="margin: 50px auto 20px">';
		for ($i = 0;$i < $size; $i++){
			echo '<tr>';
			for ($j = 0;$j < $size; $j++) {
					//input for x's
				echo '<td>';
					//ADDING 1 for output for easier understanding
				echo '<input type="text" placeholder="a" name="table-' . $i . '-' . $j . '" value="' . $matrixA[$i][$j].'"><span><sub>('. ($i + 1) . ':' . ($j + 1) .')</sub></span>';
				echo '<label><span> * x<sub>'. ($j + 1) . '</sub></span>';
				if ($j < $size - 1)
					echo '<span> + </span>';
				echo '</label>';
				echo '</td>';
				
			}
				// input for b (after equal sign)
			echo '<td>';
			echo '<span> = </span>';
			echo '<label>';
			echo '<input type="text" placeholder="b" name="table-' . $i . '-' . $j . '" value="'. $matrixB[$i][0].'"><span><sub>' . ($i + 1) . '</sub></span>';
			echo '</label>';
			echo '</td>';
		}
		echo '</table>';
			//hidden values of SIZE and PRE_CALC from previous forms
		echo '<input style="display:none" type="number" name="size" value="'. $size .'">';
		echo '<input style="display:none" type="number" name="pre_calc" value="1">';
			//ADD value to submit for step input
		echo '<button type="submit" style="margin: 0 auto" name="calc" value="1">Посчитать</button>';
		echo '</div>';
		echo '</form>';
}

if ($_POST['calc'] == 1){

		//calculate Kramer delta form given arr
	function kramer_delta(array $matrix){
		$size = count($matrix);
		$dA = 0;
			//Different calculation when it's 2 by 2 arr
		if ($size == 2)
			return $matrix[0][0]*  $matrix[1][1] - $matrix[0][1] * $matrix[1][0];
			
			//plus
		for ( $i = 0; $i < $size; $i++)	{
			$temp = 1;
			for ( $j = 0; $j < $size; $j++ )
				$temp *=  $matrix[( $j )%$size][( $j + $i )%$size];
			$dA += $temp;
		}
		
			//minus
		for ( $i = $size - 1; $i >= 0; $i-- ) {
			$temp = 1;
			for ( $j = 0; $j < $size; $j++ )
				$temp *=  $matrix[( $j )%$size][( $i - $j + $size )%$size];
			$dA -= $temp;
		}
		return $dA;
	}
	
	
	 //KRAMER SOLUTION (two arrays (1 - before equal sign | 2 - after equal sign))
	function kramer_solution(array $matrixA, array $matrixB){
		$solution = [];
		$size = count($matrixA);
		$dA = kramer_delta($matrixA);
		if ($dA == 0){
			echo 'нет решения так как &Delta;A равно 0';
			return [];
		}
		for ($i = 0; $i < $size; $i++){
			$temp_matrix = $matrixA;
			for ($j = 0; $j < $size; $j++)
				$temp_matrix[$j][$i] = $matrixB[$j][0];
			$solution[$i] = kramer_delta($temp_matrix)/$dA;
		}
		return $solution;
	}
echo '<div class="container">';
	$solution = kramer_solution($matrixA,$matrixB);
	if ($solution){
		echo '<div><span>Решение:</span></div> ';
		//Output solution
		foreach ($solution as $key => $value)
			echo '<div>x<sub>' . ($key + 1) . '</sub> = ' .round($value,4) . '</div> ';
	}
echo '</div>';
}
?>





</div>





</body>
</html>
