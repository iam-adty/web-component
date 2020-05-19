<?php namespace IamAdty\Component\Html\Body;

use IamAdty\Component\Html;
use IamAdty\Component\Html\HtmlTagBuilderTrait;

class Heading extends Html
{
    protected $tag = "h";

    private $level = 1;

    use HtmlTagBuilderTrait;
}
