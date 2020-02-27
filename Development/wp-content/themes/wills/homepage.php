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
          <div>
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
    <a href="<?php the_field('menu_document');?>" target="_blank">
      <img src="<?php the_field('menu_image'); ?>" alt="">
    </a>
    </div>
    <div class="col-md-6">
      <div class="wrapper">
        <div>
          <h5>Our menu</h5>
          <h2>Grab a bite</h2>
          <p data-aos="fade-up" data-aos-delay="600"><?php the_field('menu_text'); ?></p>
          <a href="<?php the_field('menu_document');?>" target="_blank">Take a look</a>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="container section" id="gallery">
  <div class="row">
      <div class="col-md-4 col-lg-3 offset-lg-1">
        <div class="gallery-text" id="basic-waypoint">
        <h5 data-aos="fade-up" data-aos-delay="400">Our gallery</h5>
        <h2 data-aos="fade-up" data-aos-delay="500">What we're up to</h2>
        <div class="social-links">
          <ul>
            <li><a href="#"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/facebook.svg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/instagram.svg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/linkedin.svg" alt=""></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-7 offset-md-1">
      <div class="row">
        <?php
        // use this instagram access token generator http://instagram.pixelunion.net/
        $access_token="43693637.1677ed0.a034b3f8e3e64c63b9e1c841a13206cb";
        $photo_count=12;

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
            // $pic_created_time=date("F j, Y", $img['caption']['created_time']);
            // $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));

            echo "<div class='col-md-6 photo' data-aos='fade-up'>";
                // echo "<a href='{$pic_link}' target='_blank'>";
                    echo "<div class='photo-thumb' style='background-image: url({$pic_src});'><div class='photo-overlay'><p>{$pic_text}</p><div class='likes'><p>♥︎ {$pic_like_count}</p></div></div></div>";
                // echo "</a>";
            echo "</div>";

        }
        ?>
      </div>
    </div>
  </div>
</div>



<div class="container section " id="visit-us">
  <div class="row">
    <div class="col-md-7">
      <div class="map">
        <iframe width='100%' height="569px" id='mapcanvas' src='https://maps.google.com/maps?q=BB9%206DT&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></iframe>
      </div>
    </div>
    <div class="col-md-5">
      <div class="wrapper">
        <div>
          <h2>Visit us</h2>
          <?php the_field('contact'); ?>
        </div>
      </div>
    </div>
  </div>
</div>




<?php get_footer(); ?>
