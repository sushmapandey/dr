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
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <section class="wrapper">
                <article class="music-container">

                  <div class="controls">
                    <input type="radio" name="controls" id="btn-play">
                    <label for="btn-play" class="lbl-btn-play"><span></span></label>

                    <input type="radio" name="controls" id="btn-pause">
                    <label for="btn-pause" class="lbl-btn-pause"><span></span></label>

                    <label class="lbl-btn-reset"><span></span></label>
                  </div>

                  <div class="cover">
                    <div class="static-card">
                      <img src="http://f1.bcbits.com/img/a1312167393_16.jpg" alt="">
                    </div>
                    <div class="flip-card">
                      <img src="http://f1.bcbits.com/img/a1312167393_16.jpg" alt="">
                    </div>
                  </div>
                </article>
            </div>
            <div class="swiper-slide">
                <article class="music-container">
                  <div class="controls">
                    <input type="radio" name="controls" id="btn-play">
                    <label for="btn-play" class="lbl-btn-play"><span></span></label>

                    <input type="radio" name="controls" id="btn-pause">
                    <label for="btn-pause" class="lbl-btn-pause"><span></span></label>
                    <label class="lbl-btn-reset"><span></span></label>
                  </div>
                  <div class="cover">
                    <div class="static-card">
                      <img src="http://lorempixel.com/600/600/nature/3" alt="">
                    </div>
                    <div class="flip-card">
                      <img src="http://lorempixel.com/600/600/nature/3" alt="">
                    </div>
                  </div>
                </article>
            </div>
            <div class="swiper-slide">
                <article class="music-container">
                  <div class="controls">
                    <input type="radio" name="controls" id="btn-play">
                    <label for="btn-play" class="lbl-btn-play"><span></span></label>

                    <input type="radio" name="controls" id="btn-pause">
                    <label for="btn-pause" class="lbl-btn-pause"><span></span></label>
                    <label class="lbl-btn-reset"><span></span></label>
                  </div>
                  <div class="cover">
                    <div class="static-card">
                      <img src="http://lorempixel.com/600/600/nature/2" alt="">
                    </div>
                    <div class="flip-card">
                      <img src="http://lorempixel.com/600/600/nature/2" alt="">
                    </div>
                  </div>
                </article>
              </section>
            </div>
            
          </div>
          <!-- Add Pagination -->
        </div>
      </section>

      <section class="portfolio section">

        <div class="dj-title">
          <h2>Latest <br><span>VIDEO</span></h2>
          
          <div class="filters">
            <ul>
              <li class="active catlink " >All</li>
              <li class="catlink " >music video</li>
              <li  class="catlink ">concert</li>
            </ul>
          </div>
          
          <div class="filters-content">
            <div class="row grid">
              <?php $video = new WP_Query('category_name=videos&posts_per_page=6&orderby=date&order=ASC'); ?>
              <?php if ($video->have_posts() ) : while ($video->have_posts() ) : $video->the_post(); ?>
              <?php 
                $categories = get_the_category();
                $outputCatName = '';
                if($categories){
                  foreach ($categories as $category){
                    $outputCatName .= $category->cat_name;
                  }
                }
              ?>
              
              <div class="col-sm-4 inds" id="<?php echo $outputCatName; ?>" >
                <div class="item inds">
                  
                  <div class="p-inner">
                    
                    <?php the_content() ?>
                  </div>
                </div>
              </div>
              <?php endwhile; endif;  wp_reset_postdata(); ?>   
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
