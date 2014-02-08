<?php

require_once __DIR__ . '/../vendor/autoload.php';

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$app = Kpacha\ReactiveHateoas\ApplicationBuilder::build(new SilexHal\Providers\ResourceHubProvider());
$app['debug'] = true;

$app->get('/',
        function () {
            return "Welcome to the REACTive API homepage, powered by react, silex & hateoas."
                    . " Now, please visit the <a href=\"/articles\">/articles</a> url!\n";
        });

$app->get('/favicon.ico', function () {
            return "";
        });

$app->get('/humans.txt', function () {
            return "I believe you are a humanoid robot.\n";
        });

echo "Server running at http://127.0.0.1:1337\n";

$stack = new Kpacha\ReactiveSilex\Stack($app);
$stack->listen(1337);