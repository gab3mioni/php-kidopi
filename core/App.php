<?php

namespace Core;

class App
{
    protected Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run(): void
    {
        $url = $_GET['url'] ?? '';
        $this->router->dispatch($url);
    }
}
