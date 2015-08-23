
<?php

$onePageQuery = new WP_Query(
	array(
		'posts_per_page' => 3,
		'post_type' => 'portfolio',
		'order' => 'DESC'
		)
); ?>

<?php if ( $onePageQuery->have_posts() ) : ?>

	<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

		<section id="<?php echo $post->post_name; ?>">
			<div class="portfoliobox">
				
				<div class="portfoliobox-content pc-01">
					<?php if( get_field('project_image') ): ?>
						<img src="<?php the_field('project_image'); ?>" alt="" />
					<?php endif; ?>
					
				</div> <!-- end of portfoliobox-content -->
				<div class="portfoliobox-content">
					<h3><?php the_field('project_title'); ?></h3>
					<p><?php the_field('project_description'); ?></p>
					<h4><?php the_field('project_technologies'); ?></h4>
				</div> <!-- end of portfolio-content -->

				<!-- <p><?php the_content(); ?></p> -->
			</div> <!-- end of portfoliobox -->
			
		</section>
	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

<?php else:  ?>
	[stuff that happens if there aren't any posts]
<?php endif; ?>