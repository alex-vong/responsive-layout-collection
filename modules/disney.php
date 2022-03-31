	<h2 class="section-heading calm-voice">Disney</h2>

	<section class="project-info">
		<h3 class="calm-voice">Source:
			<a href="https://disney.com" target="_blank">Disney</a>
		</h3>
		<!--         <h3 class="calm-voice"> Read the
		<a href="https://alexvong.substack.com/p/responsive-layout-challenge-day-1" target="_blank">Case Study</a>
		</h3> -->
	</section>


	<section class="container">

		<h2 class="intro-voice">Trending on Disney+</h2>

		<div class="movie-grid">
		<?php include('data.php') ?>

		<?php 
		foreach ($disney as $film) { ?>

			<div class="movie-card">
				<picture>
					<img src="<?=$film["movie-poster"]?>" alt="">
				</picture>

					<h3 class="calm-voice"><?=$film["movie-title"]?></h3>

					<p class="quiet-voice"><?=$film["movie-description"]?></p>

					<a href="" class="quiet-voice">Stream Now</a>
				</div>
	

		 <?php  } ?>


		</div>
 	</section>