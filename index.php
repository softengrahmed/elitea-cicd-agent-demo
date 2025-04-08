<?php

require_once 'vendor/autoload.php';

use App\HelloWorld;

$hello = new HelloWorld();
echo $hello->sayHello();
