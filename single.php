<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.


				endwhile; // End of the loop.
				?>
				
					<?php
                      if ( comments_open() || get_comments_number() ) :
                          comments_template();
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
