<?php namespace WebComponent;

class Composite extends Component
{
    /**
     * @var \SplObjectStorage
     */
    protected $children;

    public function __construct()
    {
        $this->children = new \SplObjectStorage;
    }

    public function add(\WebComponent\Component $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    public function remove(\WebComponent\Component $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    public function isComposite(): bool
    {
        return true;
    }

    public function render(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->render();
        }

        return implode("", $results);
    }
}
