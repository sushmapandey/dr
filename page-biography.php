<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dj
 */

get_header('inner');
?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <section class="">
        <?php
              $biography= new WP_Query('pagename=biography/');
              while ( $biography->have_posts() ) : $biography->the_post();?>
              <!-- <h2 class="text-center">B2B Service</h2> -->
              <div class="dj-biography-banner">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="DJ banner">
                <div class="container">
                  <h1><?php the_content() ?></h1>
                </div>
              </div>
              
              <?php
              endwhile;
              // reset post data (important!)
              wp_reset_postdata();
            ?>
      </section>
       <?php $biographycontent = new WP_Query('category_name=biography content&posts_per_page=-1&orderby=date&order=ASC'); ?>
        <?php if ($biographycontent->have_posts() ) : while ($biographycontent->have_posts() ) : $biographycontent->the_post(); ?>
      <section class="bg-black">
       
        <div class="biography-content">
          <h2><?php the_title() ?></h2>
          <p><?php the_content() ?></p>
        </div>
      </section>
      <?php endwhile; endif;  wp_reset_postdata(); ?>     
      



    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
