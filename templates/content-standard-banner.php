<?php  
	$hero_bg = get_sub_field('hero_bg');
?>


<section class="standard-banner banner" 
         style="<?php if ($hero_bg) : ?>
                  background: url(<?= $hero_bg; ?>) bottom center / cover no-repeat; 
                <?php endif; ?>">
	
	<?php get_template_part('templates/content-banner-inner'); ?>

</section>