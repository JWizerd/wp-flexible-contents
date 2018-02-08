<?php 

$args = [
	'post_type' => 'post',
  'orderby' => 'date',
  'order' => 'DESC',
  'posts_per_page' => 3
];

$query = new WP_Query($args);

/**
 * Change layout of posts snippet if no featured posts are set
 */
$feat_args = [
  'post_type' => 'post',
  'category_name' => 'featured'
];

$feat_posts = new WP_Query($feat_args);

?>
<div class="<?= $feat_posts->have_posts() ? 'col-md-8' : 'col-sm-12' ?> non-featured-post-snippets">

	<?php if( $query->have_posts() ): ?>

    <?php while($query->have_posts()) : $query->the_post(); ?>

    	<?php if (!has_category('Featured')): ?>

        <div class="col-sm-12 post-snippet">

          <div class="post-snippet-inner">

          	<div class="post-image col-xs-4">

                <a href="<?php the_permalink(); ?>">
                  <span>Read Article</span>
                  <?php if (has_post_thumbnail()): ?>
                    <img class="img-responsive" src="<?php the_post_thumbnail_url('medium'); ?>" alt="">
                  <?php else: ?>
                    <img class="img-responsive" src="<?= get_stylesheet_directory_uri(); ?>/img/post-thumb-default.jpg" alt="">
                  <?php endif; ?>
                </a>
                
          	</div><!-- post image -->
              
            <div class="post-excerpt-content col-xs-8">

            	<h2><?php the_title(); ?></h2>
            	<p><?php mad_the_excerpt(30); ?></p>
            
              <span class="post-details">
                <?php the_author(); ?> 
                <span>|</span> 
                <?= get_the_date(); ?>
              </span>

            </div><!-- post excerpt content -->            

          </div><!-- post snippet inner -->

        </div><!-- post snippet -->

      <?php endif; ?>

    <?php endwhile; ?>

  <?php endif; ?>

	<?php wp_reset_postdata(); ?>
						
</div><!-- col md 8 -->