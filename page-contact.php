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
			<div class=" dj-title">
        <h2> <br><span>contact</span></h2>
      </div>
      <section class="dj-contact-page container">
        <div class="get-in-touch">              
          <div class="bg-opacity"></div>
        </div>
        <div class="contact-form">
      <!--<form action="">
            <div>
              <label for="name">Name</label>
              <input type="text" class="name" placeholder="">
            </div>
            <div>
              <label for="email">Email</label>
              <input type="email" class="email" placeholder="">
            </div>
            <div>
              <label for="phone">Phone</label>
              <input type="text" class="phone" placeholder="">
            </div>
            <div>
              <label for="message">Message</label>
              <textarea name="message" id="" ></textarea>
            </div>
            <div>
              <a href="#" class="btn btn-outline plr">Submit</a>
            </div>
          </form> -->
            <?php 
              $its=new WP_Query('pagename=contact');
              while($its->have_posts()):
                $its->the_post();?>
                <?php the_content(); ?>
                <?php
              endwhile;
              wp_reset_postdata();
            ?> 
        </div>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
