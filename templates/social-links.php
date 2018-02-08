<?php if(have_rows('social_links', 'option')): ?>

  <?php while(have_rows('social_links', 'option')) : the_row(); ?>
  
    <a class="social-link" href="<?= get_sub_field('link'); ?>"><i class="<?= get_sub_field('icon'); ?>"></i></a>

  <?php endwhile; ?>

<?php endif; ?>