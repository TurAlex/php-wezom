<?php header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	
	<!-- FONTS -->
	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps' rel='stylesheet' type='text/css'>
	
	<!-- STYLESHEETS -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="css/vertical.min.css" rel="stylesheet" type="text/css">
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/ihover.css">
	<link rel="stylesheet" type="text/css" href="revslider/css/settings.css" media="screen">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	
	
	<title><?= $title;?></title>
</head>
<body>

<!-- PAGE -->

<div class="page" id="top">
	
	<!-- preloader -->
	
	<div id="preloader">
		<div class="preloader-wave"></div>
	</div>
	
	<!-- / preloader -->
	
	<!-- site top panel -->
	
	<div class="site-top-panel">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-8">
					<div class="tel-wrap">
						<address>
							<span><?php echo "Сегодня $day число ". iconv('cp1251', 'utf-8', $month). " месяц $year год.";?></span>
						</address>
					</div>
				</div>
				<div class="col-md-6 col-sm-4">
					<div class="lang-wrap">
						<div class="currency">
							<select name="billing_lang" class="cur-change">
								<option value="">USD</option>
								<option value="eur">EUR</option>
								<option value="gbp">GBP</option>
								<option value="au">AUD</option>
							</select>
						</div>
						<span>|</span>
						<div class="lang-bar">
							<div>
								<ul>
									<li>
										<a href="#" class="lang-sel icl-en">
											<img src="images/flag/us.png" class="icflag" alt>
											&nbsp;EN
										</a>
										<ul>
											<li class="icl-fr">
												<a href="#">
													<img src="images/flag/fr.png" class="icflag" alt>
													&nbsp;FR
												</a>
											</li>
											<li class="icl-de">
												<a href="#">
													<img src="images/flag/de.png" class="icflag" alt>
													&nbsp;DE
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
  <?php include( 'inc/top-menu.inc.php');?>
  <?php include ('inc/breadcrumb.inc.php');?>

