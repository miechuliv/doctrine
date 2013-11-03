<?php

// Load files for Doctrine to run... thank you, Composer,
//  for making things simple
require_once "vendor/autoload.php";

// Load EntityManager
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Set Entity Manager parameters
$paths = array("entities");
$isDevMode = false;
$dbParams = array(
  'driver'   => 'pdo_mysql',
  'user'     => 'root',
  'password' => '',
  'dbname'   => 'crm',
);

// Set up an Entity Manager
// ACHTUNG: The following line is different from the
//          tutorial!
$config = Setup::createXMLMetadataConfiguration($paths, $isDevMode);
$em     = EntityManager::create($dbParams, $config);

require_once("./entities/Category.php");

$category = new Category();

$category->setName('doctrine test');

$category->setDescription('desc test');

$em->persist($category);

$em->flush();