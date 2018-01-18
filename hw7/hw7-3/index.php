<!doctype html>
<html lang="ru">
<head>
	<title>HW7-3</title>
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
		width: 100px;
		text-align: right;
	}
	sub{
		font-size: smaller;
	}
</style>

<div class="container" style="width:auto; margin: 0 auto; text-align: center; padding:  0 50px">
<h1>Задача 7-3</h1>
<p>Написать функцию которая принимает переданное 6-значное число из формы, и определяет совпадают ли первые 3 цифры с последними. Если условие выполняется, то выводится сообщение об успехе, иначе о неудаче
</p>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
  $num = (int) $_POST['num'];
?>
	<?php
    function luckyNum($num) {
      $num = (string) $num;
      if (strlen($num) != 6)
        return 3 ;
      for($i = 0; $i < 3; $i++)
        if ($num{$i} != $num{$i + 3})
          return 2;
      return 1;
    }
  ?>

  <form action="index.php" method="post" style="display: inline-block">
    <label><span>Введите шестизначное число</span>
    <input type="number" class="input-md mb-20" value="<?= $num; ?>" name="num" >
    </label>
    <?php //ADD value to submit for step input?>
    <button type="submit">GO</button>
  </form>
	
	<?php
	 
  if($num || $num === 0) :
  
    switch (luckyNum($num)){
      case 3 :
        $result = 'Вы ввели неправельную цифру';
        $color = 'red';
        break;
      case 2 :
        $result = 'Увы! Первые три числа не совпадают с послденими!';
        $color = 'red';
        break;
      case 1 :
        $result = 'УРА! Первые три числа совпадают с поседними';
        $color = 'darkgreen';
        break;
      default:
        $result = NULL;
        $color = NULL;
    }
    ?>
    <div style="margin: 40px 0 0; font-size: 24px; color: <?= $color?>; font-weight: bold"><span><?= $result;?></span></div>
    
  <?php endif;?>
  
 
</div>
</body>
</html>
