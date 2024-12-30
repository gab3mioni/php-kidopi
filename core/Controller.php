<?php

namespace Core;

class Controller
{
    protected function view($view, $data = []): void
    {
        require_once "../app/views/$view.php";
    }
}
