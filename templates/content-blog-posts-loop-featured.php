<?php 

$args = [
	'post_type' => 'post',
	'category_name' => 'featured',
	'orderby' => 'date',
	'order' => 'DESC',
	'posts_per_page' => 2
];

$featured = new WP_Query($args);

?>

<?php if( $featured->have_posts() ): ?>

		<div class="col-md-4 featured-post-snippets">

	    <?php while($featured->have_posts()) : $featured->the_post(); ?>

				<div class="col-sm-12 post-snippet">

						<div class="post-image-featured" 
						     style="
						     	background: 

		     	     		linear-gradient(
		     						rgba(102, 102, 102, .6),
		     	     			rgba(102, 102, 102, .6)
		     	     		),

						     	url(

						        <?php if (has_post_thumbnail()): ?> 

						           <?php the_post_thumbnail_url('medium'); ?>

                    <?php else: ?>

                    	 <?= get_stylesheet_directory_uri() ?>/img/post-thum-featurd-default.jpg

                    <?php endif; ?>

						      ) top center / cover no-repeat;">

						  <div class="featured-text">

						  	<h2>
						  		<?= mad_limit_string_words(get_the_title(), 13); ?>
						  	</h2>

						  	<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
						  	
						  </div>

						</div>

				</div>

	    <?php endwhile; ?>

		  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

	  </div><!-- col md 4 -->

<?php endif; ?>