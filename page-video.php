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
        <h2>Latest<br><span>VIDEO</span></h2>
      </div>
      <section class="portfolio section">

        <div class="dj-title">
          
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


    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
