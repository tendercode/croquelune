<?php
/**
 * Template Name: Contact Page
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
<script type="text/javascript">

  jQuery(document).ready(function(){
    jQuery('#input_2_6').attr('placeholder', 'NOM');
    jQuery('#input_2_7').attr('placeholder', 'PRÉNOM');
    jQuery('#input_2_4').attr('placeholder', 'ADRESSE MAIL');
    jQuery('#input_2_5').attr('placeholder', 'TÉL');
    jQuery('#input_2_3').attr('placeholder', 'VOTRE MESSAGE');
    });
    
</script>
    <article class="grid col-940 blk-link-home infra-p">
        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <header><h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1></header>
            <div class="contact-p grid col-460">
			<?php echo do_shortcode('[gravityform id=2 title=false description=false]')?>    
			<!--
                <p>Crèche du Centre Croquelune<br />
                    Rue de la Gare 35 bis &bull; 1260 Nyon<br />
                    Tél : 022 994 40 60  /  Fax : 022 994 40 68<br />
                    E-mail : info@croquelune.ch<br />
                    Heures d’ouverture de la centrale téléphonique 9h00-12h00
                </p>
                <div class="grid col-940">
                    <div class="grid col-460">
                        <input type="text" placeholder="NOM" />
                    </div>
                     <div class="grid-right col-460 fit">
                        <input type="text" placeholder="PRÉNOM"/>
                    </div>
                </div>
                <div class="grid col-940">
                    <div class="grid col-460">
                        <input type="text" placeholder="ADRESSE MAIL" />
                    </div>
                     <div class="grid-right col-460 fit">
                        <input type="text" placeholder="TÉL" />
                    </div>
                </div>
                <div class="grid col-940">
                    <textarea placeholder="VOTRE MESSAGE"></textarea>
                </div>
                <div class="grid col-940">
                    <div class="grid col-220 fit">
                        <input type="submit" value="Envoyer" />
                    </div>
                    <div class="grid-right col-620 fit">
                        Les inscriptions se font auprès du
                        Service des Affaires Sociales (SAS) de Nyon : <span><a href="http://www.sas.com/en_us/home.html"  target="_blank">lien</a></span>
                    </div>
                </div>-->
            </div>
            <div class="g-maps grid-right col-460 fit" >
				<div id="googleMap" style="width:100%;height:344px;"></div>
            </div>
        <?php endwhile; ?>
    </article>

<?php get_footer(); ?>