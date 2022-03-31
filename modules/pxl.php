 <h2 class="section-heading calm-voice">PXL</h2>

 <section class="project-info">
    <h3 class="calm-voice">Source:
         <a href="https://www.pxlagency.com/pxl-products" target="_blank">PXL Angency/PXL Products</a>
<!--     </h3>
        <h3 class="calm-voice"> Read the
         <a href="https://alexvong.substack.com/p/responsive-layout-challenge-day-1" target="_blank">Case Study</a>
    </h3> -->
 </section>


<section class="container">




		<section class="pxl-card-grid">
	<?php include('data.php') ?>

	<?php foreach ($pxlData as $pxl) { ?>

			<section class="pxl-cards <?=$pxl["id"]?>">
				<picture>
					<img src="<?=$pxl["pxl-image"]?>" alt="">
				</picture>

				<div class="pxl-card-details">
					<h2 class="attention-voice"><?=$pxl["pxl-header"]?></h2>

					<?php 
						if ( $pxl["pxl-body-text2"] ) { ?>
							<p class='quiet-voice'><?=$pxl["pxl-body-text"]?></p>
							<p class="quiet-voice"><?=$pxl["pxl-body-text2"]?></p>

					<?php } else { ?>
							<p class='quiet-voice'><?=$pxl["pxl-body-text"]?></p>

					<?php }
					 
					 ?>
				</div>
			</section>
	

	<?php } ?>
	</section>
</section>