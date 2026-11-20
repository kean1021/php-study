<?php
class Post
{
    public function __construct(
        public string $title,
        public string $author,
    ) {}

    public function summary(): string
    {
        return "[{$this->author}] {$this->title}";
    }
}

$post = new Post("짧아진 코드", "민수");
echo $post->summary();