	<h2 class="section-heading calm-voice">OnFleet</h2>

	<section class="project-info">
		<h3 class="calm-voice">Source:
			<a href="https://onfleet.com/pricing" target="_blank">Onfleet Pricing Panel</a>
		</h3>
		<!--         <h3 class="calm-voice"> Read the
		<a href="https://alexvong.substack.com/p/responsive-layout-challenge-day-1" target="_blank">Case Study</a>
		</h3> -->
	</section>


	<section class="container">

		<inner-column>


			<?php include("data.php") ?>

			<?php foreach($onfleet as $item) { ?>
				<price-card-container class="<?=$item["level"]?>">
					<price-card class="<?=$item["level"]?>">
						<picture>
							<img src="<?=$item["image"]?>" alt="">
						</picture>

						<card-data>
							<h2 class="attention-voice">
								<?=$item["level"]?>
							</h2>
							<p class="quiet-voice">
								Starts at
								<span><?=$item["price"]?></span>
							</p>

							<p class="calm-voice"><?=$item["card-text"]?></p>

							<button><?=$item["button-text"]?></button>
							
						</card-data>
					</price-card>
				</price-card-container>

			<?php } ?>
		</inner-column>
		
	</section>