<?php

$app = Kpacha\ReactiveHateoas\ApplicationBuilder::build(new SilexHal\Providers\ResourceHubProvider());
$app['debug'] = true;

$app->get('/',
        function () {
            return "Welcome to the REACTive Sample API homepage, powered by react, silex & hateoas."
                    . " Now, please visit the <a href=\"/articles\">/articles</a> url!\n";
        });

$app->get('/favicon.ico', function () {
            return "";
        });

$app->get('/humans.txt', function () {
            return "I believe you are a humanoid robot.\n";
        });

return $app;