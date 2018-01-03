<!doctype html>
<html lang="ru">
<head>
	<title>HW3-3-2</title>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  $num = $_POST['num'];
  $current = 1;
  $arr =[];
  $prev = 0;
  while ($current <= $num){
    $arr[] = $current;
    $temp = $current;
    $current += $prev;
    $prev = $temp;
  }

  
?>

<div class="container">
	<div id="solution">
		<h4>Список чисел Фибоначчи менне числа <?= $num;?> <br>
			<?php foreach ($arr as $number){?>
      <span class="result"><?= $number;?>, </span>
			<?php }?>
    </h4>
		
		<div class="try-again">
			<a href="index.php">Проверить другое число</a>
		</div>
  </div>


</div>
</body>
</html>