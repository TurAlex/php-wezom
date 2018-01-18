<!-- page section -->

<section class="page-section">
	<div class="container align-center">
		<h3 class="section-title bottom-line font-alt"><?= $header;?><span>We are Open for You</span></h3>
		<p>Donec rhoncus diam in lectus finibus, eget ultrices urna commodo. Fusce dignissim lobortis erat, tristique lobortis justo imperdiet at. Aliquam congue orci non pulvinar gravida. Etiam consequat, odio at ultricies pharetra, purus elit tristique magna, ut imperdiet tortor orci vel libero. </p>
		
		<!-- pricing table items -->
		
  
  
		<div class="row mt-30">
			
		
			
			<div class="col-sm-12">
        <dl class="accordion we-forms">
            <?php $submit = ($_POST['submit']) ? (int) $_POST['submit'] : 1;?>
            <dt>
              <a href="#" class="<? echo ($submit == 1) ? 'active' : '';?>">Таблица умножения<i class="plus-minus"></i></a>
            </dt>
            <dd style="display: <? echo ($submit == 1) ? 'block' : 'none';?>;" >
              <div class="forms-title"><span>Данные для отрисовки таблицы</span></div>
	            <?php
              if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	              $cols = abs((int) $_POST['cols']);
	              $rows = abs((int) $_POST['rows']);
	              $colors = trim(strip_tags($_POST['colors']));
              }
	            $cols = ($cols) ? $cols : 10;
	            $rows = ($rows) ? $rows : 10;
	            $colors = ($colors) ? $colors : 'yellow';
              ?>
              
              <form class="form" action="<?php $_SERVER['REQUEST_URI']?>" method="post">
                <label><span>Количество колонок</span>
                  <input type="number" class="input-md mb-20" value="<?= $cols; ?>" name="cols" >
                </label>
                <label><span>Количество строк:</span>
                  <input type="number" class="input-md mb-20" value="<?= $rows; ?>" name="rows" >
                </label>
                <label><span>Цвет:</span>
                  <input type="text" class="input-md mb-20" value="<?= $colors; ?>" name="colors">
                </label>
                
                <button class="button small" name="submit" type="submit" value="1">Нарисовать таблицу</button>
              </form>
              <?php drawTable($cols, $rows, $colors);?>
            </dd>
            <dt>
              <a href="#" class="<? echo ($submit == 2) ? 'active' : '';?>">Калькулятор школьника<i class="plus-minus"></i></a>
            </dt>
            <dd style="display: <? echo ($submit == 2) ? 'block' : 'none';?>;" class="calculator">
              <div class="forms-title"><span>Калькулятор</span></div>
	            <?php
	            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		            $num1 = abs((int) $_POST['num1']);
		            $num2 = abs((int) $_POST['num2']);
		            $operator = preg_replace('/[^\-\*\/\+]/','',$_POST['operator']){0} ;
	            }
	            $num1 = ($num1 || $num1 === 0 ) ? $num1 : '0';
	            $num2 = ($num2 || $num2 === 0) ? $num2 : '0';
	            $operator = ($operator) ? $operator : '*';
	            ?>

              <form class="form" action="<?php $_SERVER['REQUEST_URI']?>" method="post">
                <label><span>Число 1:</span>
                  <input type="number" class="input-md mb-20" value="<?= $num1; ?>" name="num1" >
                </label>
                <label><span>Оператор: </span>
                  <input type="text" class="input-md mb-20" value="<?= $operator; ?>" name="operator" >
                </label>
                <label><span>Число 2: </span>
                  <input type="number" class="input-md mb-20" value="<?= $num2; ?>" name="num2">
                </label>
                
                <button class="button small" name="submit" type="submit" value="2">Посчитать</button>
              </form>
	            <?php
             if ($num2 === 0 && $operator == '/')
               echo "На ноль делить нельзя";
             else {
              $result = 0;
              switch ($operator) {
	              case  '+': $result = $num1 + $num2; break;
	              case  '-': $result = $num1 - $num2; break;
	              case  '*': $result = $num1 * $num2; break;
	              case  '/': $result = $num1 / $num2; break;
              }
	            echo "Результат $num1 $operator $num2 = $result";
             }
              
              ?>
            </dd>
          </dl>
			</div>
		</div>
		
		
	</div>
</section>

<!-- /page section -->

<hr class="mt-0 mb-0 alt-2">

