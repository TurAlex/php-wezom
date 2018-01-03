<?php
$top_menu = [
	['link' => 'Главная', 'href' => 'index.php'],
	['link' => 'Цены', 'href' => 'pricing-tables.php'],
	['link' => 'Бронирование', 'href' => 'reservation.php'],
	['link' => 'Услуги', 'href' => 'services.php'],
	['link' => 'Контакты', 'href' => 'contact.php'],
	['link' => 'Шорткоды', 'href' => 'shortcodes.php'],
 
];


?>
<header class='sticky-header js-stick top-fixed'>
	<div class="container">
		<nav class="main-nav">
			<div class="full-wrapper align-center">
				
				<!-- logo sticky -->
				
				<div class="nav-logo-wrap-sticky">
					<a href="index.php" class="logo">
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
              <a href="<?= $top_menu[0]['link'];?>" class="logo">
                <img src="images/logo.png" data-at2x="images/logo@2x.png" alt>
              </a>
            </li>

            <!-- / logo menu -->
            <li>
							<a href="<?= $top_menu[0]['href'];?>" class="active"><?= $top_menu[0]['link'];?></a>
						</li>
					
					  <li class="sep"><a>/</a></li>
            <li>
              <a href="<?= $top_menu[1]['href'];?>"><?= $top_menu[1]['link'];?></a>
            </li>
            <li class="sep"><a>/</a></li>
            <li>
              <a href="<?= $top_menu[2]['href'];?>"><?= $top_menu[2]['link'];?></a>
            </li>
            <li class="sep"><a>/</a></li>
            <li>
              <a href="<?= $top_menu[3]['href'];?>"><?= $top_menu[3]['link'];?></a>
            </li>
            <li class="sep"><a>/</a></li>
						<li>
							<a href="<?= $top_menu[4]['href'];?>"><?= $top_menu[4]['link'];?></a>
						</li>
            <li class="sep"><a>/</a></li>
            <li>
              <a href="<?= $top_menu[5]['href'];?>"><?= $top_menu[5]['link'];?></a>
            </li>
           
           
					</ul>
					<div class="menu-rect">
						<img src="images/lines/rectangle-1.png" data-at2x="images/lines/rectangle-1@2x.png" alt>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>