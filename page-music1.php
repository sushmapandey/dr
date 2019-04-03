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
    <main id="main" class="site-main container">
      <div class="dj-title">
        <h2>Latest<br><span>music</span></h2>
      </div>
      
<!--       <section class="dj-inner-music container">
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
      </section> -->
      <?php $audio = new WP_Query('category_name=audio&posts_per_page=-1&orderby=date&order=DESC'); ?>
      <?php if ($audio->have_posts() ) : while ($audio->have_posts() ) : $audio->the_post(); ?>
        <?php the_content(); ?>

      <?php endwhile; endif;  wp_reset_postdata(); ?>



    </main><!-- #main -->
  </div><!-- #primary -->




<?php
get_footer();


