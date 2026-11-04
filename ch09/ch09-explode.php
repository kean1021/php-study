<?php
$tags = "php,larabel,web";
$tagArray = explode(",", $tags);
print_r($tagArray);

echo implode("/", $tagArray);
// php / laravel / web