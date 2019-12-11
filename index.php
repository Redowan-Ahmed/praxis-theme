<?php
get_header();
?>
        <!-- Start Hero section -->
        <section class="owl-carousel hero-slider">
            <div class="single-slider">
            <?php
                if(function_exists('cs_get_option')){
                    $header_a = cs_get_option('img_slider_a');
                    $header_b = cs_get_option('img_slider_b');
                    $header_c = cs_get_option('img_slider_c');
                    $img_heada = wp_get_attachment_image_src($header_a, 'full');
                    $img_headb = wp_get_attachment_image_src($header_b, 'full');
                    $img_headc = wp_get_attachment_image_src($header_c, 'full');
                    $home_tit = cs_get_option('home_title');
                    $home_des = cs_get_option('home_description');
                    $slider_st1 = cs_get_option('slider_test1');
                    $slider_descri1 = cs_get_option('slider_description1');
                    $slider_te2 = cs_get_option('slider_test2');
                    $slider_desc2 = cs_get_option('slider_description2');
                    $slider_t3 = cs_get_option('slider_test3');
                    $slider_descri3 = cs_get_option('slider_description3');
                }
            ?>
            	<img src="<?php echo $img_heada[0]?>">
            	<div class="overlay"></div>
                <div class="container">
                    <div class="slider-text">
                    	<h1><?php echo $slider_st1?></h1>
                    	<h4><?php echo $slider_descri1?></h4>
                    	<div class="slider-btn-group">
                    		<a href="#" class="t-btn">PURCHASE NOW</a>
                    		<a href="#" class="t-btn t-btn-red">SELECT DEMO</a>
                    	</div>
                    </div>
                </div>
            </div><!-- .single-slider -->
            <div class="single-slider">
            <img src="<?php echo $img_headb[0]?>">
            	<div class="overlay"></div>
                <div class="container">
                    <div class="slider-text">
                    	<h1><?php echo $slider_te2?></h1>
                    	<h4><?php echo $slider_desc2?></h4>
                    	<div class="slider-btn-group">
                    		<a href="#" class="t-btn">PURCHASE NOW</a>
                    		<a href="#" class="t-btn t-btn-red">SELECT DEMO</a>
                    	</div>
                    </div>
                </div>
            </div><!-- .single-slider -->
            <div class="single-slider">
            <img src="<?php echo $img_headc[0]?>">
            	<div class="overlay"></div>
                <div class="container">
                    <div class="slider-text">
                    	<h1><?php echo $slider_t3?></h1>
                    	<h4><?php echo $slider_descri3?></h4>
                    	<div class="slider-btn-group">
                    		<a href="#" class="t-btn">PURCHASE NOW</a>
                    		<a href="#" class="t-btn t-btn-red">SELECT DEMO</a>
                    	</div>
                    </div>
                </div>
            </div><!-- .single-slider -->
        </section>
		<!-- End Hero section -->


	   <!-- Start Home Blog Section -->
	   <section class="home-blog section" style="background-color: #2d2d2d;">
        	<div class="container">
        		<div class="section-header text-center">
        			<h2><?php echo $home_tit?></h2>
        			<p><?php echo $home_des?></p>
        		</div>
        		<div class="row">
				<?php 
            $blog = new WP_Query(array(
                'post_type'=>'post',
            		));
            while($blog->have_posts()):$blog->the_post();
                ?>
        			<div class="col-lg-6">
        				<article class="post">
                            <header class="entry-header">
                                <a href="#" class="post-thumbnail"><?php the_post_thumbnail()?></a>
                            </header>
                            <div class="post-body">
                                <div class="post-details-wrap">
                                    <h2 class="entry-title"><a href="<?php the_permalink()?>"><?php echo wp_trim_words(get_the_title() , 04 ,' ...')?></a></h2>
                                    <div class="byline">
                                        <span class="home-posted-on"><?php praxis_posted_On(); echo ' <br/> '; praxis_posted_By();?> </span>
                                    </div>
                                </div><!-- .post-details-wrap -->
                                <div class="entry-content" style="background-color: #2d2d2d;">
                                    <p><?php echo wp_trim_words(get_the_content() , 10 ,' ')?></p>
                                    <a href="<?php the_permalink()?>" class="h-readmore-btn"><?php esc_html_e('READ MORE', 'medium')?></a>
                                </div>
                            </div><!-- .post-body -->
                        </article>
					</div><!-- .col -->
								<?php endwhile?>
                    <div class="col-lg-12 text-center">
                <!--<button class="t-btn blog-loadmore"> Load More</button>-->
                        <nav class="post-navigation">
                            <div class="nav-previous">
                                <?php posts_nav_link();?>
                            </div>
                        </nav>
                    </div>
        		</div>
        	</div>
        </section>
        <!-- End Home Blog Section -->	
<?php get_footer(); ?>
