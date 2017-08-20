<?php

namespace atk4\ui;

require'vendor/autoload.php';
require 'setup.php';


/*
  $app = new App('My App');
  $app->initLayout('Centered');

  $button = new Button(['skin' => 'bootstrap3', 'Hello there', 'icon' => 'book', 'red']);

  $app->layout->add('LoremIpsum');

  $app->layout->add($button);
 */

$app = new App('My App');

$bar = new Buttons('blue big');
$bar->add(new Button(['icon' => 'file']));
$bar->add(new Button(['icon' => ['save', 'yellow']]));
$bar->add(new Button(['icon' => 'upload', 'disabled' => true]));
