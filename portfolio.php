<?php 
// Template Name: Portfolio Page
get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
<!--       <div class="portfoliobox">
        <?php if(have_posts()) while(have_posts()):the_post(); ?>
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>

          <div class="portfolio-items">
            <?php 
              while(has_the_field('image')){
            ?>
              <div class="portfolio-item">
                <?php
                $image = get_the_field('image');
                ?>
                <img src="<?php echo $image['sizes']['thumbnail'] ?>" alt="">
              </div>
              }
             ?>
          </div>
         
      </div> --> <!-- end of portfoliobox -->
    </div> <!-- /.content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>