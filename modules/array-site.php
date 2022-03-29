
		<h2 class="section-heading calm-voice">Array</h2>

		<section class="project-info">
			<h3 class="calm-voice">Source:
				<a href="https://www.arraylive.com/" target="_blank">Array</a>
			</h3>
			<!--         <h3 class="calm-voice"> Read the
			<a href="https://alexvong.substack.com/p/responsive-layout-challenge-day-1" target="_blank">Case Study</a>
			</h3> -->
		</section>


	<section class="container">

		<div class="array-title">
			<h2 class="attention-voice">Ready to Improve Your Company's Responsive Design by Hiring Alex?</h2>
		</div>
		<?php include("data.php") ?>

		<?php foreach($array as $item) { ?>

				<div class="<?=$item["id"]?> data">
					<picture>
						<img src="<?=$item["image"]?>" alt="">
					</picture>

					<text-box>
						<h3 class="attention-voice"><?=$item["card-heading"]?></h3>
						<p class="calm-voice"><?=$item["card-text"]?></p>
					</text-box>
				</div>

			<?php } ?>

		<button>Schedule a Meeting</button>

		
	</section>