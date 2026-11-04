<?php
$posts = [
    ["id" => 1, "title" => "첫 글입니다.", "author" => "철수"],
    ["id" => 2, "title" => "PHP 재미있어요.", "author" => "영희"],
    ["id" => 3, "title" => "라라벨 기대돼요.", "author" => "민수"],
];

echo $posts[1]["title"];
echo "\n\n";

foreach($posts as $post){
    echo "[{$post['id']}] {$post['title']} - {$post['author']}\n";
}