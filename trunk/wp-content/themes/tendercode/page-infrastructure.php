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
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.reveal.js"></script>
    <article class="grid col-940 blk-link-home infra-p">
        <?php while( have_posts()) : the_post();?>
        
        <header><h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1></header>
            <div class="left-divers grid col-300 fit">
                <p><?php the_content();?></p>
            </div>
            <div class="right-divers grid col-540 fit">
                <div class="wp-struct">
                    <?php if(has_post_thumbnail()):?>
                        <?php the_post_thumbnail('full');?>
                    <?php endif;?>
                    <div class="menu-struct">
                        <a href="#" class="poppup1"  data-reveal-id="poppup1" data-animation="fade">poppup1</a>
                        <a href="#" class="poppup2"  data-reveal-id="poppup2" data-animation="fade">poppup2</a>
                        <a href="#" class="poppup3"  data-reveal-id="poppup3" data-animation="fade">poppup3</a>
                        <a href="#" class="poppup4"  data-reveal-id="poppup4" data-animation="fade">poppup4</a>
                        <a href="#" class="poppup5"  data-reveal-id="poppup5" data-animation="fade">poppup5</a>
                        <a href="#" class="poppup6"  data-reveal-id="poppup6" data-animation="fade">poppup6</a>
                        <a href="#" class="poppup7"  data-reveal-id="poppup7" data-animation="fade">poppup7</a>
                        <a href="#" class="poppup8"  data-reveal-id="poppup8" data-animation="fade">poppup8</a>
                        <a href="#" class="poppup9"  data-reveal-id="poppup9" data-animation="fade">poppup9</a>
                        <a href="#" class="poppup10"  data-reveal-id="poppup10" data-animation="fade">poppup10</a>
                        <a href="#" class="poppup11"  data-reveal-id="poppup11" data-animation="fade">poppup11</a>
                        <a href="#" class="poppup12"  data-reveal-id="poppup12" data-animation="fade">poppup12</a>
                        <a href="#" class="poppup13"  data-reveal-id="poppup13" data-animation="fade">poppup13</a>
                        <a href="#" class="poppup14"  data-reveal-id="poppup14" data-animation="fade">poppup14</a>
                        <a href="#" class="poppup15"  data-reveal-id="poppup15" data-animation="fade">poppup15</a>
                        <a href="#" class="poppup16"  data-reveal-id="poppup16" data-animation="fade">poppup16</a>
                        <a href="#" class="poppup17"  data-reveal-id="poppup17" data-animation="fade">poppup17</a>
                        <a href="#" class="poppup18"  data-reveal-id="poppup18" data-animation="fade">poppup18</a>
                        <a href="#" class="poppup19"  data-reveal-id="poppup19" data-animation="fade">poppup19</a>
                        <a href="#" class="poppup20"  data-reveal-id="poppup20" data-animation="fade">poppup20</a>
                    </div>
                    <div class="ctn-struct">
                        <?php echo do_shortcode('[smartblock id=97]'); ?>
                    </div>
                </div>
            </div>
        
        <?php endwhile;?>
    </article>

<?php get_footer(); ?>