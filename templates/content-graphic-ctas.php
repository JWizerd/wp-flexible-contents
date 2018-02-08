<?php if (have_rows('call_to_actions')): $i = 0; ?>

	<section class="graphic-ctas">

		<?php while(have_rows('call_to_actions')): the_row(); $i++; ?>

			<?php  
				$l  = get_sub_field('g_cta_link');
				$h  = get_sub_field('g_cta_h');
				$sh = get_sub_field('g_cta_sh');
				$bg	= get_sub_field('g_cta_bg');
			?>

			<div class="g-cta" id="g-cta-<?= $i; ?>" style="background: url(<?= $bg; ?>) center center / cover no-repeat">
				<a href="<?= $l; ?>" class="g-cta-wrap">
					
					<div class="g-cta-text">
						<h2><?= $h; ?></h2>
						<p><?= $sh; ?></p>
					</div>

				</a>
			</div>
		
		<?php endwhile; ?>

	</section>
	
<?php endif ?>