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
      <div class="dj-title">
        <h2>Featured<br><span>events</span></h2>
      </div>


      <div class="dj-events container">
        <?php $event = new WP_Query('post_type=events&posts_per_page=-1&orderby=date&order=DESC'); ?>
        <?php if ($event->have_posts() ) : while ($event->have_posts() ) : $event->the_post(); ?>
        <div class="event effect-layla"> 
          <img src="<?php the_post_thumbnail_url(); ?>" alt="Event"> 
          <figcaption>
            <h3><?php the_title() ?></h3>
            <p><?php the_content() ?></p>

            <div>
              <a href="#" class="btn btn-outline" data-toggle="modal" data-target="#myModal">Buy Tickets</a>
            </div>
       
          </figcaption> 
        </div>
       <?php endwhile; endif;  wp_reset_postdata(); ?>        
      </div>
      <section class="dj-bg dj-gallery">
        <?php
         get_template_part( 'template-parts/content-gallery', get_post_format() );
        ?>        
      </section>
      
      <section class="dj-party-book container">
        <div class="row">
          <div class="col text-center">
            <h2>Get Your Party Started</h2>
            <a href="#" class="btn btn-outline">Book Now</a>
          </div>
        </div>
      </section>



    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
