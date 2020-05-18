<?php

use WebComponent\Html;
use WebComponent\Html\Head;

require_once __DIR__ . '/../vendor/autoload.php';

$html = new Html();
$html->add(new Head());

exit(var_dump($html->render()));
