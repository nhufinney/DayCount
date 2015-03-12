<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/TitleCaseGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get("/result", function() use($app) {
        $my_CountDay = new CountDay;
        $title_cased_phrase = $my_CountDay->dayCalculation($_GET['phrase']);
        return $app['twig']->render('result.twig', array('result' => $title_cased_phrase));
    });

    return $app;
?>
