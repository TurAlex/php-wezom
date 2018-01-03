<!doctype html>
<html lang="ru">
<head>
	<title>HW3-2-1</title>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  $min = $_POST['min'];
  $max = $_POST['max'];
  if ($min > $max){
    $temp = $min; $min = $max; $max = $temp;
  }
  
  $arr  = [];
  for ($i = $min; $i <= $max; $i++)
    if ($i%3 == 0 && $i%5 !==0)
      $arr[] = $i;
?>

<div class="container">
	<div id="solution">
		<h4>В диапазоне от <?= $min;?> до <?= $max;?> следующие числа <br>делятся на 3 но не на 5<br>
      

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