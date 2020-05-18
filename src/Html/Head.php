<?php namespace WebComponent\Html;

use WebComponent\Composite;

class Head extends Composite
{
    public function render(): string
    {
        $renderedChild = parent::render();
        return "<head>{$renderedChild}</head>";
    }
}
