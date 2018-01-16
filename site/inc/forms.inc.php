<!-- page section -->

<section class="page-section">
	<div class="container align-center">
		<h3 class="section-title bottom-line font-alt"><?= $header;?><span>We are Open for You</span></h3>
		<p>Donec rhoncus diam in lectus finibus, eget ultrices urna commodo. Fusce dignissim lobortis erat, tristique lobortis justo imperdiet at. Aliquam congue orci non pulvinar gravida. Etiam consequat, odio at ultricies pharetra, purus elit tristique magna, ut imperdiet tortor orci vel libero. </p>
		
		<!-- pricing table items -->
		
  
  
		<div class="row mt-30">
			
		
			
			<div class="col-sm-12">
				
          <dl class="accordion we-forms">
	          <?php $tab_num = $_POST['tub_num'];?>
            <dt>
              <a href="#" class="<? echo ($tab_num == 1) ? 'active' : '';?>">Таблица умножения<i class="plus-minus"></i></a>
            </dt>
            <dd style="display: <? echo ($tab_num == 1) ? 'block' : 'none';?>;" >
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
                <input type="text" style="display: none" name="tab_num" value = "1">
                <button class="button small" name="submit" type="submit">Нарисовать таблицу</button>
              </form>
              <?php drawTable($cols, $rows, $colors);?>
            </dd>
            <dt>
              <a href="#" class="<? echo ($tab_num == 2) ? 'active' : '';?>">Калькулятор школьника<i class="plus-minus"></i></a>
            </dt>
            <dd style="display: <? echo ($tab_num == 1) ? 'block' : 'none';?>;">
              <div class="forms-title"><span>Данные для отрисовки таблицы</span></div>
	            <?php
	            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		            $num1 = abs((int) $_POST['num1']);
		            $num2 = abs((int) $_POST['num2']);
		            $operator = substr( preg_replace('\+\*/-','',strip_tags($_POST['$operator'])),0,1);
	            }
	            $num1 = ($num1) ? $num1 : 1;
	            $num2 = ($num2) ? $num2 : 1;
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
                <input type="text" style="display: none" name="tab_num" value = "2">
                <button class="button small" name="submit" type="submit">Нарисовать таблицу</button>
              </form>
	            <?php
             if ($num2 == 0)
               echo "На ноль делить нельзя";
             else {
              $result = 0;
              switch ($operator) {
	              case  '+': $result = $num1 + $num2; break;
	              case  '-': $result = $num1 - $num2; break;
	              case  '*': $result = $num1 * $num2; break;
	              case  '/': $result = $num1 / $num2; break;
              }
              
              
             }
              
              ?>
	            <?php echo "Результат $num1 $operator $num1 = $result"; ?>
            </dd>
           
          </dl>
			
			</div>
			
			<!-- /pricing item -->
			
			
		
		</div>
		
		<!-- /pricing table items -->
	
	</div>
</section>

<!-- /page section -->

<hr class="mt-0 mb-0 alt-2">

