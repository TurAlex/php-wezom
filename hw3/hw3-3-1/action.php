<!doctype html>
<html lang="ru">
<head>
	<title>HW3-1-1</title>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  $a = $_POST['a'];
  $a_output = $a;
  $b = $_POST['b'];
  if ($a > $b){
    $temp = $a; $a = $b; $b = $temp;
  }
  $min_point = $max_point = $a;
  $max = $min = 3 * pow($a,2) + $a - 4;
  for ($a+=0.5; $a <= $b; $a+=0.5){
    $result = 3 * pow($a,2) + $a - 4;
//    echo 'result = '.$result. ' a = '.$a.'<br>';
    if ($result > $max ){
      $max = $result;
      $max_point = $a;
    }
	  if ($result < $min ){
		  $min = $result;
      $min_point = $a;
    }
  }
  
  
?>

<div class="container">
	<div id="solution">
		<h4>В диапазоне от <?= $a_output;?> до <?= $b;?> <br>
      наибольшее <span class="result"> <?= $max;?></span> - при <span class="result"> <?= $max_point;?></span><br>
      наименьшее <span class="result"> <?= $min;?></span> - при <span class="result"> <?= $min_point;?></span>

    </h4>
		
		<div class="try-again">
			<a href="index.php">Проверить другой диапазон</a>
		</div>
  </div>


</div>
</body>
</html>