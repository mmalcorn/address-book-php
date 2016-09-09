<?php
  require_once (__DIR__."/../vendor/autoload.php");
  require_once (__DIR__."/../src/Contact.php");
  date_default_timezone_set('America/New_York');


    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(),
      array('twig.path'=>__DIR__.'/../views'));

    session_start();
      if(empty($_SESSION['contact-list'])){
        $_SESSION['contact-list'] = array();
      }

    $app->get("/", function() use ($app){
      return $app['twig']->render('address_book_home.html.twig', array('contact-list'=> Contact::getAll()));
    });

    $app->post("/contacts", function() use ($app){
      $name = new Contact($_POST['name']);
      $name->save();
      return $app['twig']->render('contacts.html.twig', array('contact-list'=> Contact::getAll()));
    });

    return $app;
 ?>
