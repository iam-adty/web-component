<?php namespace IamAdty;

class Component
{
    protected $children = [];

    public function __construct(...$params)
    {
        $this->children = $params;
    }

    public function compile()
    {
        $result = "";
        foreach ($this->children as $children) {
            if (is_subclass_of($children, Component::class)) {
                $result .= $children->compile();
            } else {
                $result .= $children;
            }
        }
        return $result;
    }

    public function render()
    {
        echo $this->compile();
    }
}
