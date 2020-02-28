<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */?>

<?php get_header(); ?>

<div class="hero-wrapper">
  <div class="container-fluid hero">
    <div class="row">
      <div class="col-lg-4">
        <div class="wrapper">
          <div data-aos="fade-up" data-aos-delay="400">
            <h5><?php the_field('sub_heading'); ?></h5>
            <h1><?php the_field('heading'); ?></h1>
            <p class="l"><?php the_field('hero_para'); ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8 image-col">
        <div class="hero-slider">
          <?php
          $images = get_field('hero_slider');
          if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <div class='bckgd-image' style='background-image: url("<?php echo $image['sizes']['large']; ?>");'></div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container section" id="story">
  <div class="row">
    <div class="col-md-4 col-lg-3 offset-lg-1">
      <h5 data-aos="fade-up" data-aos-delay="400">Our story</h5>
      <h2 data-aos="fade-up" data-aos-delay="500">A bit about us</h2>
    </div>
    <div class="col-md-7 col-lg-6 offset-md-1">
      <p data-aos="fade-up" data-aos-delay="600"><?php the_field('about_us'); ?></p>
    </div>
  </div>
</div>



<div class="container section two-col-text-img" id="menu">
  <div class="row">
    <div class="col-md-6">
    <a href="<?php the_field('menu_document');?>" target="_blank" data-aos="fade-up" data-aos-delay="400">
      <img src="<?php the_field('menu_image'); ?>" alt="">
    </a>
    </div>
    <div class="col-md-6">
      <div class="wrapper">
        <div>
          <h5 data-aos="fade-up" data-aos-delay="500">Our menu</h5>
          <h2 data-aos="fade-up" data-aos-delay="600">Grab a bite</h2>
          <p data-aos="fade-up" data-aos-delay="700"><?php the_field('menu_text'); ?></p>
          <a href="<?php the_field('menu_document');?>" target="_blank" data-aos="fade-up" data-aos-delay="700">Take a look</a>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="container section" id="gallery">
  <div class="row">
      <div class="col-md-4 col-lg-3 offset-lg-1">
        <div class="gallery-text sticky" id="basic-waypoint">
          <h5 data-aos="fade-up" data-aos-delay="400">Our gallery</h5>
          <h2 data-aos="fade-up" data-aos-delay="500">What we're up to</h2>
          <div class="social-links" data-aos="fade-up" data-aos-delay="600">
            <ul>
              <li><a href="<?php echo get_option('facebook_url'); ?>" target="_blank"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/facebook.svg" alt=""></a></li>
              <li><a href="<?php echo get_option('instagram_url'); ?>" target="_blank"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/instagram.svg" alt=""></a></li>
              <!-- <li><a href="<?php the_field('linkedinURL');?>" target="_blank"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/linkedin.svg" alt=""></a></li> -->
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-7 offset-md-1">
        <div class="row">
      
        <?php echo do_shortcode('[instagram-feed]'); ?>
                
        </div>
      </div>
  </div>
</div>



<div class="container section " id="visit-us">
  <div class="row">
    <div class="col-md-7">
      <div class="map">
        <iframe width='100%' height="569px" id='mapcanvas' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2353.5512411735517!2d-2.2184825480009027!3d53.85084514440447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b91a59c90c7bd%3A0xc24a64c2403e2cd5!2sWill&#39;s!5e0!3m2!1sen!2suk!4v1582902770737!5m2!1sen!2suk" frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></iframe>
      </div>
    </div>
    <div class="col-md-5">
      <div class="wrapper">
        <div>
          <h2 data-aos="fade-up" data-aos-delay="400">Visit us</h2>
          <div data-aos="fade-up" data-aos-delay="500">
            <?php the_field('contact'); ?>
            <p><a href="tel:<?php echo get_option('support_phone'); ?>" class="number"> <?php echo get_option('support_phone'); ?></a></p>
            <p><a href="email:<?php echo get_option('support_email'); ?>" class="number"> <?php echo get_option('support_email'); ?></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<?php get_footer(); ?>
