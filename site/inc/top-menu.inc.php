<?php
$menu = [
	['link' => 'Главная', 'href' => 'index.php'],
	['link' => 'Цены', 'href' => 'index.php?id=pricing-tables'],
	['link' => 'Бронирование', 'href' => 'index.php?id=reservation'],
	['link' => 'Услуги', 'href' => 'index.php?id=services'],
	['link' => 'Контакты', 'href' => 'index.php?id=contact'],
	['link' => 'Формы', 'href' => 'index.php?id=forms']
];

function drawMenu($menu, $horizontal = 1) {
  if ($horizontal){
    $last_menu_item = array_pop($menu);
    foreach ($menu as $menu_item){
      echo  '<li>';
      echo   '<a href="'.$menu_item['href'].'" class="active">'.$menu_item['link'].'</a>';
      echo  '</li>';
      echo  '<li class="sep"><a>/</a></li>';
    }
    echo  '<li>';
    echo   '<a href="'.$last_menu_item['href'].'" class="active">'.$last_menu_item['link'].'</a>';
    echo  '</li>';
  } else {
	  foreach ($menu as $menu_item){
		  echo  '<li>';
		  echo   '<a href="'.$menu_item['href'].'" class="active">'.$menu_item['link'].'</a>';
		  echo  '</li>';
	  }
  }
}




?>
<header class='sticky-header js-stick top-fixed'>
	<div class="container">
		<nav class="main-nav">
			<div class="full-wrapper align-center">
				
				<!-- logo sticky -->
				
				<div class="nav-logo-wrap-sticky">
					<a href="../index.php" class="logo">
						<img src="images/logo.png" data-at2x="images/logo@2x.png" alt>
					</a>
				</div>
				
				<!-- / logo sticky -->
				
				<!-- menu mobile bars -->
				
				<div class="mobile-nav">
					<i class="fa fa-bars"></i>
				</div>
				
				<!-- / menu mobile bars -->
				
				<div class="inner-nav desktop-nav">
					<ul class="clearlist">
            <!-- logo menu -->
            <li class="nav-logo-wrap">
              <a href="<?= $menu[0]['link'];?>" class="logo">
                <img src="images/logo.png" data-at2x="images/logo@2x.png" alt>
              </a>
            </li>
            <!-- / logo menu -->
						<?php drawMenu($menu)?>
            
            
					</ul>
					<div class="menu-rect">
						<img src="images/lines/rectangle-1.png" data-at2x="images/lines/rectangle-1@2x.png" alt>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>