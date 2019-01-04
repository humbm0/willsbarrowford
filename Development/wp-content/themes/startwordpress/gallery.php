<?php
// use this instagram access token generator http://instagram.pixelunion.net/
$access_token="43693637.1677ed0.a034b3f8e3e64c63b9e1c841a13206cb";
$photo_count=9;

$json_link="https://api.instagram.com/v1/users/self/media/recent/?";
$json_link.="access_token={$access_token}&count={$photo_count}";

$json = file_get_contents($json_link);
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

foreach ($obj['data'] as $post) {

    $pic_text=$post['caption']['text'];
    $pic_link=$post['link'];
    $pic_like_count=$post['likes']['count'];
    $pic_comment_count=$post['comments']['count'];
    $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
    $pic_created_time=date("F j, Y", $post['caption']['created_time']);
    $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));

    echo "<div class='col-md-4 col-sm-6 col-xs-12 item_box'>";
        echo "<a href='{$pic_link}' target='_blank'>";
            echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
        echo "</a>";
        echo "<p>";
            echo "<p>";
                echo "<div style='color:#888;'>";
                    echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
                echo "</div>";
            echo "</p>";
            echo "<p>{$pic_text}</p>";
        echo "</p>";
    echo "</div>";
}

?>
