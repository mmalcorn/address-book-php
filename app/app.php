<?php
  require_once (__DIR__."/../vendor/autoload.php");
  require_once (__DIR__."/../src/Contact.php");
  date_default_timezone_set('America/New_York');

    session_start();
      if(empty($_SESSION["contact_list"])){
        $_SESSION["contact_list"] = array();
      }
      $app = new Silex\Application();
      $app->register(new Silex\Provider\TwigServiceProvider(),
        array('twig.path'=>__DIR__.'/../views'
      ));

    $app->get("/", function() use ($app){
      return $app["twig"]->render("address_book_home.html.twig", array("contact_list"=>Contact::getAll()));
    });

    $app->post("/contacts", function() use ($app){
      $contact = new Contact($_POST["name"], $_POST["phone_number"], $_POST["address"]);
      $contact->save();
      return $app["twig"]->render("contacts.html.twig", array("add_contact"=>$contact));
    });

    $app->post("/remove_contacts", function() use ($app){
      Contact::deleteAll();
      return $app["twig"]->render("delete_contact.html.twig");
    });

    return $app;
 ?>
