<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Praxis
 */

get_header();
?>

	    <!-- Start Other Hero -->
		

		<section class="other-hero">
        <div class="other-hero-overlay">
		<?php
              if(function_exists('cs_get_option')){
      	$pages = cs_get_option('page_img');
      	$page_head = wp_get_attachment_image_src($pages, 'full');

      }?>
            <img style="background-repeat:no-repeat; opacity:0.5; width:100%; height: 100%;" src="<?php echo $page_head[0]?>">
            </div>
            <div class="container">
                <div class="other-hero-text">
					<h1 style="font-size:120px; background:rgba(255, 0, 0, 0.295);">404 Error</h1>
					<p style="background:rgba(255, 0, 0, 0.295);">Go Back</p>
                </div>
            </div>
        </section>
		<!-- End Other Hero -->
<!-- Start Site Content -->
<div class="blog-details site-content section">
	<div class="container">
		<div class="row">
			<main class="col-md-9 col-sm-8 site-main">
			<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'praxis' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>
                </header>
            </article>
			</main><!-- .col -->
			<?php get_sidebar()?>
		</div>
	</div>
</div>
<!-- End Site Content --> 

<?php
get_footer();
