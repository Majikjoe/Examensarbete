<?php get_header() ?>

<div>
    <?php if(have_posts()) : ?>
    
        <?php woocommerce_content(); ?>
    
    <?php endif; ?>
</div>

<?php get_footer() ?>