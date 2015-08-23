<?php
// Template Name: Home Page
 get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">

      <!-- ================================ -->
      <!-- START OF SPLASH -->
      <section class="splash">
        <!--<img src="<?php bloginfo('template_directory'); ?>/images/mountains.jpeg" alt="mountain background"> -->
        <div class="wrapper clearfix">

          <div class="splash-content">
            <div class="splash-inner">

                <div class="social-media-container">
                  <a href="http://linkedin.com/in/heyjoanneho" class="bounce">
                    <i class="fa fa-linkedin"></i>
                  </a>
                  <a href="http://twitter.com/heyjoanneho" class="bounce">
                    <i class="fa fa-twitter"></i>
                    <!-- <img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="twitter icon" target="_blank"> -->
                  </a>
                  <a href="mailto:joanne.kwh@gmail.com" title="Send an Email" class="bounce">
                    <i class="fa fa-envelope"></i>
                    <!-- <img src="<?php bloginfo('template_directory'); ?>/images/email.png" alt="email icon" target="_blank"> -->
                  </a>

                </div> <!-- end of social-media-container -->
                
                <div class="line"></div>
                <p class="hello">Hello, my name is</p>
                <h1>Joanne Ho</h1>
            </div> <!-- end of splash-inner -->
           </div> <!-- end of splash-content -->
          </div> <!-- end of wrapper clearfix -->
      </section> <!-- end of SPLASH -->
      <!-- ================================ -->
      <!-- START OF ABOUT -->
      <section class="about">
        <div class="wrapper clearfix">
          <div class="line"></div>
          <h2 id="about">About Me</h2>
          <p class="about-headline"><?php the_field('about_headline') ?></p>
          <p class="about-description"><?php the_field('about_description-1') ?></p>
          <p class="about-description"><?php the_field('about_description-2') ?></p>
        </div> <!-- end of wrapper clearfix -->
      </section><!-- end of about -->
      <!-- ================================ -->
      <section class="work">
        <div class="wrapper clearfix">
          <div class="line"></div>
          <h2 id="work">Portfolio</h2>
          <div class="work-content clearfix">
          
            <?php get_template_part( 'loop', 'portfolio' ); ?>
          </div>
        </div> <!--  end of wrapper clearfix -->
      </section> <!-- end of work -->

      <!-- ================================= -->
      <!-- START OF CONNECT -->
      <section class="connect">
        <div class="wrapper clearfix">
          <div class="line"></div>
          <h2 id="connect">Connect</h2>
          <div class="connectbox">
            <?php echo do_shortcode('[contact-form-7 id="45" title="Contact form 1"]'); ?>
          </div> <!-- end of connectbox -->
        </div> <!-- end of wrapper clearfix -->
      </section> <!-- end of connect -->
      <!-- ================================= -->

      <?php // Start the loop ?>
      <?php //if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php // the_title(); ?></h2>
        <?php // the_content(); ?>

      <?php //endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php // get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>