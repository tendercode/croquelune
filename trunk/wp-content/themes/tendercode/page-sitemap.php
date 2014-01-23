<?php
/**
 * Template Name: sitemap Page
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
        <ul>
        <?php
            // Add categories seprated with comma (,) you'd like to hide to display on sitemap
            $cats = get_categories('exclude=');
            foreach ($cats as $cat) {
              echo "<li><h3>".$cat->cat_name."</h3>";
              echo "<ul>";
              query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
              while(have_posts()) {
                the_post();
                $category = get_the_category();
                // Only display a post link once, even if it's in multiple categories
                if ($category[0]->cat_ID == $cat->cat_ID) {
                  echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
                }
              }
              echo "</ul>";
              echo "</li>";
            }
            ?>
                  </ul>
            <!-- ----------------- Display Categories ----------------- -->
                  <h2>Categories</h2>
                  <ul>
                    <?php wp_list_cats("sort_column=name&feed_image=/wp-content/themes/tendercode/images/rss.png&optioncount=1&hierarchical=0"); ?>
                  </ul>
            <!-- ----------------- Display Pages ----------------- -->
                  <h2 id="pages">Pages</h2>
                  <ul>
                    <?php
            // Add pages seprated with comma[,] that you'd like to hide to display on sitemap
            wp_list_pages(
              array(
                'exclude' => '',
                'title_li' => '',
              )
            );
            ?>
                  </ul>
        
        <?php endwhile;?>
    </article>

<?php get_footer(); ?>