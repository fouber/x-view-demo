<?php

error_reporting(E_ALL);

require_once 'x-view/View.class.php';
require_once 'x-view/Resource.class.php';
require_once 'x-view/Block.class.php';
require_once 'x-view/Layout.class.php';

$dir = dirname(__FILE__);
View::setTemplateDir($dir . '/template');
Resource::setMapDir($dir . '/map');

$view = new Layout('page.php');
$view
  ->assign('title', 'foo')
  ->assign('word', 'hello world')
  ->display();