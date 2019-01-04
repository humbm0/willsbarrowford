<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */?>

<?php get_header(); ?>



<div class="container-fluid hero spacing-xl">
  <div class="row">
    <div class="bckgd-image" style="background-image: url('<?php the_field('hero_image'); ?>');">
      <div class="text" data-aos="fade-up">
        <h3><?php the_field('sub_heading'); ?></h3>
        <h1><?php the_field('heading'); ?></h1>
      </div>
    </div>
  </div>
</div>

<div class="container two-col-img-text spacing-xl">
  <div class="row">
    <div class="col-md-6 content">
      <h5 data-aos="fade-up" data-aos-delay="400">Our story</h5>
      <h2 data-aos="fade-up" data-aos-delay="500">A bit about us</h2>
      <p data-aos="fade-up" data-aos-delay="600"><?php the_field('about_us'); ?></p>
    </div>
    <div class="col-md-6 img-block" data-aos="fade-up">
      <img class="" src="<?php the_field('about_image');?>" alt="">
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="grid spacing-s">
      <div class="grid-sizer"></div>
      <?php
      $images = get_field('gallery');
      if( $images ): ?>
        <?php foreach( $images as $image ): ?>
          <div class='grid-item' data-aos='fade-up'>
            <a href='{$pic_link}' target='_blank'>
              <div class='photo-thumb' style='background-image: url("<?php echo $image['sizes']['thumbnail']; ?>");'></div>
            </a>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="row">
      <div class="centre spacing-xl">
          <a href="#">Follow us on instagram</a>
      </div>
    </div>
  </div>
</div>

<div class="white-bckgd">
  <div class="container">
    <div class="row">
      <div class="contact">
        <div class="col-md-6">
          <h2>Visit us</h2>
          <div class="address">
            <p><?php the_field('find_us'); ?></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d588.3896552622072!2d-2.2168148707423248!3d53.85071389875552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b91a1dde5ee67%3A0x6797d4c4a030b24f!2sThe+Fountains%2C+Gisburn+Rd%2C+Barrowford%2C+Nelson+BB9+8LQ!5e0!3m2!1sen!2suk!4v1544634095237" width="100%" height="569px" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
