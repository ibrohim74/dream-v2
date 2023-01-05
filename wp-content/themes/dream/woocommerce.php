<?php get_header()?>
    <div class="container">
        <h1><?php the_title()?></h1>

        <?php woocommerce_content()?>
    </div>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <?php the_content();?>
<?php endwhile; else: endif;?>
<?php get_footer() ?>