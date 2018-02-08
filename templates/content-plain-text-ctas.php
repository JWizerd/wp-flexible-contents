<?php if (have_rows('call_to_actions')): $i = 0; ?>

	<section class="plain-text-ctas">

		<div class="container">
			<div class="row">

				<?php while(have_rows('call_to_actions')): the_row(); $i++; ?>

					<?php  
						$t  = get_sub_field('p_cta_title');
						$i  = get_sub_field('p_cta_icon');
						$l  = get_sub_field('p_cta_link');
						$d  = get_sub_field('p_cta_description');
						$lt = get_sub_field('p_cat_link_title');
					?>

					<div class="col-md-4" id="pt-cta-<?= $i; ?>">
						
						<div class="pt-cta-title">
							<?php if ($i): ?>
								<img src="<?= $i['url']; ?>" alt="<?= $i['alt']; ?>">
							<?php endif ?>

							<h2><?= $t; ?></h2>
							
							<p>

								<?= $d; ?>

								<?php if ($l): ?>

									<a href="<?= $l; ?>">...<?= $lt; ?></a>
									
								<?php endif ?>		
								
							</p>
							
						</div>

					</div>

				<?php endwhile; ?>
				
			</div>
		</div>

	</section>

<?php endif ?>