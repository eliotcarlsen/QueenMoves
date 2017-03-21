<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../autoload.php";
    require_once __DIR__."/../src/Queen.php";

    session_start();
    if (empty($_SESSION['queen'])) {
        $_SESSION['queen'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use($app) {
        return $app['twig']->render('queen.html.twig');
    });

    return $app

?>
