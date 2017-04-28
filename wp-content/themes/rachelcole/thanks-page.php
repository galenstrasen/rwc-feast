<?php
/*
Template Name: Thank You Page
*/
?>

<?php while (have_posts()) : the_post(); ?>

<!-- Kill Grid/Container/etc. -->
</div>
	</div>
<!-- End Kill -->

<div class="one" style="height: 100vh">
	<div class="container">
		<div class="row navtop">
			<a href="http://rachelwcole.com/" target="_blank">
			<div class="col-sm-12 backto">
				<img src="/wp-content/themes/rachelcole/assets/img/icon_arrow.png"> Return to RachelWCole.com
			</div>
			</a>
		</div>
		<div class="row vertical-center">
			<div class="col-sm-12 title">
				<h1 style="font-size: 55px; font-family: "soleil",sans-serif;">Thank You!</h1>
				<p style="font-family: 'adobe-garamond-pro', sans-serif; font-size: 30px;">An email confirmation is on its way.</p>
				<div class="littleline"></div>
			</div>
		</div>
	</div>
</div>

<?php endwhile; ?>
