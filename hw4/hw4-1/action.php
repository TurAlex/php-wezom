<!doctype html>
<html lang="ru">
<head>
	<title>HW4-1</title>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
//  getting data from user
  $start = $_POST['start'];
  $end = $_POST['end'];
  $quantity = $_POST['quantity'];
  
//  for output
  $start_output = $start;
  $end_output = $end;

//  swap if start bigger then end
  if ($start > $end){
    $temp = $start; $start = $end; $end = $temp;
  }

//  initializing array
  for ($i = 0; $i < $quantity; $i++)
    $arr[] = rand($start, $end);

//  variables for the solution
  $max_result = $min_result = 3 * pow($start,2) + $start - 4;
  $max = $min = $start;
  foreach ($arr as $num){
    $result = 3 * pow($num,2) + $num - 4;
    if ($result > $max_result ){
      $max_result = $result;
      $max = $num;
    }
	  if ($result < $min_result ){
		  $min_result = $result;
      $min = $num;
    }
    
  }
  
  
  
?>

<div class="container">
	<div id="solution">
		<h4>В диапазоне от <?= $start_output;?> до <?= $end_output;?> <br>
      Были сгенерированы следующие числа <?php foreach ($arr as $num) echo $num.', '?><br>
      наибольшее значение функции <span class="result"> <?= $max_result;?></span> - при <span class="result"> <?= $max;?></span><br>
      наименьшее значение функции<span class="result"> <?= $min_result;?></span> - при <span class="result"> <?= $min;?></span>
    </h4>
		<div class="try-again">
			<a href="index.php">Проверить другой диапазон</a>
		</div>
  </div>


</div>
</body>
</html>