<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>
<?php do_action( 'educationacademia_above_slider' ); ?>

	
<?php 		
if( get_theme_mod('educationacademia_slider_display') != ''){ ?>
<section id="slider">
	<div class="row">
		<div class="col-md-1 padding0">
		<div class="slider-socials">
			<div class="socials">
			<div class="turn">
			<?php if(get_theme_mod('educationacademia_facebook')) : ?><a href="<?php echo esc_url(get_theme_mod('educationacademia_facebook')); ?>" target="_blank"><?php esc_html_e('Facebook','education-academia'); ?></a><?php endif; ?>				
			</div>
			</div>
			<div class="socials">
			<div class="turn">
			<?php if(get_theme_mod('educationacademia_twitter')) : ?><a href="<?php echo esc_url(get_theme_mod('educationacademia_twitter')); ?>" target="_blank"><?php esc_html_e('Twitter','education-academia'); ?></a><?php endif; ?>				
			</div>	
			</div>
			<div class="socials">
			<div class="turn">
			<?php if(get_theme_mod('educationacademia_linkedin')) : ?><a href="<?php echo esc_url(get_theme_mod('educationacademia_linkedin')); ?>" target="_blank"><?php esc_html_e('Linkedin','education-academia'); ?></a><?php endif; ?>				
			</div>

			</div>
			<div class="socials">
			<div class="turn">
			<?php if(get_theme_mod('educationacademia_google')) : ?><a href="<?php echo esc_url(get_theme_mod('educationacademia_google')); ?>" target="_blank"><?php esc_html_e('Google+','education-academia'); ?></a><?php endif; ?>				
			</div>

			</div>


		</div>
		</div>

		<div class="col-md-11 padding0">
		<div class="slider-right">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
		    <?php $slider_pages = array();
		      	for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'educationacademia_slider' . $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $slider_pages[] = $mod;
			        }
		      	}
		      	if( !empty($slider_pages) ) :
		        $args = array(
		          	'post_type' => 'page',
		          	'post__in' => $slider_pages,
		          	'orderby' => 'post__in'
		        );
		        $query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          $i = 1;
		    ?>
		    <div class="outer-box">
		    
		    <div class="carousel-inner" role="listbox">
		    	<div class="row">
		      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
		        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
		        	<div class="slider-image">
		          	<img src="<?php the_post_thumbnail_url('full'); ?>" >
		          	</div>
		          	<div class="carousel-caption">
			            <div class="inner_carousel">
			            	<h6><?php the_excerpt();?></h6>	
			              	<h1><?php the_title();?></h1>	
			            </div>
			            <div class="btn btn-black rounded-0">
		            		<a class="slider-button" href="<?php the_permalink();?>" title="<?php esc_attr_e( 'Read More', 'education-academia' ); ?>" ><?php esc_html_e('Read More →','education-academia'); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
				       	</div>
		          	</div>

		        </div>
		      	<?php $i++; endwhile; 
		      	wp_reset_postdata();?>
		      </div>
		    </div>
			
			</div>
		    <?php else : ?>
		    <div class="no-postfound"></div>
		      <?php endif;
		    endif;?>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	      		<span class="glyphicon glyphicon-triangle-left" aria-hidden="true"><i class="fas fa-caret-left"></i></span>
	      		
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	      		<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"><i class="fas fa-caret-right"></i></span>
	      		
		    </a>
	  	</div>  	
		</div>
		</div>
	</div>

  	<div class="clearfix"></div>
</section>
	<?php 
}
	do_action('educationacademia_below_slider'); ?>

<!-- slider section ends -->

