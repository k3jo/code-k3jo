
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


<!-- ======== -->

			<div class="portfoliobox clearfix slide-left">
				<div class="pc-container clearfix">

					<div class="portfoliobox-content pc-02 tile">
					  <h3><?php the_field('project_title'); ?></h3>
					</div> <!-- end of pc-02 -->

				     <div class="portfoliobox-content pc-01 tile">
				         <?php if( get_field('project_image') ): ?>
				         	<img src="<?php the_field('project_image'); ?>" alt="" />
				         <?php endif; ?>		
				      </div> <!-- end of portfoliobox-content -->

				</div> <!--end of pc-container clearfix-->
			  
			<div class="portfolio-content pc-03 tile">
			  	<p><?php the_field('project_description'); ?></p>
				<h4><?php the_field('project_technologies'); ?></h4>
				<a href="<?php the_field('live_link') ?>" target="_blank"><button>See it Live</button></a>
			</div>
				
			</div> <!-- end of portfoliobox clearfix -->
			
		</section>
	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

<?php else:  ?>
	[stuff that happens if there aren't any posts]
<?php endif; ?>