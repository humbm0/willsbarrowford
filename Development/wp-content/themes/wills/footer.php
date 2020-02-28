

<footer>
  <div class="container">
    <div class="float-left">
      <p>©Willsbarrowford <?php echo date("Y"); ?></p>
    </div>
    <div class="social-links footer float-right">
      <ul>
        <li><a href="<?php echo get_option('facebook_url'); ?>" target="_blank"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/facebook.svg" alt=""></a></li>
        <li><a href="<?php echo get_option('instagram_url'); ?>" target="_blank"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/instagram.svg" alt=""></a></li>
        <!-- <li><a href="<?php the_field('linkedinURL');?>" target="_blank"><img src="<?php echo get_bloginfo( 'template_directory' );?>/img/linkedin.svg" alt=""></a></li> -->
      </ul>
    </div>
  </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="<?php echo get_bloginfo( 'template_directory' );?>/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
