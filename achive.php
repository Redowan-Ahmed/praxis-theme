<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                    <h1>View Post</h1>
                </div>
            </div>
        </section>
		<!-- End Other Hero -->
<!-- Start Site Content -->
<div class="blog-details site-content section">
	<div class="container">
		<div class="row">
			<main class="col-md-9 col-sm-8 site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>			
			</main><!-- .col -->
			<?php get_sidebar()?>
		</div>
	</div>
</div>
<!-- End Site Content --> 	
	
<?php
get_footer();
