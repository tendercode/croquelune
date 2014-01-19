<?php
/**
 * Template Name: Home Page
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

<div class="grid col-940">
    <div class="home-left grid col-540">
        <div class="col-940 blk-link-home">
            <h2><a href="#">dernières nouvelles</a></h2>
            <h2><a href="#">Menus de la semaine</a></h2>
        </div>
        <div class="col-940">
            <form class="grid clearfix">
                <h2>Inscriptions et places disponibles</h2>
                <div class="grid col-380 fit">
                    Les inscriptions sont centralisées 
                    au Service des Affaires Sociales,
                    Rue des Marchandises 17
                    1260 Nyon
                    022 363 84 70<br />
                    reseau-enfance@nyon.ch
                </div>
                <div class="grid-right col-460 fit">
                    <label>TARIFS Enfants de 0 à 4 ans</label>
                    <label>TARIFS Enfants de 4 à 10 ans</label>
                    <span>+ d’infos ici !</span>
                </div>
                <div class="f-img"><img src="<?php echo get_template_directory_uri()?>/images/bear.png" /></div>
            </form>
        </div>
    </div>
    <div class="home-right grid-right col-300 fit">
       <?php dynamic_sidebar( 'sidebar-home' ); ?>
    </div>
</div>


<?php get_footer(); ?>