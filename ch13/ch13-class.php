<?php
class Post
{
    public string $title;
    public string $author;

    public function summary(): string
    {
        return"[{$this->author}] {$this->title}";
    }
}

$post1 = new Post();
$post1->title = "첫 글입니다.";
$post1->author = "철수";


$post2 = new Post();
$post2->title = "PHP 재미있어요.";
$post2->author = "영희";

echo $post1->summary() . "\n";
echo $post2->summary() . "\n";