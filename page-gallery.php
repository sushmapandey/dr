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
        <h2>Latest <br><span>gallery</span></h2>
      </div>

		<div class="dj-inner-gallery">
      <?php $gallery = new WP_Query('post_type=galleries&posts_per_page=-1&orderby=date&order=DESC'); ?>
			<?php if ($gallery->have_posts() ) : while ($gallery->have_posts() ) : $gallery->the_post(); ?>
			<img src="<?php the_post_thumbnail_url(); ?>" alt="Dj Gallery" data-darkbox="<?php the_post_thumbnail_url(); ?>" data-darkbox-group="one" />
			
			<?php endwhile; endif;  wp_reset_postdata(); ?>
		</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
