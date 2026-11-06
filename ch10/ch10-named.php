<?php function makeTag($text, $tag = "p", $class = "")
{
    return "<{$tag} class=\"{$class}\">{$text}</{$tag}>";
}

echo makeTag("제목", tag: "h1") . "\n";
echo makeTag(class: "notice", text: "공지입니다.") . "\n";

//<p class= "notice">공지입니다</p>;