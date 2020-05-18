<?php namespace WebComponent;

class Html extends Composite
{
    public function render(): string
    {
        $renderedChild = parent::render();
        return "<html>{$renderedChild}</html>";
    }
}
