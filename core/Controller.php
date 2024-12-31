<?php

namespace Core;

class Controller
{
    protected function view($view, $data = []): void
    {
        extract($data);
        require_once "../app/views/$view.php";
    }
}
