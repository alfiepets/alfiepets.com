<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Alfiepets
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php /*?><div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					//
//					  Include the post format-specific template for the content. If you want to
//					  use this in a child theme, then include a file called called content-___.php
//					  (where ___ is the post format) and that will be used instead.
//					 
					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next post navigation.
				twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content --><?php */?>
		<!-- Slider -->
		<div id="home_carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#home_carousel" data-slide-to="0" class="active"></li>
				<li data-target="#home_carousel" data-slide-to="1"></li>
				<li data-target="#home_carousel" data-slide-to="2"></li>
				<li data-target="#home_carousel" data-slide-to="3"></li>
			</ol>
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="<?php echo get_template_directory_uri(); ?>/images/7.png" alt="" />
					<div class="carousel-caption">
						<h2>Atlanta's Most <em>Pawsome</em> Dog Walking Company</h2>
					    <p>Alfie LLC is bonded, insured, and potty trained. Better than a belly rub, guaranteed.</p>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/2.png" alt="" />
					<div class="carousel-caption">
						<h2>Best Service, Great Value</h2>
					    <p>Alfie takes pride in delivering reliable and affordable dog walking services. We are best-in-show and proud of it.</p>
					</div>
				</div>


				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/8.png" alt="" />
					<div class="carousel-caption">
						<h2>A Name You Can Trust</h2>
					    <p>All of our walkers are experienced, proven pet pros, so you can be confident that your pup and your home are in good paws with Alfie</p>
					</div>
				</div>


				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/5.png" alt="" />
					<div class="carousel-caption">
						<h2>There When You Need Us</h2>
					    <p>Whether it's everyday, or just when you're stuck at the office, you can always count on Alfie when your precious pooch needs us most.</p>
					</div>
				</div>
			</div>
			
			<!-- Controls -->
			<a class="left carousel-control" href="#home_carousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#home_carousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<!-- Slider end -->
		<!-- Services -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 col3">
					<a href="about.html" title="Reliability" class="roundal" id="walking"></a>
					<h3>Reliability</h3>
					<p>Whether it's daily scheduled service or a last second call, we guarantee you can count on Alfie.</p>
					<form method="get" action="about.html">
						<button type="submit" class="btn btn-default btn-green">About Us</button>
					</form>
				</div>
				<div class="col-md-4 col3">
					<a href="services.html" title="Flexibility" class="roundal" id="play"></a>
					<h3>Flexibility</h3>
					<p>Alfie has a variety of plans to meet your needs. Don't see something you want? Just ask!</p>
					<form method="get" action="services.html">
						<button type="submit" class="btn btn-default btn-green">Services</button>
					</form>
				</div>
				<div class="col-md-4 col3">
					<a href="contact.html" title="Value" class="roundal" id="adoption"></a>
					<h3>Value</h3>
					<p>No one else offers Alfie's experience, dependability, and affordability. Give your pup the best at the best price.</p>
					<form method="get" action="contact.html">
						<button type="submit" class="btn btn-default btn-green">Contact Us</button>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 centered">
					<h3><span>Meet Our Pre<em>furred</em> Clients</span></h3>
					<p>Many of your friends and neighbors already use Alfie! Based in Midtown Altanta, our world-class dog lovers (aka dog walkers) cover a lot of ground in many neighborhoods.</p>
				</div>
			</div>
		</div>
		<!-- Services end -->
		<!-- Carousel -->
		<div id="c-carousel">
			<div id="wrapper">
				<div id="carousel">
					<div>
						<a href="<?php echo get_template_directory_uri(); ?>/images/dog-10.png" title="Dog" data-hover="Belle the Border Collie" data-toggle="lightbox" class="lightbox">
							<img src="<?php echo get_template_directory_uri(); ?>/images/dog-10.png" alt="Dog" />
						</a>
					</div>
					<div>
						<a href="<?php echo get_template_directory_uri(); ?>/images/dog-11.png" title="Dog" data-hover="Doug the Pug" data-toggle="lightbox" class="lightbox">
							<img src="<?php echo get_template_directory_uri(); ?>/images/dog-11.png" alt="Dog" />
						</a>
					</div>
					<div>
						<a href="<?php echo get_template_directory_uri(); ?>/images/dog-12.png" title="Dog" data-hover="Our Pal Winston" data-toggle="lightbox" class="lightbox">
							<img src="<?php echo get_template_directory_uri(); ?>/images/dog-12.png" alt="Dog" />
						</a>
					</div>
					<div>
						<a href="<?php echo get_template_directory_uri(); ?>/images/dog-13.png" title="Dog" data-hover="Molly the Cutie Pie" data-toggle="lightbox" class="lightbox">
							<img src="<?php echo get_template_directory_uri(); ?>/images/dog-13.png" alt="Dog" />
						</a>
					</div>
					<div>
						<a href="<?php echo get_template_directory_uri(); ?>/images/dog-14.png" title="Dog" data-hover="Frankie in the Sun" data-toggle="lightbox" class="lightbox">
							<img src="<?php echo get_template_directory_uri(); ?>/images/dog-14.png" alt="Dog" />
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Carousel end -->
		
 

<!-- Rehome -->
		<div class="rehome">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col3">
						<a href="contact.html" title="" class="roundal" id="advice"></a>
						<h4>Let's Talk About What You Need</h4>
						<p>We know you're busy, and you want the absolute best care for your dog. That's what we want too! Send an email, or give us a call to chat a bit more about your pup's needs, and to schedule your free consultation. We look forward to hearing from you!</p>
						<form method="get" action="contact.html">	
							<button type="submit" class="btn btn-default btn-green">Contact Alfie</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Rehome end -->



		<!-- Purchase -->
	
		<!-- Purchase end -->
<?php
//get_sidebar();
get_footer();
