<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */?>

<?php get_header(); ?>



<div class="container-fluid spacing-xl">
  <div class="row">
    <div class="hero">
      <div class="hero-slider">
        <div class="bckgd-image" style="background-image: url('<?php the_field('hero_image'); ?>');">
      </div>
      <div class="text" data-aos="fade-up">
        <div class="wrapper">
          <h3><?php the_field('sub_heading'); ?></h3>
          <h1><?php the_field('heading'); ?></h1>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container two-col-img-text spacing-xl" id="story">
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

<div class="conatiner-fluid spacing-xl" style="background-image: url('<?php the_field('menu_image'); ?>');" id="menu">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h5>Our menu</h5>
          <h2>Grab a bite</h2>
        </div>
        <div class="col-md-5">
          <h3>Snacks</h3>
          <ul>
            <li>
              <h4>Spicey nuts</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut orci vel orci tempus placerat id ut tortor. </p>
            </li>
            <li>
              <h4>Spicey nuts</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut orci vel orci tempus placerat id ut tortor. </p>
            </li>
            <li>
              <h4>Spicey nuts</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut orci vel orci tempus placerat id ut tortor. </p>
            </li>
          </ul>
        </div>
        <div class="col-md-5 col-md-offset-2">
          <h3>Pizzas</h3>
          <ul>
            <li>
              <h4>Spicey nuts</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut orci vel orci tempus placerat id ut tortor. </p>
            </li>
            <li>
              <h4>Spicey nuts</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut orci vel orci tempus placerat id ut tortor. </p>
            </li>
            <li>
              <h4>Spicey nuts</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut orci vel orci tempus placerat id ut tortor. </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container" id="gallery">
  <div class="row">
    <div class="grid spacing-s">
      <div class="grid-sizer"></div>
      <?php
      $images = get_field('gallery');
      if( $images ): ?>
        <?php foreach( $images as $image ): ?>
          <div class='grid-item' data-aos='fade-up'>
            <div class='photo-thumb' style='background-image: url("<?php echo $image['sizes']['large']; ?>");'></div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <!-- <div class="row">
      <div class="centre spacing-xl">
          <a href="#">Follow us on instagram</a>
      </div>
    </div> -->
  </div>
</div>

<div class="white-bckgd">
  <div class="container">
    <div class="row spacing-xl">
      <div class="contact" id="visit-us">
        <div class="col-md-6">
          <h2>Visit us</h2>
          <div class="address">
            <?php the_field('find_us'); ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d588.3896552622072!2d-2.2168148707423248!3d53.85071389875552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b91a1dde5ee67%3A0x6797d4c4a030b24f!2sThe+Fountains%2C+Gisburn+Rd%2C+Barrowford%2C+Nelson+BB9+8LQ!5e0!3m2!1sen!2suk!4v1544634095237" width="100%" height="569px" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="">
        <div class="link">
            <a href="https://www.instagram.com/willsbarrowford/" class="instagram-link"><h6><span><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/instagram.svg" alt=""></span>Folllow our instagram</h6></a>
        </div>
        <div class="arrows">
          <button type="button" name="button" class="arrow-button prev"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/left-arrow.svg" alt=""></button>
          <button type="button" name="button" class="arrow-button next"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/right-arrow.svg" alt=""></button>
        </div>
      </div>
      <div class="">
        <div class="image-slider">
          <?php
          // use this instagram access token generator http://instagram.pixelunion.net/
          $access_token="43693637.1677ed0.a034b3f8e3e64c63b9e1c841a13206cb";
          $photo_count=10;

          $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
          $json_link.="access_token={$access_token}&count={$photo_count}";

          $json = file_get_contents($json_link);
          $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
          ?>

          <?php foreach ($obj['data'] as $img) {

              $pic_text=$img['caption']['text'];
              $pic_link=$img['link'];
              $pic_like_count=$img['likes']['count'];
              $pic_comment_count=$img['comments']['count'];
              $pic_src=str_replace("http://", "https://", $img['images']['standard_resolution']['url']);
              $pic_created_time=date("F j, Y", $img['caption']['created_time']);
              $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));

              echo "<div class='image' data-aos='fade-up'>";
                  echo "<a href='{$pic_link}' target='_blank'>";
                      echo "<div class='photo-thumb' style='background-image: url({$pic_src});'><div class='photo-overlay'><p>{$pic_text}</p><div class='likes'><p>♥︎ {$pic_like_count}</p></div></div></div>";
                  echo "</a>";
              echo "</div>";

          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>



<?php get_footer(); ?>
