<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class RegisterController
{
    public function __construct(private TemplateEngine $view) {}
    public function register()
    {
        echo $this->view->render("/register.php");
    }
}