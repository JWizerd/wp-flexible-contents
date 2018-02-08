<?php  
	$hero_h  = get_sub_field('hero_h');
	$hero_sh  = get_sub_field('hero_sh');
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">

				<?php if ($hero_h): ?>
					<h1><?= $hero_h; ?></h1>
				<?php endif ?>

				<?php if ($hero_sh): ?>
					<h2><?= $hero_sh; ?></h2>
				<?php endif ?>

				<?php if (have_rows('buttons')): ?>
					<?php while(have_rows('buttons')): the_row(); ?>

						<?php 
							$t = get_sub_field('title');
							$l = get_sub_field('link');
							$bt = get_sub_field('button_type');
						?>
						
						<a href="<?= $l; ?>" 
               class="btn <?= ($bt == 'Hollow') ? 'btn-hollow' : 'btn-primary'; ?>">
							
							<?= $t; ?>

					  </a>
					
						
					<?php endwhile; ?>
				<?php endif ?>

			</div>
		</div>
	</div>
</section>