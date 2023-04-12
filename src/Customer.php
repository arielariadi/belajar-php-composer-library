<?php

namespace MuhammadArielAriadi\Belajar;

class Customer
{

    public function __construct(private string $name)
    {
    }

    public function say_hello(string $name): string
    {
        return "Hello $name, My Name is $this->name";
    }
}
