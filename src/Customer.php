<?php

namespace ProgrammerZamanNow\Belajar;

class Customer{
    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $name): string{
        return "Hello $name, my name is $this->$name";
    }

    public function untukTesting(): string{
        return "Ini adalah keperluan Testing";
    }
}