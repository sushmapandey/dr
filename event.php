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
        <div class="event effect-layla">
          <img src="<?php echo get_template_directory_uri(); ?>/img/event1.png" alt="Event"> 
          <figcaption>
            <h3>Spotify On Stage</h3>
            <p>20 November 2018 | 18:00 - 23:00</p>
            <a href="#" class="btn btn-outline" data-toggle="modal" data-target="#myModal">Buy Tickets</a>
          </figcaption>     
        </div>
        <div class="event effect-layla">
          <img src="<?php echo get_template_directory_uri(); ?>/img/event2.png" alt="Event">
          <figcaption>
            <h3>Spotify On Stage</h3>
            <p>20 November 2018 | 18:00 - 23:00</p>
            <a href="#" class="btn btn-outline" data-toggle="modal" data-target="#myModal">Buy Tickets</a>
          </figcaption>   
        </div>
        <div class="event effect-layla">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery21.jpg" alt="Event">
          <figcaption>
            <h3>Spotify On Stage</h3>
            <p>20 November 2018 | 18:00 - 23:00</p>
            <a href="#" class="btn btn-outline" data-toggle="modal" data-target="#myModal">Buy Tickets</a>
          </figcaption>   
        </div>
        <div class="event effect-layla">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery21.jpg" alt="Event">
          <figcaption>
            <h3>Spotify On Stage</h3>
            <p>20 November 2018 | 18:00 - 23:00</p>
            <a href="#" class="btn btn-outline" data-toggle="modal" data-target="#myModal">Buy Tickets</a>
          </figcaption>   
        </div>
        <div class="event effect-layla">
          <img src="<?php echo get_template_directory_uri(); ?>/img/event1.png" alt="Event">
          <figcaption>
            <h3>Spotify On Stage</h3>
            <p>20 November 2018 | 18:00 - 23:00</p>
            <a href="#" class="btn btn-outline" data-toggle="modal" data-target="#myModal">Buy Tickets</a>
          </figcaption>   
        </div>
        <div class="event effect-layla">
          <img src="<?php echo get_template_directory_uri(); ?>/img/event2.png" alt="Event">
          <figcaption>
            <h3>Spotify On Stage</h3>
            <p>20 November 2018 | 18:00 - 23:00</p>
            <a href="#" class="btn btn-outline" data-toggle="modal" data-target="#myModal">Buy Tickets</a>
          </figcaption>   
        </div>
        <div class="event effect-layla">
          <img src="<?php echo get_template_directory_uri(); ?>/img/event2.png" alt="Event">
          <figcaption>
            <h3>Spotify On Stage</h3>
            <p>20 November 2018 | 18:00 - 23:00</p>
            <a href="#" class="btn btn-outline" data-toggle="modal" data-target="#myModal">Buy Tickets</a>
          </figcaption>   
        </div>
        <div class="event effect-layla">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gallery21.jpg" alt="Event">
          <figcaption>
            <h3>Spotify On Stage</h3>
            <p>20 November 2018 | 18:00 - 23:00</p>
            <a href="#" class="btn btn-outline" data-toggle="modal" data-target="#myModal">Buy Tickets</a>
          </figcaption>   
        </div>
        <div class="event effect-layla">
          <img src="<?php echo get_template_directory_uri(); ?>/img/event1.png" alt="Event">
          <figcaption>
            <h3>Spotify On Stage</h3>
            <p>20 November 2018 | 18:00 - 23:00</p>
            <a href="#" class="btn btn-outline" data-toggle="modal" data-target="#myModal">Buy Tickets</a>
          </figcaption>   
        </div>
        
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


      <!-- The Modal -->
      <div class="modal fade dj-model-box" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Spotify On Stage <br><span>20 November 2018 | 18:00 - 23:00</span></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
              <div class="model-body-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/event1.png" alt="Event">
                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown yr pop-up artisan.</p>
                <p>See-through delicate embroidered organza blue lining luxury acetate-mix stretch pleat detailing. Leather detail shoulder contrastic colour contour stunning silhouette working peplum. Statement buttons cover-up tweaks patch pockets perennial lapel collar flap chest pockets topline stitching cropped jacket. Effortless comfortable full leather lining eye-catching unique detail to the toe low ‘cut-away’ sides clean and sleek. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design slingback strap mid kitten heel this ladylike design.</p>
              </div>
              <div class="model-body-content">
                <p><i class="fas fa-clock"></i>Tuesday, 20 November 2018 <span>15:00 PM - 24:00 AM</span></p>
                <a href="#" class="btn">Videotron Center</a>
                <span>Richmond Road, Bengaluru</span>
                <a href="#" class="btn btn-outline">Book Now</a>
              </div>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
