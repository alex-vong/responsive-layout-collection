	<h2 class="section-heading calm-voice">Upgrade</h2>

	<section class="project-info">
		<h3 class="calm-voice">Source:
			<a href="https://www.upgrade.com/upgrade-card/" target="_blank">Upgrade</a>
		</h3>
		<!--         <h3 class="calm-voice"> Read the
		<a href="https://alexvong.substack.com/p/responsive-layout-challenge-day-1" target="_blank">Case Study</a>
		</h3> -->
	</section>


	<section class="container">

		<h2 class="intro-voice">Find the Upgrade Card That's Right for You</h2>

		<div class="rewards-card-grid">


		<?php include('data.php') ?>

		<?php 
		foreach ($rewards as $reward) { ?>

			<div class="rewards-card">

				<div class="card-container">
					<picture>
						<img src="<?=$reward["card-image"]?>" alt="">
					</picture>

					<div class="card-data">
						<p class="quiet-voice"><?=$reward["card-caption"]?></p>
						<h3 class="attention-voice"><?=$reward["card-heading"]?></h3>
						<p class="calm-voice"><?=$reward["card-subheading"]?></p>
						<p class="calm-voice"><?=$reward["more-info"]?></p>

					</div>
				</div>

				<button><a href="">Get Started</a></button>

				<p class="calm-voice fees"><?=$reward["fees"]?></p>
			</div>

		 <?php  } ?>


		</div>
 	</section>