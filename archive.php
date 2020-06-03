<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>
<section class="pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="pt-2 pb-5">
				<?php 
				if(have_posts()): while(have_posts()): the_post(); ?>
					<h1><a class="text-dark text-decoration-none" href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h1>
					<div class="clearfix pb-4">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-archive pr-2">
						<div>
							<?php if ( has_excerpt() ) { ?>
							    <?php the_excerpt();	?> <!-- If has Excerpt echo excerpt Content -->
							  <a href=" <?php echo get_permalink(); ?> "> Read More </a> 
							    <?php
							} 
							else { ?>
							<!-- If has Excerpt echo excerpt Content -->
								<?php
							    the_content();
							} ?>
						</div>
					</div>
				<?php endwhile; endif; ?>
				</div>
			</div>
			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
