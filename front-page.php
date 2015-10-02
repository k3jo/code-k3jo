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
                  <a href="http://linkedin.com/in/heyjoanneho" class="bounceIn">
                    <i class="fa fa-linkedin bounce"></i>
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
                
                <div class="line-splash"></div>
                <p class="hello">Hello, my name is</p>
                <h1>Joanne Ho</h1>
                <!-- <img src="<?php bloginfo('template_directory'); ?>/images/bridge.jpg" alt="email icon" class="front-img"> -->
            </div> <!-- end of splash-inner -->
           </div> <!-- end of splash-content -->
          </div> <!-- end of wrapper clearfix -->
      </section> <!-- end of SPLASH -->
      <!-- ================================ -->
      <!-- START OF ABOUT -->
      <section class="about">
        <div class="wrapper clearfix">
          <h2 id="about">About Me</h2>
          <div class="line"></div>
          <div class="about-content">
            <p class="about-headline"><?php the_field('about_headline') ?></p>
            <p class="about-description"><?php the_field('about_description-1') ?></p>
            <p class="about-description"><?php the_field('about_description-2') ?></p>
          </div>
        </div> <!-- end of wrapper clearfix -->
      </section><!-- end of about -->
      <!-- ================================ -->
      <section class="work clearfix">
        <div class="wrapper clearfix">
          <h2 id="work">Portfolio</h2>
          <div class="line"></div>
          <div class="work-content clearfix">
          
            <?php get_template_part( 'loop', 'portfolio' ); ?>
          </div>
        </div> <!--  end of wrapper clearfix -->
      </section> <!-- end of work -->

      <!-- ================================= -->
      <!-- START OF CONNECT -->
      <section class="connect">
        <div class="wrapper clearfix">
          <h2 id="connect">Connect</h2>
          <div class="line"></div>
          <div class="connectbox">
            <?php echo do_shortcode('[contact-form-7 id="45" title="Contact form 1"]'); ?>
          </div> <!-- end of connectbox -->
        </div> <!-- end of wrapper clearfix -->
      </section> <!-- end of connect -->
      <!-- ================================= -->



  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>