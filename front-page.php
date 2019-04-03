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

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="dj-main-banner">
        <?php $banner = new WP_Query('category_name=home page banner&posts_per_page=-1&orderby=date&order=DESC'); ?>
        <?php if ($banner->have_posts() ) : while ($banner->have_posts() ) : $banner->the_post(); ?>
        <div class="dj-banner">
				  <img src="<?php the_post_thumbnail_url(); ?>" alt="DJ banner">
          <div class="container">
            <figcaption>
              <h1><?php the_title() ?></h1>
              <p><?php the_content() ?></p>
              <a href="<?php echo home_url('biography'); ?>" class="btn btn-outline" >Read More</a>
            </figcaption>
          </div>
        </div>
        <?php endwhile; endif;  wp_reset_postdata(); ?>
			</section>

      <section class="dj_upcomingevents container dj-title">
        <h2>upcoming <br><span>events</span></h2>

        <div class="dj_events">
          <div class="row">
            <div class="col-12 col-sm-4">
              <p>20 <span>november 2018</span></p>
            </div>
            <div class="col-12 col-sm-4">
              <p class="event-location">Videotron Center <br> <span>Domlur, Bangalore</span></p>
            </div>
            <div class="col-12 col-sm-4">
              <a href="#" class="btn btn-outline">Buy Tickets</a>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-4">
              <p>07 <span>December 2018</span></p>
            </div>
            <div class="col-12 col-sm-4">
              <p class="event-location">Spotify On Stage<br> <span>Domlur, Bangalore</span></p>
            </div>
            <div class="col-12 col-sm-4">
              <a href="#" class="btn btn-outline">Buy Tickets</a>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-4">
              <p>16 <span>January 2018</span></p>
            </div>
            <div class="col-12 col-sm-4">
              <p class="event-location">Halloween Land<br> <span>Domlur, Bangalore</span></p>
            </div>
            <div class="col-12 col-sm-4">
              <a href="#" class="btn ">Sold Out</a>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-4">
              <p>02 <span>february 2018</span></p>
            </div>
            <div class="col-12 col-sm-4">
              <p class="event-location">Cornelius - Singha Light<br> <span>Domlur, Bangalore</span></p>
            </div>
            <div class="col-12 col-sm-4">
              <a href="#" class="btn">free</a>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-4">
              <p>18 <span>April 2018</span></p>
            </div>
            <div class="col-12 col-sm-4">
              <p class="event-location">Karma Kruise<br> <span>Domlur, Bangalore</span></p>
            </div>
            <div class="col-12 col-sm-4">
              <a href="#" class="btn btn-outline">Buy Tickets</a>
            </div>
          </div>
        </div>
      </section>

      <section class="dj-bg dj-music">
        <div class="dj-title">
          <h2>Latest <br><span>music</span></h2>
        </div>
        <div class="container">
        <?php $audio = new WP_Query('category_name=front-page-music&posts_per_page=-1&orderby=date&order=ASC'); ?>
        <?php if ($audio->have_posts() ) : while ($audio->have_posts() ) : $audio->the_post(); ?>
          <?php the_content(); ?>

        <?php endwhile; endif;  wp_reset_postdata(); ?>
        </div>
      </section>

      <section class="portfolio section">

        <div class="dj-title">
          <h2>Latest <br><span>VIDEO</span></h2>
          
          <div class="filters">
            <ul>
              <li class="active" data-filter="*">All</li>
              <li data-filter=".music-video">music video</li>
              <li data-filter=".concert">concert</li>
            </ul>
          </div>
          
          <div class="filters-content">
            <div class="row grid">
          
              <div class="col-sm-4 all music-video">
                <div class="item">
                  <a href="https://www.youtube.com/watch?v=e73WLi5n7Kg"><img src="<?php echo get_template_directory_uri(); ?>/img/video2.png" alt="video"></a>
                  <div class="p-inner">
                    <h5>Do Mastane Chale</h5>
                    <div class="cat">February 7, 2016</div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 all concert">
                <div class="item">
                  <a href="https://www.youtube.com/watch?v=3juyH1WhmpY"><img src="<?php echo get_template_directory_uri(); ?>/img/video3.png" alt="video"></a>
                  <div class="p-inner">
                    <h5>Sara Zamana </h5>
                    <div class="cat">January 21, 2016</div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 all concert music-video">
                <div class="item">
                  <a href="https://www.youtube.com/watch?v=f9qYU0fy5mU"><img src="<?php echo get_template_directory_uri(); ?>/img/video4.png" alt="video"></a>
                  <div class="p-inner">
                    <h5>Duniya Haseeno Ka Mela</h5>
                    <div class="cat">December  9, 2015</div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 all music-video">
                <div class="item">
                  <a href="https://www.youtube.com/watch?v=zhVq6ekT9ho"><img src="<?php echo get_template_directory_uri(); ?>/img/video5.png" alt="video"></a>
                  <div class="p-inner">
                    <h5>Mahi Aaja</h5>
                    <div class="cat">October 12, 2015</div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 all concert">
                <div class="item">
                  <a href="https://www.youtube.com/watch?v=vxY3lOX_Qj8"><img src="<?php echo get_template_directory_uri(); ?>/img/video6.png" alt="video"></a>
                  <div class="p-inner">
                    <h5>Dheere Dheere Se</h5>
                    <div class="cat">SEPTEMBER 24, 2015</div>
                  </div>
                </div>
              </div> 
              <div class="col-sm-4 all ">
                <div class="item">
                  <a href="https://youtu.be/vxY3lOX_Qj8"><img src="<?php echo get_template_directory_uri(); ?>/img/video3.png" alt="video"></a>
                  <div class="p-inner">
                    <h5>Dheere Dheere Se </h5>
                    <div class="cat">SEPTEMBER 24, 2015</div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>          
      </section>


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
