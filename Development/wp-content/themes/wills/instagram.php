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


    <div class="image-slider">
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

          echo "<div class='image' data-aos='fade-up'>";
              echo "<a href='{$pic_link}' target='_blank'>";
                  echo "<div class='photo-thumb' style='background-image: url({$pic_src});'><div class='photo-overlay'><p>{$pic_text}</p><div class='likes'><p>♥︎ {$pic_like_count}</p></div></div></div>";
              echo "</a>";
          echo "</div>";

      }
      ?>
    </div>




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


      <?php
        // use this instagram access token generator http://instagram.pixelunion.net/
        $access_token="IGQVJYeTFtNDI3cmlqRjBVb0pMZAFpLTkJqd3FkQ1dCc3BlZAlFVZAHVKZA3l1MDR4eHJKNFVpc3dqU2tWOHNuRVpuNGVoem14eUxOQW5xd3RyR0tlYXdkRjdWVWlMa3NvWWEwdUlDeHF3";
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