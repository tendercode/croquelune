<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
    </section>
        <footer id="footer">
            <div id="footer-wrapper" class="clearfix">
                 <div class="grid col-940 clearfix">
                    <div class="copyright clearfix">
                        <span>Création du site par <a target="_blank" href="http://www.enoxone.ch">ENOXONE</a></span>
                        <p>Copyright © 2013 - <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Croquelune</a> - <a href="<?php echo get_page_link('91'); ?>">Plan du site</a> - <a href="<?php echo get_page_link('64'); ?>">Mentions Légales</a></p>
                        <p>Croquelune, rue de la Gare 35 bis, 1260 Nyon • info@croquelune.ch • Tél. : 022 - 994 40 60</p>
                        <img src="<?php echo get_template_directory_uri();?>/images/moon.png" />
                    </div>
                 </div>
            </div>
        </footer>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/responsive-scripts.js"></script>   
    <?php wp_footer(); ?>
</body>
</html>