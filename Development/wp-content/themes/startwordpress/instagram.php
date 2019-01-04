<div class="container">
  <div class="row">
    <div class="grid spacing-s">
      <div class="grid-sizer"></div>
    <?php
    // use this instagram access token generator http://instagram.pixelunion.net/
    $access_token="43693637.1677ed0.a034b3f8e3e64c63b9e1c841a13206cb";
    $photo_count=7;

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

        echo "<div class='grid-item' data-aos='fade-up'>";
            echo "<a href='{$pic_link}' target='_blank'>";
                echo "<div class='photo-thumb' style='background-image: url({$pic_src});'></div>";
            echo "</a>";
        echo "</div>";

    }
    ?>
