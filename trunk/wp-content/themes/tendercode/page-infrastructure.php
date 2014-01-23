<?php
/**
 * Template Name: Infrastructure Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Code_Tender
 * @since Code Tender 1.0
 */
get_header();
?>
    <article class="grid col-940 blk-link-home infra-p">
        <?php while( have_posts()) : the_post();?>
        
        <header><h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1></header>
            <div class="left-divers grid col-300 fit">
                <p><?php the_content();?></p>
            </div>
            <div class="right-divers grid col-540 fit">
                <?php if(has_post_thumbnail()):?>
                    <?php the_post_thumbnail('full');?>
                <?php endif;?>
            </div>
        
        <?php endwhile;?>
    </article>

<?php get_footer(); ?>