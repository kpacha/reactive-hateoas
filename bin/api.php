<?php

require_once __DIR__ . '/../vendor/autoload.php';

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$silexApp = require_once __DIR__ . '/../src/app.php';
$stack = new Kpacha\ReactiveSilex\Stack($silexApp);

echo "Server running at http://127.0.0.1:1337\n";

$stack->listen(1337);