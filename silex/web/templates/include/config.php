<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 * @var $db Doctrine\DBAL\Connection
 * @var $app Silex\Application
 */
$slots = $view['slots'];

/* ------------Navbar -------------- */
$slots->set('project_name', "Blogdat");

/* ------------Page Config -------------- */
$slots->set('title', "Blogdat");
$slots->set('author', "Rafael C");
$slots->set('publisher', "Rafael");
$slots->set('keywords', "Informatik Übung HTML PHP");
$slots->set('description', "Dies ist die Beschreibung meines Blogdat Blogs.");
?>