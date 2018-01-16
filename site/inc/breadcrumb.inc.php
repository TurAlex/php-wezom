<?php if ($id != ''):?>
	<!-- breadcrumb -->
	
	<section class="breadcrumb-section" data-background="images/section-bg/section-bg-4.jpg">
		<div class="container align-center">
			<nav class="breadcrumb">
				<a href="index.php">Главная</a>
				<a href="#">Страницы</a>
				<a href="#"><?= $title;?></a>
			</nav>
		</div>
	</section>
	
	<!-- /breadcrumb -->
	<hr class="mt-0 mb-0 alt-2" />


<?php else:?>
<div class="tp-banner-container">
	<div class="tp-banner-slider">
		<ul>
			
			<!-- slide revolution -->
			
			<li data-masterspeed="700">
				<img src="images/section-bg/slider-1.jpg" alt>
				<div class="tp-caption sl-content font-alt" data-x="['left']" data-hoffset="20" data-y="center" data-voffset="0"  data-width="['315px','250px','200px','150px']" data-height="['315px','250px','200px','150px']" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
					<div class="sl-title font-alt">Spa <br /> treatment</div>
					<div class="img-line">
						<img src="images/lines/img-line-8.png" data-at2x="images/lines/img-line-8@2x.png" alt>
					</div>
					<p>Unique Watercare <br /> System</p>
				</div>
				<div class="tp-caption sl-content font-alt" data-x="['right']" data-hoffset="20" data-y="['75']" data-voffset="0"  data-width="['315px','250px','200px','150px']" data-height="['315px','250px','200px','150px']" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
					<div class="sl-title font-alt">Something <br /> for everyone!</div>
					<div class="img-line">
						<img src="images/lines/img-line-8.png" data-at2x="images/lines/img-line-8@2x.png" alt>
					</div>
					<p>Spa Experience <br /> For You</p>
				</div>
			</li>
			
			<!-- /slide revolution -->
			
			<!-- slide revolution -->
			
			<li data-masterspeed="700">
				<img src="images/section-bg/slider-2.jpg" alt>
				<div class="tp-caption sl-content font-alt" data-x="['left']" data-hoffset="20" data-y="170" data-voffset="0"  data-width="['315px','250px','200px','150px']" data-height="['315px','250px','200px','150px']" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
					<div class="sl-title font-alt">Spa <br /> treatment</div>
					<div class="img-line">
						<img src="images/lines/img-line-8.png" data-at2x="images/lines/img-line-8@2x.png" alt>
					</div>
					<p>Unique Watercare <br /> System</p>
				</div>
				<div class="tp-caption sl-content font-alt" data-x="['right']" data-hoffset="20" data-y="center" data-voffset="0"  data-width="['315px','250px','200px','150px']" data-height="['315px','250px','200px','150px']" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
					<div class="sl-title font-alt">Something <br /> for everyone!</div>
					<div class="img-line">
						<img src="images/lines/img-line-8.png" data-at2x="images/lines/img-line-8@2x.png" alt>
					</div>
					<p>Spa Experience <br /> For You</p>
				</div>
			</li>
			
			<!-- /slide revolution -->
			
			<!-- slide revolution -->
			
			<li data-masterspeed="700" data-transition="fade">
				<img src="images/section-bg/slider-3.jpg" alt>
				<div class="tp-caption sl-content font-alt" data-x="['left']" data-hoffset="20" data-y="center" data-voffset="0"  data-width="['315px','250px','200px','150px']" data-height="['315px','250px','200px','150px']" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
					<div class="sl-title font-alt">Spa <br /> treatment</div>
					<div class="img-line">
						<img src="images/lines/img-line-8.png" data-at2x="images/lines/img-line-8@2x.png" alt>
					</div>
					<p>Unique Watercare <br /> System</p>
				</div>
				<div class="tp-caption sl-content font-alt" data-x="['right']" data-hoffset="20" data-y="150" data-voffset="0"  data-width="['315px','250px','200px','150px']" data-height="['315px','250px','200px','150px']" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
					<div class="sl-title font-alt">Something <br /> for everyone!</div>
					<div class="img-line">
						<img src="images/lines/img-line-8.png" data-at2x="images/lines/img-line-8@2x.png" alt>
					</div>
					<p>Spa Experience <br /> For You</p>
				</div>
			</li>
			
			<!-- /slide revolution -->
		
		</ul>
	</div>
	<div class="slider-rect-bot">
		<img src="images/lines/rectangle-2.png" data-at2x="images/lines/rectangle-2@2x.png" alt>
	</div>
</div>
<?php endif;?>
