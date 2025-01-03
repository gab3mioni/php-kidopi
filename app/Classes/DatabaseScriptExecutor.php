<?php

namespace App\Classes;

interface DatabaseScriptExecutor
{
    public function execute(string $sql): void;
}
