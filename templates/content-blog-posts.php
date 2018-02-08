<?php if (get_sub_field('show_posts')): ?>

	<section class="posts-showcase">
		<div class="container">
			<div class="row">

				<?php get_template_part('templates/content-blog-posts-loop-featured'); ?>
				
				<?php get_template_part('templates/content-blog-posts-loop-general'); ?>

			</div>
		</div>
	</section>

<?php endif ?>