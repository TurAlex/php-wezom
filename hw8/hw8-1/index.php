<!doctype html>
<html lang="ru">
<head>
  <title>HW8-1</title>
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

  }
  sub{
    font-size: smaller;
  }
</style>

<div class="container" style="width:auto; margin: 0 auto; text-align: center; padding:  0 50px">
  <h1>Задача 8-1</h1>
  <p>Написать программу(скрипт) которая передает текстовый файл из html-формы, загруженный файл помещается в каталог «uploads», если файл с таким именем уже существует, то его необходимо сохранить под другим именем. После того как файл был загружен все его содержимое нужно записать в файл «log.txt», сохранив при этом информацию которая в нем содержится.</p>

  <form enctype="multipart/form-data" action="" method="post">
    <input type="file" name="upload_file">
    <input type="submit" value="Загрузить выбранный файл">
  </form>
	
	
	<?php
	if($_FILES['upload_file']['error'] === 0) {
		$dir_name = 'upload';
		$success = 0;
		
		if ( ! file_exists( $dir_name ) ) {
			if (mkdir( 'upload' ))
				$success++;
			else
				echo '<div style="margin: 30px 0 0">Не удалось создать папку upload </div>';
		} else
			$success++;
		
		
		
		// get temp name
		$temp_file = $_FILES['upload_file']['tmp_name'];
		
		// get name and extention of uploaded file
		$uf           = $_FILES['upload_file']['name'];
		$uf_name      = pathinfo( $uf, PATHINFO_FILENAME );
		$uf_extension = pathinfo( $uf, PATHINFO_EXTENSION );
		// suffix for different naming if uploaded file already exists
		$suffix = '';
		$suffix_num = '';
		// part of creating new name for a file if it's the same
		while ( file_exists( "{$dir_name}/{$uf_name}{$suffix}.{$uf_extension}" ) ) {
			$suffix_num = (int)$suffix_num + 1;
			$suffix = '_' . $suffix_num;
		}
		$new_file_destination = "{$dir_name}/{$uf_name}{$suffix}.{$uf_extension}";
		
		// move file to 'upload' folder
		if (move_uploaded_file( $temp_file,$new_file_destination)) {
			echo '<div style="margin: 30px 0 0">Новое расположение и имя файла : ' . $new_file_destination . '</div>';
			$success++;
		}else
			echo '<div style="margin: 30px 0 0">Не удалось поместить файл в папку upload</div>';
		
		
		
		// open and get data from uploaded file
		$new_file = fopen( $new_file_destination, 'r');
		$string = fgets($new_file);
		fclose($new_file);
		if ($string){
			$success++;
		} else
			echo '<div style="margin: 30px 0 0">Не смогли прочитать данные из файла или файл пустой</div>';
		
		
		//LOG
		//create log file if not exist
		if (!file_exists('log.txt')) {
			$log_file = fopen( 'log.txt', "w" );
			fwrite( $log_file, '----------------start log-------------------' );
			fclose( $log_file );
		}
		
		// add some info to each log record and put last record to first position
		$string =
			"----------------------log-------------------\n"
			. 'Date          : ' . date('Y-m-d H-i-s') . "\n"
			. 'Uploaded file : ' . $uf . "\n"
			. 'New name      : ' . "{$new_file_destination}\n"
			. "Content       : \n"
			. $string . "\n"
			. file_get_contents('log.txt');
		
		if(file_put_contents('log.txt', $string)) {
			echo '<div style="margin: 30px 0 0">Лог обновлен</div>';
			$success++;
		}
		else
			echo '<div style="margin: 30px 0 0">Не получилось обновить лог</div>';
		
		if ($success == 4)
			echo '<div style="margin: 30px 0 0">Все получилось</div>';
		else
			echo '<div style="margin: 30px 0 0">Что то пошло не так</div>';
		
	} else if($_FILES['upload_file']['error'] === NULL)
		echo '<div style="margin: 30px 0 0">Ждем загрузки файла</div>';
	else
		echo "<div style=\"margin: 30px 0 0\">Ошибка при загрузке файла</div>";
	
	
	
	?>

</div>
</body>
</html>