<!-- Courses section -->
<?php 		
if( get_theme_mod('educationacademia_courses_display') != ''){ ?>
<section id="courses">
<div class="container">
<div class="row">
<?php if (get_theme_mod('course_title1') ) : ?>	
	<div class="col-sm padding0">
		<div class="courses-outer-box">
		<div class="courses-box box1">
			<div class="icon">
				<i class="fa fa-flask" aria-hidden="true"></i>
			</div>
			<div class="course-name">

					<a href="<?php if (get_theme_mod('course_title1') ) : ?><?php echo esc_url(get_theme_mod('educationacademia_course1')) ?><?php endif; ?>">
						<?php if (get_theme_mod('course_title1') ) : ?><?php echo esc_html(get_theme_mod('course_title1')) ?>
						<?php endif; ?>
					</a>

			</div>
		</div>
		</div>
		<div class="line1 line">
			<p></p>
		</div>
	</div>
<?php endif; ?>

<?php if (get_theme_mod('course_title2') ) : ?>	
	<div class="col-sm padding0">
		<div class="courses-outer-box">
		<div class="courses-box box2">
			<div class="icon">
				<i class="fa fa-desktop" aria-hidden="true"></i>
			</div>
			<div class="course-name">

					<a href="<?php if (get_theme_mod('course_title2') ) : ?><?php echo esc_url(get_theme_mod('educationacademia_course2')) ?><?php endif; ?>">
						<?php if (get_theme_mod('course_title2') ) : ?><?php echo esc_html(get_theme_mod('course_title2')) ?>
						<?php endif; ?>
					</a>

			</div>
		</div>
		</div>
		<div class="line2 line">
			<p></p>
		</div>
	</div>
<?php endif; ?>

<?php if (get_theme_mod('course_title3') ) : ?>	
	<div class="col-sm padding0">
		<div class="courses-outer-box">
		<div class="courses-box box3">
			<div class="icon">
				<i class="fa fa-leaf" aria-hidden="true"></i>
			</div>
			<div class="course-name">

					<a href="<?php if (get_theme_mod('course_title3') ) : ?><?php echo esc_url(get_theme_mod('educationacademia_course3')) ?><?php endif; ?>">
						<?php if (get_theme_mod('course_title3') ) : ?><?php echo esc_html(get_theme_mod('course_title3')) ?>
						<?php endif; ?>
					</a>

			</div>
		</div>
		</div>
		<div class="line3 line">
			<p></p>
		</div>
	</div>
<?php endif; ?>

<?php if (get_theme_mod('course_title4') ) : ?>	
	<div class="col-sm padding0">
		<div class="courses-outer-box">
		<div class="courses-box box4">
			<div class="icon">
				<i class="fa fa-paint-brush" aria-hidden="true"></i>
			</div>
			<div class="course-name">

					<a href="<?php if (get_theme_mod('course_title4') ) : ?><?php echo esc_url(get_theme_mod('educationacademia_course4')) ?><?php endif; ?>">
						<?php if (get_theme_mod('course_title4') ) : ?><?php echo esc_html(get_theme_mod('course_title4')) ?>
						<?php endif; ?>
					</a>

			</div>
		</div>
		</div>
		<div class="line4 line">
			<p></p>
		</div>
	</div>
<?php endif; ?>

<?php if (get_theme_mod('course_title5') ) : ?>	
	<div class="col-sm padding0">
		<div class="courses-outer-box">
		<div class="courses-box box5">
			<div class="icon">
				<i class="fa fa-calendar" aria-hidden="true"></i>
			</div>
			<div class="course-name">

					<a href="<?php if (get_theme_mod('course_title5') ) : ?><?php echo esc_url(get_theme_mod('educationacademia_course5')) ?><?php endif; ?>">
						<?php if (get_theme_mod('course_title5') ) : ?><?php echo esc_html(get_theme_mod('course_title5')) ?>
						<?php endif; ?>
					</a>

			</div>
		</div>
		</div>
		<div class="line5 line">
			<p></p>
		</div>
	</div>
<?php endif; ?>

</div> <!-- row -->
</div> <!-- container -->
</section>
<?php } ?>
<?php get_footer(); ?>