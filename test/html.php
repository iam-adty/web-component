<?php

use IamAdty\Component\Html;
use IamAdty\Component\Html\Body;
use IamAdty\Component\Html\Head;
use IamAdty\Component\Html\Head\Title;
use IamAdty\Component\Text;

require_once __DIR__ . '/../vendor/autoload.php';

$html = Html::build(
    Head::build(
        Title::build(
            Text::write("PHP Web Component")
        )
    ),
    Body::build(
        Text::write("PHP Web Component")
    )
);

+d($html, $html->compile());
