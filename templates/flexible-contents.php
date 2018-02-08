<?php if (get_field('body_background')) : ?>
	<style>
		body {
			background: url(<?php the_field('body_background'); ?>) top center no-repeat;
		}

		.header {
		  background: transparent;
		}

		.header, .header a {
			color: white;
		}

		.top-adjustment {
			margin-bottom: 100px;
		}

		.main-nav .nav > li > a {
			color: white;
		}

		@media (max-width: 1199px) {
			.top-adjustment {
				margin-bottom: 0;
			}
		}

	</style>
<?php endif; ?>

<div id="flexible-contents">

	<?php 
	// check if the flexible content field has rows of data
	if( get_field('sections') ):

			$last_section = array_pop(get_field('sections'));
			$first_section = array_shift(get_field('sections'));

	 	  // loop through the rows of data
	    while ( has_sub_field('sections') ) :

	    	if ($last_section['acf_fc_layout'] == get_row_layout()) {
	    		echo '<div class="footer-adjustment">';
	    	}

	    	if ($first_section['acf_fc_layout'] == get_row_layout()) {
	    		echo '<div class="top-adjustment">';
	    	}

				  if( get_row_layout() == 'large_banner' ):

			    	get_template_part('templates/content-large-banner');

			    elseif( get_row_layout() == 'standard_banner' ): 

			    	get_template_part('templates/content-standard-banner');

			    elseif( get_row_layout() == 'plain_text_call_to_actions' ): 

			    	get_template_part('templates/content-plain-text-ctas');

			    elseif( get_row_layout() == 'graphic_call_to_actions' ): 

			    	get_template_part('templates/content-graphic-ctas');

			    elseif( get_row_layout() == 'blog_posts_showcase' ): 

			    	get_template_part('templates/content-blog-posts');

			    elseif( get_row_layout() == 'main_content' ):

			    	get_template_part('templates/content-main-content');

		      endif;

		    if ($first_section['acf_fc_layout'] == get_row_layout()) {
		    	echo '</div><!-- header adjustment -->';
		    }

	      if ($last_section['acf_fc_layout'] == get_row_layout()) {
	      	echo '<img class="footer-top" src="' . get_stylesheet_directory_uri() . '/img/bg-footer-top.png" alt="">';
	      	echo '</div><!-- footer adjustment -->';
	      }

	    endwhile;

	else :

	    // no layouts found

	endif;

	?>

</div><!-- flexible contents -->