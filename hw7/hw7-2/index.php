<!doctype html>
<html lang="ru">
<head>
	<title>HW7-2</title>
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
  <h1>Задача 7-2</h1>
  <p>Написать функцию которая генерирует случайный пароль , в качестве аргумента принимает число определяющее длину пароля
  </p>
  
  
  <?php	$size = $_POST['size'];?>
	<?php
    function generatePass($size){
      // ASCII chars (0 - 0:9, 1 - A:Z, 2 - a:z)
      $data_arr = [
        [48, 65, 97],
        [57, 90, 122]
      ];
      
      $password = '';
      for ($i = 0; $i < $size; $i++){
        $first = rand(0,2);
        $password .= chr(rand($data_arr[0][$first], $data_arr[1][$first]));
      }
      return $password;
    }
  ?>

  <form action="index.php" method="post" style="display: inline-block">
    <label><span>Введите длину пароля</span>
    <input type="number" class="input-md mb-20" value="<?= $size; ?>" name="size" >
    </label>
    <?php //ADD value to submit for step input?>
    <button type="submit">GO</button>
  </form>
	
	<?php if($size) :?>
	  <div><span>Сенерированый пароль - <?= generatePass($size);?></span></div>
	<?php endif;?>
	
 
</div>
</body>
</html>
