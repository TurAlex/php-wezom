<!doctype html>
<html lang="ru">
<head>
	<title>HW3-2-2</title>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  $min = $_POST['min'];
  $min_output = $min;
  $max = $_POST['max'];
  if ($min > $max){
    $temp = $min; $min = $max; $max = $temp;
  }
  
  $arr  = [];
  while ($min <= $max){
    if ($min%2 == 0)
      $arr[] = $min;
    $min++;
  }
?>

<div class="container">
	<div id="solution">
		<h4>В диапазоне от <?= $min_output;?> до <?= $max;?> следующие числа четные<br>
      

      <span class="result">
        <?php
        if (empty($arr)){
          echo 'Нет таких чисел';
        } else {
          foreach ($arr as $num)
            echo $num.', ';
        }
        ?>
      </span>
    </h4>
		
		<div class="try-again">
			<a href="index.php">Проверить другой диапазон</a>
		</div>
  </div>


</div>
</body>
</html>