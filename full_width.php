
<?php 
/*
* Template Name: IT Trace Home
*/
 ?>
 <?php get_header(); ?>
	<section>
		<div class="pt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 pt-5 pb-5">
						<h2 class="text-center text-uppercase">Products</h2>
					</div>
				</div>

				<div class="row">
					<?php $product = new WP_Query(array(
						'category_name' => 'Products'
					)); ?>
					<?php if ($product->have_posts()): ?>
     
			          <?php while($product->have_posts()): $product->the_post(); ?>

					<div class="col-lg-4 m-auto">
						<div class="card">
						  <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
						  <div class="card-body pt-5">

					          	
								    <h5 class="card-title text-center"><strong><?php the_title(); ?></strong></h5>
								    <p class="card-text text-center">
								    	<?php if (has_excerpt( $post->ID )): ?>
			               
						              	<?php echo get_the_excerpt(); ?>
						              	<?php else: ?>
									    	<?php the_content(); ?> 
									    <?php endif; ?>
								    </p>
								    <p class="text-center">
								    	
						    <a target="_blank" href="<?php echo the_permalink(); ?>" class="btn btn-outline-dark rounded-0"> Know More</a>
								    </p>
								  </div>
								</div>
							</div>
				
					<?php endwhile; ?>
			        <?php endif ?>
				</div>


			</div>
		</div>
	</section>
	<section class="section-two">
		<div class="pt-5 pb-5">
			<div class="container">
				<div class="row pb-5">
					<div class="col-lg-12">
						<h2 class="text-center">Popular Products</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5"></div>
					<div class="col-lg-7">

						<?php $popular = new WP_Query(array(
						'category_name' => 'Popular'
						)); ?>
						<?php if ($popular->have_posts()): ?>
							<?php while($popular->have_posts()): $popular->the_post(); ?>
								<div class="col-lg-6">
									<div class="card">
									  <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
									  <div class="card-body text-right">
									    <p class="card-text">
									    	<?php if (has_excerpt( $post->ID )): ?>
											               
								          	<?php echo get_the_excerpt(); ?>
								          	<?php else: ?>
										    	<?php the_content(); ?> 
										    <?php endif; ?>
									    </p>
									  </div>
									</div>
								</div>
							<?php endwhile; ?>
				        <?php endif ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-dark">
		<div class="pt-5 pb-5">
			<div class="container-fluid">
				<?php $message = new WP_Query(array(
				'category_name' => 'message'
				)); ?>
				<?php if ($message->have_posts()): ?>
					<?php while($message->have_posts()): $message->the_post(); ?>
						<div class="row pb-5 pt-5">
							<div class="col-lg-6">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
							</div>
							<div class="col-lg-6">
								<div class="text-center text-light pt-5">
									<h2><?php the_title(); ?></h2>
									<p>
										<?php if (has_excerpt( $post->ID )): ?>
													               
							          	<?php echo get_the_excerpt(); ?>
							          	<?php else: ?>
									    	<?php the_content(); ?> 
									    <?php endif; ?>
									</p>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
		        <?php endif ?>
			</div>
		</div>
	</section>
	<section>
		<div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>