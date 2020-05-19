<?php namespace IamAdty\Component\Html;

trait HtmlTagBuilderTrait
{
    public static function build(...$params)
    {
        return new self(...$params);
    }
}
