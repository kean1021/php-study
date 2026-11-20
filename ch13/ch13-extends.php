<?php
class Animal
{
    public function __construct(protected string $name){}
    
    public function introduce(): string
    {
        return "저는 {$this->name}입니다." .$this->sound();
    }

    public function sound(): string
    {
        return "...";
    }
}

class Dog extends Animal
{
    public function sound(): string
    {
        return "멍멍!";
    }
}

class Cat extends Animal
{
    #[Override]
    public function sound(): string
    {
        return "야옹!";
    }
}

$animals = [new Dog("바둑이"), new Cat("나비")];

foreach ($animals as $animal) {
    echo $animal->introduce() . "\n";
}